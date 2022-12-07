<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VideoController extends Controller
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
        $records = Video::all();
        return view('admin.videos.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.videos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'video'  => 'required|file|mimetypes:video/mp4',
            'status' => 'required',
        ]);
 
        if ($validator->fails()) {
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $data = $request->except([
            '_token',
            '_method',
            'file'
        ]);

        //move | upload file on server
        if ($request->hasfile('video') && $request->hasfile('video') != '') {
            $file      = $request->file('video');
            $extension = $file->getClientOriginalExtension(); // getting file extension
            $filename  = 'video-'.time() . '.' . $extension;
            $file->move(uploadsDir(), $filename);
            $data['video'] = $filename;
        }
        else {
            $filename = $request->previous_video;
        }

        Video::create($data);

        return redirect()
            ->route('admin.videos.index')
            ->with('success', 'Video has been added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $records = Video::where('id', $id)->first();
        return view('admin.videos.show', compact('records'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $records = Video::where('id', $id)->first();
        return view('admin.videos.edit', compact('records'));
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
        $validator = Validator::make($request->all(), [
            'video'  => 'file|max:30720|mimetypes:video/mp4',
            'status' => 'required',
        ]);
 
        if ($validator->fails()) {
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        //check file if exists
        if ($request->hasfile('video') && $request->hasfile('video') != '') {
            //move | upload file on server
            $file = $request->file('video');
            $extension = $file->getClientOriginalExtension(); // getting video extension
            $filename = 'video-'.time() . '.' . $extension;
            $file->move(uploadsDir(), $filename);

            //remove/unlink if New uploaded successfully
            if (file_exists(uploadsDir() . $filename)
                && !empty($request->previous_video && file_exists(uploadsDir() . $request->previous_video))) {
                unlink(uploadsDir() . $request->previous_video);
            }
        } else {
            $filename = $request->previous_video;
        }

        $data = $request->except([
            '_token',
            '_method',
            'previous_video',
            'video',
        ]);

        $data['video'] = $filename;

        Video::where('id', $id)->update($data);

        return redirect()
            ->route('admin.videos.index')
            ->with('success', 'Video updated sucessfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Video = Video::findOrFail($id); // delete Photo

        if ($Video->image != '' && file_exists(uploadsDir() . $Video->image)) {
            unlink(uploadsDir() . $Video->image);
        }

        $Video->delete();

        return redirect()
            ->route('admin.videos.index')
            ->with('success', 'Photo removed successfully!');
    }
}
