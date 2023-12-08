<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="submenu">
                    <a class="" href="#">
                        <i class="feather-grid"></i>
                        <span>Dashboard</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-list" data-id="1" >
                        <li>
                            <a class="" href="{{route('admin.dashboard')}}" data-ajax>Admin Dashboard</a>
                        </li>
                        <li>
                            <a href="{{route('teacher.dashboard')}}" data-ajax>Teacher Dashboard</a>
                        </li>
                        <li>
                            <a href="{{route('student.dashboard')}}" data-ajax>Student Dashboard</a>
                        </li>
                        <li>
                            <a href="{{route('sales.dashboard')}}" data-ajax>Sales Dashboard</a>
                        </li>
                        <li>
                            <a href="{{route('member.dashboard')}}" data-ajax>Member Dashboard</a>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#">
                      <i class="fas fa-graduation-cap"></i>
                      <span> Students</span>
                      <span class="menu-arrow"></span>
                    </a>
                    <ul>
                      <li>
                        <a href="{{route('student.index')}}" data-ajax >Student List</a>
                      </li>
                      <li>
                        <a href="{{route('student.create')}}"  data-ajax >Student Add</a>
                      </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
