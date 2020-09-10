<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a href="index.html">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="">
                    <i class="fa fa-pencil"></i>
                    <span>Course</span>
                </a>
                <ul class="sub">
                    <li><a  href="{{route('Course')}}">All Course</a></li>
                    <li><a  href="{{route('addCourse')}}">Add New Course</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="">
                    <i class="fa fa-paperclip"></i>
                    <span>Service</span>
                </a>
                <ul class="sub">
                    <li><a  href="{{route('addService')}}">Add New Service</a></li>
                    <li><a  href="{{route('allService')}}">All Service</a></li>
                </ul>
            </li>

            <li>
                <a href="{{route('setting')}}">
                    <i class="fa fa-cogs"></i>
                    <span>Setting</span>
                </a>
            </li>
            <li>
                <a href="{{route('banner')}}">
                    <i class="fa fa-picture-o"></i>
                    <span>Banner</span>
                </a>
            </li>
            <li>
                <a href="{{route('clint')}}">
                    <i class="fa fa-edit"></i>
                    <span>Clint</span>
                </a>
            </li>
            <li>
                <a href="{{route('ceo')}}">
                    <i class="fa fa-user-md"></i>
                    <span>CEO Massage</span>
                </a>
            </li>
            <li>
                <a href="{{route('contract')}}">
                    <i class="fa fa-phone"></i>
                    <span>Contract</span>
                </a>
            </li>
            <li>
                <a href="{{route('about')}}">
                    <i class="fa fa-user"></i>
                    <span>About</span>
                </a>
            </li>


        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
