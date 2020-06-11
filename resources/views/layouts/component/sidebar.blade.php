<div class="left-side-menu">

<div class="slimscroll-menu">

    <!-- User box -->
    <div class="user-box text-center">
        <img src="{{asset('img/user-default.jpg')}}" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-lg">
        <div class="dropdown">
            <a href="#" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown">{{ Auth::user()->name }}</a>
        </div>
        <p class="text-muted">Logged In 43 minutes ago.</p>
        <ul class="list-inline">
            <li class="list-inline-item"></li>
        </ul>
    </div>

    <!--- Sidemenu -->
    <div id="sidebar-menu">

        <ul class="metismenu" id="side-menu">

            <li class="menu-title">Menu App</li>

            <li id="dashboards">
                <a href="{{route('home')}}">
                    <i class="mdi mdi-view-dashboard"></i>
                    <span> Dashboard </span>
                </a>
            </li>

            <li>
                <a href="javascript: void(0);">
                    <i class="mdi mdi-calendar"></i>
                    <span> Activities </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li><a href="{{ route('activities.index') }}">All Activities</a></li>
                    <li><a href="{{ route('activities.create') }}">Example Activity 1</a></li>
                    <li><a href="{{ route('activities.edit', 2) }}">Example Activity 2</a></li>
                    <li><a href="{{ route('activities.update', 2) }}">Example Activity 3</a></li>
                </ul>
            </li>


            <li class="menu-title">Account</li>

            <li id="dashboards">
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="mdi mdi-logout-variant"></i>
                    <span> Logout </span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>

    </div>
    <!-- End Sidebar -->

    <div class="clearfix"></div>

</div>
<!-- Sidebar -left -->

</div>