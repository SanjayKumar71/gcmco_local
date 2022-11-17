<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSectionThree;

class HomeSectionThreeController extends Controller
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
        $records = HomeSectionThree::get();
        return view('admin.home_section_three.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home_section_three.create');
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
        
        //check icon if exists
        if (isset($request->icon)) {
            //move | upload file on server
            $file      = $request->icon;
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename  = uniqid(rand(), true) . '.' . $extension;
            $file->move(uploadsDir(), $filename);
            $data['icon'] = $filename;
        }
        $homeSectionThree = HomeSectionThree::create($data);
        return redirect()->back()->with('success', 'Home Section Three Content added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = HomeSectionThree::where('id',$id)->first();
        return view('admin.home_section_three.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = HomeSectionThree::where('id',$id)->first();
        return view('admin.home_section_three.edit', compact('data'));
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
            '_method',
            'previous_icon'
        ]);

        //check logo if exists
        if ($request->icon) {
            //move | upload file on server
            $file      = $request->icon;
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename  = uniqid(rand(), true) . '.' . $extension;
            $file->move(uploadsDir(), $filename);
            $data['icon'] = $filename;
        }
        
        HomeSectionThree::where('id', $id)->update($data);

        return redirect()
            ->route('admin.home_section_three.index')
            ->with('success', 'Home Section Three Content updated sucessfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = HomeSectionThree::findOrFail($id); // delete user

        $service->delete();

        return redirect()
            ->route('admin.home_section_three.index')
            ->with('success', 'Home Section Three Content removed successfully!');
    }
}
