<header class="app-header navbar">
    <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="/img/brand/logo.svg" width="89" height="25" alt="CoreUI Logo">
        <img class="navbar-brand-minimized" src="/img/brand/sygnet.svg" width="30" height="30" alt="CoreUI Logo">
    </a>
    <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
            <a class="nav-link" href="/home">Dashboard</a>
        </li>
        <li class="nav-item px-3">
            <a class="nav-link" href="{{route('investors.index')}}">Users</a>
        </li>
        <li class="nav-item px-3">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
    <ul class="nav navbar-nav ml-auto" style="margin-right:20px;">
        <li class="nav-item">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <img class="img-avatar" src="/img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">{{Auth::user()->name}}</a><span class="badge badge-success">ID: {{Auth::user()->vid}}</span>
        </li>
    </ul>
</header>