<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WhoWeAre;
use Illuminate\Http\Request;

class WhoWeAreController extends Controller
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
        $records = WhoWeAre::first();
        return view('admin.who_we_are.index', compact('records'));
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
        //check file if exists > Banner Image
        if ($request->hasfile('banner_image') && $request->hasfile('banner_image') != '') {
            //move | upload file on server
            $file = $request->file('banner_image');
            $extension = $file->getClientOriginalExtension(); // getting banner_image extension
            $banner_image = 'banner-image-'.time() . '.' . $extension;
            $file->move(uploadsDir(), $banner_image);

            //remove/unlink if New uploaded successfully
            if (file_exists(uploadsDir() . $banner_image)
                && !empty($request->previous_banner_image && file_exists(uploadsDir() . $request->previous_banner_image))) {
                unlink(uploadsDir() . $request->previous_banner_image);
            }
        } else {
            $banner_image = $request->previous_banner_image;
        }

        //check file if exists > section_one_image_one
        if ($request->hasfile('section_one_image_one') && $request->hasfile('section_one_image_one') != '') {
            //move | upload file on server
            $file = $request->file('section_one_image_one');
            $extension = $file->getClientOriginalExtension(); // getting section_one_image_one extension
            $section_one_image_one = 'section-one-image-one-'.time() . '.' . $extension;
            $file->move(uploadsDir(), $section_one_image_one);

            //remove/unlink if New uploaded successfully
            if (file_exists(uploadsDir() . $section_one_image_one)
                && !empty($request->previous_section_one_image_one && file_exists(uploadsDir() . $request->previous_section_one_image_one))) {
                unlink(uploadsDir() . $request->previous_section_one_image_one);
            }
        } else {
            $section_one_image_one = $request->previous_section_one_image_one;
        }

        //check file if exists > section_one_image_two
        if ($request->hasfile('section_one_image_two') && $request->hasfile('section_one_image_two') != '') {
            //move | upload file on server
            $file = $request->file('section_one_image_two');
            $extension = $file->getClientOriginalExtension(); // getting section_one_image_two extension
            $section_one_image_two = 'section-one-image-two-'.time() . '.' . $extension;
            $file->move(uploadsDir(), $section_one_image_two);

            //remove/unlink if New uploaded successfully
            if (file_exists(uploadsDir() . $section_one_image_two)
                && !empty($request->previous_section_one_image_two && file_exists(uploadsDir() . $request->previous_section_one_image_two))) {
                unlink(uploadsDir() . $request->previous_section_one_image_two);
            }
        } else {
            $section_one_image_two = $request->previous_section_one_image_two;
        }

        //check file if exists > section_two_image
        if ($request->hasfile('section_two_image') && $request->hasfile('section_two_image') != '') {
            //move | upload file on server
            $file = $request->file('section_two_image');
            $extension = $file->getClientOriginalExtension(); // getting section_two_image extension
            $section_two_image = 'section-two-image-'.time() . '.' . $extension;
            $file->move(uploadsDir(), $section_two_image);

            //remove/unlink if New uploaded successfully
            if (file_exists(uploadsDir() . $section_two_image)
                && !empty($request->previous_section_two_image && file_exists(uploadsDir() . $request->previous_section_two_image))) {
                unlink(uploadsDir() . $request->previous_section_two_image);
            }
        } else {
            $section_two_image = $request->previous_section_two_image;
        }

        //check file if exists > section_three_image
        if ($request->hasfile('section_three_image') && $request->hasfile('section_three_image') != '') {
            //move | upload file on server
            $file = $request->file('section_three_image');
            $extension = $file->getClientOriginalExtension(); // getting section_three_image extension
            $section_three_image = 'section-three-image-'.time() . '.' . $extension;
            $file->move(uploadsDir(), $section_three_image);

            //remove/unlink if New uploaded successfully
            if (file_exists(uploadsDir() . $section_three_image)
                && !empty($request->previous_section_three_image && file_exists(uploadsDir() . $request->previous_section_three_image))) {
                unlink(uploadsDir() . $request->previous_section_three_image);
            }
        } else {
            $section_three_image = $request->previous_section_three_image;
        }

        //check file if exists > section_four_image
        if ($request->hasfile('section_four_image') && $request->hasfile('section_four_image') != '') {
            //move | upload file on server
            $file = $request->file('section_four_image');
            $extension = $file->getClientOriginalExtension(); // getting section_four_image extension
            $section_four_image = 'section-four-image-'.time() . '.' . $extension;
            $file->move(uploadsDir(), $section_four_image);

            //remove/unlink if New uploaded successfully
            if (file_exists(uploadsDir() . $section_four_image)
                && !empty($request->previous_section_four_image && file_exists(uploadsDir() . $request->previous_section_four_image))) {
                unlink(uploadsDir() . $request->previous_section_four_image);
            }
        } else {
            $section_four_image = $request->previous_section_four_image;
        }

        $data = $request->except([
            '_token',
            '_method',
            'previous_banner_image',
            'banner_image',
            'previous_section_one_image_one',
            'section_one_image_one',
            'previous_section_one_image_two',
            'section_one_image_two',
            'previous_section_two_image',
            'section_two_image',
            'previous_section_three_image',
            'section_three_image',
            'previous_section_four_image',
            'section_four_image',
        ]);

        $data['banner_image']          = $banner_image;
        $data['section_one_image_one'] = $section_one_image_one;
        $data['section_one_image_two'] = $section_one_image_two;
        $data['section_two_image']     = $section_two_image;
        $data['section_three_image']   = $section_three_image;
        $data['section_four_image']    = $section_four_image;
        
        WhoWeAre::where('id', $id)->update($data);

        return redirect()
            ->route('admin.who_we_are.index')
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
        //
    }
}
