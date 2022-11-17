<?php

namespace App\Http\Controllers\Admin;

use App\Models\HomeContent;

use App\Models\WorkWithUs;
use Illuminate\Http\Request;

class HomeController extends Controller
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
        $records = HomeContent::first();

        return view('admin.home_content.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'banner' => 'size:10240',
            'video_one' => 'size:20480',
            'video_two' => 'size:20480',
            'section_four_image' => 'size:5120'
        ]);

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
        
        // Video One
        if ($request->hasfile('video_one')) {
            //move | upload file on server
            $file = $request->file('video_one');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $video_one_filename = time() . '.' . $extension;
            $file->move(uploadsDir(), $video_one_filename);

            //remove/unlink if New uploaded successfully
            if (file_exists(uploadsDir() . $video_one_filename)
                && !empty($request->previous_video_one && file_exists(uploadsDir() . $request->previous_video_one))) {
                unlink(uploadsDir() . $request->previous_video_one);
            }
        } else {
            $video_one_filename = $request->previous_video_one;
        }

        // Video Two
        if ($request->hasfile('video_two')) {
            //move | upload file on server
            $file = $request->file('video_two');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $video_two_filename = time() . '.' . $extension;
            $file->move(uploadsDir(), $video_two_filename);

            //remove/unlink if New uploaded successfully
            if (file_exists(uploadsDir() . $video_two_filename)
                && !empty($request->previous_video_two && file_exists(uploadsDir() . $request->previous_video_two))) {
                unlink(uploadsDir() . $request->previous_video_two);
            }
        } else {
            $video_two_filename = $request->previous_video_two;
        }

        // section_four_image
        if ($request->hasfile('section_four_image')) {
            //move | upload file on server
            $file = $request->file('section_four_image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $section_four_image_filename = time() . '.' . $extension;
            $file->move(uploadsDir(), $section_four_image_filename);

            //remove/unlink if New uploaded successfully
            if (file_exists(uploadsDir() . $section_four_image_filename)
                && !empty($request->previous_section_four_image && file_exists(uploadsDir() . $request->previous_section_four_image))) {
                unlink(uploadsDir() . $request->previous_section_four_image);
            }
        } else {
            $section_four_image_filename = $request->previous_section_four_image;
        }

        $data = $request->except([
            '_token',
            '_method',
            'previous_banner',
            'banner',
            'previous_video_one',
            'video_one',
            'previous_video_two',
            'video_two',
            'section_four_image',
            'previous_section_four_image'
        ]);

        $data['banner']             = $banner_filename;
        $data['video_one']          = $video_one_filename;
        $data['video_two']          = $video_two_filename;
        $data['section_four_image'] = $section_four_image_filename;

        HomeContent::where('id', $id)->update($data);

        return redirect()
            ->route('admin.home_content.index')
            ->with('success', 'Home Content updated sucessfully.');
    }


}
