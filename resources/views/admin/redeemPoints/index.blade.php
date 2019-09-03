@extends('layouts.admin')
@section('styles')
<!-- Sweetalert Css -->
<link href="/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
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
            <i class="material-icons">library_books</i> Redeem Points
        </li>
    </ol>
</div>


<div class="block-header">
    <h2>Redeem Points</h2>
</div>



@include('includes.errors')





<div class="row clearfix js-sweetalert">
    <button class="btn btn-primary waves-effect myButton" data-type="success" style="display:none">CLICK ME</button>
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
        <div class="card">
            {!! Form::open([

            'method'=>'POST',
            'action'=>'RedeemPointsController@store',

            ]) !!}
            <div class="header">
                <h2 class="h4">Redeem Points &rarr;</h2>
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box bg-pink hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons">playlist_add_check</i>
                                </div>
                                <div class="content">
                                    <div class="text">Available Points</div>
                                    <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20">{{Auth::user()->points}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if(Auth::user()->points > 0 )
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="form-line">
                                {!! Form::number('points' , null , ['class'=>'form-control' , 'placeholder'=>'Enter Number Points to redeem' , 'max'=>Auth::user()->points , 'min'=>'1' , 'required']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <button type="submit" class="btn btn-danger">SUBMIT</button>
                        </div>
                    </div>
                </div>
                @endif
                @if(Auth::user()->points == 0 )
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <p class="text-center text-warning">You don't have any points to redeem.<br> Check back in later.<br><br>Or<br><br><a href="/investors/create?ref=nav-bar-create" class="btn btn-success btn-lg">Register new user</a></p>
                    </div>
                </div>
                @endif

            </div>

        </div>
    </div>
</div>


{!! Form::close() !!}


@stop


@section('scripts')



<!-- SweetAlert Plugin Js -->
<script src="/plugins/sweetalert/sweetalert.min.js"></script>

@if(Session::has('success'))
<script>
    $(document).ready(function() {
        $(".myButton").trigger('click', function() {});
    });
</script>
@endif

@stop