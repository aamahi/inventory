<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a class="active" href="{{route('home')}}">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-users"></i>
                    <span>Employe</span>
                </a>
                <ul class="sub">
                    <li><a  href="{{route('employe')}}">Add Employe</a></li>
                    <li><a  href="{{route('all_employe')}}">All Employe</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-laptop"></i>
                    <span>Layouts</span>
                </a>
                <ul class="sub">
                    <li><a  href="boxed_page.html">Boxed Page</a></li>
                </ul>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
