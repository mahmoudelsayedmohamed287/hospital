<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>hospital project</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="frontEnd/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/nice-select.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/gijgo.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/animate.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/slicknav.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 ">
                            <div class="social_media_links">
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="#"> <i class="fa fa-envelope"></i> mahmoud@gmail.com</a></li>
                                    <li><a href="#"> <i class="fa fa-phone"></i> 01008730287</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="frontEnd/img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="{{ URL::to('/')}}">home</a></li>
                                        <li><a href="{{ URL::to('departments')}}">Department</a></li>
                                        
                                        <li><a href="{{ URL::to('doctors')}}">Doctors</a></li>
                                        <li><a href="{{ URL::to('about')}}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">
                                    <a  href="{{ URL::to('appointment')}}">Make an Appointment</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

<br>
<br>
<br>

   
      

       @yield('content')

      
<br>
<br>
<br>


<!-- footer start -->
<footer class="footer">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="footer_widget">
                                <div class="footer_logo">
                                    <a href="#">
                                        <img src="frontEnd/img/footer_logo.png" alt="">
                                    </a>
                                </div>
                                <p>
                                        Firmament morning sixth subdue darkness 
                                        creeping gathered divide.
                                </p>
                                <div class="socail_links">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="ti-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-twitter-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
    
                            </div>
                        </div>
                        <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                        Departments
                                </h3>
                                <ul>
                                    <li><a href="#">Eye Care</a></li>
                                    <li><a href="#">Skin Care</a></li>
                                    <li><a href="#">Pathology</a></li>
                                    <li><a href="#">Medicine</a></li>
                                    <li><a href="#">Dental</a></li>
                                </ul>
    
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-6 col-lg-2">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                        Useful Links
                                </h3>
                                <ul>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="{{ URL::to('about')}}"> Contact</a></li>
                                    <li><a href="{{ URL::to('appointment')}}"> Appointment</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-lg-3">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                        Address
                                </h3>
                                <p>
                                    cairo, EGYPT <br>
                                    01008730287 <br>
                                    mahmoud@gmail.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right_text">
                <div class="container">
                    <div class="footer_border"></div>
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="copy_right text-center">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">MAHMOUD</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
<!-- footer end  -->
    <!-- link that opens popup -->

  

    <!-- JS here -->
    <script src="{{asset('frontEnd')}}/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="{{asset('frontEnd')}}/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{asset('frontEnd')}}/js/popper.min.js"></script>
    <script src="{{asset('/frontEnd')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('frontEnd')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('frontEnd')}}/js/isotope.pkgd.min.js"></script>
    <script src="{{asset('frontEnd')}}/js/ajax-form.js"></script>
    <script src="{{asset('frontEnd')}}/js/waypoints.min.js"></script>
    <script src="{{asset('frontEnd')}}/js/jquery.counterup.min.js"></script>
    <script src="{{asset('frontEnd')}}/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{asset('frontEnd')}}/js/scrollIt.js"></script>
    <script src="{{asset('frontEnd')}}/js/jquery.scrollUp.min.js"></script>
    <script src="{{asset('frontEnd')}}/js/wow.min.js"></script>
    <script src="{{asset('frontEnd')}}/js/nice-select.min.js"></script>
    <script src="{{asset('frontEnd')}}/js/jquery.slicknav.min.js"></script>
    <script src="{{asset('frontEnd')}}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('frontEnd')}}/js/plugins.js"></script>
    <script src="{{asset('frontEnd')}}/js/gijgo.min.js"></script>
    <!--contact js-->
    <script src="{{asset('frontEnd')}}/js/contact.js"></script>
    <script src="{{asset('frontEnd')}}/js/jquery.ajaxchimp.min.js"></script>
    <script src="{{asset('frontEnd')}}/js/jquery.form.js"></script>
    <script src="{{asset('frontEnd')}}/js/jquery.validate.min.js"></script>
    <script src="{{asset('frontEnd')}}/js/mail-script.js"></script>

    <script src="{{asset('frontEnd')}}/js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }

        });
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
    </script>
</body>

</html>