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
    <link href="{{asset('css/toaster.css')}}" rel="stylesheet">


    <!--  summernote -->
    <link href="{{asset('admin/assets/summernote/dist/summernote.css')}}" rel="stylesheet">

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
    <script src="{{asset('js/toaster.js')}}" ></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!--summernote-->
    <script src="{{asset('admin/assets/summernote/dist/summernote.min.js')}}"></script>


  <!--common script for all pages-->
    <script src="{{asset('admin/js/common-scripts.js')}}"></script>


  <script>

      jQuery(document).ready(function(){

          $('.summernote').summernote({
              height: 200,                 // set editor height

              minHeight: null,             // set minimum height of editor
              maxHeight: null,             // set maximum height of editor

              focus: true                 // set focus to editable area after initializing summernote
          });
      });

  </script>
  <script>
      $('.delete').on('click', function (event) {
          event.preventDefault();
          const url = $(this).attr('href');
          swal({
              title: 'Are you sure?',
              text: 'This record and it`s details will be permanantly deleted!',
              icon: 'warning',
              buttons: ["Cancel", "Yes!"],
          }).then(function(value) {
              if (value) {
                  window.location.href = url;
              }
          });
      });
  </script>
  <script>
      @if(Session::has('message'))
      var type = "{{ Session::get('alert-type', 'info') }}";
      switch(type){
          case 'info':
              toastr.info("{{ Session::get('message') }}");
              break;

          case 'warning':
              toastr.warning("{{ Session::get('message') }}");
              break;

          case 'success':
              toastr.success("{{ Session::get('message') }}");
              break;

          case 'error':
              toastr.error("{{ Session::get('message') }}");
              break;
      }
      @endif
  </script>



  </body>
</html>
