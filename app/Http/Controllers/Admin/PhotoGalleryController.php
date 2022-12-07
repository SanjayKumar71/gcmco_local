<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PhotoGallery;
use Illuminate\Http\Request;

class PhotoGalleryController extends Controller
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
        $records = PhotoGallery::all();
        return view('admin.photo_gallery.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.photo_gallery.create');
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
        if ($request->hasfile('image') && $request->hasfile('image') != '') {
            $file      = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting file extension
            $filename  = 'photo-'.time() . '.' . $extension;
            $file->move(uploadsDir(), $filename);
            $data['image'] = $filename;
        }
        else {
            $filename = $request->previous_image;
        }

        PhotoGallery::create($data);

        return redirect()
            ->route('admin.photo_gallery.index')
            ->with('success', 'Photo Gallery has been added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $records = PhotoGallery::where('id', $id)->first();
        return view('admin.photo_gallery.show', compact('records'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $records = PhotoGallery::where('id', $id)->first();
        return view('admin.photo_gallery.edit', compact('records'));
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
        if ($request->hasfile('image') && $request->hasfile('image') != '') {
            //move | upload file on server
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = 'photo-'.time() . '.' . $extension;
            $file->move(uploadsDir(), $filename);

            //remove/unlink if New uploaded successfully
            if (file_exists(uploadsDir() . $filename)
                && !empty($request->previous_image && file_exists(uploadsDir() . $request->previous_image))) {
                unlink(uploadsDir() . $request->previous_image);
            }
        } else {
            $filename = $request->previous_image;
        }

        $data = $request->except([
            '_token',
            '_method',
            'previous_image',
            'image',
        ]);

        $data['image'] = $filename;

        PhotoGallery::where('id', $id)->update($data);

        return redirect()
            ->route('admin.photo_gallery.index')
            ->with('success', 'Photo updated sucessfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photoGallery = PhotoGallery::findOrFail($id); // delete Photo

        if ($photoGallery->image != '' && file_exists(uploadsDir() . $photoGallery->image)) {
            unlink(uploadsDir() . $photoGallery->image);
        }

        $photoGallery->delete();

        return redirect()
            ->route('admin.photo_gallery.index')
            ->with('success', 'Photo removed successfully!');
    }
}
