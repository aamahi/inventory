<section class="choose-class-area bg-white">
    <div class="container-fluid custom-container">
        <div class="row">
            <div class="col-xl-12">
                <h2 class="area-heading font-orange">Our Clint<img src="{{asset('frontend/img/icon/pen-orange.png')}}" alt=""></h2>
                <!-- <div class="col-xl-6">dfsadfsadfsadf</div>
                <div class="col-xl-6">dfsadfsadfffdsdfsdfsadfsadf</div> -->
            </div>
        </div>
        <div class="container">

            <section class="customer-logos slider">
                @foreach($clints as $clint)
                    <div class="slide"><img src="{{asset('uploads/clint/'.$clint->banner)}}"></div>
                @endforeach
            </section>
        </div>

    </div>
</section>
