<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProgramType;

class ProgramTypeController extends Controller
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
        $records = ProgramType::all();

        return view('admin.program_type.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.program_type.create');
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
            '_method'
        ]);
        //check logo if exists
        if ($request->hasfile('icon')) {
            //move | upload file on server
            $file = $request->file('icon');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = 'icon-' . time() . '.' . $extension;
            $file->move(uploadsDir(), $filename);
            $data['icon'] = $filename;
        }
        ProgramType::create($data);
        return redirect()->back()->with('success', 'Program Type added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = ProgramType::findOrFail($id);

        return view(
            'admin.program_type.show',
            compact('data')
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ProgramType::findOrFail($id);

        return view(
            'admin.program_type.edit',
            compact('data')
        );
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
            'previous_icon'
        ]);
        //check logo if exists
        if ($request->hasfile('icon')) {
            //move | upload file on server
            $file = $request->file('icon');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = 'icon-' . time() . '.' . $extension;
            $file->move(uploadsDir(), $filename);

            //check if upload successfully
            if (file_exists(uploadsDir() . $filename)
                && !empty($request->previous_icon && file_exists(uploadsDir() . $request->previous_icon))
            ) {
                unlink(public_path(uploadsDir() . $request->previous_icon));
            }
        } else {
            $filename = $request->previous_icon;
        }
        $data['icon'] = $filename;
        ProgramType::where('id', $id)->update($data);

        return redirect()
            ->route('admin.program_type.index')
            ->with('success', 'Program Type updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = ProgramType::findOrFail($id); // delete user

        $service->delete();

        return redirect()
            ->route('admin.program_type.index')
            ->with('success', 'Program Type is removed successfully!');
    }
}
