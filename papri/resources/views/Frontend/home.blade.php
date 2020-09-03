@extends('Frontend.index')

@section('content')

    {{--    Slider Start--}}
    @include('Frontend.layout.slider')
    {{--Slider End--}}

    <!--Events area start-->

    @include('Frontend.layout.course')

    <!--Events area end-->


    <!--Course area start-->

        @include('Frontend.layout.service')

    <!--Course area end-->

        @include('Frontend.layout.staf')

    <!-- Clint Area start -->
        @include('Frontend.layout.clint')
    <!-- Clint Area End  -->

@endsection
