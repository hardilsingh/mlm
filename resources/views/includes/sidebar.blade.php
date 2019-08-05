<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="/home">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/profile">
                    <i class="fas fa-user-circle"></i> Your Profile
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('investors.create')}}">
                    <i class="fas fa-registered"></i> Register User
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('treeView.index')}}">
                    <i class="fas fa-tree"></i> Tree View
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/investors">
                    <i class="fas fa-money-check-alt"></i> View Investors
                </a>
            </li>
            @if(Auth::user()->role == 1)
            <li class="nav-item">
                <a class="nav-link" href="/verify-users">
                    <i class="fas fa-user-check"></i> Verify Users
                </a>
            </li>
            @endif


        </ul>
    </nav>
</div>