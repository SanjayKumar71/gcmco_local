<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\BlogStoreRequest;
use App\Http\Requests\Admin\BlogUpdateRequest;
use App\Http\Requests\Admin\EventStoreRequest;
use App\Http\Requests\Admin\EventUpdateRequest;
use App\Models\Blog;
use App\Models\Booking;
use App\Models\ContactUs;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\UpdateMediaFileRequest;
use App\Models\MediaFile;
use App\Http\Requests\Admin\StoreMediaFileRequest;

class BookingController extends Controller
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
        $records = Booking::with("getProgramSession.programs")->with("getUsers")->get();
        return view('admin.bookings.index', compact('records'));
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
    public function store(EventStoreRequest $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Gallery $gallery
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
        $service = Booking::findOrFail($id); // delete user

        $service->delete();

        return redirect()
            ->route('admin.bookings.index')
            ->with('success', 'Booking removed successfully!');
    }
}
