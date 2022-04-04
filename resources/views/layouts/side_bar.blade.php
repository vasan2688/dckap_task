<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded">
                <a href="{{ url('/home') }}">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
            </li>
            <li class="pcoded">
                <a href="{{ route('list')}}">
                    <span class="pcoded-micon"><i class="icofont icofont-user-alt-7"></i></span>
                    <span class="pcoded-mtext">Users Management</span>
                </a>
            </li>
        </ul>
    </div>
</nav>