@extends('layouts.admin')
@section('styles')

<style>
    .col-lg-12 {
        padding: 10px 50px;
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


@include('includes.errors')

<div class="row">
    <div class="col-lg-12">
        {!! Form::open([

        'method'=>'POST',
        'action'=>'investorsController@store',
        'enctype'=>'multipart/form-data',

        ]) !!}

        <div class="row">
            <div class="col-lg-12">
                <h4 class="h4">General Information &rarr;</h4>
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
                    {!! Form::text('vid' , $new_vid , ['class'=>'form-control' , 'readonly' , 'style'=>'background-color:gray; color:white']) !!}
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="name">Telephone:</label>
                    {!! Form::tel('ph' , null , ['class'=>'form-control' , 'placeholder'=>'Enter Telephone']) !!}
                </div>
            </div>
        </div>

        <hr class="hr">

        <div class="row">
            <div class="col-lg-12">
                <h4 class="h4">Address &rarr;</h4>
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
                    {!! Form::select('state_id' , [''=>'Select a state' , $states] , '' , ['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="name">City:</label>
                    {!! Form::select('city_id' , [''=>'Select a city' , $cities] , '' , ['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="name">Country:</label>
                    {!! Form::select('country_id' , $countries , 100 , ['class'=>'form-control']) !!}
                </div>
            </div>
        </div>

        <hr class="hr">


        <div class="row">
            <div class="col-lg-12">
                <h4 class="h4">Other Information &rarr;</h4>
            </div>
        </div>


        <div class="row" style="padding:0px 30px;">
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="name">Side:</label>
                    {!! Form::select('side' , ['1'=>'Left' , '2'=>'Right'] , '' , ['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="name">Addhar Number:</label>
                    {!! Form::number('addhar_number' , null , ['class'=>'form-control' , 'placeholder'=>'Enter Addhar Number']) !!}
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="name">Pan Number:</label>
                    {!! Form::number('pan_number' , null , ['class'=>'form-control' , 'placeholder'=>'Enter Pan number']) !!}
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="name">Initial Investment:</label>
                    {!! Form::number('invested' , null , ['class'=>'form-control' , 'placeholder'=>'Enter initial amount']) !!}
                </div>
            </div>
        </div>


        <hr class="hr">


        <div class="row" >
            <div class="col-lg-12">
                <h4 class="h4">Document Upload &rarr;</h4>
            </div>
        </div>

        <div class="row" style="padding:0px 30px;">
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="path">Upload Addhar Card (Front:)</label>
                    {!! Form::file('path' , null , ['class'=>'form-control']) !!}
                </div>

            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="path">Upload Addhar Card (Back:)</label>
                    {!! Form::file('path_2' , null , ['class'=>'form-control']) !!}
                </div>

            </div>

            <div class="col-lg-4">
                <div class="form-group">
                    <label for="path">Upload your Pan Card:</label>
                    {!! Form::file('path_3' , null , ['class'=>'form-control']) !!}
                </div>

            </div>
        </div>

        <div class="row" style="padding:20px 30px">
            <div class="col-lg-12">
                <small>By clicking on submit button you agree to our <a href="#">Tearm & condtions</a>.</small>
            </div>
        </div>

        <div class="row" style="padding:20px 30px">
            {!! Form::submit('Submit Information &rarr;' , ['class'=>'btn btn-lg btn-success text-right']) !!}
        </div>



        {!! Form::close() !!}
    </div>
</div>

@stop