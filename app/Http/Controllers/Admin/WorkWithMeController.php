<?php

namespace App\Http\Controllers\Admin;


use App\Models\WorkWithUs;
use Illuminate\Http\Request;

class WorkWithMeController extends Controller
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
        $records = WorkWithUs::first();
        return view('admin.work_with_me.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $request->except([
            '_token',
            '_method',
            'previous_image_one',
            'previous_image_two',
            'previous_image_three',
            'image_one',
            'image_two',
            'image_three',
        ]);

        if ($request->image_one) {
            $file = $request->image_one;
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '1.' . $extension;
            $file->move(uploadsDir(), $filename);
            if (file_exists(uploadsDir() . $filename)
                && !empty($request->previous_image_one && file_exists(uploadsDir() . $request->previous_image_one))) {
                unlink(uploadsDir() . $request->previous_image_one);
            }
        } else {
            $filename = $request->previous_image_one;
        }

        if ($request->image_two) {
            $file1 = $request->image_two;
            $extension1 = $file->getClientOriginalExtension();
            $filename1 = time() . '2.' . $extension1;
            $file1->move(uploadsDir(), $filename1);
            if (file_exists(uploadsDir() . $filename1)
                && !empty($request->previous_image_two && file_exists(uploadsDir() . $request->previous_image_two))) {
                unlink(uploadsDir() . $request->previous_image_two);
            }
        } else {
            $filename1 = $request->previous_image_two;
        }

        if ($request->image_three) {
            $file2 = $request->image_three;
            $extension2 = $file->getClientOriginalExtension();
            $filename2 = time() . '3.' . $extension2;
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

        WorkWithUs::where('id', $request->id)->update($data);

        return redirect()
            ->route('admin.work_with_me.index')
            ->with('success', 'Work With Me updated successfully.');
    }
}
