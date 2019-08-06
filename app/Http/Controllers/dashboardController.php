<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    //

    public function index() {


        $users = User::count();
        return view('admin.dashboard.index');
    }
}
