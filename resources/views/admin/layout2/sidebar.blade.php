<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="/admin">
            <span class="align-middle">Zamda-vms</span>
        </a>
        <div class="text-center text-white">
            <p>Logged as {{ auth()->user()->name }}</p>
        </div>

        <ul class="sidebar-nav">
            <li class="sidebar-item active">
                <a class="sidebar-link" href="{{route('profile.create')}}">
                     Profile
                </a>
            </li>


            <li class="sidebar-item active" >
                <a class="sidebar-link" href="{{ route('visitor.index') }}">
                    Visitor Log
                </a>
            </li>
            <li class="sidebar-item active">
                <a class="sidebar-link" href="{{ route('department.index') }}">
                    Department
                </a>
            </li>
            <li class="sidebar-item active">
                <a class="sidebar-link" href="{{ route('employee.index') }}">
                    Employee
                </a>
            </li>
            <li class="sidebar-item active">
                <a class="sidebar-link" href="{{ route('invitee.index') }}">
                    Invitee
                </a>
            </li>
            <li class="sidebar-item active">
                <a class="sidebar-link" href="{{ route('department.index') }}">
                    Notifications
                </a>
            </li>
            <li class="sidebar-item active">
                <a class="sidebar-link" href="{{ route('user.index') }}">
                    Users
                </a>
            </li>
            <li class="sidebar-item active">
                <a class="sidebar-link" href="{{ route('role.index') }}">
                    Role & Permissions
                </a>
            </li>
            <li class="sidebar-item active">
                <a class="sidebar-link" href="{{ route('department.index') }}">
                    Report
                </a>
            </li>
            <li class="sidebar-item active">
                <a class="sidebar-link" href="{{ route('department.index') }}">
                    General Settings
                </a>
            </li>
        </ul>
    </div>
</nav>
