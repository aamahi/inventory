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
                    <i class="fa fa-shopping-cart"></i>
                    <span>Products</span>
                </a>
                <ul class="sub">
                    <li><a  href="{{route('category')}}">Category</a></li>
                    <li><a  href="{{route('temporary_deleted_category')}}">Deleted Category</a></li>
                    <li><a  href="{{route('add_product')}}">Add Product</a></li>
                    <li><a  href="{{route('temporary_deleted_category')}}">Product List</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-users"></i>
                    <span>Employe</span>
                </a>
                <ul class="sub">
                    <li><a  href="{{route('employe')}}">Add Employe</a></li>
                    <li><a  href="{{route('all_employe')}}">All Employe</a></li>
                    <li><a  href="{{route('deleted_employe')}}">Deleted Employe</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-user"></i>
                    <span>Customar</span>
                </a>
                <ul class="sub">
                    <li><a  href="{{route('customar_group')}}">Customar Group</a></li>
                    <li><a  href="{{route('add_customar')}}">Add Customar</a></li>
                    <li><a  href="{{route('all_customar')}}">All Customar</a></li>
                    <li><a  href="{{route('h_deleted')}}">Deleted Customar</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-user"></i>
                    <span>Suppliar</span>
                </a>
                <ul class="sub">
                    <li><a  href="{{route('add_suppliar')}}">Add Supplier</a></li>
                    <li><a  href="{{route('suppliar')}}">All Suppliar</a></li>
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
