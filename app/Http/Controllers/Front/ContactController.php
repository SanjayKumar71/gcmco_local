<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'full_name' => 'required|regex:/^[a-zA-Z]+$/u',
                'email'     => 'required|email:rfc,dns',
                'phone'     => 'required|regex:/^([0-9\s\+]*)$/'
            ], 
            [
                'full_name.required' => 'Full Name is required',
                'full_name.regex'    => 'Full Name should be only alphabets',
                'email.required'     => 'Email is required',
                'email.email'        => 'Invalid Email Format',
                'phone.regex'        => 'Phone number should be only +/numbers'
            ]
        );

        $data = $request->except([
            '_token',
            '_method'
        ]);
        ContactUs::create($data);
        return redirect()->back()->with('success', 'Your query sent successfully!');
    }
}
