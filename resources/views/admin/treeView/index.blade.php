@extends('layouts.admin')
@section('styles')

@stop
@section('content')

<div class="row clearfix" style="margin-top:-10px;">
    <ol class="breadcrumb">
        <li>
            <a href="/home">
                <i class="material-icons">home</i> Home
            </a>
        </li>
        <li class="active">
            <i class="material-icons">library_books</i> Tree View
        </li>
    </ol>
</div>

<div class="block-header">
    <h2>Tree View </h2>
</div>

<div class="col-lg-12">
    <div class="row" style="padding:10px 0px;">
        <div class="col-lg-12 text-center">
            <img src="/images/2.svg" height="150px" alt="">
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 text-center">
            <p class="badge bg-red" style="font-size:25px;">{{Auth::user()->name}}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 text-center">
            <p class="badge bg-yellow" style="font-size:20px;"><a href="#" class=" nav-link text-white">ID: {{Auth::user()->vid}}</a></p>
        </div>
    </div>
</div>




@if(Auth::user()->role == 1)
<div class="row">
    <div class="col-lg-12 text-center">
        <div class="row">
            <div class="col-lg-6">
                <span class="badge bg-orange" style="font-size:25px;">Left Side</span>
            </div>
            <div class="col-lg-6">
                <span class="badge bg-orange" style="font-size:25px;">Right Side</span>
            </div>
        </div>

    </div>
</div>

<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-6" style="border-right:3px solid orange">
            @foreach($under_users_left as $user_left)
            <div class="row" style="padding:10px 0px;">
                <div class="col-lg-12 text-center">
                    <img src="/images/user-tie.svg" height="100px" alt="">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="badge bg-red" style="font-size:25px;">{{$user_left->name}}</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="badge bg-yellow" style="font-size:20px;"><a href="#" class=" nav-link text-white">ID: {{$user_left->vid}}</a></p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-lg-6">
            @foreach($under_users_right as $user_right)
            <div class="row" style="padding:10px 0px;">
                <div class="col-lg-12 text-center">
                    <img src="/images/user-tie.svg" height="100px" alt="">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="badge bg-red" style="font-size:25px;">{{$user_right->name}}</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                <p class="badge bg-yellow" style="font-size:20px;"><a href="#" class=" nav-link text-white">ID: {{$user_right->vid}}</a></p>
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
        <img src="/images/user-tie.svg" alt="" height="100px" style="margin-top:10px;">
        <p class="badge bg-red" style="font-size:25px;">{{$user->name}}</p>
        <p class="badge bg-yellow" style="font-size:20px;"><a href="#" class=" nav-link text-white">ID: {{$user->vid}}</a></p>
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

@section('scripts')
    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
@stop