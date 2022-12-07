<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\EventUpdateRequest;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactController extends Controller
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
        $records = ContactUs::all();

        return view('admin.contact_queries.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except([
            '_token',
            '_method'
        ]);
        ContactUs::create($data);
        return redirect()->back()->with('success', 'Your query sent successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Gallery $gallery
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $records = ContactUs::where('id', $id)->first();

        return view('admin.contact_queries.show', compact('records'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(EventUpdateRequest $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\MediaFile $mediaFile
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = ContactUs::findOrFail($id); // delete user

        if ($service->image != '' && file_exists(uploadsDir() . $service->image)) {
            unlink(uploadsDir() . $service->image);
        }

        $service->delete();

        return redirect()
            ->route('admin.contact_queries.index')
            ->with('success', 'Contacts was removed successfully!');
    }
}
