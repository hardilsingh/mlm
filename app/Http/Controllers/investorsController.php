<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\city;
use App\state;
use App\country;
use App\Http\Requests\registerUser;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\addressbook;
use App\phonebook;
use Illuminate\Support\Facades\Storage;
use App\doc;
use Illuminate\Support\Facades\Auth;

class investorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cities = city::pluck('name', 'id');
        $states = state::pluck('name', 'id');
        $countries = country::pluck('name', 'id');
        $latest_vid = User::orderBy('created_at', 'DESC')->first();
        $new_vid = $latest_vid->vid + 1;
        return view('admin.investors.create', compact(['cities', 'states', 'countries', 'new_vid']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(registerUser $request)
    {
        //
        $input = $request->all();
        $password = round(rand(100000, 99999999));

        $latest_vid = User::orderBy('created_at', 'DESC')->first();

        $new_user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($password),
            'vid' => $latest_vid->vid + 1,
            'pin' => rand(1000, 9999),
            'points' => 0,
            'side' => $input['side'],
            'invested' => $input['invested'],
            'role' => 0,
            'addhar_number' => $input['addhar_number'],
            'pan_number' => $input['pan_number'],
            'created_by'=> Auth::user()->vid,
        ]);

        $new_address = addressbook::create([
            'user_id' => $new_user->id,
            'street' => $input['street'],
            'city_id' => $input['city_id'],
            'state_id' => $input['state_id'],
            'country_id' => $input['country_id'],
        ]);

        $new_phone_number = phonebook::create([
            'user_id' => $new_user->id,
            'ph' => $input['ph']
        ]);

        Storage::makeDirectory("/public/uploads/$new_user->vid");
        $image1 = $request->file('path');
        $image2 = $request->file('path_2');
        $image3 = $request->file('path_3');
        $imageName1 = time() . '.' . $image1->getClientOriginalExtension();
        $imageName2 = time() . '.' . $image2->getClientOriginalExtension();
        $imageName3 = time() . '.' . $image3->getClientOriginalExtension();
        $path = storage_path("/public/uploads/$new_user->vid");
        $image1->move($path, $imageName1);
        $image2->move($path, $imageName2);
        $image3->move($path, $imageName3);
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
}
