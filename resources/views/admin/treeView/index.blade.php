@extends('layouts.admin')
@section('styles')

@stop
@section('content')

<div class="row" style="padding:20px 0px;">
    <div class="col-lg-12 text-center">
        <div class="row">
            <div class="col-lg-12">
                <span class="badge badge-info text-center" style="font-size:25px;">You</span>
            </div>
        </div>

    </div>
</div>
<div class="col-lg-12">
    <div class="row" style="padding:30px 0px;">
        <div class="col-lg-12 text-center">
            <img src="/img/user-tie.svg" height="450%" alt="">
        </div>
    </div>

    <div class="row" style="padding:20px">
        <div class="col-lg-12 text-center">
            <p class="badge badge-warning" style="font-size:15px;">{{Auth::user()->name}}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 text-center">
            <p class="badge badge-danger" style="font-size:15px;">{{Auth::user()->vid}}</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 text-center">
        <div class="row">
            <div class="col-lg-6">
                <span class="badge badge-primary" style="font-size:25px;">Left Side</span>
            </div>
            <div class="col-lg-6">
                <span class="badge badge-primary" style="font-size:25px;">Right Side</span>
            </div>
        </div>

    </div>
</div>

<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-6" style="border-right:3px solid gray">
            @foreach($under_users_left as $user_left)
            <div class="row" style="padding:70px 0px;">
                <div class="col-lg-12 text-center">
                    <img src="/img/user-tie.svg" height="450%" alt="">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="badge badge-warning" style="font-size:15px;">{{$user_left->name}}</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="badge badge-danger" style="font-size:15px;">{{$user_left->vid}}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-lg-6">
            @foreach($under_users_right as $user_right)
            <div class="row" style="padding:70px 0px;">
                <div class="col-lg-12 text-center">
                    <img src="/img/user-tie.svg" height="450%" alt="">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="badge badge-warning" style="font-size:15px;">{{$user_right->name}}</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="badge badge-danger" style="font-size:15px;">{{$user_right->vid}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>






@stop