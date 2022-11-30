<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DonationType;
use Illuminate\Http\Request;

class DonationTypeController extends Controller
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
        $records = DonationType::get();
        return view('admin.donation_types.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.donation_types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except([
            '_token',
            '_method'
        ]);

        DonationType::create($data);
        return redirect()->route('admin.donation_types.index')->with('success', 'Donation Type has been added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $records = DonationType::where('id', $id)->first();
        return view('admin.donation_types.show', compact('records'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $records = DonationType::where('id', $id)->first();
        return view('admin.donation_types.edit', compact('records'));
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

        DonationType::where('id', $id)->update($data);

        return redirect()->route('admin.donation_types.index')->with('success', 'Donation Type updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);
        $donationType = DonationType::findOrFail($id);
        dd($donationType);
        $donationType->delete();

        return redirect()->route('admin.donation_types.index')->with('success', 'Donation Type removed successfully!');
    }
}
