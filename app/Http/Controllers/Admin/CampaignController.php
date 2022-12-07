<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
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
        $records = Campaign::all();

        return view('admin.campaigns.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.campaigns.create');
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
            'file'
        ]);

        //move | upload file on server
        if ($request->hasfile('image') && $request->hasfile('image') != '') {
            $file      = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting file extension
            $filename  = 'campaign-'.time() . '.' . $extension;
            $file->move(uploadsDir(), $filename);
            $data['image'] = $filename;
        }
        else {
            $filename = $request->previous_image;
        }
        
        Campaign::where('is_default', 1)->update(array('is_default' => 0));

        Campaign::create($data);

        return redirect()
            ->route('admin.campaigns.index')
            ->with('success', 'Campaign has been added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $records = Campaign::where('id', $id)->first();

        return view('admin.campaigns.show', compact('records'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $records = Campaign::where('id', $id)->first();

        return view('admin.campaigns.edit', compact('records'));
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
        if ($request->hasfile('image') && $request->hasfile('image') != '') {
            //move | upload file on server
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = 'campaign-'.time() . '.' . $extension;
            $file->move(uploadsDir(), $filename);

            //remove/unlink if New uploaded successfully
            if (file_exists(uploadsDir() . $filename)
                && !empty($request->previous_image && file_exists(uploadsDir() . $request->previous_image))) {
                unlink(uploadsDir() . $request->previous_image);
            }
        } else {
            $filename = $request->previous_image;
        }

        $data = $request->except([
            '_token',
            '_method',
            'previous_image',
            'image',
        ]);

        $data['image'] = $filename;
        
        if($request->is_default == 1)
            Campaign::where('is_default', 1)->update(array('is_default' => 0));

        Campaign::where('id', $id)->update($data);

        return redirect()
            ->route('admin.campaigns.index')
            ->with('success', 'Campaign updated sucessfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Campaign::findOrFail($id); // delete Campaign

        if ($service->image != '' && file_exists(uploadsDir() . $service->image)) {
            unlink(uploadsDir() . $service->image);
        }

        $service->delete();

        return redirect()
            ->route('admin.campaigns.index')
            ->with('success', 'Campaign removed successfully!');
    }
}
