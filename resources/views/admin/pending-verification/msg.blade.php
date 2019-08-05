@extends('layouts.admin')

@section('content')

<div class="col-lg-12" style="padding:100px 30px;">
    <div class="card">
        <h5 class="card-header badge badge-warning" style="font-size:40px;">Pending Verification</h5>
        <div class="card-body">
            <h5 class="card-title">You have a pending verfication with us.</h5>
            <p class="card-text">Your Verification will be completed within 24 hours. If not done please contact your superior.</p>
        </div>

        <table class="table table-borderless table-striped table-hover" style="margin-top:30px;">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Investor ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Side</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td style="font-size:18px;"> <span class="badge badge-warning">{{Auth::user()->vid}}</span></td>
                    <td style="font-size:16px;"> {{Auth::user()->name}}</td>
                    <td> {{Auth::user()->phonebook->ph}}</td>
                    <td>
                        @if(Auth::user()->side == 1)
                        Left
                        @endif
                        @if(Auth::user()->side == 2)
                        Right
                        @endif
                    </td>
                    <td style="font-size:18px;">
                        <span class="badge badge-danger">Pending verification</span>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>



@stop