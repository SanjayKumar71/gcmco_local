<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SpeakingEvent;
use Illuminate\Http\Request;

class SpeakingEventController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // parent::__construct();
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = SpeakingEvent::all();
        return view('admin.speaking_events.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.speaking_events.create');
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

        SpeakingEvent::create($data);

        return redirect()
            ->route('admin.speaking_events.index')
            ->with('success', 'Speaking Event has been added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $records = SpeakingEvent::where('id', $id)->first();

        return view('admin.speaking_events.show', compact('records'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $records = SpeakingEvent::where('id', $id)->first();

        return view('admin.speaking_events.edit', compact('records'));
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
            '_method'
        ]);

        SpeakingEvent::where('id', $id)->update($data);

        return redirect()
            ->route('admin.speaking_events.index')
            ->with('success', 'Speaking Event updated sucessfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $speakingEvent = SpeakingEvent::findOrFail($id); // delete SpeakingEvent

        $speakingEvent->delete();

        return redirect()
            ->route('admin.speaking_events.index')
            ->with('success', 'Speaking Event removed successfully!');
    }
}
