<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Response;
use App\Http\Requests\Admin\StoreUserRequest;
use App\Http\Requests\Admin\UpdateUserRequest;
use App\Http\Requests\Admin\UpdatePasswordRequest;
use App\Models\Admin;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth:admin');
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = User::getAllUsers();

        return view('admin.users.index',
            compact('records')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Admin\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $data = $request->except([
            '_token',
            '_method'
        ]);

        $user = User::create($data);

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'User has been added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = User::findOrFail($id);

        return view('admin.users.show',
            compact('data')
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::findOrFail($id);

        return view('admin.users.edit',
            compact('data')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Admin\UpdateUserRequest $request
     * @param  User ID $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
        $data = $request->except([
            '_token',
            '_method'
        ]);

        User::where('id', $id)->update($data);

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'User has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  User $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::findOrFail($id);

        $data->delete($id);

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'User deleted successfully.');
    }

    /**
     * Show the form for editing the password to specified resource.
     *
     * @return Response
     */
    public function changePassword()
    {
        return view('admin.users.changePassword');
    }

    /**
     * Update the password of specified resource in storage.
     *
     * @param UpdatePasswordRequest $request
     *
     * @return Response message
     */
    public function processChangePassword(UpdatePasswordRequest $request)
    {
        $id               = Auth::user()->id;
        $data['password'] = bcrypt($request->get('password'));

        Admin::where('id', $id)->update($data);

        return redirect()
            ->route('admin.users.change-password')
            ->with('success', 'Password has been changed successfully..');
    }
}
