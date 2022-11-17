<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Programs;
use App\Models\ProgramSession;
use App\Models\Transaction;
use App\Models\Booking;
use App\Models\UserCard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Stripe\Charge;
use Stripe\Stripe;
use App\Models\User;

class PaymentController extends Controller
{
    public function payment(Request $request){
        $programSession = ProgramSession::where('id','=',$request->sessionRadio)->first();
        $programs = Programs::with('category')->with('programSession')->where('id','=',$request->program)->first();
        return view('front.payment', compact('programs','programSession'));
    }
    public function AddCard($user_id, $token)
    {
        try {
            
            // $stripe = new \Stripe\StripeClient(
            //     config('services.stripe.secret')
            // );

            $user     =   User::where('id',$user_id)->first();
            $userCard =   UserCard::where('user_id',$user_id)->get();
            
            $stripe   = new \Stripe\StripeClient(config('services.stripe.secret'));
            $source   = $stripe->customers->createSource($user->stripe_customer_id, [
                'source' => $token,
            ]);
            
            $cardAvailable = true;
            foreach($userCard as $cardValue){
                if($source->last4 == $cardValue->card_last4){
                    $cardAvailable = false;
                    break;
                }
            }

            if($cardAvailable){
                DB::beginTransaction();
                if($userCard)
                    $user->cardMakeUndefaultAll();
                
                $userCard = UserCard::create([
                    'user_id' => $user->id,
                    'card_brand' => $source->brand,
                    'card_last4' => $source->last4,
                    'default_card' => true,
                    'stripe_source_id' => $source->id
                ]);
            
                $update = $stripe->customers->update(
                    $user->stripe_customer_id,
                    [
                        'default_source' => $userCard->stripe_source_id
                    ]
                );

                DB::commit();
            }
            return true;
        } catch (\Exception $exception) {
            DB::rollBack();
            return false;
        }
    }
    public function checkout(Request $request)
    {
        // dd($request);

        $validator = Validator::make($request->all(), [
            'program_session_id' => 'required',
            'user_id'            => 'required',
        ], [
            'program_session_id.required' => 'The program session is required!',
            'user_id.required' => 'The user is required for apply subscription',
        ]);

        try {

            DB::beginTransaction();
            //get saved credentials from database
            // $stripeCredential = BusinessSetting::where('type', 'stripe')->first();
            $programSession = ProgramSession::find($request->program_session_id);
            $programs = Programs::where('id','=',$programSession->program_id)->first();
            
            $publishable_key = 'sk_test_51M0NjoI2QVW7rb59Xcy0cIgQi1PMryVB0dy5BL89HiSvGbLT17TTQT4bI1QRaLioFuDMvfQMMLye6gOxpWYsQqhk00ABbzoLri';
            Stripe::setApiKey($publishable_key);
            $stripe = new \Stripe\StripeClient($publishable_key);
            $user   = Auth::user();

            $userCard = true;
            if(isset($request->stripeToken))
                $userCard = $this->AddCard($request->user_id, $request->stripeToken);

            if( $userCard ){
                
                $charge = $stripe->charges->create([
                    'amount' => $programs->price * 100,
                    'currency' => 'usd',
                    'customer' => $user->stripe_customer_id, // obtained with Stripe.js
                    'description' => 'For Program Session Payment.'
                ]);

                $transactionData = [
                    'user_id' => $request->user_id,
                    'program_session_id' => $request->program_session_id,
                    'charge_id' => $charge->id,
                    'amount' => $programs->price,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ];

                $transaction = Transaction::create($transactionData);

                $booking = Booking::create([
                    'user_id'            => $request->user_id,
                    'program_session_id' => $request->program_session_id,
                    'status'             => '1'
                ]);

                DB::commit();

                Session()->put('success_payment','Session Booked successfully.');

                return view('front.payment', compact('programs','programSession'));
            }else{
                return view('front.payment', compact('programs','programSession'))->with('error', 'Sorry payment failed, try again.');
            }

        } catch (\Exception $e) {
            DB::rollBack();

            return view('front.payment', compact('programs','programSession'))->with('error', $e->getMessage());
        }

    }
}
