<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>Papri IT</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/bootstrap-reset.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('admin/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />

    <!--right slidebar-->
    <link href="{{asset('admin/css/slidebars.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/style-responsive.css')}}" rel="stylesheet" />

  </head>

  <body>

  <section id="container" class="">
      <!--header start-->
        @include('Admin.content.header')
      <!--header end-->

      <!--sidebar start-->
        @include('Admin.content.navbar')
      <!--sidebar end-->

      <!--main content start-->
            @yield('adminContent')
      <!--main content end-->

      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              {{\Carbon\Carbon::now()->year()}} &copy; Papri It  by Abdullah Mahi.
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{asset('admin/js/jquery.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{asset('admin/js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{asset('admin/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('admin/js/slidebars.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/js/respond.min.js')}}" ></script>

    <!--common script for all pages-->
    <script src="{{asset('admin/js/common-scripts.js')}}"></script>



  </body>
</html>
