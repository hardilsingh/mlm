@extends('layouts.admin')
@section('plugins')
<link href="https://unpkg.com/treeflex/dist/css/treeflex.css" rel="stylesheet">
@stop
@section('styles')
<style>
    .tf-nc {
        border: 3px solid #F44336 !important;
        height: 100px;
        width: 100px;
        border-radius: 50%;
        background: linear-gradient(to right, rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url('/images/user-tie.svg');
        background-size: cover;
        background-repeat: no-repeat;
        cursor: pointer;


        display: flex;
        flex-direction: column;
        align-items: center;

    }

    button {
        height: 100px;
        width: 100px;
        background: transparent;
        border-radius: 50%;
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

    p {
        margin-top: 100%;
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

<div class="row clearfix">
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
        <div class="card">
            <div class="body">
                <div class="tf-tree example text-center">
                    <ul>
                        <li>
                            <span class="tf-nc">
                                <p class="badge bg-yellow text-center" style="font-size:12px; padding:5px 3px; margin-top:100%"><a href="#" class=" nav-link text-white">ID: {{Auth::user()->vid}}</a></p>
                            </span>


                            <ul>
                                @if(Auth::user()->side == 0)
                                @foreach($under_users_left as $user)

                                <li>
                                    <span class="tf-nc" data-id="{{$user->vid}}">
                                        <p class="badge bg-yellow" style="font-size:11px; padding:1px 2px;margin-top:100%"><a href="/profile?user_id={{Crypt::encrypt($user->id)}}" target="_blank" class=" nav-link text-white">ID: {{$user->vid}}</a></p>
                                    </span>

                                </li>
                                @endforeach
                                @foreach($under_users_right as $user)

                                <li>
                                    <span class="tf-nc" data-id="{{$user->vid}}">
                                        <p class="badge bg-yellow" style="font-size:11px; padding:1px 2px;"><a href="/profile?user_id={{Crypt::encrypt($user->id)}}" target="_blank" class=" nav-link text-white">ID: {{$user->vid}}</a></p>
                                    </span>
                                </li>
                                @endforeach
                                @endif
                                @if(Auth::user()->side == 1)
                                @foreach($under_users_left as $user)

                                <li>
                                    <span class="tf-nc" data-id="{{$user->vid}}">
                                        <p class="badge bg-yellow" style="font-size:11px; padding:1px 2px;"><a href="/profile?user_id={{Crypt::encrypt($user->id)}}" target="_blank" class=" nav-link text-white">ID: {{$user->vid}}</a></p>
                                    </span>
                                </li>

                                @endforeach
                                @endif
                                @if(Auth::user()->side == 2)
                                @foreach($under_users_right as $user)

                                <li>
                                    <span class="tf-nc" data-id="{{$user->vid}}">
                                        <p class="badge bg-yellow" style="font-size:11px; padding:1px 2px;"><a href="/profile?user_id={{Crypt::encrypt($user->id)}}" target="_blank" class=" nav-link text-white">ID: {{$user->vid}}</a></p>
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




@stop

@section('scripts')


<script type="text/javascript">
    $(document).ready(function() {
        $('.tf-nc').each(function() {
            let data = $(this).data('id');
            $(this).one("click", function() {
                $.get('/ajaxRequest?vid=' + data, function(data) {
                    for (var i = 0; i < data.length; i++) {
                        var obj = data[i];
                        $('#data').append("<li> <span class='tf-nc'></span> </li>")
                    }
                })
            })
        });
    });
</script>


<!-- Custom Js -->
<script src="js/admin.js"></script>
<script src="js/pages/index.js"></script>

<!-- Demo Js -->
<script src="js/demo.js"></script>
@stop