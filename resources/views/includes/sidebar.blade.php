        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    @if(Auth::user()->profile_path)
                    <img src="/storage/profile/{{Auth::user()->profile_path}}" width="48" height="48" alt="User" />
                    @endif
                    @if(!Auth::user()->profile_path)
                    <img src="/images/user.png" width="48" height="48" alt="User" />
                    @endif
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</div>
                    <div class="email">{{Auth::user()->email}}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="/profile"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="material-icons">input</i>Sign Out</a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="/home">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="/profile">
                            <i class="material-icons">home</i>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('investors.create')}}">
                            <i class="material-icons">account_circle</i>
                            <span>User Registration</span>
                        </a>
                    </li>
                    <li>
                        <a href="/treeView">
                            <i class="material-icons">layers</i>
                            <span>User Tree View</span>
                        </a>
                    </li>
                    <li>
                        <a href="/investors">
                            <i class="material-icons">check_circle</i>
                            <span>Registered Users</span>
                        </a>
                    </li>

            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 <a href="javascript:void(0);"></a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->