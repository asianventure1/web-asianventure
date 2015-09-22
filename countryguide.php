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

    <!--css cho slide 3-->
    <link href="css/slider.css" rel="stylesheet">

    <!--chay slide 3 trang index-->
    <script src="js/sliderjs/jquery-1.js"></script>
    <script src="js/sliderjs/jquery_002.js"></script>
    <script src="js/sliderjs/customize.js"></script>

    <!-- Bootstrap Core JavaScript chay slide trang index-->
    <script src="js/bootstrap.min.js"></script>


    <!--slide inspiration destination in homepage-->
    <script src="js/prettyphoto/jquery.flexslider-min.js" type="text/javascript"></script>
    <script src="js/prettyphoto/js/jquery.prettyphoto.js" type="text/javascript"></script>
    <script src="js/prettyphoto/init.js" type="text/javascript"></script>
    <!--slide inspiration destination in homepage-->

    <script type="text/javascript" src="js/domtab.js"></script>
    <!-- hien thi palcehoder trong element input-->
    <script src="js/jquery.placeholder.1.3.min.js"></script>
    <script type="text/javascript">
        // Mock client code for testing purpose
        $(function(){
            // Client should be able to add another change event to the textfield
            //$("input[name='input1']").blur(function(){ alert("Custom event triggered."); });
            // Client should be able to set the field's styles, without affecting place holder
            //$("input[name='Name']").css("color", "red");
            // Initialize placeholder
            $.Placeholder.init();
            // or try initialize with parameter
            //$.Placeholder.init({ color : 'rgb(255, 255, 0)' });
            // call this before form submit if you are submitting by JS
            //$.Placeholder.cleanBeforeSubmit();
        });
    </script>
    <script type="text/javascript">
        function customtrip()
        {
            window.open("http://www.asianventure.com/contact/customtrip.php",'customtrip',"status=no,toolbar=no,location=no,directories=no,copyhistory=no,menu=no, resizable=no, scrollbars=yes,top=40, left=20, width=620, height=620");
        }

        function chatclose2()
        {
            document.getElementById('divShock').style.display = 'none';
            customtrip();
        }
    </script>
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
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
        function initialize() {
            var mapCanvas = document.getElementById('map-canvas1');
            var mapOptions = {
                center: new google.maps.LatLng(16.76485, 105.22201),
                zoom: 5,
                scrollwheel: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(mapCanvas, mapOptions)
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>
<body id="page-top">

<!--<div class="fixed-position fixed-s-e" id="divShock">
    <script type="text/javascript" src="http://www.asianventure.net/visitor/index.php?_m=livesupport&amp;_a=htmlcode&amp;departmentid=0"></script>
    <a href="javascript:chatclose2();" id="divShockClose" style="position:absolute; top:0; right:10px">
        <img src="http://www.asianventure.net/themes/client_default/close.gif" border="0" alt="close"/>
    </a>
</div>-->
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
                    <li><a href="http://www.asianventure.com/vietnam.html">Vietnam</a></li>
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

<header class="hidden-xs">
<div id="banner">
    <div class="container">
        <div class="col-md-3 col-sm-6 hidden-xs"><img src="img/common/logo_asianventure.jpg"></div>
        <div class="col-md-6 col-sm-6 col-md-offset-3">
            <div class="row">
                <div class="col-md-6 col-md-offset-6">
                    <img src="img/common/callcenter.jpg">
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-5">
                    <ul class="headmenu">
                        <li><a href="http://www.asianventure.com"><i class="fa fa-heart-o"></i> My shortlist</a></li>
                        <li><a href="http://www.asianventure.com"><i class="fa fa-key"></i> My Account</a></li>
                        <li><a href="http://www.asianventure.com/common/contact_enquiry.html"><i class="fa fa-envelope-o"></i> Enquiry</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="sticky_navigation_wrapper">
    <div id="sticky_navigation">
        <nav class="navbar navbar-inverse" id="navbar">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="myNavbar">
                    <div class="container paddingright5">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="http://www.asianventure.com">Home <span class="caret"></span></a>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Asianventure <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a  href="http://www.asianventure.com/common/profile.html">About Company</a></li>
                                    <li><a  href="http://www.asianventure.com/common/asianventure.html">Responsible Tourism</a></li>
                                    <li><a  href="http://www.asianventure.com/common">Comapny Media</a></li>
                                    <li><a  href="http://www.asianventure.com">Job Oppertunities</a></li>
                                    <li><a  href="http://www.asianventure.com">Company Award</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Destination <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a  href="http://www.asianventure.com/vietnam.html">Vietnam</a></li>
                                    <li><a  href="http://www.asianventure.com/laos.html">Laos</a></li>
                                    <li><a  href="http://www.asianventure.com/cambodia.html">Cambodia</a></li>
                                    <li><a  href="http://www.asianventure.com/thailand.html">Thailand</a></li>
                                    <li><a  href="http://www.asianventure.com/myanamr.html">Myanamar</a></li>
                                    <li><a  href="http://www.asianventure.com/china.html">China</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Community <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a  href="http://www.asianventure.com/common/condition.html">Booking Conditions</a></li>
                                    <li><a  href="http://www.asianventure.com/common/privacy.html">Privacy Policy</a></li>
                                    <li><a  href="http://www.asianventure.com/common/condition.html">Term and Conditions</a></li>
                                    <li><a  href="http://www.asianventure.com/testimonial/index.html">Feedback</a></li>
                                    <li><a  href="http://www.asianventure.com/common/contact_enquiry.html">Brochure Request</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a  href="#">Travel Style<span class="caret"></span></a>
                            </li>

                            <li class="dropdown">
                                <a href="http://www.asianventure.com/">Inspiration<span class="caret"></span></a>
                            </li>

                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tour Packages<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a  href="http://www.asianventure.com/vietnam/tour/index.html">Vietnam Tours</a></li>
                                    <li><a  href="http://www.asianventure.com/laos/tour/index.html">Laos Tours</a></li>
                                    <li><a  href="http://www.asianventure.com/cambodia/tour/index.html">Cambodia Tours</a></li>
                                    <li><a  href="http://www.asianventure.com/thailand/tour/index.html">Thailand Tours</a></li>
                                    <li><a  href="http://www.asianventure.com/myanmar/tour/index.html">Myanmar Tours</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Travel Guide <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a  href="http://www.asianventure.com/vietnam/guide/index.html">Vietnam Travel Guide</a></li>
                                    <li><a  href="http://www.asianventure.com/laos/guide/index.html">Laos Travel Guide</a></li>
                                    <li><a  href="http://www.asianventure.com/cambodia/guide/index.html">Cambodia Travel Guide</a></li>
                                    <li><a  href="http://www.asianventure.com/thailand/guide/index.html">Thailand Travel Guide</a></li>
                                    <li><a  href="http://www.asianventure.com/myanmar/guide/index.html">Myanmar Travel Guide</a></li>
                                    <li><a  href="http://www.asianventure.com/yunnan/guide/index.html">China Travel Guide</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="http://www.asianventure.com">Lodging<span class="caret"></span></a>
                            </li>

                            <li class="dropdown">
                                <a  href="http://www.asianventure.com">Hot Deals<span class="caret"></span></a>
                            </li>

                            <li class="dropdown">
                                <a  href="http://www.asianventure.com">Travel Blog</a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Agent</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
<div class="container-fluid nomarginpadding" style="position: relative; top:-5px">
    <div id=carousel-example-generic class="carousel hidden-xs" data-ride=carousel>
        <!-- Wrapper for slides -->
        <div class=carousel-inner style="z-index: 10!important;">
            <div class="item active"><img src="img/common/siemreap.jpg" width="100%">
                <div class="carousel-caption">
                       <span class="title-baner"><b>Tailor Made Journeys<br>
                               in Vietnam</b></span>
                </div>
            </div>
            <div class=item><img src="img/common/halong.jpg" width="100%">
                <div class=carousel-caption>
                        <span class="title-baner"><b>Fantastic Holidays<br>
                                and Low Price</b></span>
                </div>
            </div>
            <div class=item><img src="img/common/sapa.jpg" width="100%">
                <div class=carousel-caption>
                        <span class="title-baner"><b>Intriguing Vietnam<br>
                                Tours Activities</b></span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="col-md-11 col-centered headerbox">
                <h3 class="color-blue paddingtop10">SEARCH TOURS</h3>
                <div class="row" style="display: inline">
                    <div class="col-centered">
                        <form class="form-inline" role="form">
                            <div class="col-md-3 nomarginpadding">
                                <div class="input-group input-group-sm">
                                    <i class="fa fa-map-marker fa-2x" style="color: #cccccc; float: left; margin-right: 3px"></i>
                                    <select name="destination" id="destination" class="form-control" style="width: 170px">
                                        <option value="">All destinations</option>
                                        <option value="vietnam">Vietnam</option>
                                        <option value="laos">Laos</option>
                                        <option value="cambodia">Cambodia</option>
                                        <option value="cambodia">Laos</option>
                                        <option value="cambodia">Thaland</option>
                                        <option value="cambodia">Myanmar</option>
                                        <option value="cambodia">China</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 nomarginpadding">
                                <div class="input-group input-group-sm">
                                    <i class="fa fa-calendar fa-2x" style="color: #cccccc; float: left; margin-right: 3px"></i>
                                    <select name="date_deb" id="date_deb" class="form-control" style="width: 170px;">
                                        <option value="">Any length</option>
                                        <option value="1">1-3 Days</option>
                                        <option value="1">3-5 Days</option>
                                        <option value="1">5-9 Days</option>
                                        <option value="1">9-14 Days</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 nomarginpadding">
                                <div class="input-group input-group-sm">
                                    <i class="fa fa-calendar fa-2x" style="color: #cccccc; float: left; margin-right: 3px"></i>
                                    <select name="date_1" id="date_1" class="form-control" style="width: 170px">
                                        <option value="">Any time</option>
                                        <option value="1">January</option>
                                        <option value="2">February</option>
                                        <option value="3">March</option>
                                        <option value="4">April</option>
                                        <option value="5">May</option>
                                        <option value="6">Jun</option>
                                        <option value="7">July</option>
                                        <option value="8">August</option>
                                        <option value="9">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 nomarginpadding">
                                <div class="input-group input-group-sm">
                                    <i class="fa fa-map-marker fa-2x" style="color: #cccccc; display: inline; float: left; margin-right: 3px"></i>
                                    <input class="form-control" id="keywords" Placeholder="Keywords" type="text" style="width: 170px">
                                </div>
                            </div>
                            <div style="clear: both">
                                <button type="submit" class="btn btn-info btn-xs" title="" style="display: inline; margin:3px 0 0 0; height: 22px; float: right; margin-right: 30px">GO</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row headbg">
    <h1 class="headlinecountry">VIETNAM TRAVEL GUIDE</h1>
</div>
</header>
<!-- End Header -->


<!-- Begin Body -->
<div class="container margintop70 mobile_nomargintop">
<!--intro-->
<div class="bs-section">
    <div class="row">
        <div class="col-md-4" style="padding-right: 0">
            <h2 class="font22 font-normal color-green"><i class="fa fa-puzzle-piece fa-2x color-green"></i> Vietnam Overview</h2>
            <div class="tours-overview">
                <div class="introcontent">
                    <p>The setting of the most protested and controversial war of the second half of the 20th century, Vietnam is once again hosting thousands of Americans - but this time they're armed with money, not guns. And they are not alone, as travellers from around the world are flocking to Vietnam. Perhaps partly due to the memory of the Vietnam War, travel in Vietnam is cheap and only just on its way into fruition. But change seems to occur at a rapid rate in Vietnam, as the country busily promotes its palette of offerings: a culture kept bravely alive, hot white beaches,.... <a href="" class="read-more"> Read more</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="padding-right: 0">
            <h2 class="font22 font-normal color-green"><i class="fa fa-puzzle-piece fa-2x color-green"></i> Vietam Photos</h2>
            <div class="tours-overview">
                <div class="introcontent1">
                    <p>Vietnam is a country full of photographic opportunities. The landscape is diverse and includes a very long and beautiful coastline, karstic rock formations, and mountains. Because Vietnam is just doing its first steps in the modern world (unlike Thailand or China which are much more developed) there are still plenty of opportunities to observe traditional lifestyles and traditions. People have an amazing ethnic diversity and most like to be photographed. There is also interesting architecture all around the country,
                        Now is a good time to visit Vietnam in a few years,.... <a href="" class="read-more"> Read more</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="padding-right: 0">
            <h2 class="font22 font-normal color-green"><i class="fa fa-puzzle-piece fa-2x color-green"></i> Vietnam Itinerary</h2>
            <div class="tours-overview"  style="border-right: none">
                <div class="introcontent2">
                    <p>The narrow S-curve of coastal Vietnam makes itinerary planning quite simple: You're going either south to north or north to south. Hearty backpackers take at least a month (if not more) going by "open tour bus" and/or other local transport, while jet-hopping tour groups cover the highlights in as little as a week to 10 days.
                        If you have just 4 or 5 days, base yourself out of either Hanoi or Ho Chi Minh City. With any itinerary, try to give yourself a good amount of flextime for days of rest at a beach, tummy trouble, or chance meetings, side trips, and inspirations along the way,.... <a href="" class="read-more"> Read more</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--online vietnam travel tips -->
<div class="row bs-section">
<h2 class="text-center font22">ONLINE VIETNAM TRAVEL TIPS </h2>
    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 ui-sortable  paddingright6">
        <div class="tile-stats-1 b brall">
            <a href=#>
                <div class=tile-stats-1-content>
                    <img src="img/common/travelguide_passport.png">
                    <div class="tile-stats-1-number font14 margintop20">Vietnam Passport<br>& Visa</div>
                </div>
                <div class=clearfix></div>
            </a>
        </div>
    </div>

    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 ui-sortable  paddingleft6 paddingright6">
        <div class="tile-stats-1 b brall">
            <a href=#>
                <div class=tile-stats-1-content>
                    <img src="img/common/travelguide_weather.png">
                    <div class="tile-stats-1-number font14 margintop20">Vietnam Weather<br> & Time to Go </div>
                </div>
                <div class=clearfix></div>
            </a>
        </div>
    </div>

    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 ui-sortable  paddingleft6 paddingright6">
        <div class="tile-stats-1 b brall">
            <a href=#>
                <div class=tile-stats-1-content>
                    <img src="img/common/travelguide_vietnamhealth.png">
                    <div class="tile-stats-1-number font14 margintop20">Vietnam Health<br> & Safety </div>
                </div>
                <div class=clearfix></div>
            </a>
        </div>
    </div>

    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 ui-sortable paddingleft6 paddingright6">
        <div class="tile-stats-1 b brall">
            <a href=#>
                <div class=tile-stats-1-content>
                    <img src="img/common/travelguide_advise.png">
                    <div class="tile-stats-1-number font14 margintop20">Vietnam Travel<br> Advice </div>
                </div>
                <div class=clearfix></div>
            </a>
        </div>
    </div>

    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 ui-sortable paddingleft6 paddingright6">
        <div class="tile-stats-1 b brall">
            <a href=#>
                <div class=tile-stats-1-content>
                    <img src="img/common/travelguide_information.png">
                    <div class="tile-stats-1-number font14 margintop20">Vietnam Background<br> Informtion </div>
                </div>
                <div class=clearfix></div>
            </a>
        </div>
    </div>

    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 paddingleft6">
        <div class="tile-stats-1 b brall">
            <a href=#>
                <div class=tile-stats-1-content>
                    <img src="img/common/travelguide_faq.png">
                    <div class="tile-stats-1-number font14 margintop20">Travel Questions</div>
                    <div class="tile-stats-1-text font14 paddingtop5">& Answer</div>
                </div>
                <div class=clearfix></div>
            </a>
        </div>
    </div>


</div>
<!-- destinations in vietnam-->
<div class="row margintop40" id="topplace">
    <div class="peak-product-component-content">
        <div class="row nomarginpadding">
            <div class="col-md-3 destination nopaddingright">
                <a href="">
                    <img src="img/common/travelguide_hanoi.jpg"  width="100%" height="163">
                    <span class="top-dest-title-city-top">Hanoi Travel Guide</span>
                </a>
            </div>
            <div class="col-md-3 destination nopaddingleft nopaddingright">
                <a href="">
                    <img src="img/common/travelguide_halong.jpg"  width="100%" height="163">
                    <span class="top-dest-title-city-bottom">Halong Travel Guide</span>
                </a>
            </div>
            <div class="col-md-3 destination nopaddingright nopaddingleft">
                <a href="">
                    <img src="img/common/travelguide_hagiang.jpg"  width="100%" height="163">
                    <span class="top-dest-title-city-top">Ha Giang Travel Guide</span>
                </a>
            </div>
            <div class="col-md-3 destination nopaddingleft">
                <a href="">
                    <img src="img/common/travelguide_hue.jpg"  width="100%" height="163">
                    <span class="top-dest-title-city-bottom">Hue Travel Guide</span>
                </a>
            </div>
            <div class="col-md-3 destination nopaddingright">
                <a href="">
                    <img src="img/common/travelguide_sapa.jpg"  width="100%" height="163">
                    <span class="top-dest-title-city-bottom">Sapa Travel Guide</span>
                </a>
            </div>
            <div class="col-md-6 destination nopaddingleft nopaddingright hidden-xs">

                <div class="col-md-3 nopaddingleft nopaddingright">
                    <img src="img/common/travelguide_muine.jpg" width="100%" height="163" style="padding: 1px">
                    <span class="top-dest-title-city-bottom">Muine</span>
                </div>
                <div class="col-md-6">
                    <div style="background: #006699; height: 161px; margin-top: 1px;text-align: center;" class="row">
                        <p class="top-dest-title-city-center-b font22">VIETNAM</p>
                        <span class="top-dest-title-city-bottom_travelguide "><h3 class="font14">TOP DESTINATION</h3></span>
                    </div>
                </div>
                <div class="col-md-3 nopaddingleft nopaddingright">
                    <img src="img/common/travelguide_phuquoc.jpg" width="100%" height="163" style="padding: 1px">
                    <span class="top-dest-title-city-bottom">Phu quoc</span>
                </div>

            </div>
            <div class="col-md-3 destination nopaddingleft">
                <a href="">
                    <img src="img/common/travelguide_mekong.jpg"  width="100%"  height="163">
                    <span class="top-dest-title-city-bottom">Mekong Travel Guide</span>
                </a>
            </div>
            <div class="col-md-3 destination nopaddingright">
                <a href="">
                    <img src="img/common/travelguide_hoian.jpg"  width="100%"  height="163">
                    <span class="top-dest-title-city-bottom">Hoian Travel Guide</span>
                </a>
            </div>
            <div class="col-md-3 destination nopaddingleft nopaddingright">
                <a href="">
                    <img src="img/common/travelguide_nhatrang.jpg" width="100%"  height="163">
                    <span class="top-dest-title-city-bottom">Nha Trang Travel Guide</span>
                </a>
            </div>
            <div class="col-md-3 destination nopaddingleft nopaddingright">
                <a href="">
                    <img src="img/common/travelguide_hochiminh.jpg" width="100%"  height="163">
                    <span class="top-dest-title-city-bottom">Ho Chi Minh Travel Guide</span>
                </a>
            </div>
            <div class="col-md-3 destination nopaddingleft">
                <a href="">
                    <img src="img/common/travelguide_dalat.jpg" width="100%"  height="163">
                    <span class="top-dest-title-city-bottom">Dalat Travel Guide</span>
                </a>
            </div>
        </div>
    </div>
</div>
<!--customized-->
<div class="row margintop40" style="position: relative">
    <div class="customized_submit">
        <div class="row">
            <img src="img/common/icon_white_line.png" style="position: absolute; top: 50px; left:44%" width="110" height="1px">
            <div class="col-md-6 col-left" style="padding-bottom:20px">
                <span>Sign Up  to our  Newsletter and Offers</span>
                <form class="form-inline">
                    <div class="form-group">
                        <label class="sr-only" for="inputEmail">Enter name</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="inputPassword">Enter e-mail address</label>
                        <input type="text" class="form-control" id="inputPassword" placeholder="Enter e-mail address">
                    </div>
                    <button type="submit" class="btn btn-success"><p style="margin: 0; padding:3px 15px" class="text-uppercase"><strong>Submit</strong></p></button>
                </form>
            </div>
            <div class="col-md-6">
                <div class="row col-right">
                    <div class="col-md-2 col-xs-2"><i class="fa fa-umbrella fa-5x"></i></div>
                    <div class="col-md-6 col-xs-6 nomarginpadding"><a href="javascript:customtrip()" style="color: #FFFFFF"><p class="text-uppercase font22 paddingtop30 mobile_nopadding font12h mobile_padding15"><strong>Customized Trips</strong></p></a></div>
                    <div class="col-md-2 col-xs-4 mobile_nopadding" style="padding-top:5px"><a href="javascript:customtrip()"><img src="img/common/go_button.png""></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--vietnam in deep-->
<div class="row bs-section margintop40">
    <div class="col-md-8">
        <h2 class="background double"><span>VIETNAM IN DEEP</span></h2>
        <div class="vietnamindeep">
            <div class="row">
                <div class="col-md-6">
                    <img src="img/common/travelguide_vietnamindeep.jpg" width="100%" height="130">
                    <div style="background: #f2f2f2;min-height: 100px; margin: 0; padding: 5px 0 0 0;">
                        <div style="height: 40px; width: 100%; padding: 0 5px; display: block">
                            <div style="width: 10%; float: left;">
                                <p style="background: #efdada;padding:12px 0" class="font22 text-center"><strong>1</strong></p>
                            </div>
                            <div style="width: 50%; float: left; display:block; margin: 0; padding: 0 10px; color: #006699">
                                <p class="text-primary font-bold font13 marginbottom3"><a href="">Koto Restaurant</a></p>
                                <p class="text-primary font-bold font13 marginbottom3 margintop5"><a href="">120 Reviews</a></p>
                            </div>
                            <div style="width: 40%; display:block;float: left">
                                <p class="text-right paddingright10 marginbottom3"><i class="fa fa-map-marker text-primary font16"></i></p>
                                <p class="text-primary text-right paddingright10 font-bold font13 margintop5"><a href="">Hanoi, Vietnam</a></p>
                            </div>
                        </div>
                        <hr style="width: 96%;height: 1px; background: #cccccc ; margin: 0 5px; padding: 0; clear: both">
                        <div style="height: 50px; width: 100%;padding: 5px 5px">
                            <div style="width: 10%; float: left; margin: 0; padding: 0">
                                <p style="background: #efdada;padding:12px 0" class="font22 text-center"><strong>2</strong></p>
                            </div>
                            <div style="width: 50%; float: left; display:block; margin: 0; padding: 0 10px; color: #006699">
                                <p class="text-primary font-bold font13 marginbottom3"><a href="">Koto Restaurant</a></p>
                                <p class="text-primary font-bold font13 marginbottom3 margintop5"><a href="">120 Reviews</a></p>
                            </div>
                            <div style="width: 40%; display:block;float: left">
                                <p class="text-right paddingright10 marginbottom3"><i class="fa fa-map-marker text-primary font16"></i></p>
                                <p class="text-primary text-right paddingright10 font-bold font13 margintop5"><a href="">Hanoi, Vietnam</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mobile_margintop20">
                    <img src="img/common/travelguide_vietnamindeep1.jpg" width="100%" height="130">
                    <div style="background: #f2f2f2;min-height: 100px; margin: 0; padding: 3px 0 0 0;">
                        <div style="height: 40px; width: 100%; padding: 0 5px; display: block">
                            <div style="width: 10%; float: left;">
                                <p style="background: #efdada;padding:12px 0" class="font22 text-center"><strong>3</strong></p>
                            </div>
                            <div style="width: 50%; float: left; display:block; margin: 0; padding: 0 10px; color: #006699">
                                <p class="text-primary font-bold font13 marginbottom3"><a href="">Koto Restaurant</a></p>
                                <p class="text-primary font-bold font13 marginbottom3 margintop5"><a href="">120 Reviews</a></p>
                            </div>
                            <div style="width: 40%; display:block;float: left">
                                <p class="text-right paddingright10 marginbottom3"><i class="fa fa-map-marker text-primary font16"></i></p>
                                <p class="text-primary text-right paddingright10 font-bold font13 margintop5"><a href="">Hanoi, Vietnam</a></p>
                            </div>
                        </div>
                        <hr style="width: 96%;height: 1px; background: #cccccc ; margin: 0 5px; padding: 0; clear: both">
                        <div style="height: 50px; width: 100%;padding: 5px 5px">
                            <div style="width: 10%; float: left; margin: 0; padding: 0">
                                <p style="background: #efdada;padding:12px 0" class="font22 text-center"><strong>4</strong></p>
                            </div>
                            <div style="width: 50%; float: left; display:block; margin: 0; padding: 0 10px; color: #006699">
                                <p class="text-primary font-bold font13 marginbottom3"><a href="">Koto Restaurant</a></p>
                                <p class="text-primary font-bold font13 marginbottom3 margintop5"><a href="">120 Reviews</a></p>
                            </div>
                            <div style="width: 40%; display:block;float: left">
                                <p class="text-right paddingright10 marginbottom3"><i class="fa fa-map-marker text-primary font16"></i></p>
                                <p class="text-primary text-right paddingright10 font-bold font13 margintop5"><a href="">Hanoi, Vietnam</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="travelguide_topvote mobile_margintop20">
            <h4 class="margintop5 nomarginbottom">TOP  VOTED VIETNAM  HOTELS</h4>
            <div class="row">
                <div class="col-md-6">
                    <table class="table topvote">
                        <tbody>
                        <tr>
                            <td class="map-thumb first">
                                <img src="http://www.asianventure.com/images/news/view_thaihoa_palace.jpg">
                            </td>
                            <td class="first text nopaddingright">
                                <div>
                                    <p class="font13 font-bold nomarginpadding text-right"><a href="" class="black"> Sofitel Plaza Saigon Hotel</a></p>
                                    <p class="font13 font12h nomarginpadding text-right">4.5/ 5 from 320 reviews | #2 of 520</p>
                                    <p class="font13 nomarginpadding text-right">hotels in Hanoi</p>
                                    <p class="margintop5 text-right font13">
                                        <i class="fa fa-map-marker"></i>
                                        <a href="" class="read-more"><strong>Hanoi, Vietnam</strong></a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="map-thumb">
                                <img data-src="" src="http://www.asianventure.com/images/news/news_5.jpg">
                            </td>
                            <td class="text nopaddingright">
                                <div>
                                    <p class="font13 font-bold nomarginpadding text-right"><a href="" class="black"> Sofitel Plaza Saigon Hotel</a></p>
                                    <p class="font13 font12h nomarginpadding text-right">4.5/ 5 from 320 reviews | #2 of 520</p>
                                    <p class="font13 nomarginpadding text-right">hotels in Hanoi</p>
                                    <p class="margintop5 text-right font13">
                                        <i class="fa fa-map-marker"></i>
                                        <a href="" class="read-more"><strong>Hanoi, Vietnam</strong></a>
                                    </p>
                                </div>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <table class="table topvote">
                        <tbody>
                        <tr>
                            <td class="map-thumb first">
                                <img src="http://www.asianventure.com/images/news/view_thaihoa_palace.jpg" class="thumb" alt="">
                            </td>
                            <td class="first text nopaddingright">
                                <div>
                                    <p class="font13 font-bold nomarginpadding text-right"><a href="" class="black"> Sofitel Plaza Saigon Hotel</a></p>
                                    <p class="font13 font12h nomarginpadding text-right">4.5/ 5 from 320 reviews | #2 of 520</p>
                                    <p class="font13 nomarginpadding text-right">hotels in Hanoi</p>
                                    <p class="margintop5 text-right font13">
                                        <i class="fa fa-map-marker"></i>
                                        <a href="" class="read-more"><strong>Hanoi, Vietnam</strong></a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="map-thumb">
                                <img data-src="" src="http://www.asianventure.com/images/news/news_5.jpg" class="thumb" alt="" title="" width="100%">
                            </td>
                            <td class="text nopaddingright">
                                <div>
                                    <p class="font13 font-bold nomarginpadding text-right"><a href="" class="black"> Sofitel Plaza Saigon Hotel</a></p>
                                    <p class="font13 font12h nomarginpadding text-right">4.5/ 5 from 320 reviews | #2 of 520</p>
                                    <p class="font13 nomarginpadding text-right">hotels in Hanoi</p>
                                    <p class="margintop5 text-right font13">
                                        <i class="fa fa-map-marker"></i>
                                        <a href="" class="read-more"><strong>Hanoi, Vietnam</strong></a>
                                    </p>
                                </div>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div id="map-canvas1"></div>
    </div>
</div>
<!--cool travel comport-->
<div class="row bs-section margintop20">
    <div class="col-md-12">
    <img src="img/common/cooltravel.jpg" width="100%">
    </div>
</div>
<!--see more vietnam thing and artical -->
<div class="bs-section margintop40">
    <div class="col-md-2 mobile_marginbottom20">
        <div class="row">
            <div class="tile-stats paddingright24 mobile_nopadding">
                <a href=#>
                    <div class="trg-vietnam-thing-art">
                        <img src="img/common/travelguide_topthingtodo_icon.png">
                        <div class="tile-stats-number font22 margintop20">VIETNAM</div>
                        <div class="tile-stats-text font16 paddingtop5">TOP THING TO DO</div>
                    </div>
                    <div class=clearfix></div>
                </a></div>
        </div>
    </div>
    <div class="col-md-10">
        <div class="row">
            <div class="peak-product-component-content">
                <div class="row">
                    <div class="col-sm-6 col-md-3 countrynews">
                        <img src="img/common/water_puppet.jpg" alt="vietnam" height="120" width="100%">
                        <div class="content1" style="min-height: 130px">
                            <h6 class="text-left"><a href="http://www.asianventure.com/vietnam/guide/hanoi/attraction/water_puppet.html">Water Puppet</a> </h6>
                            <p class="briefdes">One of the reasons that Hanoi - the capital city of Vietnam, has attracted so many tourists over the years is its,... </p>
                            <p class="text-primary text-right paddingright10 font-bold font13 nomarginpadding"><i class="fa fa-map-marker fa-1x"></i> <a href="">Hanoi, Vietnam</a></p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 countrynews">
                        <img src="http://www.asianventure.com/images/vietnam/vietnam_hue.jpg" alt="vietnam" height="120" width="100%">
                        <div class="content1" style="min-height: 130px">
                            <h6 class="text-left"><a href="http://www.asianventure.com/vietnam/guide/hue/attraction/hue_citadel.html"> Hue Citadel</a> </h6>
                            <p class="briefdes">One of the reasons that Hanoi - the capital city of Vietnam, has attracted so many tourists over the years is its,... </p>
                            <p class="text-primary text-right paddingright10 font-bold font13 nomarginpadding"><i class="fa fa-map-marker fa-1x"></i> <a href="">Hanoi, Vietnam</a></p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 countrynews">
                        <img src="img/portfolio/travelguide_articles2_268x172.jpg" alt="vietnam" height="120" width="100%">
                        <div class="content1" style="min-height: 130px">
                            <h6 class="text-left"><a href="http://www.asianventure.com/vietnam/guide/can_tho/attraction/can_tho_floating_markets.html"> Can Tho Floating Market</a> </h6>
                            <p class="briefdes">One of the reasons that Hanoi - the capital city of Vietnam, has attracted so many tourists over the years is its,... </p>
                            <p class="text-primary text-right paddingright10 font-bold font13 nomarginpadding"><i class="fa fa-map-marker fa-1x"></i> <a href="">Hanoi, Vietnam</a></p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 countrynews">
                        <img src="http://www.asianventure.com/images/vietnam/vietnam_hue.jpg" alt="vietnam" height="120" width="100%">
                        <div class="content1" style="min-height: 130px">
                            <h6 class="text-left"><a href="http://www.asianventure.com/vietnam/guide/hue/attraction/hue_citadel.html"> Hue Citadel</a> </h6>
                            <p class="briefdes">One of the reasons that Hanoi - the capital city of Vietnam, has attracted so many tourists over the years is its,... </p>
                            <p class="text-primary text-right paddingright10 font-bold font13 nomarginpadding"><i class="fa fa-map-marker fa-1x"></i> <a href="">Hanoi, Vietnam</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="bs-section">
    <div class="col-md-2 margintop10 mobile_marginbottom20">
        <div class="row">
            <div class="tile-stats paddingright24 mobile_nopadding">
                <a href=#>
                    <div class="trg-vietnam-thing-art">
                        <img src="img/common/travelguide_artical_icon.png">
                        <div class="tile-stats-number font22 margintop20">VIETNAM</div>
                        <div class="tile-stats-text font16 paddingtop5">TRAVEL ARTICALS</div>
                    </div>
                    <div class=clearfix></div>
                </a></div>
        </div>
    </div>
    <div class="col-md-10 margintop10">
        <div class="row">
            <div class="peak-product-component-content">
                <div class="row">
                    <div class="col-sm-6 col-md-3 countrynews">
                        <img src="img/common/water_puppet.jpg" alt="vietnam" height="120" width="100%">
                        <div class="content1" style="min-height: 130px">
                            <h6 class="text-left"><a href="http://www.asianventure.com/vietnam/guide/hanoi/attraction/water_puppet.html">Water Puppet</a> </h6>
                            <p class="briefdes">One of the reasons that Hanoi - the capital city of Vietnam, has attracted so many tourists over the years is its,... </p>
                            <p class="text-primary text-right paddingright10 font-bold font13 nomarginpadding"><i class="fa fa-map-marker fa-1x"></i> <a href="">Hanoi, Vietnam</a></p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 countrynews">
                        <img src="http://www.asianventure.com/images/vietnam/vietnam_hue.jpg" alt="vietnam" height="120" width="100%">
                        <div class="content1" style="min-height: 130px">
                            <h6 class="text-left"><a href="http://www.asianventure.com/vietnam/guide/hue/attraction/hue_citadel.html"> Hue Citadel</a> </h6>
                            <p class="briefdes">One of the reasons that Hanoi - the capital city of Vietnam, has attracted so many tourists over the years is its,... </p>
                            <p class="text-primary text-right paddingright10 font-bold font13 nomarginpadding"><i class="fa fa-map-marker fa-1x"></i> <a href="">Hanoi, Vietnam</a></p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 countrynews">
                        <img src="img/portfolio/travelguide_articles2_268x172.jpg" alt="vietnam" height="120" width="100%">
                        <div class="content1" style="min-height: 130px">
                            <h6 class="text-left"><a href="http://www.asianventure.com/vietnam/guide/can_tho/attraction/can_tho_floating_markets.html"> Can Tho Floating Market</a> </h6>
                            <p class="briefdes">One of the reasons that Hanoi - the capital city of Vietnam, has attracted so many tourists over the years is its,... </p>
                            <p class="text-primary text-right paddingright10 font-bold font13 nomarginpadding"><i class="fa fa-map-marker fa-1x"></i> <a href="">Hanoi, Vietnam</a></p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 countrynews">
                        <img src="http://www.asianventure.com/images/vietnam/vietnam_hue.jpg" alt="vietnam" height="120" width="100%">
                        <div class="content1" style="min-height: 130px">
                            <h6 class="text-left"><a href="http://www.asianventure.com/vietnam/guide/hue/attraction/hue_citadel.html"> Hue Citadel</a> </h6>
                            <p class="briefdes">One of the reasons that Hanoi - the capital city of Vietnam, has attracted so many tourists over the years is its,... </p>
                            <p class="text-primary text-right paddingright10 font-bold font13 nomarginpadding"><i class="fa fa-map-marker fa-1x"></i> <a href="">Hanoi, Vietnam</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!---->
</div>
<div class="row hidden-xs" style="margin-bottom: -10px">
    <div class="row" style="background: #eadede; height: 140px; margin-top: -90px; margin-bottom: 0">
        <p></p>
    </div>
</div>
<!-- End Body -->

<p></p>
<!-- Footer -->
<div class="footer" style="border-top: none">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="col-md-6 col-xs-6 footerpadding">
                        <h5>ASIANVENTURE</h5>
                        <ul>
                            <li style="width: 100%"><a href="http://www.asianventure.com/common/profile.html">About Company</a></li>
                            <li><a href="http://www.asianventure.com/common/profile.html">About us</a></li>
                            <li><a href="#">Awards</a></li>
                            <li><a href="http://www.asianventure.com/common/asianventure.html">Why Asianventure</a></li>
                            <li><a href="#">Responsible Travel</a></li>
                            <li><a href="#">Carrier</a></li>
                            <li><a href="#">International Offices</a></li>
                            <li><a href="http://www.asianventure.com/common/sitemap.html">Sitemap</a></li>
                            <li><a href="http://www.asianventure.com/common/frmcontact.html">Contact us</a></li>
                        </ul>

                    </div>
                    <div class="col-md-6 col-xs-6 footerpadding">
                        <h5>DESTINATION</h5>
                        <ul>
                            <li><a href="http://www.asianventure.com/vietnam.html">Vietnam</a></li>
                            <li><a href="http://www.asianventure.com/laos.html">Laos</a></li>
                            <li><a href="http://www.asianventure.com/cambodia.html">Cambodia</a></li>
                            <li><a href="http://www.asianventure.com/thailand.html">Thailand</a></li>
                            <li><a href="http://www.asianventure.com/myanmar.html">Myanmar</a></li>
                            <li><a href="http://www.asianventure.com/china.html">China</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-6 col-xs-12 footerpadding1">
                        <h5>COMMUNITY</h5>
                        <ul>
                            <li><a href="http://www.asianventure.com/testimonial/index.html">Testimonials</a></li>
                            <li><a href="http://www.asianventure.com/common/condition.html">Booking Conditions</a></li>
                            <li><a href="#">Travel Blog</a></li>
                            <li><a href="http://www.asianventure.com/photo/index.html">Gallery</a></li>
                            <li><a href="http://www.asianventure.com/vietnam/guide/index.html">Travel Guide</a></li>
                            <li><a href="#">Travel Style</a></li>
                            <li><a href="#">Inspiration</a></li>

                        </ul>

                    </div>
                    <div class="col-md-6 col-xs-12 footerpadding1">
                        <a href="http://www.skype.com/asianventure/">
                            <h5 style="color: #FFFFFF; padding-bottom: 10px">Follow us</h5>
                        </a>
                        <button class="btn btn-xs btn-skype"><i class="fa fa-facebook"></i> Skype</button>
                        <a href="https://twitter.com/asianventure">
                            <button class="btn btn-xs btn-twitter"><i class="fa fa-twitter"></i> Twitter</button>
                        </a>
                        <a href="https://www.facebook.com/asianventure">
                            <button class="btn btn-xs btn-facebook"><i class="fa fa-facebook"></i> Facebook</button>
                        </a>
                        <ul class="headoffie">
                            <h5 style="margin: 0; padding: 0; color: #ffffff">Head office</h5>
                            <li>Address:  <span> Asianventure Tours Co.Ltd</span><br>
                                <span style="padding-left: 59px">110 Ba Trieu, Hanoi, Vietnam</span></li>
                            <li>Phone:    <span style="padding-left: 10px">+84 (0) 4 39438550 - 1</span><br>
                                <span style="padding-left: 59px">+84 (0) 944567788 (hotline)</span>
                            </li>
                            <li>Fax:      <span style="padding-left:29px">+84 (0) 4 39438552</span> </li>
                            <li>Email:    <span style="padding-left:22px">info@asianventure.com</span></li>

                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="row footer1">
    <div class="container">
        <div style="height: 40px; margin: 0; padding: 0">
            <a href=""> Asianventure Tours &copy; 2015 - 2020</a>  | <a href="http://www.asianventure.com/common/condition.html"> Terms & Conditions</a> |  <a href="http://www.asianventure.com/common/privacy.html"> Privacy Policy</a>
        </div>
    </div>
</div>
<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll visible-xs visble-sm">
    <a class="btn btn-grey" href="#page-top">
        <i class="fa fa-chevron-up setoff"></i>
    </a>
</div>

<script src="js/sliderjs/bjqs-1.js"></script>
<script type="text/javascript" src="js/readmore.js"></script>
</body>

</html>