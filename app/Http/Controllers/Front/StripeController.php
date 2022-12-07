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
use App\Models\SubCampaign;
use Exception;
use Stripe;
use Illuminate\Support\Facades\Validator;

class StripeController extends Controller
{
    public function stripe(){
        // return view('stripe');
    }

    public function stripePost(Request $request)
    {
        try {
            
            if(!isset($request->the_package)){
                Session()->put('error','Donation Type is required');  
                if(isset($request->sub_campaign_id))
                    return redirect()->back()->with('campaign_id', $request->sub_campaign_id);
                else
                    return redirect()->back()->with('campaign_id', $request->campaign_id);
            }
            if(!isset($request->the_package2) && !isset($request->other_amount)){
                Session()->put('error','Donation Amount is required');  
                if(isset($request->sub_campaign_id))
                    return redirect()->back()->with('campaign_id', $request->sub_campaign_id);
                else
                    return redirect()->back()->with('campaign_id', $request->campaign_id);
            }

            DB::beginTransaction();
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            
            //get Campaign/Sub Campaign Data
            $campaignId    = 0;
            $subCampaignId = 0;
            if(isset($request->sub_campaign_id)){
                $campainData = SubCampaign::where('id', $request->sub_campaign_id)->first();
                $subCampaignId = $campainData->id;
            }
            else{
                $campainData = Campaign::where('id', $request->campaign_id)->first();
                $campaignId = $campainData->id;
            }
            
            // Create date and interval
            $endData    = "";
            $totalMonth = 0;
            $currentDate = date("Y-m-d");
            $donationType = Str::lower($request->the_package);
            if($donationType == 'monthly'){
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
            
            //Other Amount
            if($request->other_amount > 0){
                $request->the_package2 = $request->other_amount;
            }

            $fullname = $request->firstname." ".$request->lastname;
            
            if($donationType == 'once'){ // Pay Once
                $charge = \Stripe\Charge::create([
                    'amount'      => $request->the_package2 * 100,
                    'currency'    => 'usd',
                    'source'      => $request->stripeToken,
                    'description' => $campainData->title
                ]);
                $price_id =  $charge->id;
            }
            else{ // Recurring Payment

                //create customer
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
                $customer_id = $customer->id;

                //create product
                $product = \Stripe\Product::create([
                    'name' => $campainData->title,
                    'metadata' => [
                        'name' => $campainData->title,
                        'last-date' => $endData
                    ]
                ]);
                $product_id = $product->id;


                //define product price and recurring interval
                $price = \Stripe\Price::create([
                    'unit_amount' => $request->the_package2 * 100,
                    'currency' => 'usd',
                    'recurring' => ['interval' => 'month', 'interval_count' => $totalMonth],
                    'product' => $product_id,
                ]);
                $price_id = $price->id;
                
                // //CREATE SUBSCRIPTION
                $subscription = \Stripe\subscription::create([
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

            }

            $user_info = [
                'name'    => $fullname,
                'organisation' => $request->organisation,
                'address' => [
                    'line1'       => $request->inputStreet,
                    'city'        => $request->inputCity,
                    'state'       => $request->inputState,
                    'country'     => $request->inputCountry
                ],
                'description' => $request->description,
                'email'       => $request->email
            ];
            
            $transactionData = [
                'campaign_id'     => $campaignId,
                'sub_campaign_id' => $subCampaignId,
                'donation_type'   => $request->the_package,
                'amount'          => $request->the_package2,
                'donar_info'      => json_encode($user_info),
                'charge_id'       => $price_id,
                'created_at'      => date('Y-m-d H:i:s'),
                'updated_at'      => date('Y-m-d H:i:s')
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
