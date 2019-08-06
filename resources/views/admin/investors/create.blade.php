@extends('layouts.admin')
@section('plugins')

<!-- Bootstrap Select Css -->
<link href="/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

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
            <i class="material-icons">library_books</i> User Registration
        </li>
    </ol>
</div>


<div class="block-header">
    <h2>User Registration</h2>
</div>



@include('includes.errors')


{!! Form::open([

'method'=>'POST',
'action'=>'investorsController@store',
'enctype'=>'multipart/form-data',

]) !!}
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2 class="h4">General Information &rarr;</h2>
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-3">
                        <div class="form-group">

                            <div class="form-line">
                                {!! Form::text('name' , null , ['class'=>'form-control' , 'placeholder'=>'Enter name']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">

                            <div class="form-line">
                                {!! Form::email('email' , null , ['class'=>'form-control' , 'placeholder'=>'Enter email']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">

                            <div class="form-line">
                                {!! Form::text('vid' , $new_vid , ['class'=>'form-control' , 'readonly']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">

                            <div class="form-line">
                                {!! Form::tel('ph' , null , ['class'=>'form-control' , 'placeholder'=>'Enter Telephone']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <h2 class="card-inside-title">Gender</h2>
                        <input name="gender" type="radio" value="male" id="radio_1" checked />
                        <label for="radio_1">Male</label>
                        <input name="gender" type="radio" value="female" id="radio_2" />
                        <label for="radio_2">Female</label>
                    </div>

                    <div class="col-lg-4">

                        <h2 class="card-inside-title">Date of birth</h2>
                        <div class="form-group">
                            <div class="form-line" id="bs_datepicker_container">
                                <input type="date" name="dob" class="form-control" placeholder="Please choose a date...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2 class="h4">Address &rarr;</h2>
            </div>

            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <div class="form-line">
                                {!! Form::text('street' , null , ['class'=>'form-control' , 'placeholder'=>'Enter Street name']) !!}
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            {!! Form::select('state_id' , [''=>'Select a state' , $states] , '' , ['class'=>'form-control show-tick']) !!}
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            {!! Form::select('city_id' , [''=>'Select a city' , $cities] , '' , ['class'=>'form-control show-tick']) !!}
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            {!! Form::select('country_id' , $countries , 100 , ['class'=>'form-control show-tick']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="row clearfix">

    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">

        <div class="card">
            <div class="header">
                <h2 class="h4">Other Information &rarr;</h2>
            </div>

            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <div class="form-line">
                                @if(Auth::user()->role == 1)
                                {!! Form::select('side' , ['1'=>'Left' , '2'=>'Right'] , '' , ['class'=>'form-control']) !!}
                                @endif
                                @if(Auth::user()->role == 0)
                                <label for="name">Side:</label>
                                {!! Form::text('side' , Auth::user()->side == 1 ? '1' : '2' , ['class'=>'form-control' , 'readonly']) !!}
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <div class="form-line">
                                {!! Form::number('addhar_number' , null , ['class'=>'form-control' , 'placeholder'=>'Enter Addhar Number']) !!}
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <div class="form-line">
                                {!! Form::number('pan_number' , null , ['class'=>'form-control' , 'placeholder'=>'Enter Pan number']) !!}
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <div class="form-line">
                                {!! Form::number('invested' , null , ['class'=>'form-control' , 'placeholder'=>'Enter initial amount']) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="row clearfix">

    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">

        <div class="card">
            <div class="header">
                <h2 class="h4">Upload Documents &rarr;</h2>
            </div>

            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="path">Upload Addhar Card (Front:)</label>
                            {!! Form::file('path' , null , ['class'=>'form-control']) !!}
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="path_2">Upload Addhar Card (Back:)</label>
                            {!! Form::file('path_2' , null , ['class'=>'form-control']) !!}
                        </div>

                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="path_3">Upload your Pan Card:</label>
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
            </div>
        </div>

    </div>
</div>
{!! Form::close() !!}

@stop

@section('scripts')
<!-- Autosize Plugin Js -->
<script src="../../plugins/autosize/autosize.js"></script>

<!-- Moment Plugin Js -->
<script src="../../plugins/momentjs/moment.js"></script>

<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="../../plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

<!-- Bootstrap Datepicker Plugin Js -->
<script src="../../plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

<!-- Custom Js -->
<script src="../../js/admin.js"></script>
<script src="../../js/pages/forms/basic-form-elements.js"></script>

<!-- Demo Js -->
<script src="../../js/demo.js"></script>
@stop