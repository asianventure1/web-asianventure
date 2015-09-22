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
    <script src="js/sliderjs/jquery-1.js"></script><!-- menu in mobile -->
    <script src="js/sliderjs/jquery_002.js"></script>
    <script src="js/sliderjs/customize.js"></script>

    <!-- Bootstrap Core JavaScript chay slide trang index va menu in mobile-->
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

</head>
<body id="page-top">

<div class="fixed-position fixed-s-e" id="divShock">
    <script type="text/javascript" src="http://www.asianventure.net/visitor/index.php?_m=livesupport&amp;_a=htmlcode&amp;departmentid=0"></script>
    <a href="javascript:chatclose2();" id="divShockClose" style="position:absolute; top:0; right:10px">
        <img src="http://www.asianventure.net/themes/client_default/close.gif" border="0" alt="close"/>
    </a>
</div>
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
                                    <li><a  href="/vietnam.html">Vietnam</a></li>
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
    <h1 class="headline">VIETNAM ,  CAMBODIA,  LAOS,  THAILAND , MYANMAR, CHINA</h1>
</div>
</header>
<!-- End Header -->


<!-- Begin Body -->
<div class="container margintop70 mobile_nomargintop">
<!--intro-->
<div class="bs-section">
    <div class="col-md-4">
        <h2 class="font22 text-center color-green font-normal">Asianventure Tours</h2>
        <div class="row">
            <div class="introduce1">
                <div class="inside">
                    <p>At the early start, Asianventure Tours was a small local tour operator for individual travellers to visit Vietnam, and has since rapidly grown with the expansion of its activities over the border to Laos, Cambodia, Thailand , Myanmar and China  As a result , it has got  a new height to become  a destination tour company with a group of experienced  guides and  professional qualified experts, who also has been involved in tourism business for many years, both in and outside Vietnam. We apply extensive research and thorough study into what ‘you’ the traveler would prefer.
                        Asianventure Tours offers the prepackaged holidays which are carefully designed  in satisfaction of individual  travellers and big sized tourist groups. Also, we have specialized in customized holiday which can combine our tour modules in an endless variety,... <a href="" class="read-more"> Read more</a>
                    </p>
                </div>
            </div></div>
    </div>
    <div class="col-md-4 nomarginpadding">
        <h2 class="font22 text-center color-green font-normal">Featured Destinations</h2>
        <div class="introduce2">
            <img src="img/common/map_homepage1.jpg" style="width: 100%">
            <h2 class="text-center font18 font-normal nomargintop1 marginbottom3">Vietnam, Cambodia, Laos, Thailand, Myanmar, China</h2>
        </div>
    </div>
    <div class="col-md-4 mobile_nomargintop_40am">
        <h2 class="font22 text-center color-green font-normal mobile_nomargintop_am">Clients' Testimonial</h2>
        <div class="row">
            <div class="introduce3">
                <div class="inside">
                    <div class="row">
                        <div class="col-md-4 col-xs-4">
                            <img src="img/common/person_none.png" width="75">
                            <span class="font13">Ughetta Morelli from Italy</span>
                        </div>
                        <div class="col-md-8 col-xs-8 nomarginpadding">
                            <p class="text">Thank you so much for having organized us such a beautiful tour of Vietnam. Everything went well.
                                Our drivers and guides were very professional and helpful. We had a good time with them like being in a family. All the hotels were very nice,.. <a href="" class="read-more"> Read more</a> </p>
                        </div>
                    </div>
                    <hr style="margin: 0; padding:0 0 2px 0; color: #cccccc">
                    <div class="row">
                        <div class="col-md-4 col-xs-4">
                            <img src="img/common/person_none.png" width="75">
                            <span class="font13">Celia Stresing from Germaly</span>
                        </div>
                        <div class="col-md-8 col-xs-8 nomarginpadding">
                            <p class="text">Thank you for a wonderful trip. You did organize everythings pretty well.  The hotel is comfortable, guide and driver were friendly.
                                Certainly I´m going back again to Vietnam, which is a nice country and the food delicious. All the best,.. <a href="" class="read-more"> Read more</a></p>
                        </div>
                    </div>

                </div>
            </div></div>
    </div>
</div>
<!--3 step with asian -->
<div class="bs-section margintop30">
    <div class="col-md-12 hidden-xs">
        <div class="row">
            <div class="workbox">
                <div class="col-md-4">
                    <img src="img/common/icon_index1.png" style="float: left">
                    <br>
                    <span class="title">You Tell Us</span><br>
                    <span class="description">about your vacation</span><br><span class="description">ideas and time.</span>
                </div>

                <div class="col-md-4">
                    <img src="img/common/icon_index2.png" style="float: left">
                    <br>
                    <span class="title">We Work On</span><br>
                    <span class="description">to build up the best</span><br><span class="description">possible options.</span>
                </div>

                <div class="col-md-4">
                    <img src="img/common/icon_index3.png" style="float: left">
                    <br>
                    <span class="title">You Select Up</span><br>
                    <span class="description">the suitable offer for</span><br><span class="description">your vacations.</span>
                </div>
            </div>
            <div style="background: url(img/common/borderline1.png) no-repeat top; height: 10px; margin-top: -30px" class="hidden-xs"></div>
        </div>
    </div>
</div>
<!--slide destination and style-->
<div class="row mobile_nomargintop10">
    <div class="bs-section">
        <div class="col-md-6 hidden-xs">
            <div class="peak-product-component-content">
                <h2 class="flex_slider font22 text-center margintop20 marginbottom3">EXPLORE OUR TRAVEL STYLE</h2>
                <h3 class="flex_slider font18 font-normal marginbottom10 margintop3">Vietnam, Cambodia, Laos, Thailand, Myanmar, China</h3>
                <div class="row nomarginpadding">
                    <div class="col-md-6 nomarginpadding block">
                        <img src="img/common/travelstyle_homepage1.jpg" alt="CLASSIC CULTURE" class="cityimg" />
                        <a href="http://www.asianventure.com/vietnam/tour/culture_and_history.html" class="top-dest-title-city-top"><h3 class="font18">CLASSIC CULTURE</h3></a>
                    </div>
                    <div class="col-md-6 nomarginpadding block">
                        <img src="img/common/travelstyle_homepage2.jpg" alt="LUXURY HOLIDAYS" class="cityimg"/>
                        <a href="http://www.asianventure.com/vietnam/tour/cruise.html" class="top-dest-title-city-top"><h3 class="font18">LUXURY HOLIDAYS</h3></a>
                    </div>
                    <div class="col-md-6 nomarginpadding block">
                        <img src="img/common/travelstyle_homepage3.jpg" alt="FAMILY HOLIDAYS" class="cityimg"/>
                        <a href="http://www.asianventure.com/vietnam/tour/relax.html" class="top-dest-title-city-bottom"><h3 class="font18">FAMILY HOLIDAYS</h3></a>
                    </div>
                    <div class="col-md-6 nomarginpadding block">
                        <img src="img/common/travelstyle_homepage4.jpg" alt="ADVENTURE TRAVEL" class="cityimg"/>
                        <a href="http://www.asianventure.com/vietnam/tour/trekking.html" class="top-dest-title-city-bottom"><h3 class="font18">ADVENTURE TRAVEL</h3></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 visible-xs">
            <div class="peak-product-component-content">
                <h2 class="flex_slider font18 text-center mobile_nomargintop_am">EXPLORE OUR TRAVEL STYLE</h2>
                <div class="row">
                    <div class="col-md-6 block">
                        <img src="img/common/travelstyle_homepage1.jpg" alt="CLASSIC CULTURE" class="cityimg" />
                        <a href="http://www.asianventure.com/vietnam/tour/culture_and_history.html" class="top-dest-title-city-top"><h3 class="font16h">CLASSIC CULTURE</h3></a>
                    </div>
                    <div class="col-md-6 block">
                        <img src="img/common/travelstyle_homepage2.jpg" alt="LUXURY HOLIDAYS" class="cityimg"/>
                        <a href="http://www.asianventure.com/vietnam/tour/cruise.html" class="top-dest-title-city-top"><h3 class="font16h">LUXURY HOLIDAYS</h3></a>
                    </div>
                    <div class="col-md-6 block">
                        <img src="img/common/travelstyle_homepage3.jpg" alt="FAMILY HOLIDAYS" class="cityimg"/>
                        <a href="http://www.asianventure.com/vietnam/tour/relax.html" class="top-dest-title-city-bottom"><h3 class="font16h">FAMILY HOLIDAYS</h3></a>
                    </div>
                    <div class="col-md-6 block">
                        <img src="img/common/travelstyle_homepage4.jpg" alt="ADVENTURE TRAVEL" class="cityimg"/>
                        <a href="http://www.asianventure.com/vietnam/tour/trekking.html" class="top-dest-title-city-bottom"><h3 class="font16h">ADVENTURE TRAVEL</h3></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 hidden-xs">
            <h2 class="flex_slider font22 text-center margintop20 marginbottom3">INSPIRATION DESTINATIONS</h2>
            <h3 class="flex_slider font18 font-normal marginbottom10 margintop3">China, Myanmar, Thailand, Laos, Cambodia, Vietnam</h3>
            <section class="flexslider">
                <ul class="slides ">
                    <li>
                        <div class="row">

                            <div class="col-md-6" style="padding-left:-10px; padding-right: 0">
                                <div class="col4_img">
                                    <img src="img/common/destination_homepage_halong.jpg"/>
                                </div><!--end col4_img-->
                                <a href="http://www.asianventure.com/vietnam/guide/quang_ninh/halong.html" class="top-dest-title-city-top"><h3 class="font18">Halong, Vietnam</h3></a>
                            </div><!--end span4-->

                            <div class="col-md-6" style="padding-left:0; padding-right: 0">
                                <div class="col4_img">
                                    <img src="img/common/destination_homepage_beijing.jpg" alt="" />
                                </div><!--end col4_img-->
                                <a href="http://www.asianventure.com/yunnan.html" class="top-dest-title-city-top"><h3 class="font18">Beijing, China</h3></a>
                            </div><!--end span4-->

                        </div><!--end row-->

                        <div class="row nomargintop">

                            <div class="col-md-6" style="padding-left: -10px; padding-right: 0">
                                <div class="col4_img">
                                    <img src="img/common/destination_homepage_luangnamtha.jpg" alt="" />
                                </div><!--end col4_img-->
                                <a href="http://www.asianventure.com/laos/guide/luang_namtha.html" class="top-dest-title-city-bottom"><h3 class="font18">Luangnamtha, Laos</h3></a>
                            </div><!--end span4-->

                            <div class="col-md-6" style="padding-left: 0; padding-right: 0">
                                <div class="col4_img">
                                    <img src="img/common/destination_homepage_siemreap.jpg" alt="" />
                                </div><!--end col4_img-->
                                <a href="http://www.asianventure.com/cambodia/guide/siem_reap.html" class="top-dest-title-city-bottom"><h3 class="font18">Siem Reap, Cambodia</h3></a>
                            </div><!--end span4-->

                        </div><!--end row-->

                    </li>
                    <li>
                        <div class="row">

                            <div class="col-md-6" style="padding-left: -10px; padding-right: 0">
                                <div class="col4_img">
                                    <img src="img/common/destination_homepage_bangkok.jpg" alt="" />
                                </div><!--end col4_img-->
                                <a href="http://www.asianventure.com/thailand/guide/bangkok.html" class="top-dest-title-city-top"><h3 class="font18">Bangkok, Thailand</h3></a>
                            </div><!--end span4-->

                            <div class="col-md-6 nomarginpadding">
                                <div class="col4_img">
                                    <img src="img/common/destination_homepage_yangoon.jpg" alt=""  />
                                </div><!--end col4_img-->
                                <a href="http://www.asianventure.com/myanmar/guide/yangon.html" class="top-dest-title-city-top"><h3 class="font18">Yangon, Myanmar</h3></a>
                            </div><!--end span4-->

                        </div><!--end row-->

                        <div class="row nomargintop">

                            <div class="col-md-6" style="padding-left: -10px; padding-right: 0">
                                <div class="col4_img">
                                    <img src="img/common/destination_homepage_nhatrang.jpg" alt=""  />
                                </div><!--end col4_img-->
                                <a href="http://www.asianventure.com/vietnam/guide/khanh_hoa/nha_trang.html" class="top-dest-title-city-bottom"><h3 class="font18">Nha Trang, Vietnam</h3></a>
                            </div><!--end span4-->

                            <div class="col-md-6 nomarginpadding">
                                <div class="col4_img">
                                    <img src="img/common/destination_homepage_luangprabang.jpg" alt=""  />
                                </div><!--end col4_img-->
                                <a href="http://www.asianventure.com/laos/guide/luang_prabang.html" class="top-dest-title-city-bottom"><h3 class="font18">Luang Prabang, Laos</h3></a>
                            </div><!--end span4-->

                        </div><!--end row-->

                    </li>
                </ul>
            </section><!--end flexslider-->

        </div>
        <div class="col-md-6 visible-xs">
            <div class="peak-product-component-content">
                <h2 class="flex_slider font18h text-center">INSPIRATION DESTINATIONS</h2>
                <div class="row">
                    <div class="col-md-6 block">
                        <img src="img/common/destination_homepage_halong.jpg" alt="" class="cityimg"/>
                        <a href="http://www.asianventure.com/vietnam/guide/quang_ninh/halong.html" class="top-dest-title-city-top"><h3 class="font16h">Halong, Vietnam</h3></a>
                    </div><!--end span4-->
                    <div class="col-md-6 block">
                        <img src="img/common/destination_homepage_beijing.jpg" alt="" class="cityimg"/>
                        <a href="http://www.asianventure.com/yunnan.html" class="top-dest-title-city-top"><h3 class="font16h">Beijing, China</h3></a>
                    </div><!--end span4-->
                    <div class="col-md-6 block">
                        <img src="img/common/destination_homepage_luangnamtha.jpg" alt="" class="cityimg" />
                        <a href="http://www.asianventure.com/laos/guide/luang_namtha.html" class="top-dest-title-city-bottom"><h3 class="font16h">Luangnamtha, Laos</h3></a>
                    </div><!--end span4-->
                    <div class="col-md-6 block">
                        <img src="img/common/destination_homepage_siemreap.jpg" alt="" class="cityimg" />
                        <a href="http://www.asianventure.com/cambodia/guide/siem_reap.html" class="top-dest-title-city-bottom"><h3 class="font16h">Siem Reap, Cambodia</h3></a>
                    </div><!--end span4-->
                    <div class="col-md-6 block">
                        <img src="img/common/destination_homepage_bangkok.jpg" alt="" class="cityimg" />
                        <a href="http://www.asianventure.com/thailand/guide/bangkok.html" class="top-dest-title-city-top"><h3 class="font16h">Bangkok, Thailand</h3></a>
                    </div><!--end span4-->
                    <div class="col-md-6 block">
                        <img src="img/common/destination_homepage_yangoon.jpg" alt="" class="cityimg" />
                        <a href="http://www.asianventure.com/myanmar/guide/yangon.html" class="top-dest-title-city-top"><h3 class="font16h">Yangon, Myanmar</h3></a>
                    </div><!--end span4-->
                    <div class="col-md-6 block">
                        <img src="img/common/destination_homepage_nhatrang.jpg" alt="" class="cityimg" />
                        <a href="http://www.asianventure.com/vietnam/guide/khanh_hoa/nha_trang.html" class="top-dest-title-city-bottom"<h3 class="font16h">Nha Trang, Vietnam</h3></a>
                    </div><!--end span4-->
                    <div class="col-md-6 block">
                        <img src="img/common/destination_homepage_luangprabang.jpg" alt="" class="cityimg" />
                        <a href="http://www.asianventure.com/laos/guide/luang_prabang.html" class="top-dest-title-city-bottom"><h3 class="font16h">Luang Prabang, Laos</h3></a>
                    </div><!--end span4-->
                </div>
            </div>
        </div>
    </div>
</div>
<!--customized-->
<div class="row margintop20 mobile_nomargintop10" style="position: relative">
    <div class="customized_submit">
        <div class="row">
            <img src="img/common/icon_white_line.png" style="position: absolute; top: 50px; left:43%" width="120" height="1px">
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
                    <div class="col-md-6 col-xs-6 nomarginpadding"><a href="javascript:customtrip()" style="color: #FFFFFF"><p class="text-uppercase font18 paddingtop30 mobile_nopadding font12h mobile_padding15"><strong>Customized Trips</strong></p></a></div>
                    <div class="col-md-2 col-xs-4 mobile_nopadding" style="padding-top:5px"><a href="javascript:customtrip()"><img src="img/common/go_button.png""></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--beat price-->
<div class="bs-section margintop30">
    <div class="row bookholiday">
        <div class="col-md-6 col-left">
            <div class="col-md-4 hidden-xs">
                <ul style="padding-top: 15px">
                    <li><span class="text font22">BOOK HOLIDAY</span>
                        <hr style="background-color: #006666; height: 2px">
                    </li>
                    <li class="text-center"><span class="font22 text-primary" style="font-weight: bold">BEAT PRICE</span></li>
                    <li style="padding-left:60px"><i class="fa fa-arrow-circle-down fa-2x" style="color: #0066cc"></i></li>
                </ul>
            </div>
            <div class="col-md-8 mobile_nopadding nopaddingright">
                <h3 class="text-center margintop10 nomarginbottom font18h">HOT DEALS</h3>
                <p class="mobile_marginleft2am mobile_marginright2am"><img src="img/common/icon_economic.png" height="25">Book a holiday with Asianventure Tours , you’ll not only get an incredible trip away but you’ll make a huge saving into the bargain. With a huge range of options in Vietnam, Cambodia,Laos, Thailand, Myanmar and China, you can make sure that your holiday is exactly the way you want it to be. Get the most out of our all-inclusive packages or enjoy a more independent trip with our self-catering options. Whether you are looking for beach and sunshine holidays to getting off the beaten track, or winter sun and festival holiday deals, we’ve got it covered. </p>
            </div>
        </div>
        <div class="col-md-6 col-right">
            <h3 class="text-center margintop10 nomarginbottom text-primary font18h">beat price</h3>
            <p><img src="img/common/icon_beatprice.png" height="20">
                The price beat guarantee is a part of our  commitment to always offer you the lowest price possible. When you’re shopping online for  package tours, if you find a  the same products  with another  tour operators, which ‘s  cheaper than ours – we’ll beat it. Simply contact our customer service team with the cheaper offer you for somewhere , and we’ll offer you  the same product for 3% less than the competitor’s price.  We’d rather you travel  with us!
                If you find a cheaper price, just contact our customer service team or sending us ta confirmation of the competitor quote on headed paper or equivalent complete with a clear airfare/ tour/ accommodation description, travel dates, number of passengers, price including all fees and charges, availability, booking conditions and date of quote clearly shown. We’ll verify the comparison and get back to you shortly
            </p>
        </div>
    </div>
</div>
<!-- list best tour-->
<div class="bs-section">
<h2 class="text-center font22 nomarginpadding">FANTASTIC HOLIDAYS</h2>
<h3 class="text-center font18 margintop3 marginbottom20">VIETNAM, CAMBODIA, LAOS, THAILAND, MYANMAR, CHINA</h3>
<div class="peak-product-component-content">
<div class="row">
<div class="col-md-3 product">
    <!-- START RIBBON -->
    <div class="tours">
        <!-- START RIBBON -->
        <div class="ribbon ribbon-red">
            <div class="banner ">
                <div class="text">Best Seller</div>
            </div>
        </div>
        <!-- END RIBBON -->
        <div class="tour-grid">
            <div class="domtab nomargintop1">
                <a href="http://www.asianventure.com/vietnam/tour/indochina.html"><h3 class="top-dest-title-h font18 font-normal">Indochina Tours</h3></a>
                <ul class="domtabs">
                    <li><a href="#t7"><i class="fa fa-camera-retro"></i> Photo</a></li>
                    <li><a href="#t8"><i class="fa fa-map-marker"></i> Map</a></li>
                </ul>
                <div style="padding:0; margin:0">
                    <a name="t7" id="t7"></a>
                    <img src="http://www.asianventure.com/images/vietnam/grandindochina.jpg" width="100%" height="175">
                </div>
                <div style="padding:0; margin:0">
                    <a name="t8" id="t8"></a>
                    <img src="img/common/test_2.jpg" width="100%" height="175">
                </div>
            </div>
            <div class="tour-grid detail">
                <ul>
                    <a href="http://www.asianventure.com/vietnam/tour/indochina/grand_indochina.html"><h4 class="font15 font-normal">Grand Indochina</h4></a>
                    <li><span style="color: #dc0039; font-size: 14px">21 DAYS | FROM</span>  <span style="font-size: 17px;color: #dc0039; font-weight: bold;">US$ 2154</span></li>
                    <li><p>The major places of interest in Cambodia, Vietnam and Laos are all included in this three journey.  You explore Angkor Temples including,...</p></li>
                </ul>
            </div>
            <h5 class="country font-normal font14"><i class="fa fa-map-marker"></i> Vietnam, Laos, Cambodia</h5>

        </div>

    </div>
    <!-- END RIBBON -->
</div>
<div class="col-md-3 product">
    <!-- START RIBBON -->
    <div class="tours">
        <!-- START RIBBON -->
        <!-- <div class="ribbon ribbon-red">
             <div class="banner ">
                 <div class="text">Special Offer</div>
             </div>
         </div>-->
        <!-- END RIBBON -->
        <div class="tour-grid">
            <div class="domtab nomargintop1">
                <a href="http://www.asianventure.com/vietnam/tour/culture_and_history.html"><h3 class="top-dest-title-h font18 font-normal">Culture Tours</h3></a>
                <ul class="domtabs">
                    <li><a href="#t3"><i class="fa fa-camera-retro"></i> Photo</a></li>
                    <li><a href="#t4"><i class="fa fa-map-marker"></i> Map</a></li>
                </ul>
                <div style="padding:0; margin:0">
                    <a name="t3" id="t3"></a>
                    <img src="http://www.asianventure.com/images/vietnam/glimpsevn.jpg" width="100%" height="175">
                </div>
                <div style="padding:0; margin:0">
                    <a name="t4" id="t4"></a>
                    <img src="img/common/test_2.jpg" width="100%" height="175">
                </div>
            </div>
            <div class="tour-grid detail">
                <ul>
                    <h4 class="font15 font-normal"><a href="http://www.asianventure.com/vietnam/tour/culture_and_history/glimpse_of_vietnam.html">Hidden North Vietnam</a></h4>
                    <li><span style="color: #dc0039; font-size: 14px">8 DAYS | FROM</span>  <span style="font-size: 17px;color: #dc0039; font-weight: bold;">US$ 105</span></li>
                    <li><p>Starting from Hanoi we take a cyclo ride through its old quarter  streets and board a drive to Halong Bay where we unwind in a scenic cruise,...</p></li>
                </ul>
            </div>
            <h5 class="country font-normal font14"><i class="fa fa-map-marker"></i> Vietnam</h5>
        </div>

    </div>
    <!-- END RIBBON -->
</div>
<div class="col-md-3 product">
    <!-- START RIBBON -->
    <div class="tours">
        <!-- START RIBBON -->
        <div class="ribbon ribbon-red">
            <div class="banner ">
                <div class="text">Special Offer</div>
            </div>
        </div>
        <!-- END RIBBON -->
        <div class="tour-grid">
            <div class="domtab nomargintop1">
                <a href="http://www.asianventure.com/vietnam/tour/indochina.html"><h3 class="top-dest-title-h font18 font-normal">Indochina Tours</h3></a>
                <ul class="domtabs">
                    <li><a href="#t5"><i class="fa fa-camera-retro"></i> Photo</a></li>
                    <li><a href="#t6"><i class="fa fa-map-marker"></i> Map</a></li>
                </ul>
                <div style="padding:0; margin:0">
                    <a name="t5" id="t5"></a>
                    <img src="http://www.asianventure.com/images/vietnam/essentialvn.jpg" width="100%" height="175">
                </div>
                <div style="padding:0; margin:0">
                    <a name="t6" id="t6"></a>
                    <img src="img/common/test_2.jpg" width="100%" height="175">
                </div>
            </div>
            <div class="tour-grid detail">
                <ul>
                    <h4 class="font15 font-normal"><a href="http://www.asianventure.com/vietnam/tour/indochina/essence_of_vietnam_and_laos.html">Essence Vietnam And Laos</a></h4>
                    <li><span style="color: #dc0039; font-size: 14px">14 DAYS | FROM</span>  <span style="font-size: 17px;color: #dc0039; font-weight: bold;">US$ 1449</span></li>
                    <li><p>This trip is carefully is designed for those who are keen to explore the most interesting places of Vietnam and Laos. Travelling from the bustling,...</p></li>
                </ul>
            </div>
            <h5 class="country font-normal font14"><i class="fa fa-map-marker"></i> Vietnam, Laos</h5>
        </div>

    </div>
    <!-- END RIBBON -->
</div>
<div class="col-md-3 product">
    <!-- START RIBBON -->
    <div class="tours">
        <!-- START RIBBON -->
        <!-- <div class="ribbon ribbon-red">
             <div class="banner ">
                 <div class="text">Special Offer</div>
             </div>
         </div>-->
        <!-- END RIBBON -->
        <div class="tour-grid">
            <div class="domtab nomargintop1">
                <a href="http://www.asianventure.com/vietnam/tour/culture_and_history.html"><h3 class="top-dest-title-h font18 font-normal">Culture Tours</h3></a>
                <ul class="domtabs">
                    <li><a href="#t1"><i class="fa fa-camera-retro"></i> Photo</a></li>
                    <li><a href="#t2"><i class="fa fa-map-marker"></i> Map</a></li>
                </ul>
                <div style="padding:0; margin:0">
                    <a name="t1" id="t1"></a>
                    <img src="http://www.asianventure.com/images/vietnam/centralvietnams.jpg" width="100%" height="175">
                </div>
                <div style="padding:0; margin:0">
                    <a name="t2" id="t2"></a>
                    <img src="img/common/test_2.jpg" width="100%" height="175">
                </div>
            </div>
            <div class="tour-grid detail">
                <ul>
                    <a href="http://www.asianventure.com/vietnam/tour/culture_and_history/central_vietnam_stopver.html"><h4 class="font15 font-normal">Central Vietnam Stopver</h4></a>
                    <li><span style="color: #dc0039; font-size: 14px">4 DAYS | FROM</span>  <span style="font-size: 17px;color: #dc0039; font-weight: bold;">US$ 707</span></li>
                    <li><p>Starting in Hue, we spend our time exploring various outlying mausoleums on a cruise along the scenic Perfume River plus the Imperial Citadel,...</p></li>
                </ul>
            </div>
            <h5 class="country font-normal font14"><i class="fa fa-map-marker"></i> Vietnam</h5>
        </div>

    </div>
    <!-- END RIBBON -->
</div>
<div class="col-md-3 product">
    <!-- START RIBBON -->
    <div class="tours">
        <!-- START RIBBON -->
        <div class="ribbon ribbon-red">
            <div class="banner ">
                <div class="text">Best Seller</div>
            </div>
        </div>
        <!-- END RIBBON -->
        <div class="tour-grid">
            <div class="domtab nomargintop1">
                <a href="http://www.asianventure.com/cambodia/tour/culture_and_history.html"><h3 class="top-dest-title-h font18 font-normal">Culture Tours</h3></a>
                <ul class="domtabs">
                    <li><a href="#t9"><i class="fa fa-camera-retro"></i> Photo</a></li>
                    <li><a href="#t10"><i class="fa fa-map-marker"></i> Map</a></li>
                </ul>
                <div style="padding:0; margin:0">
                    <a name="t9" id="t9"></a>
                    <img src="http://www.asianventure.com/images/cambodia/renaissancecam.jpg" width="100%" height="175">
                </div>
                <div style="padding:0; margin:0">
                    <a name="t10" id="t10"></a>
                    <img src="img/common/test_2.jpg" width="100%" height="175">
                </div>
            </div>
            <div class="tour-grid detail">
                <ul>
                    <a href="http://www.asianventure.com/cambodia/tour/culture_and_history/renaissance_of_cambodia.html"><h4 class="font15 font-normal">Renaissance Of Cambodia</h4></a>
                    <li><span style="color: #dc0039; font-size: 14px">9 DAYS | FROM</span>  <span style="font-size: 17px;color: #dc0039; font-weight: bold;">US$ 594</span></li>
                    <li><p>With a rich and ancient history, smiling people and beautiful nature, Cambodia is a wonderful country to explore. This  impressive trip takes you right around the country,...</p></li>
                </ul>
            </div>
            <h5 class="country font-normal font14"><i class="fa fa-map-marker"></i> Cambodia</h5>
        </div>

    </div>
    <!-- END RIBBON -->
</div>
<div class="col-md-3 product">
    <!-- START RIBBON -->
    <div class="tours">
        <!-- START RIBBON -->
        <!-- <div class="ribbon ribbon-red">
             <div class="banner ">
                 <div class="text">Special Offer</div>
             </div>
         </div>-->
        <!-- END RIBBON -->
        <div class="tour-grid">
            <div class="domtab nomargintop1">
                <a href="http://www.asianventure.com/laos/tour/overland.html"><h3 class="top-dest-title-h font18 font-normal">Overland Tours</h3></a>
                <ul class="domtabs">
                    <li><a href="#t11"><i class="fa fa-camera-retro"></i> Photo</a></li>
                    <li><a href="#t12"><i class="fa fa-map-marker"></i> Map</a></li>
                </ul>
                <div style="padding:0; margin:0">
                    <a name="t11" id="t11"></a>
                    <img src="http://www.asianventure.com/images/laos/laospender.jpg" width="100%" height="175">
                </div>
                <div style="padding:0; margin:0">
                    <a name="t12" id="t12"></a>
                    <img src="img/common/test_2.jpg" width="100%" height="175">
                </div>
            </div>
            <div class="tour-grid detail">
                <ul>
                    <a href="http://www.asianventure.com/laos/tour/overland/laos_spendour.html"><h4 class="font15 font-normal">Laos Spendour</h4></a>
                    <li><span style="color: #dc0039; font-size: 14px">6 DAYS | FROM</span>  <span style="font-size: 17px;color: #dc0039; font-weight: bold;">US$ 597</span></li>
                    <li><p>This fascinating combination of ancient cultures, river journeys, stunning scenery and culminating makes Laos one of the beautiful and unspoiled parts in Indochina is,...</p></li>
                </ul>
            </div>
            <h5 class="country font-normal font14"><i class="fa fa-map-marker"></i> Laos</h5>
        </div>

    </div>
    <!-- END RIBBON -->
</div>
<div class="col-md-3 product">
    <!-- START RIBBON -->
    <div class="tours">
        <!-- START RIBBON -->
        <div class="ribbon ribbon-red">
            <div class="banner ">
                <div class="text">Special Offer</div>
            </div>
        </div>
        <!-- END RIBBON -->
        <div class="tour-grid">
            <div class="domtab nomargintop1">
                <a href="http://www.asianventure.com/myanmar/tour/culture.html"><h3 class="top-dest-title-h font18 font-normal">Culture Tours</h3></a>
                <ul class="domtabs">
                    <li><a href="#t13"><i class="fa fa-camera-retro"></i> Photo</a></li>
                    <li><a href="#t14"><i class="fa fa-map-marker"></i> Map</a></li>
                </ul>
                <div style="padding:0; margin:0">
                    <a name="t13" id="t13"></a>
                    <img src="http://www.asianventure.com/images/myanmar/passionofmyanmar.jpg" width="100%" height="175">
                </div>
                <div style="padding:0; margin:0">
                    <a name="t14" id="t14"></a>
                    <img src="img/common/test_2.jpg" width="100%" height="175">
                </div>
            </div>
            <div class="tour-grid detail">
                <ul>
                    <a href="http://www.asianventure.com/myanmar/tour/culture/passion_of_myanmar.html"><h4 class="font15 font-normal">Passion Of Myanmar</h4></a>
                    <li><span style="color: #dc0039; font-size: 14px">8 DAYS | FROM</span>  <span style="font-size: 17px;color: #dc0039; font-weight: bold;">US$ 1008</span></li>
                    <li><p>This exciting  trip designed for individual traveller who is keen to explore all aspects of Burma. Running from charming Yangon to tranquil Inle Lake, this itinerary,...</p></li>
                </ul>
            </div>
            <h5 class="country font-normal font14"><i class="fa fa-map-marker"></i> Myanmar</h5>
        </div>

    </div>
    <!-- END RIBBON -->
</div>
<div class="col-md-3 product">
    <!-- START RIBBON -->
    <div class="tours">
        <!-- START RIBBON -->
        <div class="ribbon ribbon-red">
            <div class="banner ">
                <div class="text">Best Seller</div>
            </div>
        </div>
        <!-- END RIBBON -->
        <div class="tour-grid">
            <div class="domtab nomargintop1">
                <a href="http://www.asianventure.com/vietnam/tour/overland.html"><h3 class="top-dest-title-h font18 font-normal">Overland Tours</h3></a>
                <ul class="domtabs">
                    <li><a href="#t15"><i class="fa fa-camera-retro"></i> Photo</a></li>
                    <li><a href="#t16"><i class="fa fa-map-marker"></i> Map</a></li>
                </ul>
                <div style="padding:0; margin:0">
                    <a name="t15" id="t15"></a>
                    <img src="http://www.asianventure.com/images/vietnam/hilltribecounter.jpg" width="100%" height="175">
                </div>
                <div style="padding:0; margin:0">
                    <a name="t16" id="t16"></a>
                    <img src="img/common/test_2.jpg" width="100%" height="175">
                </div>
            </div>
            <div class="tour-grid detail">
                <ul>
                    <a href="http://www.asianventure.com/vietnam/tour/overland/hill_tribe_encounter.html"><h4 class="font15 font-normal">Hill Tribe Encounter</h4></a>
                    <li><span style="color: #dc0039; font-size: 14px">21 DAYS | FROM</span>  <span style="font-size: 17px;color: #dc0039; font-weight: bold;">US$ 1489</span></li>
                    <li><p>Travelling on 4 WD car you explore in depth the unequalled northern scenery of the north and see plenty of hill tribe groups living in remote mountainous regions of Muang,...</p></li>
                </ul>
            </div>
            <h5 class="country font-normal font14"><i class="fa fa-map-marker"></i> Vietnam</h5>
        </div>

    </div>
    <!-- END RIBBON -->
</div>
</div>
</div>
</div>
<!--country travel guide-->
<div class="row mobile_nomargintop_am">
    <div class="col-md-12">
        <h2 class="travelguide-h font22 text-center font22 marginbottom3 mobile_nomargintop nomargintop">TRAVEL GUIDE</h2>
        <h3 class="text-center font18 marginbottom10 margintop3">VIETNAM, CAMBODIA, LAOS, THAILAND, MYANMAR, CHINA</h3>
        <div class="col-md-4 update_news">
            <img src="img/common/feature_holiday.jpg" width="100%">
            <div style="background: #FFFFFF; border: 1px solid #cccccc; padding: 0 5px">
                <h2 class="font22 margintop3 marginbottom1 font16h">UPDATE NEWS</h2>
                <div id="scroll">
                    <table class="table topservice">
                        <tbody>
                        <tr>
                            <td class="map-thumb first hidden-xs">
                                <img src="http://www.asianventure.com/images/news/view_thaihoa_palace.jpg" class="thumb" alt="">
                            </td>
                            <td class="first text">
                                <div>
                                    <h6 class="font13 font-normal nomarginpadding">Hue eyes air connection with to japan</h6><a href="http://www.asianventure.com/vietnam/news/hue_eyes_air_connection_with_to_japan.html" class="read-more"> Read more</a>
                                </div>
                            </td>
                            <td class="first date"><p>18</p><hr class="nomarginpadding mobile_nopadding"><span class="paddingtop5 mobile_padding2">Aug.08</span></td>
                        </tr>
                        <tr>
                            <td class="map-thumb hidden-xs">
                                <img data-src="" src="http://www.asianventure.com/images/news/news_5.jpg" class="thumb" alt="" title="" width="100%">
                            </td>
                            <td class="text">
                                <div>
                                    <span style="font-weight: bold">Hiking and exploring mountain cam</span><a href="http://www.asianventure.com/vietnam/news/hiking_and_exploring_mountain_cam.html" class="read-more"> Read more</a>
                                </div>
                            </td>
                            <td class="date"><p>14</p><hr class="nomarginpadding mobile_nopadding"><span class="paddingtop5">May.08</span></td>
                        </tr>
                        <tr>
                            <td class="map-thumb hidden-xs">
                                <img data-src="" src="img/common/feature_holiday_test.jpg" class="thumb" alt="" title="" width="100%">
                            </td>
                            <td class="text">
                                <div>
                                    <h6 class="font13 font-normal nomarginpadding">Win 3 free nights in Scotland</h6>, Win a free three night,..<a href="" class="read-more"> Read more</a>
                                </div>
                            </td>
                            <td class="date"><p>14</p><hr class="nomarginpadding mobile_nopadding"><span class="paddingtop5">May.08</span></td>
                        </tr>
                        <tr>
                            <td class="map-thumb hidden-xs">
                                <img data-src="" src="http://www.asianventure.com/images/news/news_5.jpg" class="thumb" alt="" title="" width="100%">
                            </td>
                            <td class="text">
                                <div>
                                    <h6 class="font13 font-normal nomarginpadding">Hiking and exploring mountain cam</h6>, An Giang Province, located in the Mekong Delta region between the Tien,..<a href="http://www.asianventure.com/vietnam/news/hiking_and_exploring_mountain_cam.html" class="read-more"> Read more</a>
                                </div>
                            </td>
                            <td class="date"><p>14</p><hr class="nomarginpadding mobile_nopadding"><span class="paddingtop5">May.08</span></td>
                        </tr>
                        <tr>
                            <td class="map-thumb hidden-xs">
                                <img data-src="" src="http://www.asianventure.com/images/news/news_5.jpg" class="thumb" alt="" title="" width="100%">
                            </td>
                            <td class="text">
                                <div>
                                    <h6 class="font13 font-normal nomarginpadding">Hiking and exploring mountain cam</h6>, An Giang Province, located in the Mekong Delta region between the Tien and Hau rivers,..<a href="http://www.asianventure.com/vietnam/news/hiking_and_exploring_mountain_cam.html" class="read-more"> Read more</a>
                                </div>
                            </td>
                            <td class="date"><p>14</p><hr class="nomarginpadding mobile_nopadding"><span class="paddingtop5">May.08</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div  class="newsbottom">
                    <a href="#" id="scroll-down"><img src="img/common/icon_down1.png" width="17" height="15" border="0"></a> <span style="font-size: 11px; font-weight: bold">MORE</span> <a href="#" id="scroll-up"><img src="img/common/icon_top1.png" width="17" height="15" border="0"></a>
                </div>
            </div>


        </div>
        <div class="col-md-8">
            <div class="peak-product-component-content mobile_marginleft12am">
                <div class="row">
                    <div class="col-md-4 nomarginpadding block">
                        <img src="img/common/cambodia_homepage.jpg" class="countryimg">
                        <h2 class="top-dest-title-h-left font22"><a href="http://www.asianventure.com/cambodia.html">Cambodia</a></h2>
                    </div>
                    <div class="col-md-4 nomarginpadding block">
                        <img src="img/common/china_homepage.jpg" class="countryimg">
                        <h2 class="top-dest-title-h-left font22"><a href="http://www.asianventure.com/china.html">china</a></h2>
                    </div>
                    <div class="col-md-4 nomarginpadding block">
                        <img src="img/common/myanmar_homepage.jpg" class="countryimg">
                        <h2 class="top-dest-title-h-left font22"><a href="http://www.asianventure.com/myanmar.html">Myanmar</a></h2>
                    </div>
                    <div class="col-md-4 nomarginpadding block">
                        <img src="img/common/thailand_homepage.jpg" class="countryimg">
                        <h2 class="top-dest-title-h-right font22"><a href="http://www.asianventure.com/thailand.html">Thailand</a></h2></div>
                    <div class="col-md-4 nomarginpadding block">
                        <img src="img/common/laos_homepage.jpg" class="countryimg">
                        <h2 class="top-dest-title-h-right font22"><a href="http://www.asianventure.com/laos.html">Laos</a></h2>
                    </div>
                    <div class="col-md-4 nomarginpadding block">
                        <img src="img/common/vietnam_homepage.jpg" class="countryimg">
                        <h2 class="top-dest-title-h-right font22"><a href="/vietnam.html">Vietnam</a></h2>
                    </div>
                </div>
            </div>
            <!--<div class="peak-product-component-content visible-xs" style="margin-left: -12px">
                <div class="row">
                    <div class="col-md-4 block">
                        <img src="img/common/cambodia_homepage.jpg">
                        <h2 class="top-dest-title-h-left font22"><a href="http://www.asianventure.com/cambodia.html">Cambodia</a></h2>
                    </div>
                    <div class="col-md-4 block">
                        <img src="img/common/china_homepage.jpg">
                        <h2 class="top-dest-title-h-left font22"><a href="http://www.asianventure.com/china.html">china</a></h2>
                    </div>
                    <div class="col-md-4 block">
                        <img src="img/common/myanmar_homepage.jpg" >
                        <h2 class="top-dest-title-h-left font22"><a href="http://www.asianventure.com/myanmar.html">Myanmar</a></h2>
                    </div>
                    <div class="col-md-4 block">
                        <img src="img/common/thailand_homepage.jpg">
                        <h2 class="top-dest-title-h-right font22"><a href="http://www.asianventure.com/thailand.html">Thailand</a></h2>
                    </div>
                    <div class="col-md-4 block">
                        <img src="img/common/laos_homepage.jpg">
                        <h2 class="top-dest-title-h-right font22"><a href="http://www.asianventure.com/laos.html">Laos</a></h2>
                    </div>
                    <div class="col-md-4 block">
                        <img src="img/common/vietnam_homepage.jpg">
                        <h2 class="top-dest-title-h-right font22"><a href="/vietnam.html">Vietnam</a></h2>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
</div>


</div>

<div class="row hidden-xs">
    <div class="row" style="background: #f3f3f3; height: 140px; margin-top: -40px">
        <p></p>
    </div>
    <div class="row">
        <div class="container">
            <div class="col-md-12">
                <div class="bottomIcon">
                    <div class="col-md-3 topIcon">
                        <img src="img/common/icon_index_money_60x60.png">
                        <h5>PRICES</h5>
                        <p style="text-align: center">Check low rates of various holidays packages </p>
                    </div>
                    <div class="col-md-3 topIcon">
                        <img src="img/common/icon_index_fast_60x60.png">
                        <h5>FAST</h5>
                        <p style="text-align: center">Fast customer support and quote offer</p>
                    </div>
                    <div class="col-md-3 topIcon">
                        <img src="img/common/icon_index_save_60x60.png">
                        <h5>SAFE</h5>
                        <p style="text-align: center">Communication and  safe transactions</p>
                    </div>
                    <div class="col-md-3 topIcon">
                        <img src="img/common/icon_index_hand_60x60.png">
                        <h5>SATISFACTION</h5>
                        <p style="text-align: center">Customer satisfaction is our success</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Body -->

<p></p>
<!-- Footer -->
<div class="footer">
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
                            <li><a href="/vietnam.html">Vietnam</a></li>
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
                            <li>Add:  <span> Asianventure Tours Co.Ltd</span><br>
                                <span style="padding-left: 25px">110 Ba Trieu, Hanoi, Vietnam</span></li>
                            <li>Phone:    <span style="padding-left: 5px">+84 (0) 4 39438550 - 1</span><br>
                                <span style="padding-left: 50px">+84 (0) 944567788 (hotline)</span>
                            </li>
                            <li>Fax:      <span style="padding-left:20px">+84 (0) 4 39438552</span> </li>
                            <li>Email:    <span style="padding-left:14px">info@asianventure.com</span></li>

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
</body>

</html>