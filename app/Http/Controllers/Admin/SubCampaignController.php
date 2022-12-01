<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCampaign;

class SubCampaignController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
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
        $records = SubCampaign::all();

        return view('admin.sub_campaigns.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sub_campaigns.create');
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
        $file      = $request->file('image');
        $extension = $file->getClientOriginalExtension(); // getting file extension
        $filename  = 'subcampaign-'.time() . '.' . $extension;
        $file->move(uploadsDir(), $filename);
        $data['image'] = $filename;

        SubCampaign::create($data);

        return redirect()
            ->route('admin.sub_campaigns.index')
            ->with('success', 'Sub Campaign has been added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $records = SubCampaign::with('getCampaign')->where('id', $id)->first();

        return view('admin.sub_campaigns.show', compact('records'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $records = SubCampaign::where('id', $id)->first();

        return view('admin.sub_campaigns.edit', compact('records'));
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
        if ($request->hasfile('image')) {
            //move | upload file on server
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = 'subcampaign-'.time() . '.' . $extension;
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

        SubCampaign::where('id', $id)->update($data);

        return redirect()
            ->route('admin.sub_campaigns.index')
            ->with('success', 'Sub Campaign updated sucessfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subCampaign = SubCampaign::findOrFail($id); // delete Campaign

        if ($subCampaign->image != '' && file_exists(uploadsDir() . $subCampaign->image)) {
            unlink(uploadsDir() . $subCampaign->image);
        }

        $subCampaign->delete();

        return redirect()
            ->route('admin.sub_campaigns.index')
            ->with('success', 'Sub Campaign removed successfully!');
    }
}
