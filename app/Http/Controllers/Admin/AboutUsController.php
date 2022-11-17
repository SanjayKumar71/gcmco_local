<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
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
        $records = AboutUs::first();
        return view('admin.about_us', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
            'previous_about_us_image',
            'previous_section_two_image_one',
            'previous_section_two_image_two',
            'previous_about_us_process_section_slider_image'
        ]);
        
        //check about_us_image if exists
        if ($request->hasfile('about_us_image')) {
            //move | upload file on server
            $file = $request->file('about_us_image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $about_us_image_filename = 'about_us_image-' . time() . '.' . $extension;
            $file->move(uploadsDir(), $about_us_image_filename);

            //check if upload successfully
            if (file_exists(uploadsDir() . $about_us_image_filename)
                && !empty($request->previous_about_us_image && file_exists(uploadsDir() . $request->previous_about_us_image))
            ) {
                unlink(public_path(uploadsDir() . $request->previous_about_us_image));
            }
        } else {
            $about_us_image_filename = $request->previous_about_us_image;
        }

        //check section_two_image_one if exists
        if ($request->hasfile('section_two_image_one')) {
            //move | upload file on server
            $file = $request->file('section_two_image_one');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $section_two_image_one_filename = 'section_two_image_one-' . time() . '.' . $extension;
            $file->move(uploadsDir(), $section_two_image_one_filename);

            //check if upload successfully
            if (file_exists(uploadsDir() . $section_two_image_one_filename)
                && !empty($request->previous_section_two_image_one && file_exists(uploadsDir() . $request->previous_section_two_image_one))
            ) {
                unlink(public_path(uploadsDir() . $request->previous_section_two_image_one));
            }
        } else {
            $section_two_image_one_filename = $request->previous_section_two_image_one;
        }

        //check section_two_image_two if exists
        if ($request->hasfile('section_two_image_two')) {
            //move | upload file on server
            $file = $request->file('section_two_image_two');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $section_two_image_two_filename = 'section_two_image_two-' . time() . '.' . $extension;
            $file->move(uploadsDir(), $section_two_image_two_filename);

            //check if upload successfully
            if (file_exists(uploadsDir() . $section_two_image_two_filename)
                && !empty($request->previous_section_two_image_two && file_exists(uploadsDir() . $request->previous_section_two_image_two))
            ) {
                unlink(public_path(uploadsDir() . $request->previous_section_two_image_two));
            }
        } else {
            $section_two_image_two_filename = $request->previous_section_two_image_two;
        }

        //check section_two_image_two if exists
        if ($request->hasfile('about_us_process_section_slider_image')) {
            foreach($request->about_us_process_section_slider_image as $about_us_process_section_slider_image){
                //move | upload file on server
                $file      = $about_us_process_section_slider_image;
                $extension = $file->getClientOriginalExtension(); // getting image extension
                $about_us_process_section_slider_image_filename  = uniqid(rand(), true) . '.' . $extension;
                $file->move(uploadsDir(), $about_us_process_section_slider_image_filename);
                $processImages[] = $about_us_process_section_slider_image_filename;
            }
            $data['about_us_process_section_slider_image'] = json_encode($processImages);
        }

        $data['about_us_image']        = $about_us_image_filename;
        $data['section_two_image_one'] = $section_two_image_one_filename;
        $data['section_two_image_two'] = $section_two_image_two_filename;
        
        AboutUs::where('id', $id)->update($data);

        return redirect()
            ->route('admin.about_us.index')
            ->with('success', 'About Us updated successfully!');

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
