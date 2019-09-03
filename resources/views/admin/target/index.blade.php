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
            <i class="material-icons">library_books</i> Set target
        </li>
    </ol>
</div>


<div class="block-header">
    <h2>Set target</h2>
</div>



@include('includes.errors')





<div class="row clearfix js-sweetalert">
    <button class="btn btn-primary waves-effect myButton" data-type="success" style="display:none">CLICK ME</button>
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
        <div class="card">
            {!! Form::open([

            'method'=>'POST',
            'action'=>'TargetController@store',
            'enctype'=>'multipart/form-data'

            ]) !!}
            <div class="header">
                <h2 class="h4">Set Target &rarr;</h2>
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="form-line">
                                {!! Form::text('title' , null , ['class'=>'form-control' , 'placeholder'=>'Enter Target Name' , 'required']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="form-line">
                                {!! Form::number('target' , null , ['class'=>'form-control' , 'placeholder'=>'Enter Target' , 'required']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Enter Target Deadline</label>
                            <div class="form-line">
                                {!! Form::date('deadline' , null , ['class'=>'form-control' , 'placeholder'=>'Enter Deadline' , 'required']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="form-line">
                                {!! Form::textarea('description' , null , ['class'=>'form-control no-resize' , 'placeholder'=>'Enter Target Description' , 'required']) !!}
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