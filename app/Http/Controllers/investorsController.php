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
use Illuminate\Support\Facades\Auth;
use App\accountDetail;
use App\payment;
use Illuminate\Support\Facades\Crypt;
use File;

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
        if (Auth::user()->role == 1) {
            $users = User::all()->sortByDesc('created_at');
        }else {
            $users = User::where('created_by' , Auth::user()->vid)->get();
        }
        return view('admin.investors.index',  compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $states = state::pluck('name', 'id');
        $countries = country::pluck('name', 'id');
        $latest_vid = User::orderBy('created_at', 'DESC')->first();
        $new_vid = $latest_vid->vid + 1;
        return view('admin.investors.create', compact([ 'states', 'countries', 'new_vid']));
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

        $latest_vid = User::orderBy('created_at', 'DESC')->first();

        $path = "../public_html/profile_photos";
        $image4 = $request->file('profile_path');        
        $imageName4 = time() . '.' . $image4->getClientOriginalExtension();
$image4->move($path, $imageName4);

        $new_user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['ph']),
            'vid' => $latest_vid->vid + 1,
            'pin' => rand(1000, 9999),
            'points' => 0,
            'side' => $input['side'],
            'invested' => $input['invested'],
            'role' => 0,
            'addhar_number' => $input['addhar_number'],
            'pan_number' => $input['pan_number'],
            'created_by' => Auth::user()->vid,
            'dob'=>$input['dob'],
            'gender'=>$input['gender'],
            'profile_path'=>$imageName4,
        ]);

        $new_address = addressbook::create([
            'user_id' => $new_user->id,
            'street' => $input['street'],
            'city' => $input['city'],
            'state_id' => $input['state_id'],
            'country_id' => $input['country_id'],
        ]);

        $new_phone_number = phonebook::create([
            'user_id' => $new_user->id,
            'ph' => $input['ph']
        ]);

        $new_account = accountDetail::create([
            'user_id'=>$new_user->id,
            'account'=>$input['account'],
            'ifsc_code'=>$input['ifsc_code'],

        ]);
        
        $new_payments = payment::create([
            'user_id'=>$new_user->id,
            'transaction'=>$input['invested'],
            'transaction_id'=>'BDV'.time().uniqid(mt_rand(),true),
            'mode'=>$input['mode'],
            'cheque_number'=>$input['cheque_number'] ? $input['cheque_number'] : null,
        ]);

        File::makeDirectory("../public_html/uploads/$new_user->vid" , 0777 ,true);
        $image1 = $request->file('path');
        $image2 = $request->file('path_2');
        $image3 = $request->file('path_3');
        $imageName1 = uniqid('aFront') . '.' . $image1->getClientOriginalExtension();
        $imageName2 = uniqid('aback') . '.' . $image2->getClientOriginalExtension();
        $imageName3 = uniqid('pan') . '.' . $image3->getClientOriginalExtension();
        
        $path_1 ="../public_html/uploads/$new_user->vid/";
        $image1->move($path_1, $imageName1);
        $image2->move($path_1, $imageName2);
        $image3->move($path_1, $imageName3);


        $id = Crypt::encrypt($new_user->id);
        return redirect("/profile?user_id=$id");
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
