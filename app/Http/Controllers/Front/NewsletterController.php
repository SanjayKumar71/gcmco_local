<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->except([
            '_token',
            '_method'
        ]);

        $newsl = Newsletter::create($data);
        return redirect()->back()->with('success', 'Subscription successful.');
    }
}
