@extends('layouts.admin')
@section('styles')

@stop
@section('content')

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
            <p class="badge badge-danger" style="font-size:15px;"><a href="#" class=" nav-link text-white">ID: {{Auth::user()->vid}}</a></p>
        </div>
    </div>
</div>

<hr class="hr" style="padding:0px 30px;">



@if(Auth::user()->role == 1)
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
                    <p class="badge badge-danger" style="font-size:15px;"><a href="#" class=" nav-link text-white">ID: {{$user_left->vid}}</a></p>
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
                <p class="badge badge-danger" style="font-size:15px;"><a href="#" class=" nav-link text-white">ID: {{$user_right->vid}}</a></p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif


@if(Auth::user()->role == 0)

@if(Auth::user()->side == 1 )
<div class="row text-center" style="padding:0 60px;">
    @foreach($under_users_left as $user)
    <div class="col-lg-3" style="display:flex; flex-direction:column; align-items:center">
        <div style="height:30px; width:2px; background-color:darkgray"></div>
        <img src="/img/user-tie -orange.svg" alt="" height="100px">
        <p class="badge badge-warning" style="font-size:15px;">{{$user->name}}</p>
        <p class="badge badge-danger" style="font-size:15px;"><a href="#" class=" nav-link text-white">ID: {{$user->vid}}</a></p>
    </div>
    @endforeach
</div>
@endif

@if(Auth::user()->side == 2 )
@foreach($under_users_right as $user)

@endforeach
@endif



@endif






@stop