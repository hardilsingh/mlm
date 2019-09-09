@extends('layouts.admin')

@section('content')


<div class="row clearfix" style="margin-top:-10px;">
    <ol class="breadcrumb">
        <li>
            <a href="/home">
                <i class="material-icons">home</i> Home
            </a>
        </li>
        <li class="active">
            <i class="material-icons">library_books</i> Pending Verfication
        </li>
    </ol>
</div>

<div class="block-header">
    <h2>Pending Verfication</h2>
</div>


<div class="row clearfix">
    <div class="col-lg-12">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="card">
                <div class="header bg-white">
                    <h2>
                        Transfer to follwing A/C</small>
                    </h2>
                </div>
                <div class="body">
                    A/C Details
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="card">
                <div class="header bg-white">
                    <h2>
                        Transfer to follwing A/C</small>
                    </h2>
                </div>
                <div class="body">
                    A/C Details
                </div>
            </div>
        </div>
    </div>
</div>



@stop

@section('scripts')
<!-- Custom Js -->
<script src="js/admin.js"></script>
<script src="js/pages/index.js"></script>

<!-- Demo Js -->
<script src="js/demo.js"></script>
@stop