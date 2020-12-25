<!-- Start Side Navigation -->
<aside class="side-navigation-wrap sidebar-fixed">
    <div class="sidenav-inner">
        <ul class="side-nav magic-nav">
        
            <li class="first-link"><a href="{{ route('admin.dashboard') }}" class="animsition-link"><i class="icon-stats-dots"></i> <span class="nav-text">Dashboard</span></a></li>

            <li><a href="{{ route('admin.event.event_index') }}" class="animsition-link"><i class="icon-envelop"></i> <span class="nav-text">Upcoming Events</span></a></li>

            <li class="has-submenu">
              <a href="#submenu1" data-toggle="collapse" aria-expanded="false">
                <i class="icon-stack"></i> <span class="nav-text">Components</span>
                <span class="badge bg-danger">4</span>
              </a>
              <div class="sub-menu collapse secondary list-style-circle" id="submenu1">
                <ul>
                  <li><a href="{{ route('admin.component.mandate.index') }}" class="animsition-link">Mandate</a></li>
                  <li><a href="{{ route('admin.component.mission.index') }}" class="animsition-link">Mission</a></li>
                  <li><a href="{{ route('admin.component.vision.index') }}" class="animsition-link">Vision</a></li>
                </ul>
              </div>
            </li>
            <li class="has-submenu">
              <a href="#submenu4" data-toggle="collapse" aria-expanded="false">
                <i class="icon-file-text2"></i> <span class="nav-text">Blog</span>
                <span class="badge bg-success">2</span>
              </a>
              <div class="sub-menu collapse secondary list-style-circle" id="submenu4">
                <ul>
                  <li><a href="{{ route('admin.blog.blog_index') }}" class="animsition-link">List of Blogs</a></li>
                  <li><a href="{{ route('admin.blog.blog_add') }}" class="animsition-link">Add Blog</a></li>
                </ul>
              </div>
            </li>

            <li class="has-submenu">
              <a href="#submenu5" data-toggle="collapse" aria-expanded="false">
                <i class="icon-user"></i> <span class="nav-text">Users</span>
                <span class="badge bg-danger">1</span>
              </a>
              <div class="sub-menu collapse secondary list-style-circle" id="submenu5">
                <ul>
                  <li><a href="{{ route('admin.user.admin.index') }}" class="animsition-link">Admin</a></li>
                </ul>
              </div>
            </li>

            <li><a href="{{ route('admin.team.team_index') }}" class="animsition-link"><i class="icon-users"></i> <span class="nav-text">Team</span></a></li>

            <li><a href="" class="animsition-link" disabled><i class="icon-clipboard"></i> <span class="nav-text">Roles and Priviledges</span></a></li>
        </ul>
    </div><!-- /.sidebar-inner -->
</aside>
<!-- End Side Navigation -->