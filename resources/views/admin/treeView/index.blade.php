@extends('layouts.admin')
@section('plugins')
<link href="https://unpkg.com/treeflex/dist/css/treeflex.css" rel="stylesheet">
@stop
@section('styles')
<style>
    .tf-nc {
        border: 3px solid #F44336 !important;
    }

    img {
        height: 125% !important;
    }

    @media only screen and (max-width: 600px) {
        p {
            font-size: 50% !important;
        }

        img {
            height: 50% !important
        }
    }

    a {
        padding:5px 3px !important; 
        margin-top:5px !important;
    }
</style>
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
            <i class="material-icons">library_books</i> Tree View
        </li>
    </ol>
</div>

<div class="block-header">
    <h2>Tree View </h2>
</div>
@if(!isset($_GET['tree_id']))
<div class="row clearfix">
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
        <div class="card">
            <div class="body">
                <div class="tf-tree example text-center">
                    <ul>
                        <li>
                            <span class="tf-nc">
                                <div class="row clearfix">
                                    <div class="col-lg-12 text-center">
                                        <img src="/images/2.svg" height="80px" alt="">
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-12 text-center">
                                        <p class="badge bg-red" style="font-size:20px; padding:5px 3px;">{{Auth::user()->name}}</p>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-12 text-center">
                                        <p class="badge bg-yellow" style="font-size:15px; padding:5px 3px;"><a href="#" class=" nav-link text-white">ID: {{Auth::user()->vid}}</a></p>
                                    </div>
                                </div>
                            </span>

                            <ul>
                                @if(Auth::user()->side == 0)
                                @foreach($under_users_left as $user)

                                <li>
                                    <span class="tf-nc" style="display:flex; flex-direction:column; align-items:center;">
                                        <img src="/images/user-tie.svg" alt="" height="60px" style="margin-top:10px;">
                                        <p class="badge bg-red" style="font-size:18px; padding:5px 3px;">{{$user->name}}</p>
                                        <p class="badge bg-yellow" style="font-size:15px; padding:5px 3px;"><a href="javascriptvoid(0)" class=" nav-link text-white">ID: {{$user->vid}}</a></p>
                                        <a href="/treeView?tree_id={{Crypt::encrypt($user->id)}}" class="btn btn-success waves-effect">Expand Tree &rarr;</a>
                                    </span>
                                </li>
                                @endforeach
                                @foreach($under_users_right as $user)

                                <li>
                                    <span class="tf-nc" style="display:flex; flex-direction:column; align-items:center;">
                                        <img src="/images/user-tie.svg" alt="" height="60px" style="margin-top:10px;">
                                        <p class="badge bg-red" style="font-size:18px; padding:5px 3px;">{{$user->name}}</p>
                                        <p class="badge bg-yellow" style="font-size:15px; padding:5px 3px;"><a href="/treeView?tree_id={{Crypt::encrypt($user->id)}}" class=" nav-link text-white">ID: {{$user->vid}}</a></p>
                                        <a href="/treeView?tree_id={{Crypt::encrypt($user->id)}}" class="btn btn-success waves-effect">Expand Tree &rarr;</a>
                                    </span>
                                </li>
                                @endforeach
                                @endif
                                @if(Auth::user()->side == 1)
                                @foreach($under_users_left as $user)

                                <li>
                                    <span class="tf-nc" style="display:flex; flex-direction:column; align-items:center;">
                                        <img src="/images/user-tie.svg" alt="" height="60px" style="margin-top:10px;">
                                        <p class="badge bg-red" style="font-size:18px; padding:5px 3px;">{{$user->name}}</p>
                                        <p class="badge bg-yellow" style="font-size:15px; padding:5px 3px;"><a href="/treeView?tree_id={{Crypt::encrypt($user->id)}}" class=" nav-link text-white">ID: {{$user->vid}}</a></p>
                                        <a href="/treeView?tree_id={{Crypt::encrypt($user->id)}}" class="btn btn-success waves-effect">Expand Tree &rarr;</a>
                                    </span>
                                </li>
                                @endforeach
                                @endif
                                @if(Auth::user()->side == 2)
                                @foreach($under_users_right as $user)

                                <li>
                                    <span class="tf-nc" style="display:flex; flex-direction:column; align-items:center">
                                        <img src="/images/user-tie.svg" alt="" height="40px" style="margin-top:10px;">
                                        <p class="badge bg-red" style="font-size:10px;">{{$user->name}}</p>
                                        <p class="badge bg-yellow" style="font-size:10px; padding:5px 3px;"><a href="/treeView?tree_id={{Crypt::encrypt($user->id)}}" class=" nav-link text-white">ID: {{$user->vid}}</a></p>
                                        <a href="/treeView?tree_id={{Crypt::encrypt($user->id)}}" class="btn btn-success waves-effect">Expand Tree &rarr;</a>
                                    </span>
                                </li>
                                @endforeach
                                @endif
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

</div>

@endif

@if(isset($_GET['tree_id']))
<div class="row clearfix">
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
        <div class="card">
            <div class="body">
                <div class="tf-tree example text-center">
                    <ul>
                        <li>
                            <span class="tf-nc">
                                <div class="row clearfix">
                                    <div class="col-lg-12 text-center">
                                        <img src="/images/2.svg" height="80px" alt="">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <p class="badge bg-red" style="font-size:20px; padding:5px 3px;"">{{$users->name}}</p>
                                    </div>
                                </div>

                                <div class=" row">
                                            <div class="col-lg-12 text-center">
                                                <p class="badge bg-yellow" style="font-size:20px; padding:5px 3px;"><a href="#" class=" nav-link text-white">ID: {{$users->vid}}</a></p>
                                            </div>
                                    </div>
                            </span>
                            <ul>
                                @foreach($all_users as $user)

                                <li>
                                    <span class="tf-nc" style="display:flex; flex-direction:column; align-items:center;">
                                        <img src="/images/user-tie.svg" alt="" height="60px" style="margin-top:10px;">
                                        <p class="badge bg-red" style="font-size:20px; padding:5px 3px;">{{$user->name}}</p>
                                        <p class="badge bg-yellow" style="font-size:20px; padding:5px 3px;"><a href="/treeView?tree_id={{Crypt::encrypt($user->id)}}" class=" nav-link text-white">ID: {{$user->vid}}</a></p>
                                        <a href="/treeView?tree_id={{Crypt::encrypt($user->id)}}" class="btn btn-success waves-effect">Expand Tree &rarr;</a>
                                    </span>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

</div>
@endif




@stop

@section('scripts')
<!-- Custom Js -->
<script src="js/admin.js"></script>
<script src="js/pages/index.js"></script>

<!-- Demo Js -->
<script src="js/demo.js"></script>
@stop