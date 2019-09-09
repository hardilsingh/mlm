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
            <i class="material-icons">library_books</i> Target
        </li>
    </ol>
</div>

<div class="block-header">
    <h2>Target</h2>
</div>

@if($target)

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header bg-red">
                    <h2>
                        {{$target->title}}</small>
                    </h2>
                    <h1>
                        Target &rarr;{{$target->target}}</small>
                    </h1>
                    <h3>
                        Deadline {{Carbon\Carbon::parse($target->deadline)->diffForHumans()}}</small>
                    </h3>
                </div>
                <div class="body">
                    {{$target->description}}
                </div>
            </div>
        </div>
    </div>
</div>

@endif


@stop