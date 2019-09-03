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
                            <div class="form-line">
                                {!! Form::text('city' , null , ['class'=>'form-control' , 'placeholder'=>'City Name']) !!}
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
                    <div class="col-lg-4">
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
                    <div class="col-lg-4">
                        <div class="form-group">
                            <div class="form-line">
                                {!! Form::number('addhar_number' , null , ['class'=>'form-control' , 'placeholder'=>'Enter Addhar Number']) !!}
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <div class="form-line">
                                {!! Form::text('pan_number' , null , ['class'=>'form-control' , 'placeholder'=>'Enter Pan number']) !!}
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
                <h2 class="h4">Bank Details &rarr;</h2>
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-6">
                        <div class="form-group">

                            <div class="form-line">
                                {!! Form::text('account' , null , ['class'=>'form-control' , 'placeholder'=>'Enter Account Number']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">

                            <div class="form-line">
                                {!! Form::text('ifsc_code' , null , ['class'=>'form-control' , 'placeholder'=>'Enter Bank IFSC code']) !!}
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
                <h2 class="h4">Payment Method &rarr;</h2>
            </div>
            <div class="body">
                <div class="row clearfix">

                    <div class="col-lg-4">
                        <div class="form-group">
                            <div class="form-line">
                                {!! Form::number('invested' , null , ['class'=>'form-control' , 'placeholder'=>'Enter initial amount']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <input name="mode" type="radio" value="cash" id="m_1" checked />
                        <label for="m_1">Cash</label>
                        <input name="mode" type="radio" value="online" id="m_2" />
                        <label for="m_2">Online Bank Transfer (IMPS/NEFT)</label>
                        <input name="mode" type="radio" value="cheque" id="m_3" />
                        <label for="m_3">Cheque</label>
                        <input name="mode" type="radio" value="point_transfer" id="m_4" />
                        <label for="m_4">Point Transfer</label>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group" id="cheque_number" style="display:none">
                            <div class="form-line">
                                {!! Form::text('cheque_number' , null , ['class'=>'form-control' , 'placeholder'=>'Enter Cheque Number' , 'id'=>'cheque_number']) !!}
                            </div>
                        </div>
                        <div class="form-group" id="point_transfer" style="display:none">
                            <div class="form-line">
                                {!! Form::number('points_transferred' , 0 , ['class'=>'form-control' , 'placeholder'=>'Enter Points to transfer' , 'id'=>'point_transfer', 'min'=>'1' , 'max'=>Auth::user()->points]) !!}
                            </div>
                            <br>
                            <p>Available points: <span class="badge bg-green"> {{Auth::user()->points}}</span></p>
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
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="path">Upload Addhar Card (Front:)</label>
                            {!! Form::file('path' , null , ['class'=>'form-control']) !!}
                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="path_2">Upload Addhar Card (Back:)</label>
                            {!! Form::file('path_2' , null , ['class'=>'form-control']) !!}
                        </div>

                    </div>

                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="path_3">Upload your Pan Card:</label>
                            {!! Form::file('path_3' , null , ['class'=>'form-control']) !!}
                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="path_3">Upload your Photo:</label>
                            {!! Form::file('profile_path' , null , ['class'=>'form-control']) !!}
                        </div>

                    </div>
                </div>

                <div class="row" style="padding:20px 30px">
                    <div class="col-lg-12">
                        <small>By clicking on submit button you agree to our <a href="#">Tearm & condtions</a>.</small>
                    </div>
                </div>

                <div class="row" style="padding:20px 30px">
                    <button class="btn btn-lg btn-success text-right" type="submit">
                        <span class="ui-button-text" id="submit">Submit Information &rarr;</span>
                    </button>
                </div>
            </div>
        </div>

    </div>
</div>


{!! Form::close() !!}

@stop

@section('scripts')


<!-- Custom Js -->
<script src="/js/admin.js"></script>
<script src="/js/pages/forms/basic-form-elements.js"></script>

<!-- Demo Js -->
<script src="/js/demo.js"></script>


<script>
    $('#m_3').click(function() {
        if ($('#m_3').is(':checked')) {
            $("#cheque_number").css("display", "block");
        }
    });

    $('#m_4').click(function() {
        if ($('#m_4').is(':checked')) {
            $("#point_transfer").css("display", "block");
        }
    });


    $('#submit').click(function() {
        $(this).text("Uploading Please wait ...");
    });
</script>
@stop