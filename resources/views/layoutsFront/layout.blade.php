<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Piccolo Theme</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS
================================================== -->
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('assets/front/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/main_correct.css') }}">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/style-ie.css"/>
<![endif]-->

    <!-- Favicons
================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">



</head>

<body class="home">
    <!-- Color Bars (above header)-->
    <div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>

    <div class="container">

        <div class="row header">
            <!-- Begin Header -->

            <!-- Logo
        ================================================== -->
            <div class="span5 logo">
                <a href="index.htm"><img src="{{ asset('assets/front/img/piccolo-logo.png') }}" alt="" /></a>
                <h5>Big Things... Small Packages</h5>
            </div>

            <!-- Main Navigation
        ================================================== -->
            <div class="span7 navigation">
                <div class="navbar hidden-phone">

                    <ul class="nav">
                        <li class="dropdown active">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="index.htm">Home <b
                                    class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="index.htm">Full Page</a></li>
                                <li><a href="index-gallery.htm">Gallery Only</a></li>
                                <li><a href="index-slider.htm">Slider Only</a></li>
                            </ul>
                        </li>



                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="blog-style1.htm">Blog <b
                                    class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-style1.htm">Blog Style 1</a></li>
                                <li><a href="blog-style2.htm">Blog Style 2</a></li>
                                <li><a href="blog-style3.htm">Blog Style 3</a></li>
                                <li><a href="blog-style4.htm">Blog Style 4</a></li>
                                <li><a href="blog-single.htm">Blog Single</a></li>
                            </ul>
                        </li>
                        <li><a href="page-contact.htm">Contact</a></li>

                        @if (Route::has('login'))

                            @auth
                                <li><a href="{{ route('logout') }}">Logout
                                        ({{ auth()->user()->name }} | {{ auth()->user()->email }})</a></li>

                            @else
                                <li> <a href="{{ route('login.create') }}">Log in</a> <a
                                        href="{{ route('register.create') }}">Register</a> </li>


                            @endauth

                        @endif
                    </ul>

                </div>
            </div>



        </div><!-- End Header -->

        @if ($message = Session::get('flash_message'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif

        @yield('headline')

        @yield('content')


        <div class="row">
            <!-- Begin Bottom Section -->

            <!-- Blog Preview
        ================================================== -->
            <div class="span6">

                <h5 class="title-bg">From the Blog
                    <small>All the latest news</small>
                    <button id="btn-blog-next" class="btn btn-inverse btn-mini" type="button">&raquo;</button>
                    <button id="btn-blog-prev" class="btn btn-inverse btn-mini" type="button">&laquo;</button>
                </h5>

                <div id="blogCarousel" class="carousel slide ">

                    <!-- Carousel items -->
                    <div class="carousel-inner">

                        <!-- Blog Item 1 -->
                        <div class="active item">
                            <a href="blog-single.htm"><img src="assets/front/img/gallery/blog-med-img-1.jpg" alt=""
                                    class="align-left blog-thumb-preview" /></a>
                            <div class="post-info clearfix">
                                <h4><a href="blog-single.htm">A subject that is beautiful in itself</a></h4>
                                <ul class="blog-details-preview">
                                    <li><i class="icon-calendar"></i><strong>Posted on:</strong> Sept 4, 2015
                                    <li>
                                    <li><i class="icon-user"></i><strong>Posted by:</strong> <a href="#"
                                            title="Link">Admin</a>
                                    <li>
                                    <li><i class="icon-comment"></i><strong>Comments:</strong> <a href="#"
                                            title="Link">12</a>
                                    <li>
                                    <li><i class="icon-tags"></i> <a href="#">photoshop</a>, <a
                                            href="#">tutorials</a>, <a href="#">illustration</a>
                                </ul>
                            </div>
                            <p class="blog-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
                                interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. Vestibulum lectus
                                tellus, aliquet et iaculis sed, volutpat vel erat. <a href="#">Read more</a>
                            <p>
                        </div>

                        <!-- Blog Item 2 -->
                        <div class="item">
                            <a href="blog-single.htm"><img src="assets/front/img/gallery/blog-med-img-1.jpg" alt=""
                                    class="align-left blog-thumb-preview" /></a>
                            <div class="post-info clearfix">
                                <h4><a href="blog-single.htm">A great artist is always before his time</a></h4>
                                <ul class="blog-details-preview">
                                    <li><i class="icon-calendar"></i><strong>Posted on:</strong> Sept 4, 2015
                                    <li>
                                    <li><i class="icon-user"></i><strong>Posted by:</strong> <a href="#"
                                            title="Link">Admin</a>
                                    <li>
                                    <li><i class="icon-comment"></i><strong>Comments:</strong> <a href="#"
                                            title="Link">12</a>
                                    <li>
                                    <li><i class="icon-tags"></i> <a href="#">photoshop</a>, <a
                                            href="#">tutorials</a>, <a href="#">illustration</a>
                                </ul>
                            </div>
                            <p class="blog-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
                                interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. Vestibulum lectus
                                tellus, aliquet et iaculis sed, volutpat vel erat. <a href="#">Read more</a>
                            <p>
                        </div>

                        <!-- Blog Item 3 -->
                        <div class="item">
                            <a href="blog-single.htm"><img src="assets/front/img/gallery/blog-med-img-1.jpg" alt=""
                                    class="align-left blog-thumb-preview" /></a>
                            <div class="post-info clearfix">
                                <h4><a href="blog-single.htm">Is art everything to anybody?</a></h4>
                                <ul class="blog-details-preview">
                                    <li><i class="icon-calendar"></i><strong>Posted on:</strong> Sept 4, 2015
                                    <li>
                                    <li><i class="icon-user"></i><strong>Posted by:</strong> <a href="#"
                                            title="Link">Admin</a>
                                    <li>
                                    <li><i class="icon-comment"></i><strong>Comments:</strong> <a href="#"
                                            title="Link">12</a>
                                    <li>
                                    <li><i class="icon-tags"></i> <a href="#">photoshop</a>, <a
                                            href="#">tutorials</a>, <a href="#">illustration</a>
                                </ul>
                            </div>
                            <p class="blog-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
                                interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. Vestibulum lectus
                                tellus, aliquet et iaculis sed, volutpat vel erat. <a href="#">Read more</a>
                            <p>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Client Area
        ================================================== -->
            <div class="span6">

                <h5 class="title-bg">Recent Clients
                    <small>That love us</small>
                    <button id="btn-client-next" class="btn btn-inverse btn-mini" type="button">&raquo;</button>
                    <button id="btn-client-prev" class="btn btn-inverse btn-mini" type="button">&laquo;</button>
                </h5>

                <!-- Client Testimonial Slider-->
                <div id="clientCarousel" class="carousel slide no-margin">
                    <!-- Carousel items -->
                    <div class="carousel-inner">

                        <div class="active item">
                            <p class="quote-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
                                interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. Morbi blandit
                                ultricies ultrices. Vivamus nec lectus sed orci molestie molestie."<cite>- Client Name,
                                    Big Company</cite></p>
                        </div>

                        <div class="item">
                            <p class="quote-text">"Adipiscing elit. In interdum felis fermentum ipsum molestie sed
                                porttitor ligula rutrum. Morbi blandit ultricies ultrices. Vivamus nec lectus sed orci
                                molestie molestie."<cite>- Another Client Name, Company Name</cite></p>
                        </div>

                        <div class="item">
                            <p class="quote-text">"Mauris eget tellus sem. Cras sollicitudin sem eu elit aliquam
                                quis condimentum nulla suscipit. Nam sed magna ante. Ut eget suscipit mauris."<cite>- On
                                    More Client, The Company</cite></p>
                        </div>

                    </div>
                </div>

                <!-- Client Logo Thumbs-->
                <ul class="client-logos">
                    <li><a href="#" class="client-link"><img src="assets/front/img/gallery/client-img-1.png"
                                alt="Client"></a></li>
                    <li><a href="#" class="client-link"><img src="assets/front/img/gallery/client-img-2.png"
                                alt="Client"></a></li>
                    <li><a href="#" class="client-link"><img src="assets/front/img/gallery/client-img-3.png"
                                alt="Client"></a></li>
                    <li><a href="#" class="client-link"><img src="assets/front/img/gallery/client-img-4.png"
                                alt="Client"></a></li>
                    <li><a href="#" class="client-link"><img src="assets/front/img/gallery/client-img-5.png"
                                alt="Client"></a></li>
                </ul>

            </div>

        </div><!-- End Bottom Section -->

    </div> <!-- End Container -->

    <!-- Footer Area
        ================================================== -->

    <div class="footer-container">
        <!-- Begin Footer -->
        <div class="container">
            <div class="row footer-row">
                <div class="span3 footer-col">
                    <h5>About Us</h5>
                    <img src="assets/front/img/piccolo-footer-logo.png" alt="Piccolo" /><br /><br />
                    <address>
                        <strong>Design Team</strong><br />
                        123 Main St, Suite 500<br />
                        New York, NY 12345<br />
                    </address>
                    <ul class="social-icons">
                        <li><a href="#" class="social-icon facebook"></a></li>
                        <li><a href="#" class="social-icon twitter"></a></li>
                        <li><a href="#" class="social-icon dribble"></a></li>
                        <li><a href="#" class="social-icon rss"></a></li>
                        <li><a href="#" class="social-icon forrst"></a></li>
                    </ul>
                </div>
                <div class="span3 footer-col">
                    <h5>Latest Tweets</h5>
                    <ul>
                        <li><a href="#">@room122</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li><a href="#">@room122</a> In interdum felis fermentum ipsum molestie sed porttitor ligula
                            rutrum. Morbi blandit ultricies ultrices.</li>
                        <li><a href="#">@room122</a> Vivamus nec lectus sed orci molestie molestie. Etiam mattis neque
                            eu orci rutrum aliquam.</li>
                    </ul>
                </div>
                <div class="span3 footer-col">
                    <h5>Latest Posts</h5>
                    <ul class="post-list">
                        <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="#">Consectetur adipiscing elit est lacus gravida</a></li>
                        <li><a href="#">Lectus sed orci molestie molestie etiam</a></li>
                        <li><a href="#">Mattis consectetur adipiscing elit est lacus</a></li>
                        <li><a href="#">Cras rutrum, massa non blandit convallis est</a></li>
                    </ul>
                </div>
                <div class="span3 footer-col">
                    <h5>Flickr Photos</h5>
                    <ul class="img-feed">
                        <li><a href="#"><img src="assets/front/img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="assets/front/img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="assets/front/img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="assets/front/img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="assets/front/img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="assets/front/img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="assets/front/img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="assets/front/img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="assets/front/img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="assets/front/img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="assets/front/img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="assets/front/img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <!-- Begin Sub Footer -->
                <div class="span12 footer-col footer-sub">
                    <div class="row no-margin">
                        <div class="span6"><span class="left">Copyright 2012 Piccolo Theme. All
                                rights reserved.</span></div>
                        <div class="span6">
                            <span class="right">
                                <a href="#">Home</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a
                                    href="#">Features</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a
                                    href="#">Gallery</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a
                                    href="#">Blog</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Contact</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div><!-- End Sub Footer -->

        </div>
    </div><!-- End Footer -->

    <!-- Scroll to Top -->
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>




    <!-- JS
================================================== -->
    <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
    <script src="{{ asset('assets/front/js/script.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $("#btn-blog-next").click(function() {
                $('#blogCarousel').carousel('next')
            });
            $("#btn-blog-prev").click(function() {
                $('#blogCarousel').carousel('prev')
            });

            $("#btn-client-next").click(function() {
                $('#clientCarousel').carousel('next')
            });
            $("#btn-client-prev").click(function() {
                $('#clientCarousel').carousel('prev')
            });

        });

        $(window).load(function() {

            $('.flexslider').flexslider({
                animation: "slide",
                slideshow: true,
                start: function(slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
</body>

</html>
