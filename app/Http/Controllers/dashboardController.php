<?php

namespace App\Http\Controllers;

use App\Redeem;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    //

    public function index()
    {

        if (Auth::user()->role == 1) {
            $users = User::count();
            $transactions = Redeem::sum('points');
        } else {
            $users = User::where('created_by', Auth::user()->vid)->count();
            $transactions = Redeem::where('user_id' , Auth::user()->id)->sum('points');
        }

        return view('admin.dashboard.index' , compact(['users' , 'transactions']));

    }
}
