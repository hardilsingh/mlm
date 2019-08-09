<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use App\phonebook;
use Illuminate\Support\Facades\Hash;

class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if (!isset($_GET['user_id'])) {
            $user = User::findOrFail(Auth::user()->id);
            $users = User::where('created_by', Auth::user()->vid)->get();
            return view('admin.profile.index', compact('users', 'user'));
        } elseif (isset($_GET['user_id'])) {
            $id = Crypt::decrypt($_GET['user_id']);
            $user = User::findOrFail($id);
            $encrypted_user_id = Crypt::encrypt($user->id);
            $users = User::where('created_by', $user->vid)->get();
            return view('admin.profile.index', compact(['users', 'user', 'encrypted_user_id']));
        }
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
        //
        $input = $request->all();

        $user = User::findOrFail($id);

        $user->update([
            'name' => $input['name'],
            'email' => $input['email'],
        ]);

        $tel = phonebook::where('user_id', $user->id);
        $tel->update([
            'ph' => $input['ph']
        ]);

        $request->session()->flash('success', 'Updated Successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function verifyUser(Request $request)
    {

        $id = Crypt::decrypt($_GET['user_id']);
        $user = User::findOrFail($id);
        $user->update([
            'is_verified' => 1,
        ]);
    }


    public function updatePassword(Request $request)
    {

        if (password_verify($request->oldPassword, Auth::user()->password)) {
            $password = Hash::make($request->password);
            $user = User::findOrFail(Auth::user()->id);
            $user->update([
                'password' => $password
            ]);
            $request->session()->flash('success', 'Updated Successfully');
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }
}
