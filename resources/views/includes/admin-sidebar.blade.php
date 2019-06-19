<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a class="active" href="{{ route('dashboard') }}">
                          <i class="icon-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-laptop"></i>
                          <span>Services</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ route('create_service') }}">Create Services</a></li>
                          <li><a  href="{{ route('manage_service') }}">Manage Services</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-briefcase"></i>
                          <span>Careers</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ route('create_career') }}">Create Careers</a></li>
                          <li><a  href="{{ route('manage_career') }}">Manage Careers</a></li>
                          <li><a  href="widget.html">Applications</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-cogs"></i>
                          <span>Trainings / Scholarship</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="grids.html">Create Trainings</a></li>
                          <li><a  href="calendar.html">Manage Trainings</a></li>
                          <li><a  href="{{ route('manage_scholarship') }}">Scholarship Applications</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-pencil"></i>
                          <span>Posts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ route('create_post') }}">Create Post</a></li>
                          <li><a  href="{{ route('manage_post') }}">Manage Posts</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-user"></i>
                          <span>Users</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ route('create_user') }}">Create Users</a></li>
                          <li><a  href="{{ route('manage_user') }}">Manage Users</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-group"></i>
                          <span>Our Team</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ route('create_team') }}">Create Member</a></li>
                          <li><a  href="{{ route('manage_team') }}">Manage Members</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="{{ route('aboutus') }}" >
                        <i class="icon-book"></i>
                          <span>About Us</span>
                      </a>
                  </li>
                  <li>
                      <a  href="{{ route('mail') }}">
                          <i class="icon-envelope"></i>
                          <span>Mail </span>
                          <span class="label label-danger pull-right mail-info">2</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" icon-tasks"></i>
                          <span>Roles</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="morris.html">Create Roles</a></li>
                          <li><a  href="chartjs.html">Manage Roles</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="{{ route('setting') }}" >
                        <i class="icon-gear"></i>
                          <span>Settings</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>