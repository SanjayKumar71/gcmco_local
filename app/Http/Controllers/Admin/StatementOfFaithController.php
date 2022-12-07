<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StatementOfFaith;
use Illuminate\Http\Request;

class StatementOfFaithController extends Controller
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
        $records = StatementOfFaith::first();
        return view('admin.statement_of_faith.index', compact('records'));
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
            $banner_image = 'statement_of_faith-'.time() . '.' . $extension;
            $file->move(uploadsDir(), $banner_image);

            //remove/unlink if New uploaded successfully
            if (file_exists(uploadsDir() . $banner_image)
                && !empty($request->previous_banner_image && file_exists(uploadsDir() . $request->previous_banner_image))) {
                unlink(uploadsDir() . $request->previous_banner_image);
            }
        } else {
            $banner_image = $request->previous_banner_image;
        }

        $data = $request->except([
            '_token',
            '_method',
            'previous_banner_image',
            'banner_image'
        ]);

        $data['banner_image']          = $banner_image;
        
        StatementOfFaith::where('id', $id)->update($data);

        return redirect()
            ->route('admin.statement_of_faith.index')
            ->with('success', 'Statement updated sucessfully.');
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
