
<div class="slider-wrapper">
    <div class="homepage-s  owl-carousel owl-theme">

        @foreach($sliders as $slider)
            <div class="item bg-6" style="background-image: url({{asset('uploads/slider/'.$slider->banner)}});">
            <div class="container">
                <div class="row">
                    <div class="offset-md-3 offset-xl-4 col-xl-7 slider-ext-wrap  animated fadeInUp">
                        <div class="slider-text sldr-two">
                            <h1 class="animated flipInX">{{$slider->title}}</h1>
                            <p class="animated fadeInDown">{{$slider->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
