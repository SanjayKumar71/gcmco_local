<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
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
        $records = History::first();
        return view('admin.history.index', compact('records'));
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
        //check file if exists
        if ($request->hasfile('banner_image') && $request->hasfile('banner_image') != '') {
            //move | upload file on server
            $file = $request->file('banner_image');
            $extension = $file->getClientOriginalExtension(); // getting banner_image extension
            $filename = 'history-'.time() . '.' . $extension;
            $file->move(uploadsDir(), $filename);

            //remove/unlink if New uploaded successfully
            if (file_exists(uploadsDir() . $filename)
                && !empty($request->previous_banner_image && file_exists(uploadsDir() . $request->previous_banner_image))) {
                unlink(uploadsDir() . $request->previous_banner_image);
            }
        } else {
            $filename = $request->previous_banner_image;
        }

        $data = $request->except([
            '_token',
            '_method',
            'previous_banner_image',
            'banner_image',
        ]);

        $data['banner_image'] = $filename;

        History::where('id', $id)->update($data);

        return redirect()
            ->route('admin.history.index')
            ->with('success', 'History updated sucessfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $history = History::findOrFail($id); // delete History

        if ($history->image != '' && file_exists(uploadsDir() . $history->image)) {
            unlink(uploadsDir() . $history->image);
        }

        $history->delete();

        return redirect()
            ->route('admin.history.index')
            ->with('success', 'History removed successfully!');
    }
}
