<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Vietnam Cambodia Laos Thailand Myanmar China Tours, Travel Guide  & Holidays || Asianventure Tours</title>
    <meta name="description" content="Offering Vietnam Cambodia Laos Thailand Myanmar China tours, travel guide, Flights, booking hotels for holidays in Vietnam Cambodia Laos Thailand Myanmar China"/>
    <meta name="keywords" content="Vietnam Tours, Laos Tours, Cambodia tours, Thailand Tours, Myanmar Tours, China Tours, Vietnam and Cambodia tours,Vietnam and Laos tours,Cambodia and Laos tours,Thailand and Myanmar tours"/>
    <meta name="robots" content="index,follow"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/social.css">
    <link rel="stylesheet" href="css/prettyphoto.css">
    <link rel="stylesheet" href="css/domtab_test.css">
    <link rel="stylesheet" href="Font-Awesome-master/css/font-awesome.css">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">
    <link href="css/freelancer_mobile.css" rel="stylesheet">


    <!--chay slide 3 trang index-->
    <script src="js/sliderjs/jquery-1.js"></script>

    <!-- Bootstrap Core JavaScript chay slide trang index-->
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript" >

        $(document).ready(function() {
            $('#showsearch').click(function() {
                $('.header_search').toggle();
            });
        });

        /*script stick on top*/
        $(function() {

            // grab the initial top offset of the navigation
            var sticky_navigation_offset_top = $('#sticky_navigation').offset().top;

            // our function that decides weather the navigation bar should have "fixed" css position or not.
            var sticky_navigation = function(){
                var scroll_top = $(window).scrollTop(); // our current vertical position from the top

                // if we've scrolled more than the navigation, change its position to fixed to stick to top, otherwise change it back to relative
                if (scroll_top > sticky_navigation_offset_top) {
                    $('#sticky_navigation').css({ 'position': 'fixed', 'top':0, 'left':0 });
                } else {
                    $('#sticky_navigation').css({ 'position': 'relative' });
                }
            };

            // run our function on load
            sticky_navigation();

            // and run it again every time you scroll
            $(window).scroll(function() {
                sticky_navigation();
            });

            // NOT required:
            // for this demo disable all links that point to "#"
            $('a[href="#"]').click(function(event){
                event.preventDefault();
            });

        });

        $(document).click(function (event) {
            var clickover = $(event.target);
            menu_content=clickover.closest('#menu-content');
            var _opened = $("#menu-content").hasClass("collapse in");
            if (_opened === true && !clickover.hasClass("menu-content")&&!menu_content.hasClass('menu-content')) {
                $(".navbar-toggle").click();
            }
        });

        /*script chay scroll news*/
        $(function() {
            var ele   = $('#scroll');
            var speed = 200, scroll = 5, scrolling;

            $('#scroll-up').mouseenter(function() {
                // Scroll the element up
                scrolling = window.setInterval(function() {
                    ele.scrollTop( ele.scrollTop() - scroll );
                }, speed);
            });

            $('#scroll-down').mouseenter(function() {
                // Scroll the element down
                scrolling = window.setInterval(function() {
                    ele.scrollTop( ele.scrollTop() + scroll );
                }, speed);
            });

            $('#scroll-up, #scroll-down').bind({
                click: function(e) {
                    // Prevent the default click action
                    e.preventDefault();
                },
                mouseleave: function() {
                    if (scrolling) {
                        window.clearInterval(scrolling);
                        scrolling = false;
                    }
                }
            });
        });

    </script>

</head>
<body id="page-top">

<!-- Begin Header -->

<header class="visible-xs">

<div class="navbar-fixed-top">
    <nav class="navbar navbar-inverse" style="border-bottom: none">
        <div class="container-fluid">
            <div class="row">
                <div  class="col-xs-5 mobile_nopadding">
                    <div style="float: left; margin:0; padding:5px 0 0 10px; display: block; font-size: 13px; font-weight: bold">
                        Asianventure Tours
                        <img src="img/common/logo_mobile.png" style="position: absolute; top:20px; left: 10px">
                    </div>
                </div>
                <div class="col-xs-4 mobile_nopadding">
                    <div style="display: block; text-align:right; padding-top:8px">
                        <i class="fa fa-heart" style="font-size:22px;"></i>
                        <i class="fa fa-phone-square" style="font-size:22px;"></i>
                        <a href="#" style="color: #FFFFFF"><i class=" fa fa-search" style="font-size:22px;" id="showsearch"></i></a>
                    </div>
                </div>
                <div class="col-xs-3 nomarginpadding">
                    <div style="float:right; margin:0 -15px 0 0; padding:0 0 0 0; height:40px; width: 90px; background: #006666;">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-content" style="padding-top:10px; margin: 0">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#" style="font-size: 12px; float: left" data-toggle='collapse' data-target="#menu-content">MENU</a>
                    </div>
                </div>

            </div>
        </div>
    </nav>
    <div class="nav-side-menu">
        <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse out">
                <li style="background: #a9a9a9">
                    <div class="row" style="padding:0 0 5px 0">
                        <div class="col-xs-10 col-xs-offset-1">
                            <div id="imaginary_container">
                                <div class="input-group stylish-input-group">
                                    <input type="text" class="form-control"  placeholder="Search" >
                                                <span class="input-group-addon">
                                                    <button type="submit">
                                                        <span class="glyphicon glyphicon-search"></span>
                                                    </button>
                                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#"><i class="fa fa-home fa-lg"></i>Home page</a>
                </li>

                <li data-toggle="collapse" data-target="#asianventure" class="collapsed">
                    <a href="#"><i class="fa fa-puzzle-piece fa-lg"></i> Asianventure<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="asianventure">
                    <li><a href="http://www.asianventure.com/common/profile.html">About Company</a></li>
                    <li><a href="http://www.asianventure.com/">Responsible Tourism</a></li>
                    <li><a href="http://www.asianventure.com/">Comapny Media</a></li>
                    <li><a href="http://www.asianventure.com/">Job Oppertunities</a></li>
                    <li><a href="http://www.asianventure.com/">Company Award</a></li>
                </ul>

                <li data-toggle="collapse" data-target="#community" class="collapsed">
                    <a href="#"><i class="fa fa-share-alt fa-lg"></i> Community<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="community">
                    <li><a href="http://www.asianventure.com/common/condition.html">Booking Conditions</a></li>
                    <li><a href="http://www.asianventure.com/common/privacy.html">Privacy Policy</a></li>
                    <li><a href="http://www.asianventure.com/testimonial/index.html">Feedback</a></li>
                    <li><a href="http://www.asianventure.com/common/contact_enquiry.html">Brochure Request</a></li>
                </ul>


                <li data-toggle="collapse" data-target="#destination" class="collapsed">
                    <a href="#">
                        <i class="fa fa-globe fa-lg"></i> Destination<span class="arrow"></span>
                    </a>
                </li>
                <ul class="sub-menu collapse" id="destination">
                    <li><a href="/vietnam.html">Vietnam</a></li>
                    <li><a href="http://www.asianventure.com/laos.html">Laos</a></li>
                    <li><a href="http://www.asianventure.com/cambodia.html">Cambodia</a></li>
                    <li><a href="http://www.asianventure.com/thailand.html">Thailand</a></li>
                    <li><a href="http://www.asianventure.com/myanmar.html">Myanamr</a></li>
                    <li><a href="http://www.asianventure.com/china.html">China</a></li>
                </ul>

                <li data-toggle="collapse" data-target="#packagetours" class="collapsed">
                    <a href="#">
                        <i class="fa fa-umbrella fa-lg"></i> Package Tours<span class="arrow"></span>
                    </a>
                </li>
                <ul class="sub-menu collapse" id="packagetours">
                    <li><a href="http://www.asianventure.com/vietnam/tour/index.html">Vietnam Tours</a></li>
                    <li><a href="http://www.asianventure.com/laos/tour/index.html">Laos Tours</a></li>
                    <li><a href="http://www.asianventure.com/cambodia/tour/index.html">Cambodia Tours</a></li>
                    <li><a href="http://www.asianventure.com/thailand/tour/index.html">Thailand Tours</a></li>
                    <li><a href="http://www.asianventure.com/myanmar/tour/index.html">Myanamr Tours</a></li>
                    <li><a href="http://www.asianventure.com/yunnan.html">China Tours</a></li>
                </ul>

                <li data-toggle="collapse" data-target="#hotels" class="collapsed">
                    <a href="#">
                        <i class="fa fa-hotel fa-lg"></i> Hotels<span class="arrow"></span>
                    </a>
                </li>
                <ul class="sub-menu collapse" id="hotels">
                    <li><a href="http://www.asianventure.com/vietnam/hotel/index.html">Vietnam Hotels</a></li>
                    <li><a href="http://www.asianventure.com/laos/hotel/index.html">Laos Hotels</a></li>
                    <li><a href="http://www.asianventure.com/cambodia/hotel/index.html">Cambodia Hotels</a></li>
                    <li><a href="http://www.asianventure.com/thailand/hotel/index.html">Thailand Hotels</a></li>
                    <li><a href="http://www.asianventure.com/myanmar/hotel/index.html">Myanamr Hotels</a></li>
                    <li><a href="http://www.asianventure.com/yunnan.html">China Hotels</a></li>
                </ul>

                <li data-toggle="collapse" data-target="#flights" class="collapsed">
                    <a href="#">
                        <i class="fa fa-plane fa-lg"></i> Flights<span class="arrow"></span>
                    </a>
                </li>
                <ul class="sub-menu collapse" id="flights">
                    <li><a href="http://www.asianventure.com/vietnam/flight/index.html">Vietnam Flights</a></li>
                    <li><a href="http://www.asianventure.com/laos/flight/index.html">Laos Flights</a></li>
                    <li><a href="http://www.asianventure.com/cambodia/flight/index.html">Cambodia Flights</a></li>
                    <li><a href="http://www.asianventure.com/thailand/flight/index.html">Thailand Flights</a></li>
                    <li><a href="http://www.asianventure.com/myanmar/flight/index.html">Myanamr Flights</a></li>
                    <li><a href="http://www.asianventure.com/yunnan.html">China Flights</a></li>
                </ul>

                <li data-toggle="collapse" data-target="#carrental" class="collapsed">
                    <a href="#">
                        <i class="fa fa-car fa-lg"></i> Car Rental<span class="arrow"></span>
                    </a>
                </li>
                <ul class="sub-menu collapse" id="carrental">
                    <li><a href="http://www.asianventure.com/vietnam/travel/vietnam_car_rental.html">Vietnam Car Rental</a></li>
                    <li><a href="http://www.asianventure.com/laos/travel/laos_car_rental.html">Laos Car Rental</a></li>
                    <li><a href="http://www.asianventure.com/cambodia/travel/cambodia_car_rental.html">Cambodia Car Rental</a></li>
                    <li><a href="http://www.asianventure.com/thailand/travel/thailand_car_rental.html">Thailand Car Rental</a></li>
                    <li><a href="http://www.asianventure.com/myanmar/travel/myanmar_car_rental.html">Myanamr Car Rental</a></li>
                    <li><a href="http://www.asianventure.com/china.html">China Car Rental</a></li>
                </ul>

                <li data-toggle="collapse" data-target="#hotdeals" class="collapsed">
                    <a href="http://www.asianventure.com/">
                        <i class="fa fa-suitcase fa-lg"></i> Hotdeals<span class="arrow"></span>
                    </a>
                </li>
                <ul class="sub-menu collapse" id="hotdeals">
                    <li><a href="http://www.asianventure.com/">Vietnam Hotdeals</a></li>
                    <li><a href="http://www.asianventure.com/">Laos Hotdeals</a></li>
                    <li><a href="http://www.asianventure.com/">Cambodia Hotdeals</a></li>
                    <li><a href="http://www.asianventure.com/">Thailand Hotdeals</a></li>
                    <li><a href="http://www.asianventure.com/">Myanamr Hotdeals</a></li>
                    <li><a href="http://www.asianventure.com/">China Hotdeals</a></li>
                </ul>


                <li data-toggle="collapse" data-target="#travelguide" class="collapsed">
                    <a href="#">
                        <i class="fa fa-info-circle fa-lg"></i> Travel Guide<span class="arrow"></span>
                    </a>
                </li>
                <ul class="sub-menu collapse" id="travelguide">
                    <li><a href="http://www.asianventure.com/vietnam/guide/index.html">Vietnam Travel Guide</a></li>
                    <li><a href="http://www.asianventure.com/laos/guide/index.html">Laos Travel Guide</a></li>
                    <li><a href="http://www.asianventure.com/cambodia/guide/index.html">Cambodia Travel Guide</a></li>
                    <li><a href="http://www.asianventure.com/thailand/guide/index.html">Thailand Travel Guide</a></li>
                    <li><a href="http://www.asianventure.com/myanmar/guide/index.html">Myanamr Travel Guide</a></li>
                    <li><a href="http://www.asianventure.com/yunnan/guide/index.html">China Travel Guide</a></li>
                </ul>

                <li>
                    <a href="#">
                        <i class="fa fa-sign-in fa-lg"></i> My Travel | Agent Login
                    </a>
                </li>

                <div class="tri-down" style="height: 40px; line-height: 17px; color: #FFFFFF">
                    Contact |  Enquiry
                </div>
                <div>
                    <p style="line-height: 15px; text-align: justify;padding: 0 10px 10px 10px; font-size: 13px; color: #FFFFFF">
                        &copy; 2015-2020 Asianventure Tours<br>
                        Hotline:+84.944567788 (Vietnam)<br>
                        E-mail: info@asianventure.com </p>
                </div>
            </ul>
        </div>
    </div>
</div>

<div style="margin-top:40px">
    <img src="img/common/siemreap.jpg" width="100%">
</div>

<div class="header_search" style="display: none; background-color: #efe9e9; padding-bottom: 10px">
    <h6 style="margin:0; padding:10px 0; color: #666666">Search Tours</h6>
    <form class="form-horizontal" role="form">
        <div class="form-group">
            <div class="col-xs-10 col-xs-offset-1">
                <input type="text" class="form-control" id="inputfield1" placeholder="All Destination">
            </div>
            <div class="col-xs-10 col-xs-offset-1 margintop10">
                <input type="text" class="form-control" id="inputfield2" placeholder="Any Length">
            </div>
            <div class="col-xs-10 col-xs-offset-1 margintop10">
                <input type="text" class="form-control" id="inputfield3" placeholder="Any Time">
            </div>
            <div class="col-xs-10 col-xs-offset-1 margintop10">
                <input type="text" class="form-control" id="inputfield4" placeholder="Keywords">
            </div>
            <div class="col-xs-10 col-xs-offset-1 margintop10">
                <button type="button" class="btn btn-primary btn-block">Go</button>
            </div>
        </div>


    </form>
</div>

</header>

<!-- End Header -->



<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll visible-xs visble-sm">
    <a class="btn btn-grey" href="#page-top">
        <i class="fa fa-chevron-up setoff"></i>
    </a>
</div>


<script src="js/sliderjs/bjqs-1.js"></script>
</body>

</html>