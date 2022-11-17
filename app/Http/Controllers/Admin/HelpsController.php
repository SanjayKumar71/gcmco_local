<?php

namespace App\Http\Controllers\Admin;


use App\Models\Help;
use Illuminate\Http\Request;

class HelpsController extends Controller
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
        $records = Help::first();
        return view('admin.help.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //check file if exists
        $data = $request->except([
            '_token',
            '_method',
            'previous_image_three',
            'previous_image_two',
            'previous_image_one',
            'image_one',
            'image_two',
            'image_three'
        ]);
        if ($request->hasfile('image_one')) {
            $file = $request->file('image_one');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = 'image_one-' . time() . '.' . $extension;
            $file->move(uploadsDir(), $filename);

            if (file_exists(uploadsDir() . $filename)
                && !empty($request->previous_image_one && file_exists(uploadsDir() . $request->previous_image_one))) {
                unlink(uploadsDir() . $request->previous_image_one);
            }
        } else {
            $filename = $request->previous_image_one;
        }
        if ($request->hasfile('image_two')) {
            $file1 = $request->file('image_two');
            $extension1 = $file1->getClientOriginalExtension(); // getting image extension
            $filename1 = 'image_two-' . time() . '.' . $extension1;
            $file1->move(uploadsDir(), $filename1);

            if (file_exists(uploadsDir() . $filename1)
                && !empty($request->previous_image_two && file_exists(uploadsDir() . $request->previous_image_two))) {
                unlink(uploadsDir() . $request->previous_image_two);
            }
        } else {
            $filename1 = $request->previous_image_two;
        }
        if ($request->hasfile('image_three')) {
            $file2 = $request->file('image_three');
            $extension2 = $file2->getClientOriginalExtension(); // getting image extension
            $filename2 = 'image_three-' . time() . '.' . $extension2;
            $file2->move(uploadsDir(), $filename2);

            if (file_exists(uploadsDir() . $filename2)
                && !empty($request->previous_image_three && file_exists(uploadsDir() . $request->previous_image_three))) {
                unlink(uploadsDir() . $request->previous_image_three);
            }
        } else {
            $filename2 = $request->previous_image_three;
        }


        $data['image_one'] = $filename;
        $data['image_two'] = $filename1;
        $data['image_three'] = $filename2;

        Help::where('id', $id)->update($data);

        return redirect()
            ->route('admin.help.index')
            ->with('success', 'help updated sucessfully.');
    }
}
