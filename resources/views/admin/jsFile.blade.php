
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
{{--datatable--}}
<script src="{{asset('asset/assets/advanced-datatable/media/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('asset/assets/data-tables/DT_bootstrap.js')}}"></script>
<script src="{{asset('asset/js/dynamic_table_init.js')}}"></script>

<!--right slidebar-->
<script src="{{asset('asset/js/slidebars.min.js')}}"></script>

<script src="{{asset('asset/assets/toastr-master/toastr.js')}}"></script>
<!--common script for all pages-->
<script src="{{asset('asset/js/common-scripts5e1f.js')}}?v=2"></script>
{{--Sweetalert--}}
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
{{--datatable js--}}
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<!--script for this page-->
<script src="{{asset('asset/js/sparkline-chart.js')}}"></script>
<script src="{{asset('asset/js/easy-pie-chart.js')}}"></script>
<script src="{{asset('asset/js/count.js')}}"></script>

<script !src="">
    $('.delete').on('click', function (event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure want to delete?',
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
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(160);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<script>
        @if(Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}";
            switch(type){
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;
                case 'primary':
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

        $(document).ready( function () {
            $('#myTable').DataTable();
        } );

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
