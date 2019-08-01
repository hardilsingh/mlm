@extends('layouts.admin')
@section('styles')

<style>
    .col-lg-12 {
        padding: 20px 50px;
    }
</style>

@stop
@section('content')
<div class="col-lg-12" style="padding:50px 50px;">
    <div class="row">
        <h1 class="display-4">
            User Registration
        </h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        {!! Form::open([

        'method'=>'POST',
        'action'=>'investorsController@store',

        ]) !!}

        <div class="row">
            <div class="col-lg-12">
                <h5 class="h5">General Information &rarr;</h5>
            </div>
        </div>

        <div class="row" style="padding:0px 30px;">
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="name">Name:</label>
                    {!! Form::text('name' , null , ['class'=>'form-control' , 'placeholder'=>'Enter name']) !!}
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="name">Email:</label>
                    {!! Form::email('email' , null , ['class'=>'form-control' , 'placeholder'=>'Enter email']) !!}
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="name">Investor ID:</label>
                    {!! Form::text('investor_id' , null , ['class'=>'form-control' , 'placeholder'=>'Enter name']) !!}
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="name">Telephone:</label>
                    {!! Form::tel('ph' , null , ['class'=>'form-control' , 'placeholder'=>'Enter Telephone']) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h5 class="h5">Address &rarr;</h5>
            </div>
        </div>

        <div class="row" style="padding:0px 30px;">
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="name">Street:</label>
                    {!! Form::text('street' , null , ['class'=>'form-control' , 'placeholder'=>'Enter Street name']) !!}
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="name">State:</label>
                    {!! Form::select('state_id' , [''=>'Select a state'  , $states] , '' , ['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="name">City:</label>
                    {!! Form::select('city_id' ,  [''=>'Select a city'  , $cities] , ''  , ['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="name">Country:</label>
                    {!! Form::select('country_id' ,  $countries , 100   , ['class'=>'form-control']) !!}
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <h5 class="h5">Other Information &rarr;</h5>
            </div>
        </div>


        {!! Form::close() !!}
    </div>
</div>

@stop