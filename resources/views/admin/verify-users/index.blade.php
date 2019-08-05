@extends('layouts.admin')
@section('content')

<div class="col-lg-12">
    <div class="row">
        <table class="table table-borderless table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Investor ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Side</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)

                <tr>
                    <td style="font-size:18px;"> <span class="badge badge-warning">{{$user->vid}}</span></td>
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
                    <td style="font-size:18px;">
                        <span class="badge badge-danger">Pending verification</span>
                    </td>
                    <td><a href="#" class="btn btn-primary">View</a></td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop