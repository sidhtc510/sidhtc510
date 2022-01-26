@extends('frontEndViews.layout')

@section('title', 'главная страница')
<!-- если есть второй аргумент то можно не использовать @ endsection -->

@section('content')


    {{-- слайдер --}}
    <div class="container">
        <div class="slideWrapper">

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">

                    
                    @php
                        $is_active = false; //to active slider, set "true"
                    @endphp
                    @foreach ($sliders as $slider)
                        <div class="carousel-item @php if ($is_active) echo ' active' @endphp ">
                            <img class="d-block w-100" src="{{ $slider->getImage() }}">
                            {{-- img placeholder https://via.placeholder.com/640x150 --}}
                        </div>
                        {{-- @php
                            if ($is_active) {
                                $is_active = false;
                            }
                        @endphp --}}
                    @endforeach

                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>




    <div class="row">

        <div class="col-lg-8 entries">

            <div class="containerTitle">
                <h2>Список всех постов</h2>
            </div>

            @foreach ($posts as $post)
                @include('frontEndViews.cardOfPosts')
            @endforeach



            @include('frontEndViews.pagination')

        </div><!-- End blog entries list -->

        @include('frontEndViews.sideBar')

    </div>

    </div>
    </section><!-- End Blog Section -->
@endsection
