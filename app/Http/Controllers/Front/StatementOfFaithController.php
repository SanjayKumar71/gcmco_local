<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\StatementOfFaith;
use Illuminate\Http\Request;

class StatementOfFaithController extends Controller
{
    public function statement_of_faith(){
        $records = StatementOfFaith::first();
        return view("front.statement_of_faith", compact('records'));
    }
}
