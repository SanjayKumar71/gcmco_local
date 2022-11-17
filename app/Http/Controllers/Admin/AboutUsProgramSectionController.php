<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUsProgramSection;

class AboutUsProgramSectionController extends Controller
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
        $records = AboutUsProgramSection::get();
        return view('admin.about_us_program_section.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about_us_program_section.create');
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
        
        $aboutUsProgramSection = AboutUsProgramSection::create($data);
        return redirect()->back()->with('success', 'AboutUs Program Section added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = AboutUsProgramSection::findOrFail($id);

        return view(
            'admin.about_us_program_section.show',
            compact('data')
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = AboutUsProgramSection::findOrFail($id);

        return view(
            'admin.about_us_program_section.edit',
            compact('data')
        );
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

        AboutUsProgramSection::where('id', $id)->update($data);

        return redirect()
            ->route('admin.about_us_program_section.index')
            ->with('success', 'About Us Program updated sucessfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = AboutUsProgramSection::findOrFail($id); // delete user

        $service->delete();

        return redirect()
            ->route('admin.about_us_program_section.index')
            ->with('success', 'About Us Program removed successfully!');
    }
}
