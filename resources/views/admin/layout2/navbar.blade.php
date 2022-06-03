<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>

    <div class="navbar-collapse collapse align-content-end">
        <ul class="nav navbar-toolbar">

            <li class="dropdown dropdown-user text-right ">
                <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                    {{-- @php
                        $image = auth()
                            ->user()
                            ->getFirstMediaUrl('users');
                        $image != null ? ($image = $image) : ($image = asset('default.png'));
                    @endphp --}}
                    <img src="{{asset('static/img/avatars/avatar.jpg')}}" width="30px" height="30">
                    {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                    {{-- <a class="dropdown-item" href=""><i class="fa fa-user"></i>Profile</a>
                    <a class="dropdown-item" href="profile.html"><i class="fa fa-cog"></i>Settings</a>
                    <a class="dropdown-item" href="javascript:;"><i class="fa fa-support"></i>Support</a>
                    <li class="dropdown-divider"></li> --}}
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="align-middle" data-feather="log-out"></i>Logout</button>

                    </form>
                </ul>
            </li>
        </ul>
    </div>


</nav>


