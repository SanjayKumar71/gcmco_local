<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\BlogStoreRequest;
use App\Http\Requests\Admin\BlogUpdateRequest;
use App\Http\Requests\Admin\SuccessStoreRequest;
use App\Http\Requests\Admin\SuccessUpdateRequest;
use App\Models\Blog;
use App\Models\Event;
use App\Models\SuccessStory;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\UpdateMediaFileRequest;
use App\Models\MediaFile;
use App\Http\Requests\Admin\StoreMediaFileRequest;

class SuccessStoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth:admin');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = SuccessStory::all();

        return view('admin.success_stories.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.success_stories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SuccessStoreRequest $request)
    {

        $data = $request->except([
            '_token',
            '_method',
            'file'
        ]);

        //move | upload file on server
        $file      = $request->file('image');
        $extension = $file->getClientOriginalExtension(); // getting file extension
        $filename  = 'media-file-'.time() . '.' . $extension;
        $file->move(uploadsDir(), $filename);
        $data['image'] = $filename;

        SuccessStory::create($data);

        return redirect()
            ->route('admin.success_stories.index')
            ->with('success', 'Story has been added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = SuccessStory::findOrFail($id);

        return view(
            'admin.success_stories.show',
            compact('data')
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = SuccessStory::findOrFail($id);

        return view(
            'admin.success_stories.edit',
            compact('data')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(SuccessUpdateRequest $request, $id)
    {
        //check file if exists
        if ($request->hasfile('image')) {
            //move | upload file on server
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
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

        SuccessStory::where('id', $id)->update($data);

        return redirect()
            ->route('admin.success_stories.index')
            ->with('success', 'Story updated sucessfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MediaFile  $mediaFile
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = SuccessStory::findOrFail($id); // delete user

        if ($service->image != '' && file_exists(uploadsDir() . $service->image)) {
            unlink(uploadsDir() . $service->image);
        }

        $service->delete();

        return redirect()
            ->route('admin.success_stories.index')
            ->with('success', 'Story was removed successfully!');
    }
}
