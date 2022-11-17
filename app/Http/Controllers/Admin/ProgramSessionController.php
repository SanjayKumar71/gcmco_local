<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProgramSession;

class ProgramSessionController extends Controller
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
        $records = ProgramSession::with('programs')->get();
        return view('admin.program_session.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.program_session.create');
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
        
        $request->validate([
            'program_id' => 'required',
            'date'       => 'required',
            'start_time' => 'required',
            'end_time'   => 'required',
            'location'   => 'required'
        ], [
            'program_id.required' => 'Please select Program',
            'date.required' => 'Please select Date',
            'start_time.required' => 'Please select Start Time',
            'end_time.required' => 'Please select End Time',
            'location.required' => 'Please enter Location'
        ]);

        $ProgramSession = ProgramSession::create($data);
        return redirect()->back()->with('success', 'Program Session added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = ProgramSession::findOrFail($id);

        return view(
            'admin.program_session.show',
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
        $data = ProgramSession::findOrFail($id);

        return view(
            'admin.program_session.edit',
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
            '_method'
        ]);
        $request->validate([
            'program_id' => 'required',
            'date'       => 'required',
            'start_time' => 'required',
            'end_time'   => 'required',
            'location'   => 'required'
        ], [
            'program_id.required' => 'Please select Program',
            'date.required' => 'Please select Date',
            'start_time.required' => 'Please select Start Time',
            'end_time.required' => 'Please select End Time',
            'location.required' => 'Please enter Location'
        ]);
        ProgramSession::where('id', $id)->update($data);

        return redirect()
            ->route('admin.program_session.index')
            ->with('success', 'Program Session updated sucessfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = ProgramSession::findOrFail($id); // delete user

        $service->delete();
        
        return redirect()
            ->route('admin.program_session.index')
            ->with('success', 'Program Session is removed successfully!');
    }
}
