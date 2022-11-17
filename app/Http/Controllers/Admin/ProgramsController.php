<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Programs;
use App\Models\ProgramImages;
use App\Models\Category;

class ProgramsController extends Controller
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
        $records = Programs::with('category')->get();
        return view('admin.programs.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.programs.create');
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
            'program_image'
        ]);
        $Programs = Programs::create($data);
        
        //check logo if exists
        if (isset($request->program_image)) {
            foreach($request->program_image as $program_image){
                //move | upload file on server
                $file      = $program_image;
                $extension = $file->getClientOriginalExtension(); // getting image extension
                $filename  = uniqid(rand(), true) . '.' . $extension;
                $file->move(uploadsDir(), $filename);

                $ProgramTypeData['image']      = $filename;
                $ProgramTypeData['program_id'] = $Programs->id;
                ProgramImages::create($ProgramTypeData);
            }
        }
        return redirect()->back()->with('success', 'Program added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Programs::findOrFail($id);

        return view(
            'admin.programs.show',
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
        $data = Programs::findOrFail($id);

        return view(
            'admin.programs.edit',
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
        
        //check logo if exists
        if ($request->program_image) {
            ProgramImages::where('program_id', $id)->delete();
            foreach($request->program_image as $program_image){
                //move | upload file on server
                $file      = $program_image;
                $extension = $file->getClientOriginalExtension(); // getting image extension
                $filename  = uniqid(rand(), true) . '.' . $extension;
                $file->move(uploadsDir(), $filename);

                $ProgramTypeData['image']      = $filename;
                $ProgramTypeData['program_id'] = $id;
                ProgramImages::create($ProgramTypeData);
            }
        }
        
        $data = $request->except([
            '_token',
            '_method',
            'previous_image',
            'program_image'
        ]);

        Programs::where('id', $id)->update($data);

        return redirect()
            ->route('admin.programs.index')
            ->with('success', 'Program updated sucessfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Programs::findOrFail($id); // delete user

        $service->delete();
        ProgramImages::where('program_id', $id)->delete();

        return redirect()
            ->route('admin.programs.index')
            ->with('success', 'Program was removed successfully!');
    }
}
