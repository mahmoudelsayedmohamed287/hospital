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

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Health care</span> <br>
                                    For Hole Family </h3>
                                <p>In healthcare sector, service excellence is the facility of <br> the hospital as
                                    healthcare service provider to consistently.</p>
                                <a href="#" class="boxed-btn3">Check Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Health care</span> <br>
                                    For Hole Family </h3>
                                <p>In healthcare sector, service excellence is the facility of <br> the hospital as
                                    healthcare service provider to consistently.</p>
                                <a href="#" class="boxed-btn3">Check Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Health care</span> <br>
                                    For Hole Family </h3>
                                <p>In healthcare sector, service excellence is the facility of <br> the hospital as
                                    healthcare service provider to consistently.</p>
                                <a href="#" class="boxed-btn3">Check Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- service_area_start -->
    <div class="service_area">
        <div class="container p-0">
            <div class="row no-gutters">
                <div class="col-xl-4 col-md-4">
                    <div class="single_service">
                        <div class="icon">
                            <i class="flaticon-electrocardiogram"></i>
                        </div>
                        <h3>Hospitality</h3>
                        <p>Clinical excellence must be the priority for any health care service provider.</p>
                        <a href="{{asset('makebed')}}" class="boxed-btn3-white">Apply For a Bed</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service">
                        <div class="icon">
                            <i class="flaticon-emergency-call"></i>
                        </div>
                        <h3>Emergency Care</h3>
                        <p>Clinical excellence must be the priority for any health care service provider.</p>
                        <a href="#" class="boxed-btn3-white">+10 672 356 3567</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service">
                        <div class="icon">
                            <i class="flaticon-first-aid-kit"></i>
                        </div>
                        <h3>Chamber Service</h3>
                        <p>Clinical excellence must be the priority for any health care service provider.</p>
                        <a href="{{ URL::to('appointment')}}" class="boxed-btn3-white">Make an Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service_area_end -->

    <!-- welcome_docmed_area_start -->
    <div class="welcome_docmed_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-12">
                    <div class="welcome_thumb">
                        <div class="thumb_1">
                            <img src="frontEnd/img/about/1.png" alt="">
                        </div>
                        <div class="thumb_2">
                            <img src="frontEnd/img/about/2.png" alt="">
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-6 col-lg-12">
                    <div class="welcome_docmed_info">
                        <h2>Welcome to hospital</h2>
                        <h3>Best Care For Your <br>
                                Good Health</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem.
                                It esteems luckily or picture placing drawing. Apartments frequently or motionless on reasonable projecting expression.</p>
                        <ul>
                            <li> <i class="flaticon-right"></i> Apartments frequently or motionless. </li>
                            <li> <i class="flaticon-right"></i> Duis aute irure dolor in reprehenderit in voluptate.</li>
                            <li> <i class="flaticon-right"></i> Voluptatem quia voluptas sit aspernatur. </li>
                        </ul>
                        <a href="#" class="boxed-btn3-white-2">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    <!-- welcome_docmed_area_end -->

    <!-- offers_area_start -->
    <div class="our_department_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-55">
                        <h3>Our Departments</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem. <br>
                            It esteems luckily or picture placing drawing. </p>
                    </div>
                </div>
            </div>
            <div class="row">
            @foreach($data['departments'] as $department)
                <div class="col-xl-4 col-md-6 col-lg-4">
                
                    <div class="single_department">
                   
                        <div class="department_thumb">
                        
                            <img src="{{asset($department->image)}}" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="{{asset('departmentsdetails')}}/{{$department->id}}">{{$department->name}}</a></h3>
                            <p>{{$department->description}}</p>
                            <a href="{{asset('departmentsdetails')}}/{{$department->id}}" class="learn_more">Learn More</a>
                        </div>
                    </div>
                 
                </div>
                @endforeach
            </div>
          
        </div>
    </div>
    <!-- offers_area_end -->

    <!-- testmonial_area_start -->
    <div class="testmonial_area">
        <div class="testmonial_active owl-carousel">
            <div class="single-testmonial testmonial_bg_1 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="testmonial_info text-center">
                                <div class="quote">
                                    <i class="flaticon-straight-quotes"></i>
                                </div>
                                <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                                    sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                                    <br>
                                    Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                                <div class="testmonial_author">
                                    <h4>Asana Korim</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-testmonial testmonial_bg_2 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="testmonial_info text-center">
                                <div class="quote">
                                    <i class="flaticon-straight-quotes"></i>
                                </div>
                                <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                                    sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                                    <br>
                                    Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                                <div class="testmonial_author">
                                    <h4>Asana Korim</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-testmonial testmonial_bg_1 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="testmonial_info text-center">
                                <div class="quote">
                                    <i class="flaticon-straight-quotes"></i>
                                </div>
                                <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                                    sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                                    <br>
                                    Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                                <div class="testmonial_author">
                                    <h4>Asana Korim</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testmonial_area_end -->

    <!-- business_expert_area_start  -->
    <div class="business_expert_area">
        <div class="business_tabs_area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <ul class="nav" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                            aria-selected="true">Excellent Services</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                            aria-selected="false">Qualified Doctors</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                            aria-selected="false">Emergency Departments</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="border_bottom">
                    <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                
                                    <div class="row align-items-center">
                                            <div class="col-xl-6 col-md-6">
                                                <div class="business_info">
                                                    <div class="icon">
                                                        <i class="flaticon-first-aid-kit"></i>
                                                    </div>
                                                    <h3>Leading edge care for Your family</h3>
                                                    <p>Esteem spirit temper too say adieus who direct esteem.
                                                        It esteems luckily picture placing drawing. Apartments frequently or motionless on
                                                        reasonable projecting expression.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6">
                                                <div class="business_thumb">
                                                    <img src="frontEnd/img/about/business.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row align-items-center">
                                            <div class="col-xl-6 col-md-6">
                                                <div class="business_info">
                                                    <div class="icon">
                                                        <i class="flaticon-first-aid-kit"></i>
                                                    </div>
                                                    <h3>Leading edge care for Your family</h3>
                                                    <p>Esteem spirit temper too say adieus who direct esteem.
                                                        It esteems luckily picture placing drawing. Apartments frequently or motionless on
                                                        reasonable projecting expression.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6">
                                                <div class="business_thumb">
                                                    <img src="frontEnd/imgabout/business.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="row align-items-center">
                                            <div class="col-xl-6 col-md-6">
                                                <div class="business_info">
                                                    <div class="icon">
                                                        <i class="flaticon-first-aid-kit"></i>
                                                    </div>
                                                    <h3>Leading edge care for Your family</h3>
                                                    <p>Esteem spirit temper too say adieus who direct esteem.
                                                        It esteems luckily picture placing drawing. Apartments frequently or motionless on
                                                        reasonable projecting expression.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6">
                                                <div class="business_thumb">
                                                    <img src="frontEnd/imgabout/business.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                            </div>
                          </div>
            </div>
        </div>
    </div>
    <!-- business_expert_area_end  -->


    <!-- expert_doctors_area_start -->
    <div class="expert_doctors_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="doctors_title mb-55">
                        <h3>Expert Doctors</h3>
                    </div>
                </div>
            </div>
            <div class="row">
            @foreach($data['expertdoctors'] as $expertdoctor )
            <div class="col-xl-4 col-md-6 col-lg-4">
                   
                    
                        <div class="single_expert">
                            <div class="expert_thumb">
                                <img src="{{asset($expertdoctor->image)}}" alt="">
                            </div>
                            <div class="experts_name text-center">
                                <h3>{{$expertdoctor->name}}</h3>
                                <span>{{$expertdoctor->department_name}}</span>
                            </div>
                        </div>
                        </div>
                        @endforeach
                    </div>
                  
                </div>
                
       
    </div>
    <!-- expert_doctors_area_end -->

    <!-- Emergency_contact start -->
    <div class="Emergency_contact">
        <div class="conatiner-fluid p-0">
            <div class="row no-gutters">
                <div class="col-xl-6">
                    <div class="single_emergency d-flex align-items-center justify-content-center emergency_bg_1 overlay_skyblue">
                        <div class="info">
                            <h3>For Any Emergency Contact</h3>
                            <p>Esteem spirit temper too say adieus.</p>
                        </div>
                        <div class="info_button">
                            <a href="#" class="boxed-btn3-white">+10 378 4673 467</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="single_emergency d-flex align-items-center justify-content-center emergency_bg_2 overlay_skyblue">
                        <div class="info">
                            <h3>Make an Online Appointment</h3>
                            <p>Esteem spirit temper too say adieus.</p>
                        </div>
                        <div class="info_button">
                            <a href="{{ URL::to('appointment')}}" class="boxed-btn3-white">Make an Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Emergency_contact end -->

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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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