@extends('layouts.admin')

@section('styles')

<style>

    p {
        font-size: 18px;
    }

    .card {
        border-radius: 12px;
        box-shadow: 0 6px 10px -4px rgba(0, 0, 0, .15);
        background-color: #fff;
        color: #252422;
        margin-bottom: 20px;
        position: relative;
        border: 0 none;
    }


    .card-stats .card-body .numbers .card-category {
        color: #9a9a9a;
        font-size: 16px;
        line-height: 1.4em;
    }

    .card-title {
        font-weight: bolder;
        font-size: 35px;
        text-align: center;
    }
</style>

@stop

@section('content')


<div class="row" style="padding:50px;">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <a href="http://cbaims.com/students" style="text-decoration:none">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="fas fa-users" style="font-size:50px; color:brown"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Total Investors</p>
                                <p class="card-title">43</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <a href="http://cbaims.com/enquiry" style="text-decoration:none">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-money-coins text-success"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Enquiries</p>
                                <p class="card-title">89</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <a href="http://cbaims.com/course" style="text-decoration:none">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-vector text-danger"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Courses</p>
                                <p class="card-title">72</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <a href="http://cbaims.com/docs" style="text-decoration:none">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-money-coins text-success"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Certificates Issued</p>
                                <p class="card-title">0</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>


@stop