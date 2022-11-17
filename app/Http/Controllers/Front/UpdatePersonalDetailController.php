<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UpdatePersonalDetailController extends Controller
{
    public function updateDetail(Request $request){
        $data = $request->except([
            '_token',
            '_method'
        ]);

        $validated = $request->validate(
            [
                'first_name'     => 'required|regex:/^[a-zA-Z]+$/u',
                'last_name'      => 'regex:/^[a-zA-Z]+$/u',
                'email'          => 'required|email:rfc,dns',
                'contact_number' => 'required|regex:/^([0-9\s\+]*)$/'
            ], 
            [
                'first_name.required'  => 'First Name is required',
                'first_name.regex'     => 'First Name should contain only alphabets',
                'last_name.regex'      => 'Last Name should contain only alphabets',
                'email.required'       => 'Email is required',
                'email.email'          => 'Invalid Email Format',
                'contact_number.regex' => 'Phone number should contain only +/numbers'
            ]
        );
        
        User::where('id', $data['id'])->update($data);

        return redirect()->back()->with("success","Your data has been updated sucessfully");
    }
}
