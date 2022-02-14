<?php

namespace App\Http\Controllers\Backend\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['allData'] = User::all();
        return view('Backend.Users.view_user', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.Users.create_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = new User();
        $data -> first_name = $request-> first_name;
        $data -> last_name = $request->last_name;
        $data -> email = $request->user_email;
        $data -> type = $request->user_type;
        $data -> password = bcrypt($request->user_password);
        $data->save();

        $notification = array(
            'message' => 'User Inserted Successfully',
            'alert-type'=>'success'
        );

        return redirect()->route('user.view')->with($notification);
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
        $editData = User::find($id);
        return view('backend.users.edit_user', compact('editData'));
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
        $data = User::find($id);
        $data -> first_name = $request-> edit_first_name;
        $data -> last_name = $request->edit_last_name;
        $data -> email = $request->edit_email;
        $data -> type = $request->edit_role;
        $data->save();

        $notification = array(
            'message' => 'User Updated Successfully',
            'alert-type'=>'info'
        );

        return redirect()->route('user.view')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        $notification = array(
            'message' => 'User Deleted Successfully',
            'alert-type'=>'danger'
        );

        return redirect()->route('user.view')->with($notification);
    }
}
