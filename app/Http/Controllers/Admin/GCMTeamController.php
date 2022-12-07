<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GCMTeam;
use Illuminate\Http\Request;

class GCMTeamController extends Controller
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
        $records = GCMTeam::all();
        return view('admin.gcm_team.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gcm_team.create');
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
            $filename  = 'gcm_team-'.time() . '.' . $extension;
            $file->move(uploadsDir(), $filename);
            $data['profile_image'] = $filename;
        }
        else {
            $filename = $request->previous_profile_image;
        }

        GCMTeam::create($data);

        return redirect()
            ->route('admin.gcm_team.index')
            ->with('success', 'Team Member has been added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $records = GCMTeam::where('id', $id)->first();
        return view('admin.gcm_team.show', compact('records'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $records = GCMTeam::where('id', $id)->first();
        return view('admin.gcm_team.edit', compact('records'));
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
            $filename = 'gcm_team-'.time() . '.' . $extension;
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

        GCMTeam::where('id', $id)->update($data);

        return redirect()
            ->route('admin.gcm_team.index')
            ->with('success', 'Team Member updated sucessfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gcmTeam = GCMTeam::findOrFail($id); // delete Team Member

        if ($gcmTeam->profile_image != '' && file_exists(uploadsDir() . $gcmTeam->profile_image)) {
            unlink(uploadsDir() . $gcmTeam->profile_image);
        }

        $gcmTeam->delete();

        return redirect()
            ->route('admin.gcm_team.index')
            ->with('success', 'Team Member removed successfully!');
    }
}
