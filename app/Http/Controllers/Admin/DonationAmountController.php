<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DonationAmount;
use Illuminate\Http\Request;

class DonationAmountController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //parent::__construct();
        $this->middleware('auth:admin');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = DonationAmount::get();
        return view('admin.donation_amount.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.donation_amount.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'amount' => 'required|numeric|gt:0'
            ],
            [
                'amount.required' => 'Amount is required',
                'amount.gt' => 'Amount should be greater than 0',
            ]
        );

        $data = $request->except([
            '_token',
            '_method'
        ]);

        DonationAmount::create($data);
        return redirect()->route('admin.donation_amount.index')->with('success', 'Donation Amount has been added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $records = DonationAmount::where('id', $id)->first();
        return view('admin.donation_amount.show', compact('records'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $records = DonationAmount::where('id', $id)->first();
        return view('admin.donation_amount.edit', compact('records'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->except([
            '_token',
            '_method'
        ]);

        DonationAmount::where('id', $id)->update($data);

        return redirect()->route('admin.donation_amount.index')->with('success', 'Donation Amount updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
