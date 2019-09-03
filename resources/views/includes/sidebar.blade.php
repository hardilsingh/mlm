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
                    <li class="{{$_GET['ref'] == 'nav-bar-home' ? 'active' : false}}">
                        <a href="/home?ref=nav-bar-home">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="
                        @if($_GET['ref']  == 'nav-bar-profile')
                        {{'active'}}
                        @endif
                    ">
                        <a href="/profile?ref=nav-bar-profile">
                            <i class="material-icons">android</i>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li class="
                        @if($_GET['ref']  == 'nav-bar-create')
                        {{'active'}}
                        @endif
                    ">
                        <a href="/investors/create?ref=nav-bar-create">
                            <i class="material-icons">account_circle</i>
                            <span>User Registration</span>
                        </a>
                    </li>
                    <li class="
                        @if($_GET['ref']  == 'nav-bar-tree')
                        {{'active'}}
                        @endif
                    ">
                        <a href="/treeView?ref=nav-bar-tree">
                            <i class="material-icons">layers</i>
                            <span>User Tree View</span>
                        </a>
                    </li>
                    <li class="
                        @if($_GET['ref']  == 'nav-bar-users')
                        {{'active'}}
                        @endif
                    ">
                        <a href="/investors?ref=nav-bar-users">
                            <i class="material-icons">check_circle</i>
                            <span>Registered Users</span>
                        </a>
                    </li>
                    @if(Auth::user()->role == 1)
                    <li class="
                        @if($_GET['ref'] == 'nav-bar-requests')
                        {{'active'}}
                        @endif
                        ">
                        <a href="/requests?ref=nav-bar-requests">
                            <i class="material-icons">email</i>
                            <span>Requests</span>
                        </a>
                    </li>
                    <li class="
                        @if($_GET['ref'] == 'nav-bar-set-target')
                        {{'active'}}
                        @endif
                        ">
                        <a href="/set-target?ref=nav-bar-set-target">
                            <i class="material-icons">assistant_photo</i>
                            <span>Set Target</span>
                        </a>
                    </li>
                    @endif
                    @if(Auth::user()->role !== 1)
                    <li class="
                        @if($_GET['ref'] == 'nav-bar-redeem-points')
                        {{'active'}}
                        @endif
                        ">
                        <a href="/redeem-points?ref=nav-bar-redeem-points">
                            <i class="material-icons">attach_money</i>
                            <span>Redeem Points</span>
                        </a>
                    </li>
                    <li class="
                        @if($_GET['ref'] == 'nav-bar-history')
                        {{'active'}}
                        @endif
                        ">
                        <a href="/transaction-history?ref=nav-bar-history">
                            <i class="material-icons">bookmark_border</i>
                            <span>Transaction History</span>
                        </a>
                    </li>
                    <li class="
                        @if($_GET['ref'] == 'nav-bar-latest-target')
                        {{'active'}}
                        @endif
                        ">
                        <a href="/show-target?ref=nav-bar-latest-target">
                            <i class="material-icons">assignment</i>
                            <span>Latest Target</span>
                        </a>
                    </li>
                    @endif
                    <li class="
                        @if($_GET['ref'] == 'nav-bar-report_issue')
                        {{'active'}}
                        @endif
                        ">
                        <a href="/bugs?ref=nav-bar-report_issue">
                            <i class="material-icons">bug_report</i>
                            <span>Report issue</span>
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