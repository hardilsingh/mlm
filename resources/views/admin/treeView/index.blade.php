@extends('layouts.admin')
@section('styles')
@stop
@section('content')


<div class="col-lg-12">
    <div class="row" style="padding:70px 0px;">
        <div class="col-lg-12 text-center">
            <img src="/img/user-tie.svg" height="450%" alt="">
        </div>
    </div>

    <div class="row">
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

<div class="col-lg-12">
    <div class="row">
        @foreach($under_users as $user)
        <div class="col-lg-{{12/count($under_users)}}">
            <div class="row" style="padding:70px 0px;">
                <div class="col-lg-12 text-center">
                    <img src="/img/user-tie.svg" height="450%" alt="">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="badge badge-warning" style="font-size:15px;">{{$user->name}}</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="badge badge-danger" style="font-size:15px;">{{$user->vid}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>






@stop