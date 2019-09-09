@extends('layouts.admin')

@section('plugins')
<!-- JQuery DataTable Css -->
<link href="/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
@stop
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
            <i class="material-icons">library_books</i> Transaction Requests
        </li>
    </ol>
</div>

<div class="block-header">
    <h2>Transaction Requests</h2>
</div>




<!-- Exportable Table -->
<div class="row clearfix js-sweetalert">
    <button class="btn btn-primary waves-effect myButton" data-type="success" style="display:none">CLICK ME</button>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>Investor ID</th>
                                <th>Name</th>
                                <th>Points Redeemed</th>
                                <th>Monetary gains</th>
                                <th>Status</th>
                                <th>Intiated on</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Investor ID</th>
                                <th>Name</th>
                                <th>Points Redeemed</th>
                                <th>Monetary gains</th>
                                <th>Status</th>
                                <th>Intiated on</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($transactions as $transaction)

                            <tr>
                                <td style="font-size:18px;"> <span class="badge bg-green">{{$transaction->transactionUsers->vid}}</span></td>
                                <td style="font-size:16px;"> {{$transaction->transactionUsers->name}}</td>
                                <td>{{$transaction->points}}</td>
                                <td>₹ {{$transaction->points * 100}}</td>
                                <td><span class="{{$transaction->status == 'pending' ? 'badge bg-red' : 'badge bg-green'}}">{{$transaction->status}}</span></td>
                                <td>{{$transaction->created_at->toDateString()}}</td>
                                <td>
                                    {!! Form::model($transaction , [

                                    'method'=>'PATCH',
                                    'action'=>['RedeemPointsController@update' , $transaction->id]

                                    ]) !!}

                                    <button type="submit" class="btn btn-warning btn-lg">Confirm</button>

                                    {!! Form::close() !!}
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #END# Exportable Table -->



@stop

@section('scripts')
<!-- Jquery DataTable Plugin Js -->
<script src="/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

<script src="/js/pages/tables/jquery-datatable.js"></script>


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