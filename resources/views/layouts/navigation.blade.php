<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                    <img alt="image" class="img-circle" src="{{asset('img/profile_small.jpg')}}" />
                     </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="clear"> <span class="block m-t-xs">
                      <strong class="font-bold">
                        @if( Auth::check() )
                          {{ Auth::user()->name }}
                        @endif
                      </strong>
                     </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="mailbox.html">Mailbox</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="{{ isActiveRoute('admin') }}">
                <a href="{{ url('/admin') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Main view</span></a>
            </li>
            <li class="{{ isActiveRoute('product') }}">
                <a href="{{ url('/product') }}"><i class="fa fa-th-list"></i> <span class="nav-label">Pawn</span></a>
            </li>
            <li class="{{ isActiveRoute('category') }}">
                <a href="{{ url('/category') }}"><i class="fa fa-list-ol"></i> <span class="nav-label">Categories view</span></a>
            </li>
            <li class="{{ isActiveRoute('category') }}">
                <a href="{{ url('/users') }}"><i class="fa fa-users"></i> <span class="nav-label">Users</span></a>
            </li>
        </ul>

    </div>
</nav>
