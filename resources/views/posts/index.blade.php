@extends('layoutsFront.layout')




@section('headline')
<div class="row headline"><!-- Begin Headline -->
    
    <!-- Slider Carousel
   ================================================== -->
   <div class="span8">
       <div class="flexslider">
         <ul class="slides">
           <li><a href="gallery-single.htm"><img src="{{asset('assets/front/img/gallery/slider-img-1.jpg')}}" alt="slider" /></a></li>
           <li><a href="gallery-single.htm"><img src="{{asset('assets/front/img/gallery/slider-img-1.jpg')}}" /></a></li>
           <li><a href="gallery-single.htm"><img src="{{asset('assets/front/img/gallery/slider-img-1.jpg')}}" /></a></li>
           <li><a href="gallery-single.htm"><img src="{{asset('assets/front/img/gallery/slider-img-1.jpg')}}" /></a></li>
           <li><a href="gallery-single.htm"><img src="{{asset('assets/front/img/gallery/slider-img-1.jpg')}}" /></a></li>
          
         </ul>
       </div>
   </div>
   
   <!-- Headline Text
   ================================================== -->
   <div class="span4">
       <h3>Welcome to Piccolo! <br />
       A Big Theme in a Small Package.</h3>
       <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pretium vulputate magna sit amet blandit.</p>
       <p>Cras rutrum, massa non blandit convallis, est lacus gravida enim, eu fermentum ligula orci et tortor. In sit amet nisl ac leo pulvinar molestie. Morbi blandit ultricies ultrices.</p>
       <a href="#"><i class="icon-plus-sign"></i>Read More</a> 
   </div>
</div><!-- End Headline -->
@endsection





@section('content')

<div class="row gallery-row"><!-- Begin Gallery Row --> 
      
    <div class="span12">
        <h5 class="title-bg">Recent Work 
            <small>That we are most proud of</small>
            <button class="btn btn-mini btn-inverse hidden-phone" type="button">View Portfolio</button>
        </h5>

<!-- Gallery Thumbnails
        ================================================== -->

        <div class="row clearfix no-margin">
            <ul class="gallery-post-grid holder">

                    <!-- Gallery Item 1 -->
                    <li  class="span3 gallery-item" data-id="id-1" data-type="illustration">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="{{asset('assets/front/img/gallery/galleryimg-1-full.jpg')}}" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="{{asset('assets/front/img/gallery/gallery-img-1-4col.jpg')}}" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Custom Illustration</a>For an international ad campaign.</span>
                    </li>

                    <!-- Gallery Item 2 -->
                    <li class="span3 gallery-item" data-id="id-2" data-type="illustration">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="{{asset('assets/front/img/gallery/galleryimg-1-full.jpg')}}" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="{{asset('assets/front/img/gallery/gallery-img-1-4col.jpg')}}" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">3 Color Poster Design</a>For a regional festival event.</span>
                    </li>

                    <!-- Gallery Item 3 -->
                    <li class="span3 gallery-item" data-id="id-3" data-type="web">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="{{asset('assets/front/img/gallery/galleryimg-1-full.jpg')}}" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="#" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="{{asset('assets/front/img/gallery/gallery-img-1-4col.jpg')}}" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Ink Pen Illustration</a>Created for a best selling children's book.</span>
                    </li>

                    <!-- Gallery Item 4 -->
                    <li class="span3 gallery-item" data-id="id-4" data-type="video">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="{{asset('assets/front/img/gallery/galleryimg-1-full.jpg')}}" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="{{asset('assets/front/img/gallery/gallery-img-1-4col.jpg')}}" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Custom Illustration</a>For an international add campaign.</span>
                    </li>

                    <!-- Gallery Item 5 -->
                    <li class="span3 gallery-item" data-id="id-5" data-type="web illustration">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="{{asset('assets/front/img/gallery/galleryimg-1-full.jpg')}}" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="{{asset('assets/front/img/gallery/gallery-img-1-4col.jpg')}}" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Icon Design</a>Classic retro style illustration.</span>
                    </li>

                    <!-- Gallery Item 6 -->
                    <li class="span3 gallery-item" data-id="id-6" data-type="illustration design">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="{{asset('assets/front/img/gallery/galleryimg-1-full.jpg')}}" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="{{asset('assets/front/img/gallery/gallery-img-1-4col.jpg')}}" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Animation Cell</a>Creative storyboard illustration</span>
                    </li>

                    <!-- Gallery Item 7 -->
                    <li class="span3 gallery-item" data-id="id-7" data-type="design">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="{{asset('assets/front/img/gallery/galleryimg-1-full.jpg')}}" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="{{asset('assets/front/img/gallery/gallery-img-1-4col.jpg')}}" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Poster Ad Campaign</a>Regional ad for a local company.</span>
                    </li>

                    <!-- Gallery Item 8 -->
                    <li class="span3 gallery-item" data-id="id-8" data-type="web video">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="{{asset('assets/front/img/gallery/galleryimg-1-full.jpg')}}" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="{{asset('assets/front/img/gallery/gallery-img-1-4col.jpg')}}" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Magazine Ad</a>For an international add campaign.</span>
                    </li>

                    <!-- Gallery Item 9 -->
                    <li class="span3 gallery-item" data-id="id-9" data-type="design">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="{{asset('assets/front/img/gallery/galleryimg-1-full.jpg')}}" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="{{asset('assets/front/img/gallery/gallery-img-1-4col.jpg')}}" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Character Designs</a>For a feature film.</span>
                    </li>

                    <!-- Gallery Item 10 -->
                    <li class="span3 gallery-item" data-id="id-10" data-type="web design">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="{{asset('assets/front/img/gallery/galleryimg-1-full.jpg')}}" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="{{asset('assets/front/img/gallery/gallery-img-1-4col.jpg')}}" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Poster and Ad Design</a>For an international add campaign.</span>
                    </li>

                    <!-- Gallery Item 11 -->
                    <li class="span3 gallery-item" data-id="id-11" data-type="illustration">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="{{asset('assets/front/img/gallery/galleryimg-1-full.jpg')}}" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="{{asset('assets/front/img/gallery/gallery-img-1-4col.jpg')}}" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Website and Animation</a>For a local business.</span>
                    </li>

                    <!-- Gallery Item 12 -->
                    <li class="span3 gallery-item" data-id="id-12" data-type="illustration video">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="{{asset('assets/front/img/gallery/galleryimg-1-full.jpg')}}" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="{{asset('assets/front/img/gallery/gallery-img-1-4col.jpg')}}" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Branding Design</a>For an international add campaign.</span>
                    </li>
                </ul>
                </div>
            </div>
 
    </div><!-- End Gallery Row -->

    @endsection