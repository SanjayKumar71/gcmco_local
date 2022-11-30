<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Str;
use App\Models\Campaign;
use Exception;
use Stripe;

class StripeController extends Controller
{
    public function stripe(){
        // return view('stripe');
    }

    public function stripePost(Request $request)
    {
        try {
            DB::beginTransaction();
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            
            //get Campaign
            $campainData = Campaign::where('id', $request->campaign_id)->first();
            
            //create customer
            $fullname = $request->firstname." ".$request->lastname;
            $customer = \Stripe\Customer::create([
                'name'    => $fullname,
                'address' => [
                    'line1'       => $request->inputStreet,
                    'city'        => $request->inputCity,
                    'state'       => $request->inputState,
                    'country'     => $request->inputCountry
                ],
                'description' => $request->description,
                'email'       => $request->email,
                'source'      => $request->stripeToken
            ]);

            $stripe = new \Stripe\StripeClient(
                env('STRIPE_SECRET')
            );

            $customer_id = $customer->id;
            
            // Create date and interval
            $endData    = "";
            $totalMonth = 0;
            
            $donationType = Str::lower($request->the_package);
            $currentDate = date("Y-m-d");
            
            if($donationType == 'once'){
                $endData  = $currentDate;
                $totalMonth = 0;
            }
            else if($donationType == 'monthly'){
                $endData = Carbon::now()->addMonths(1);
                $totalMonth = 1;
            }
            else if($donationType == 'quarterly'){
                $endData = Carbon::now()->addMonths(3);
                $totalMonth = 3;
            }
            else if($donationType == 'semi annually'){
                $endData = Carbon::now()->addMonths(6);
                $totalMonth = 6;
            }
            else if($donationType == 'yearly'){
                $endData = Carbon::now()->addMonths(12);
                $totalMonth = 12;
            }

            //create product
            $product = $stripe->products->create([
                'name' => $campainData->title,
                'metadata' => [
                    'name' => $campainData->title,
                    'last-date' => $endData
                ]
            ]);
            $product_id = $product->id;
            
            if($request->other_amount > 0){
                $request->the_package2 = $request->other_amount;
            }
            //define product price and recurring interval
            $price = $stripe->prices->create([
                'unit_amount' => $request->the_package2 * 100,
                'currency' => 'usd',
                'recurring' => ['interval' => 'month', 'interval_count' => $totalMonth],
                'product' => $product_id,
            ]);
            $price_id = $price->id;
            
            //CREATE SUBSCRIPTION
            $subscription = $stripe->subscriptions->create([
                'customer' => $customer_id,
                'items' => [
                  ['price' => $price_id],
                ],
                'metadata' => [
                  'start_date' => $currentDate,
                  'total_months' => $totalMonth,
                  'end_date' => $endData
                ]
            ]);

            $user_info = [
                'name'    => $fullname,
                'organisation' => $request->organisation,
                'address' => [
                    'line1'       => $request->inputStreet,
                    'city'        => $request->inputCity,
                    'state'       => $request->inputState,
                    'state'       => $request->inputCountry
                ],
                'description' => $request->description,
                'email'       => $request->email
            ];

            $transactionData = [
                'campaign_id' => $campainData->id,
                'amount' => $request->the_package2,
                'donar_info' => json_encode($user_info),
                'charge_id' => $price_id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ];
            
            $transaction = Transaction::create($transactionData);

            DB::commit();
            
            Session::flash('success', 'Payment successful!');
            
            return back();
        }catch(Exception $e){
            DB::rollBack();
            return false;
        }
    }


}
