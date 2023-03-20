<header class="navbar">
    <div class="container-fluid">
        <button class="navbar-toggler mobile-toggler hidden-lg-up" type="button">&#9776;</button>
        <a class="navbar-brand" href="#"></a>
        <ul class="nav navbar-nav hidden-md-down">
            <li class="nav-item">
                <a class="nav-link navbar-toggler layout-toggler" href="#">&#9776;</a>
            </li>
            <li class="nav-item p-x-1">
                <a class="nav-link" href="#">Dashboard</a>
            </li>
            <li class="nav-item p-x-1">
                <a class="nav-link" href="#">Users</a>
            </li>
            <li class="nav-item p-x-1">
                <a class="nav-link" href="#">Settings</a>
            </li>
        </ul>
        <ul class="nav navbar-nav pull-right hidden-md-down">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button"
                    aria-haspopup="true" aria-expanded="false">
                    <span class="hidden-md-down">{{ auth()->user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header text-xs-center">
                        <strong>Account</strong>
                    </div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link navbar-toggler aside-toggle" href="#">&#9776;</a>
            </li>
        </ul>
    </div>
</header>
