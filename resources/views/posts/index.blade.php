@extends('layoutsFront.layout')

@section('title', 'главная страница')   <!-- если есть второй аргумент то можно не использовать @ endsection -->


@section('headline')
    <div class="row headline">
        <!-- Begin Headline -->

        <!-- Slider Carousel
       ================================================== -->
        <div class="span8">
            <div class="flexslider">
                <ul class="slides">
                    <li><a href="gallery-single.htm"><img src="{{ asset('assets/front/img/gallery/slider-img-1.jpg') }}"
                                alt="slider" /></a></li>
                    <li><a href="gallery-single.htm"><img
                                src="{{ asset('assets/front/img/gallery/slider-img-1.jpg') }}" /></a></li>
                    <li><a href="gallery-single.htm"><img
                                src="{{ asset('assets/front/img/gallery/slider-img-1.jpg') }}" /></a></li>
                    <li><a href="gallery-single.htm"><img
                                src="{{ asset('assets/front/img/gallery/slider-img-1.jpg') }}" /></a></li>
                    <li><a href="gallery-single.htm"><img
                                src="{{ asset('assets/front/img/gallery/slider-img-1.jpg') }}" /></a></li>

                </ul>
            </div>
        </div>

        <!-- Headline Text
       ================================================== -->
        <div class="span4">
            <h3>Welcome to Piccolo! <br />
                A Big Theme in a Small Package.</h3>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pretium vulputate
                magna sit amet blandit.</p>
            <p>Cras rutrum, massa non blandit convallis, est lacus gravida enim, eu fermentum ligula orci et tortor. In sit
                amet nisl ac leo pulvinar molestie. Morbi blandit ultricies ultrices.</p>
            <a href="#"><i class="icon-plus-sign"></i>Read More</a>
        </div>
    </div><!-- End Headline -->
@endsection





@section('content')

    <div class="row gallery-row">
        <!-- Begin Gallery Row -->

        <div class="span12">
            <h5 class="title-bg">Recent Work
                <small>That we are most proud of</small>
                <button class="btn btn-mini btn-inverse hidden-phone" type="button">View Portfolio</button>
            </h5>

            <!-- Gallery Thumbnails
            ================================================== -->

            <div class="row clearfix no-margin">
                <ul class="gallery-post-grid holder">

                    <!-- Gallery Items -->
                    @foreach ($posts as $post)


                        <li class="span3 gallery-item" data-id="#" data-type="illustration">
                            <span class="gallery-hover-4col hidden-phone hidden-tablet">
                                <span class="gallery-icons">
                                    <a href="{{$post->getImage()}}"
                                        class="item-zoom-link lightbox" title="Custom Illustration"
                                        data-rel="prettyPhoto"></a>
                                    <a href="{{route('posts.single', ['slug' => $post->slug])}}" class="item-details-link"></a>
                                </span>
                            </span>
                            <a href="{{route('posts.single', ['slug' => $post->slug])}}"><img
                                    src="{{$post->getImage()}}" alt="Gallery"></a>
                            <span class="project-details"><a href="{{route('posts.single', ['slug' => $post->slug])}}">{{$post->title}}</a><span class="cutDescription">{!! $post->description !!}</span></span>
                        </li>
                    @endforeach




                </ul>

            </div>
            <div class="pagination">
            {{ $posts->links('vendor.pagination.bootstrap-4') }}
        </div>
        </div>

    </div><!-- End Gallery Row -->

@endsection
