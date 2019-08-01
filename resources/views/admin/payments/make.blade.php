@extends('layouts.admin')
@section('styles')
@stop

@section('content')


<div class="row" style="padding:50px 0px;">
    <div class="col-lg-12 text-center">
        <h2 class="h2">User has been registerd successfully.</h2>
        <h1 class="h1 badge badge-warning" style="font-size:18px">Verfication will be completed in 24 Hours.</h1>
    </div>
</div>

<div class="row " style="padding:0px 15px;">
    <div class="col-lg-12">
        <table class="table text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Investor ID</th>
                    <th scope="col">Transaction of</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>

    </div>
</div>

<div class="row " style="padding:80px 15px;">
    <div class="col-lg-12">
        <h3 class="h3">Please Select a mode of Payment</h3>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        {!! Form::open([
            
            

        ]) !!}


        {!! Form::close() !!}
    </div>
</div>


@stop