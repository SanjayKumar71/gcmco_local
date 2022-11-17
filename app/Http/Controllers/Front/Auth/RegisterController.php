<?php

namespace App\Http\Controllers\Front\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class RegisterController extends Controller
{
    public function create(Request $request){
        $validated = $request->validate(
            [
                'first_name'     => 'required|regex:/^[a-zA-Z]+$/u',
                'last_name'      => 'regex:/^[a-zA-Z]+$/u',
                'email'          => 'required|unique:users|email:rfc,dns',
                'contact_number' => 'required|regex:/^([0-9\s\+]*)$/',
                'password'       => 'required|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!@$*#%_]).*$/|confirmed'
            ], 
            [
                'first_name.required'  => 'First Name is required',
                'first_name.regex'     => 'First Name should contain only alphabets',
                'last_name.regex'      => 'Last Name should contain only alphabets',
                'email.required'       => 'Email is required',
                'email.email'          => 'Invalid Email Format',
                'contact_number.regex' => 'Phone number should contain only +/numbers',
                'password.required'    => 'Password is required',
                'password.min'         => 'Password must be atleast 6 characters',
                'password.regex'       => 'Password must contain at least one uppercase character, one number, and one special character(!@$*#%_)'
            ]
        );

        $createdUser = User::create([
            'first_name'     => $request['first_name'],
            'last_name'      => $request['last_name'],
            'email'          => $request['email'],
            'contact_number' => $request['contact_number'],
            'password'       => Hash::make($request['password'])
        ]);

        if ($createdUser->stripe_customer_id == null) {
            $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
            $customer = $stripe->customers->create([
                'name' => $createdUser->first_name.' '.$createdUser->last_name,
                'email' => $createdUser->email
            ]);

            User::findOrFail($createdUser->id)->update(['stripe_customer_id' => $customer->id]);
        }

        return redirect('account')->with('success', 'Your account is created successfully!');
    }
}
