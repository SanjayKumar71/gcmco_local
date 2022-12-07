<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // parent::__construct();
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Sponsor::first();
        return view('admin.sponsors.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $validatedData = $request->validate([
        //     'banner' => 'size:10240',
        //     'image' => 'size:10240',
        // ]);

        //check file if exists
        if ($request->hasfile('banner')) {
            //move | upload file on server
            $file = $request->file('banner');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $banner_filename = time() . '.' . $extension;
            $file->move(uploadsDir(), $banner_filename);

            //remove/unlink if New uploaded successfully
            if (file_exists(uploadsDir() . $banner_filename)
                && !empty($request->previous_banner && file_exists(uploadsDir() . $request->previous_banner))) {
                unlink(uploadsDir() . $request->previous_banner);
            }
        } else {
            $banner_filename = $request->previous_banner;
        }

        // image
        if ($request->hasfile('image')) {
            //move | upload file on server
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $image_filename = time() . '.' . $extension;
            $file->move(uploadsDir(), $image_filename);

            //remove/unlink if New uploaded successfully
            if (file_exists(uploadsDir() . $image_filename)
                && !empty($request->previous_image && file_exists(uploadsDir() . $request->previous_image))) {
                unlink(uploadsDir() . $request->previous_image);
            }
        } else {
            $image_filename = $request->previous_image;
        }

        $data = $request->except([
            '_token',
            '_method',
            'previous_banner',
            'banner',
            'image',
            'previous_image'
        ]);

        $data['banner'] = $banner_filename;
        $data['image']  = $image_filename;

        Sponsor::where('id', $id)->update($data);

        return redirect()
            ->route('admin.sponsors.index')
            ->with('success', 'Sponsor updated sucessfully.');
    }
}
