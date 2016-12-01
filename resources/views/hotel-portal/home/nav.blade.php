<nav>
    <ul class="sidebar__nav">
        <li class="sidebar-nav__heading">Dashboard</li>
        <li {{ \App\Utility::handleActiveNavigation('/home') }}>
            <a {{ \App\Utility::handleActiveNavigation('/home') }} href="{{ @url('/home') }}"><i class="fa fa-th-large"></i> Dashboard</a>
        </li>
        <li class="sidebar-nav__heading">Pages</li>
        <li class="sidebar-nav__dropdown">
            <a href="#"><i class="fa fa-user"></i> Reservations <i class="fa fa-angle-down"></i></a>
            <ul class="sidebar-nav__submenu">
                <li><a href="{{ url('home/new-reservation') }}">Create new</a></li>
                <li><a href="{{ url('home/future-reservations') }}">Future reservations</a></li>
                <li><a href="{{ url('home/archived-reservations') }}">Archive</a></li>
            </ul>
        </li>
        <li {{ \App\Utility::handleActiveNavigation('/account-settings') }}>
            <a  {{ \App\Utility::handleActiveNavigation('/account-settings') }} href="{{ url('home/account-settings') }}"><i class="fa fa-gear"></i> Account settings</a>
        </li>
        <li class="sidebar-nav__heading">Hotel Management</li>
        <li {{ \App\Utility::handleActiveNavigation('/manage-users') }}>
            <a {{ \App\Utility::handleActiveNavigation('/manage-users') }} href="{{ url('home/manage-users') }}"><i class="fa fa-user-plus"></i> Manage users</a>
        </li>
        <li {{ \App\Utility::handleActiveNavigation('/manage-rooms') }}>
            <a {{ \App\Utility::handleActiveNavigation('/manage-rooms') }} href="{{ url('home/manage-rooms') }}"><i class="fa fa-cloud"></i> Manage rooms</a>
        </li>
        <li {{ \App\Utility::handleActiveNavigation('/hotel-settings') }}>
            <a {{ \App\Utility::handleActiveNavigation('/hotel-settings') }} href="{{ url('home/hotel-settings') }}"><i class="fa fa-hotel"></i> Hotel settings</a>
        </li>
    </ul>
</nav>