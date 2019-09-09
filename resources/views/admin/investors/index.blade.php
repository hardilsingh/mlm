@extends('layouts.admin')

@section('plugins')
<!-- JQuery DataTable Css -->
<link href="/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
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
            <i class="material-icons">library_books</i> Registered Users
        </li>
    </ol>
</div>

<div class="block-header">
    <h2>Registered Users</h2>
</div>




<!-- Exportable Table -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>Investor ID</th>
                                <th>Name</th>
                                <th>Telephone</th>
                                <th>Side</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Investor ID</th>
                                <th>Name</th>
                                <th>Telephone</th>
                                <th>Side</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($users as $user)

                            <tr>
                                <td style="font-size:18px;"> <span class="badge bg-green">{{$user->vid}}</span></td>
                                <td style="font-size:16px;"> {{$user->name}}</td>
                                <td> {{$user->phonebook->ph}}</td>
                                <td>
                                    @if($user->side == 1)
                                    Left
                                    @endif
                                    @if($user->side == 2)
                                    Right
                                    @endif
                                </td>
                                <td style="font-size:18px;">@if($user->is_verified == 0)
                                    <span class="badge bg-red">Pending verification</span>
                                    @endif
                                    @if($user->is_verified == 1)
                                    <span class="badge bg-green">Verified</span>
                                    @endif
                                </td>
                                <td><a href="/profile?user_id={{Crypt::encrypt($user->id)}}&ref=nav-bar-profile" class="btn btn-primary">View</a></td>
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

<!-- Custom Js -->

<script src="/js/pages/tables/jquery-datatable.js"></script>
@stop