@extends('layouts.admin')
@section('styles')
<!-- Sweetalert Css -->
<link href="/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
@stop
@section('content')
@if(!isset($_GET['user_id']))


<div class="container-fluid js-sweetalert">
    <button class="btn btn-primary waves-effect myButton" data-type="success" style="display:none">CLICK ME</button>
    <div class="row clearfix">
        <div class="col-xs-12 col-sm-3">
            <div class="card profile-card">
                <div class="profile-header">&nbsp;</div>
                <div class="profile-body">
                    <div class="image-area">
                        @if(Auth::user()->profile_path)
                        <img src="/profile_photos/{{Auth::user()->path}}" alt="AdminBSB - Profile Image" />
                        @endif
                        @if(!Auth::user()->profile_path)
                        <img src="/images/user.png" alt="AdminBSB - Profile Image" />
                        @endif
                    </div>
                    <div class="content-area">
                        <h3>{{Auth::user()->name}}</h3>
                        <p>{{Auth::user()->email}}</p>
                        <p>{{Auth::user()->role == 1 ? 'Administrator' : 'User'}}</p>
                    </div>
                </div>
                <div class="profile-footer">
                    <ul>
                        <li>
                            <span>VID</span>
                            <span class="badge bg-yellow">
                                {{Auth::user()->vid}}
                            </span>
                        </li>
                        <li>
                            <span>Side</span>
                            <span class="badge bg-green">
                                @if(Auth::user()->side == 0)
                                Top level user

                                @elseif(Auth::user()->side == 1)
                                Left
                                @elseif(Auth::user()->side == 2)
                                Right
                                @endif
                            </span>
                        </li>
                        <li>
                            <span>Joined</span>
                            <span>{{Auth::user()->created_at->diffForHumans()}}</span>
                        </li>
                        <li>
                            <span>Total Registered</span>
                            <span>{{count($users)}}</span>
                        </li>

                    </ul>
                    <a href="{{ route('logout') }}" class="btn btn-primary btn-lg waves-effect btn-block" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Sign Out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>

            <div class="card card-about-me">
                <div class="header">
                    <h2>Other Details</h2>
                </div>
                <div class="body">
                    <ul>
                        <li>
                            <div class="title">
                                <i class="material-icons">location_on</i>
                                Location
                            </div>
                            <div class="content">
                                {{$user->address->street}},<br>
                                {{$user->address->city}}
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <i class="material-icons">call</i>
                                Contact Details
                            </div>
                            <div class="content">
                                +91 {{$user->phonebook->ph}},<br>
                                Email: {{Auth::user()->email}}
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <i class="material-icons">date_range</i>
                                Personal Details
                            </div>
                            <div class="content text-capitalize">
                                DOB: {{$user->dob}}, <br>
                                Gender: {{$user->gender}}
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <i class="material-icons">account_balance</i>
                                Account Details
                            </div>
                            <div class="content">
                                A/C: {{$user->accountDetail->account}}, <br>
                                IFSC: {{$user->accountDetail->ifsc_code}}
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-9">
            <div class="card">
                <div class="body">
                    <div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                            <li role="presentation"><a href="#profile_settings" aria-controls="settings" role="tab" data-toggle="tab">Profile Settings</a></li>
                            <li role="presentation"><a href="#change_password_settings" aria-controls="settings" role="tab" data-toggle="tab">Change Password</a></li>
                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                <div class="panel panel-default panel-post">
                                    <div class="panel-body">
                                        <!-- Widgets -->
                                        <div class="row clearfix" style="padding:20px 20px;">
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="info-box bg-pink hover-expand-effect">
                                                    <div class="icon">
                                                        <i class="material-icons">playlist_add_check</i>
                                                    </div>
                                                    <div class="content">
                                                        <div class="text">Total Points</div>
                                                        <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20">{{Auth::user()->points}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="info-box bg-cyan hover-expand-effect">
                                                    <div class="icon">
                                                        <i class="material-icons">help</i>
                                                    </div>
                                                    <div class="content">
                                                        <div class="text">Investment</div>
                                                        <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20">{{Auth::user()->invested}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="info-box bg-light-green hover-expand-effect">
                                                    <div class="icon">
                                                        <i class="material-icons">forum</i>
                                                    </div>
                                                    <div class="content">
                                                        <div class="text">Registered Users</div>
                                                        <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20">{{count($users)}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- #END# Widgets -->
                                    </div>
                                </div>

                            </div>
                            <div role="tabpanel" class="tab-pane fade in" id="profile_settings">
                                {!! Form::model($user , [

                                'action'=>['profileController@update', $user->id],
                                'method'=>'PATCH',
                                'class'=>'form form-horizontal',

                                ]) !!}
                                <div class="form-group">
                                    <label for="NameSurname" class="col-sm-2 control-label">Name Surname</label>
                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="NameSurname" name="name" value="{{$user->name}}" placeholder="Name Surname" value="Marc K. Hammond" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Email" class="col-sm-2 control-label">Telephone</label>
                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <input type="email" class="form-control" id="Email" name="email" placeholder="Email" value="{{$user->email}}" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Tel" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <input type="tel" class="form-control" id="Tel" name="ph" placeholder="Telephone" value="{{$user->phonebook->ph}}" required>
                                        </div>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <input required type="checkbox" id="terms_condition_check" class="chk-col-red filled-in" />
                                        <label for="terms_condition_check">I agree to the <a href="#">terms and conditions</a></label>
                                    </div>
                                </div>
                                <div class="form-group js-sweetalert">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button class="btn btn-danger waves-effect" type="submit">Update &rarr;</button>
                                    </div>
                                </div>
                            </div>
                            {!! Form::close() !!}
                            <div role="tabpanel" class="tab-pane fade in" id="change_password_settings">
                                {!! Form::model($user , [

                                'action'=>['profileController@updatePassword', $user->id],
                                'method'=>'GET',
                                'class'=>'form form-horizontal'

                                ]) !!}
                                <div class="form-group">
                                    <label for="OldPassword" class="col-sm-3 control-label">Old Password</label>
                                    <div class="col-sm-9">
                                        <div class="form-line">
                                            <input type="password" class="form-control" id="OldPassword" name="oldPassword" placeholder="Old Password" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="NewPassword" class="col-sm-3 control-label">New Password</label>
                                    <div class="col-sm-9">
                                        <div class="form-line">
                                            <input type="password" class="form-control" id="NewPassword" name="password" placeholder="New Password" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="NewPasswordConfirm" class="col-sm-3 control-label">New Password (Confirm)</label>
                                    <div class="col-sm-9">
                                        <div class="form-line">
                                            <input type="password" class="form-control" id="NewPasswordConfirm" name=passwordConfirm" placeholder="New Password (Confirm)" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button type="submit" class="btn btn-danger">SUBMIT</button>
                                    </div>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if(isset($_GET['user_id']))
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-xs-12 col-sm-3">
            <div class="card profile-card">
                <div class="profile-header">&nbsp;</div>
                <div class="profile-body">
                    <div class="image-area">
                        @if($user->profile_path)
                        <img src="/profile_photos/{{$user->profile_path}}" width="80px" height="80px" alt="AdminBSB - Profile Image" />
                        @endif
                        @if(!$user->profile_path)
                        <img src="/images/user.png" alt="AdminBSB - Profile Image" />
                        @endif
                    </div>
                    <div class="content-area">
                        <h3>{{$user->name}}</h3>
                        <p>{{$user->email}}</p>
                        <p>{{$user->role == 1 ? 'Administrator' : 'User'}}</p>
                    </div>
                </div>
                <div class="profile-footer">
                    <ul>
                        <li>
                            <span>VID</span>
                            <span class="badge bg-yellow">
                                {{$user->vid}}
                            </span>
                        </li>
                        <li>
                            <span>Side</span>
                            <span class="badge bg-green">
                                @if($user->side == 0)
                                Top level user

                                @elseif($user->side == 1)
                                Left
                                @elseif($user->side == 2)
                                Right
                                @endif
                            </span>
                        </li>
                        <li>
                            <span>Joined</span>
                            <span>{{$user->created_at->diffForHumans()}}</span>
                        </li>
                        <li>
                            <span>Total Registered</span>
                            <span>{{count($users)}}</span>
                        </li>

                    </ul>
                    @if($user->is_verified == 0 )
                    <a href="/verifyUser?user_id={{$encrypted_user_id}}" class="btn btn-danger btn-lg waves-effect btn-block">Verify User</a>
                    @endif
                </div>
            </div>

            <div class="card card-about-me">
                <div class="header">
                    <h2>Other Details</h2>
                </div>
                <div class="body">
                    <ul>
                        <li>
                            <div class="title">
                                <i class="material-icons">location_on</i>
                                Location
                            </div>
                            <div class="content">
                                {{$user->address->street}},<br>
                                {{$user->address->city}}
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <i class="material-icons">call</i>
                                Contact Details
                            </div>
                            <div class="content">
                                +91 {{$user->phonebook->ph}},<br>
                                Email: {{$user->email}}
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <i class="material-icons">date_range</i>
                                Personal Details
                            </div>
                            <div class="content text-capitalize">
                                DOB: {{$user->dob}}, <br>
                                {{$user->gender}}
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <i class="material-icons">account_balance</i>
                                Account Details
                            </div>
                            <div class="content">
                                A/C: {{$user->accountDetail->account}}, <br>
                                IFSC: {{$user->accountDetail->ifsc_code}}
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-9">
            <div class="card">
                <div class="body">
                    <div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                <div class="panel panel-default panel-post">
                                    <div class="panel-body">
                                        <!-- Widgets -->
                                        <div class="row clearfix" style="padding:20px 20px;">
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="info-box bg-pink hover-expand-effect">
                                                    <div class="icon">
                                                        <i class="material-icons">playlist_add_check</i>
                                                    </div>
                                                    <div class="content">
                                                        <div class="text">Total Points</div>
                                                        <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20">{{$user->points}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="info-box bg-cyan hover-expand-effect">
                                                    <div class="icon">
                                                        <i class="material-icons">help</i>
                                                    </div>
                                                    <div class="content">
                                                        <div class="text">Investment</div>
                                                        <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20">{{$user->invested}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="info-box bg-light-green hover-expand-effect">
                                                    <div class="icon">
                                                        <i class="material-icons">forum</i>
                                                    </div>
                                                    <div class="content">
                                                        <div class="text">Registered Users</div>
                                                        <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20">{{count($users)}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- #END# Widgets -->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@stop

@section('scripts')



<!-- SweetAlert Plugin Js -->
<script src="/plugins/sweetalert/sweetalert.min.js"></script>

<!-- Custom Js -->
<script src="/js/admin.js"></script>
<script src="/js/pages/ui/dialogs.js"></script>

<!-- Demo Js -->
<script src="/js/demo.js"></script>
<!-- Custom Js -->
<script src="/js/admin.js"></script>
<script src="/js/pages/examples/profile.js"></script>

<!-- Demo Js -->
<script src="/js/demo.js"></script>
@if(Session::has('success'))
<script>
    $(document).ready(function() {
        $(".myButton").trigger('click', function(){});
    });
</script>
@endif
@stop