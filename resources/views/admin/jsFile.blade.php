
<!-- js placed at the end of the document so the pages load faster -->
<script src="{{asset('asset/js/jquery.js')}}"></script>
<script src="{{asset('asset/js/bootstrap.bundle.min.js')}}"></script>
<script class="include" type="text/javascript" src="{{asset('asset/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('asset/js/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('asset/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
<script src="{{asset('asset/js/jquery.sparkline.js')}}" type="text/javascript"></script>
<script src="{{asset('asset/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
<script src="{{asset('asset/js/owl.carousel.js')}}" ></script>
<script src="{{asset('asset/js/jquery.customSelect.min.js')}}" ></script>
<script src="{{asset('asset/js/respond.min.js')}}" ></script>

<!--right slidebar-->
<script src="{{asset('asset/js/slidebars.min.js')}}"></script>

<!--common script for all pages-->
<script src="{{asset('asset/js/common-scripts5e1f.js')}}?v=2"></script>

<!--script for this page-->
<script src="{{asset('asset/js/sparkline-chart.js')}}"></script>
<script src="{{asset('asset/js/easy-pie-chart.js')}}"></script>
<script src="{{asset('asset/js/count.js')}}"></script>

<script>

    //owl carousel

    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true,
            autoPlay:true

        });
    });

    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

    $(window).on("resize",function(){
        var owl = $("#owl-demo").data("owlCarousel");
        owl.reinit();
    });

</script>

</body>
</html>