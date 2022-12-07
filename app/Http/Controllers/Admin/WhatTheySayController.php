<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WhatTheySay;
use Illuminate\Http\Request;

class WhatTheySayController extends Controller
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
        $records = WhatTheySay::all();
        return view('admin.what_they_say.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.what_they_say.create');
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
            '_method',
            'file'
        ]);

        //move | upload file on server
        if ($request->hasfile('profile_image') && $request->hasfile('profile_image') != '') {
            $file      = $request->file('profile_image');
            $extension = $file->getClientOriginalExtension(); // getting file extension
            $filename  = 'what_they_say-'.time() . '.' . $extension;
            $file->move(uploadsDir(), $filename);
            $data['profile_image'] = $filename;
        }
        else {
            $filename = $request->previous_profile_image;
        }

        WhatTheySay::create($data);

        return redirect()
            ->route('admin.what_they_say.index')
            ->with('success', 'Record has been added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $records = WhatTheySay::where('id', $id)->first();
        return view('admin.what_they_say.show', compact('records'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $records = WhatTheySay::where('id', $id)->first();
        return view('admin.what_they_say.edit', compact('records'));
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
        //check file if exists
        if ($request->hasfile('profile_image') && $request->hasfile('profile_image') != '') {
            //move | upload file on server
            $file = $request->file('profile_image');
            $extension = $file->getClientOriginalExtension(); // getting profile_image extension
            $filename = 'what_they_say-'.time() . '.' . $extension;
            $file->move(uploadsDir(), $filename);

            //remove/unlink if New uploaded successfully
            if (file_exists(uploadsDir() . $filename)
                && !empty($request->previous_profile_image && file_exists(uploadsDir() . $request->previous_profile_image))) {
                unlink(uploadsDir() . $request->previous_profile_image);
            }
        } else {
            $filename = $request->previous_profile_image;
        }

        $data = $request->except([
            '_token',
            '_method',
            'previous_profile_image',
            'profile_image',
        ]);

        $data['profile_image'] = $filename;

        WhatTheySay::where('id', $id)->update($data);

        return redirect()
            ->route('admin.what_they_say.index')
            ->with('success', 'Record updated sucessfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = WhatTheySay::findOrFail($id); // delete What They Say

        if ($record->profile_image != '' && file_exists(uploadsDir() . $record->profile_image)) {
            unlink(uploadsDir() . $record->profile_image);
        }

        $record->delete();

        return redirect()
            ->route('admin.what_they_say.index')
            ->with('success', 'Team Member removed successfully!');
    }
}
