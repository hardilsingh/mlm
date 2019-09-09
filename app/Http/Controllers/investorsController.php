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
use Illuminate\Support\Facades\Crypt;
use File;
use App\payment;

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
        } else {
            $users = User::where('created_by', Auth::user()->vid)->get();
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
        return view('admin.investors.create', compact(['states', 'countries', 'new_vid']));
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
            'points' => round($input['points_transferred'] == 0 ? $input['invested'] / 100 : $input['points_transferred'] * 100 / 100),
            'side' => $input['side'],
            'invested' => $input['points_transferred'] == 0 ? $input['invested'] : $input['points_transferred'] * 100 ,
            'role' => 0,
            'pan_number' => $input['pan_number'],
            'created_by' => Auth::user()->vid,
            'dob' => $input['dob'],
            'gender' => $input['gender'],
            'profile_path' => $imageName4,
        ]);
        
        
        User::sms($input['ph'] , $input['ph'] , $input['email']);

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
            'user_id' => $new_user->id,
            'account' => $input['account'],
            'ifsc_code' => $input['ifsc_code'],

        ]);

        
        $current_user = Auth::user();
        $current_user->update([
            'points'=> $current_user->points + 10,
        ]);



        $new_payments = payment::create([
            'user_id' => $new_user->id,
            'transaction' => $input['points_transferred'] == 0 ? $input['invested'] : $input['points_transferred'] * 100,
            'transaction_id' => 'BDV' . time() . uniqid(mt_rand(), true),
            'mode' => $input['mode'],
            'cheque_number' => $input['cheque_number'] ? $input['cheque_number'] : 0,
        ]);



        File::makeDirectory("../public_html/uploads/$new_user->vid", 0777, true);
        $image3 = $request->file('path_3');
        $imageName3 = uniqid('pan') . '.' . $image3->getClientOriginalExtension();

        $path_1 = "../public_html/uploads/$new_user->vid/";
        $image3->move($path_1, $imageName3);
        
        $new_user->update([
            'path_3'=>$imageName3,
        ]);


        $id = Crypt::encrypt($new_user->id);
        return redirect("/profile?user_id=$id&ref=nav-bar-profile");
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
