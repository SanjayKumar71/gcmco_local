<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PartnershipAffiliation;

class PartnershipAffiliationController extends Controller
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
        $records = PartnershipAffiliation::get();
        return view('admin.partnership_affiliation.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partnership_affiliation.create');
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
        $filename  = 'media-file-'.time() . '.' . $extension;
        $file->move(uploadsDir(), $filename);
        $data['image'] = $filename;

        PartnershipAffiliation::create($data);

        return redirect()
            ->route('admin.partnership_affiliation.index')
            ->with('success', 'Partnership/Affiliation has been added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = PartnershipAffiliation::where('id', $id)->first();
        return view('admin.partnership_affiliation.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = PartnershipAffiliation::where('id', $id)->first();
        return view('admin.partnership_affiliation.edit', compact('data'));
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
            $filename = time() . '.' . $extension;
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

        PartnershipAffiliation::where('id', $id)->update($data);

        return redirect()
            ->route('admin.partnership_affiliation.index')
            ->with('success', 'Partnership Affiliation updated sucessfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partnership = PartnershipAffiliation::findOrFail($id); // delete user

        if ($partnership->image != '' && file_exists(uploadsDir() . $partnership->image)) {
            unlink(uploadsDir() . $partnership->image);
        }

        $partnership->delete();

        return redirect()
            ->route('admin.partnership_affiliation.index')
            ->with('success', 'Partnership Affiliation removed successfully!');
    }
}
