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

    <!--chay slide top activities-->
    <script src="js/sliderjs/jquery-1.js"></script><!-- menu in mobile -->
    <script src="js/sliderjs/jquery_002.js"></script>
    <script src="js/sliderjs/customize.js"></script>

    <!-- Bootstrap Core JavaScript chay slide trang index-->
    <script src="js/bootstrap.min.js"></script><!-- menu in mobile -->

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
            <div class="col-xs-5 mobile_nopadding">
                <div
                    style="float: left; margin:0; padding:5px 0 0 10px; display: block; font-size: 13px; font-weight: bold">
                    Asianventure Tours
                    <img src="img/common/logo_mobile.png" style="position: absolute; top:20px; left: 10px">
                </div>
            </div>
            <div class="col-xs-4 mobile_nopadding">
                <div style="display: block; text-align:right; padding-top:8px">
                    <i class="fa fa-heart" style="font-size:22px;"></i>
                    <i class="fa fa-phone-square" style="font-size:22px;"></i>
                    <a href="#" style="color: #FFFFFF"><i class=" fa fa-search" style="font-size:22px;"
                                                          id="showsearch"></i></a>
                </div>
            </div>
            <div class="col-xs-3 nomarginpadding">
                <div
                    style="float:right; margin:0 -15px 0 0; padding:0 0 0 0; height:40px; width: 90px; background: #006666;">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-content"
                            style="padding-top:10px; margin: 0">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#" style="font-size: 12px; float: left" data-toggle='collapse'
                       data-target="#menu-content">MENU</a>
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
                                <input type="text" class="form-control" placeholder="Search">
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
                <li><a href="http://www.asianventure.com/vietnam/travel/vietnam_car_rental.html">Vietnam Car
                        Rental</a></li>
                <li><a href="http://www.asianventure.com/laos/travel/laos_car_rental.html">Laos Car Rental</a></li>
                <li><a href="http://www.asianventure.com/cambodia/travel/cambodia_car_rental.html">Cambodia Car
                        Rental</a></li>
                <li><a href="http://www.asianventure.com/thailand/travel/thailand_car_rental.html">Thailand Car
                        Rental</a></li>
                <li><a href="http://www.asianventure.com/myanmar/travel/myanmar_car_rental.html">Myanamr Car
                        Rental</a></li>
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
                Contact | Enquiry
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

<div style="margin-top:40px" class="hidden-xs">
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
                        <li><a href="http://www.asianventure.com"><i class="fa fa-heart-o"></i> My shortlist</a>
                        </li>
                        <li><a href="http://www.asianventure.com"><i class="fa fa-key"></i> My Account</a></li>
                        <li><a href="http://www.asianventure.com/common/contact_enquiry.html"><i
                                    class="fa fa-envelope-o"></i> Enquiry</a></li>
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
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    Asianventure <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="http://www.asianventure.com/common/profile.html">About Company</a>
                                    </li>
                                    <li><a href="http://www.asianventure.com/common/asianventure.html">Responsible
                                            Tourism</a></li>
                                    <li><a href="http://www.asianventure.com/common">Comapny Media</a></li>
                                    <li><a href="http://www.asianventure.com">Job Oppertunities</a></li>
                                    <li><a href="http://www.asianventure.com">Company Award</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    Destination <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="http://www.asianventure.com/vietnam.html">Vietnam</a></li>
                                    <li><a href="http://www.asianventure.com/laos.html">Laos</a></li>
                                    <li><a href="http://www.asianventure.com/cambodia.html">Cambodia</a></li>
                                    <li><a href="http://www.asianventure.com/thailand.html">Thailand</a></li>
                                    <li><a href="http://www.asianventure.com/myanamr.html">Myanamar</a></li>
                                    <li><a href="http://www.asianventure.com/china.html">China</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Community <span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="http://www.asianventure.com/common/condition.html">Booking
                                            Conditions</a></li>
                                    <li><a href="http://www.asianventure.com/common/privacy.html">Privacy Policy</a>
                                    </li>
                                    <li><a href="http://www.asianventure.com/common/condition.html">Term and
                                            Conditions</a></li>
                                    <li><a href="http://www.asianventure.com/testimonial/index.html">Feedback</a>
                                    </li>
                                    <li><a href="http://www.asianventure.com/common/contact_enquiry.html">Brochure
                                            Request</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#">Travel Style<span class="caret"></span></a>
                            </li>

                            <li class="dropdown">
                                <a href="http://www.asianventure.com/">Inspiration<span class="caret"></span></a>
                            </li>

                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tour Packages<span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="http://www.asianventure.com/vietnam/tour/index.html">Vietnam
                                            Tours</a></li>
                                    <li><a href="http://www.asianventure.com/laos/tour/index.html">Laos Tours</a>
                                    </li>
                                    <li><a href="http://www.asianventure.com/cambodia/tour/index.html">Cambodia
                                            Tours</a></li>
                                    <li><a href="http://www.asianventure.com/thailand/tour/index.html">Thailand
                                            Tours</a></li>
                                    <li><a href="http://www.asianventure.com/myanmar/tour/index.html">Myanmar
                                            Tours</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Travel Guide <span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="http://www.asianventure.com/vietnam/guide/index.html">Vietnam
                                            Travel Guide</a></li>
                                    <li><a href="http://www.asianventure.com/laos/guide/index.html">Laos Travel
                                            Guide</a></li>
                                    <li><a href="http://www.asianventure.com/cambodia/guide/index.html">Cambodia
                                            Travel Guide</a></li>
                                    <li><a href="http://www.asianventure.com/thailand/guide/index.html">Thailand
                                            Travel Guide</a></li>
                                    <li><a href="http://www.asianventure.com/myanmar/guide/index.html">Myanmar
                                            Travel Guide</a></li>
                                    <li><a href="http://www.asianventure.com/yunnan/guide/index.html">China Travel
                                            Guide</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="http://www.asianventure.com">Lodging<span class="caret"></span></a>
                            </li>

                            <li class="dropdown">
                                <a href="http://www.asianventure.com">Hot Deals<span class="caret"></span></a>
                            </li>

                            <li class="dropdown">
                                <a href="http://www.asianventure.com">Travel Blog</a>
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
<div class="headerbox_tourdetails">
    <div class="container">
        <div class="col-md-3">
            <div style="border-right: 1px solid #bfc3c9; min-height: 90px; margin-top: 30px">
                <h5 class="text-left color-blue">Search site</h5>

                <div class="input-group" style="padding-right: 10px">
                    <input class="form-control">
                <span class="input-group-btn">
                <button class="btn btn-primary" type="button">Go!</button>
                </span>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <h4 class="text-left color-blue">FIND TOURS</h4>

            <div class="form-group">
                <div class="col-md-5">
                    <label class="col-lg-3 col-md-3 col-sm-12 control-label margintop10 font13">Destination</label>

                    <div class="col-lg-9 col-md-9 marginbottom10">
                        <select class="form-control">
                            <option value="AK">Vietnam</option>
                            <option value="HI">Laos</option>
                            <option value="HI">Cambodia</option>
                            <option value="HI">Thailand</option>
                            <option value="HI">Myanmar</option>
                        </select>
                    </div>
                    <label class="col-lg-3 col-md-3 col-sm-12 control-label margintop10 font13">Keywords</label>

                    <div class="col-lg-9 col-md-9">
                        <input class="form-control">
                    </div>
                </div>

                <div class="col-md-5">
                    <label class="col-lg-3 col-md-3 col-sm-12 control-label margintop10 font13">Length</label>

                    <div class="col-lg-19 col-md-9 marginbottom10">
                        <select class="form-control">
                            <option value="AK">1 Day</option>
                            <option value="HI">Hawaii</option>
                        </select>
                    </div>
                    <label class="col-lg-3 col-md-3 col-sm-12 control-label margintop10 font13">Time</label>

                    <div class="col-lg-19 col-md-9 marginbottom10">
                        <select class="form-control">
                            <option value="AK">January</option>
                            <option value="HI">Hawaii</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-2">
                    <button class="btn btn-default"><span class="font-bold" style="font-size: 28px">GO</span> <i
                            class="fa fa-angle-right font-bold" style="font-size: 32px"></i> <br>
                        32 Results
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
</header>
<!-- End Header -->

<!-- Begin Body Content-->
<div class="container margintop30 bs-section">
    <div class="col-md-8 content_800" style="padding-right: 24px">
        <div class="row">
             <div class="col-md-12">
                <img width="100%" height="300" src="img/portfolio/halong_1246x320.jpg">
                <ul style="background: rgba(255,255,255,0.9); height: 45px; width: 220px; position: absolute; top:262px; left:
            60px;border: 1px solid #f2f2f2; border-radius: 5px; border-bottom: none">
                    <li><p class="text-center color-blue font-bold paddingtop10 font16">HANOI TOURS</p></li>
                </ul>
            </div>
        </div>
        <!--intro-->
        <div class="row bs-section">
            <div class="col-md-4 nopaddingright">
                <h2 class="font22 font-normal color-green">Local  Tours</h2>
                <div class="tours-overview">
                    <div class="introcontent">
                        <p>Find exclusive tours in and round Hanoi on Asianventure.com. Showing you all the best Hanoi tour price promotions across multiple theme trips, there is sure to be one that suit your budget and travel schedule. Don't miss all the great tour deals in Hanoi. All featured  tours are based on different service levels   ...<a href="" class="read-more"> Read more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 nopaddingright" >
                <h2 class="font22 font-normal color-green">Book Tours</h2>
                <div class="tours-overview">
                    <div class="introcontent1">
                        <p>Book your Hanoi vacation securely online and know that the Asianventure.com 24/7 customer support is always a click or call away. View all available tour deals in one place, from economy to comfort and luxury accommodation, we give you all the options. Browse promotions and book.
                            <a href="" class="read-more"> Read more</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 nopaddingright">
                <h2 class="font22 font-normal color-green">Hanoi Guide</h2>
                <div class="tours-overview"  style="border-right: none">
                    <div class="introcontent2">
                        <p>You'll find the complete travel guide of Hanoi , including the major attractions, tour activities, night life , travel tips, Hanoi photos, map, Hanoi restaurants to sample the local foods, Hanoi hotels guidance, emergency contact and many more to build a perfect trip for your vacation in  Hanoi,..<a href="" class="read-more"> Read more</a></p>
                    </div>
                </div>
            </div>

        </div>
        <!--see more vietnam tours -->
        <div class="row bs-section clear margintop20">
            <div class="col-md-12 mobile_marginleft4am">
                        <div class="jcarousel-skin-tango marginrightam12">
                            <div class="jcarousel-container jcarousel-container-horizontal">
                                <div class="jcarousel-clip jcarousel-clip-horizontal">
                                    <ul id="mycarousel" class="jcarousel-list jcarousel-list-horizontal">
                                        <li class="jcarousel-item fix-w-h">
                                            <img src="img/common/tours_slider1.jpg">
                                            <h6 class="title1">Ho Chi Minh</h6>
                                            <h4 class="title2">20 Tours</h4>

                                        </li>

                                        <li class="jcarousel-item jcarousel-item-horizontal fix-w-h"">
                                        <img src="img/common/tours_slider2.jpg">
                                        <h6 class="title1">muine</h6>
                                        <h4 class="title2">20 Tours</h4>
                                        </li>

                                        <li class="jcarousel-item jcarousel-item-horizontal fix-w-h"">
                                        <img src="img/common/tours_slider3.jpg">
                                        <h6 class="title1">sapa</h6>
                                        <h4 class="title2">20 Tours</h4>
                                        </li>

                                        <li class="jcarousel-item jcarousel-item-horizontal fix-w-h"">
                                        <img src="img/portfolio/hoian_200x145.jpg">
                                        <h6 class="title1">hoian</h6>
                                        <h4 class="title2">20 Tours</h4>
                                        </li>

                                        <li class="jcarousel-item jcarousel-item-horizontal fix-w-h"">
                                        <img src="img/portfolio/sapa_200x145.jpg">
                                        <h6 class="title1">mai chau</h6>
                                        <h4 class="title2">20 Tours</h4>
                                        </li>

                                        <li class="jcarousel-item jcarousel-item-horizontal fix-w-h"">
                                        <img src="img/portfolio/dalat_200x145.jpg">
                                        <h6 class="title1">dalat</h6>
                                        <h4 class="title2">20 Tours</h4>
                                        </li>

                                        <li class="jcarousel-item jcarousel-item-horizontal fix-w-h"">
                                        <img src="img/portfolio/hochiminh_200x145.jpg">
                                        <h6 class="title1">Ho Chi Minh</h6>
                                        <h4 class="title2">20 Tours</h4>
                                        </li>

                                        <li class="jcarousel-item jcarousel-item-horizontal fix-w-h"">
                                        <img src="img/portfolio/mekong_200x145.jpg">
                                        <h6 class="title1">mekong</h6>
                                        <h4 class="title2">20 Tours</h4>
                                        </li>

                                        <li class="jcarousel-item jcarousel-item-horizontal fix-w-h"">
                                        <img src="img/portfolio/cuchi_200x145.jpg" >
                                        <h6 class="title1">cu chi</h6>
                                        <h4 class="title2">20 Tours</h4>
                                        </li>

                                        <li class="jcarousel-item jcarousel-item-horizontal fix-w-h"">
                                        <img src="img/portfolio/phuquoc_200x145.jpg">
                                        <h6 class="title1">phu quoc</h6>
                                        <h4 class="title2">20 Tours</h4>
                                        </li>

                                    </ul>

                                </div>

                                <div class="jcarousel-prev jcarousel-prev-horizontal" style="display: block;"></div>

                                <div class="jcarousel-next jcarousel-next-horizontal" style="display: block;"></div>

                            </div>

                        </div>

                    </div>
        </div>
    </div>
    <div class="col-md-4 right_menu_328 text_right hidden-xs">
        <div class="row">
            <div class="col-md-12"
                 style=" border: 1px solid #cccccc; background: url(img/common/contact_person.png) right bottom no-repeat;">

                <form name="contactform" method="post" action="#" class="form-horizontal" role="form">
                    <div style="background: url(img/common/bg_1.png) 2px 0 no-repeat; height:77px; width: 330px"
                         class="form-group">
                        <h5 style="color: #FFFFFF; padding: 0 5px">Request a call back as soon
                            as we are open today</h5>

                        <div style="position: absolute; top:55px; left: 160px">
                            <ul style="float: right; margin: 0; padding: 0">
                                <li><img src="img/common/icon_contact1_40x40.png">
                                    <img src="img/common/icon_contact2_40x40.png">
                                    <img src="img/common/icon_contact3_40x40.png"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">

                            <p style="font-size: 14px; padding-top: 10px; font-weight: bold">We ‘re sorry we’ve missed you,
                                just enter
                                your details below and we promise to call
                                you back in the opening time</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="Name" name="Name" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-md-12">
                            <input type="text" class="form-control" id="number" name="number" placeholder="Contact Number">
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-md-12">
                            <input type="text" class="form-control" id="Email" name="Email" placeholder="Email">
                        </div>
                    </div>

                    <div class="form-group">

                        <div class="col-md-12">
                            <label>I require a</label><br>
                            <input type="radio"> <label>Package Tours</label><br>
                            <input type="radio"> <label>Hotel Booking</label><br>
                            <input type="radio"> <label>Flight Ticket</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-info">
                                Submit Request
                            </button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

<!--End Body Content-->

<!--begin mobile version-->

<!--end mobile version-->
<!-- Footer -->
<div class="footer" style="border-top: none">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="col-md-6 col-xs-6 footerpadding">
                        <h5>ASIANVENTURE</h5>
                        <ul>
                            <li style="width: 100%"><a href="http://www.asianventure.com/common/profile.html">About
                                    Company</a></li>
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
                            <li>Address: <span> Asianventure Tours Co.Ltd</span><br>
                                <span style="padding-left: 59px">110 Ba Trieu, Hanoi, Vietnam</span></li>
                            <li>Phone: <span style="padding-left: 10px">+84 (0) 4 39438550 - 1</span><br>
                                <span style="padding-left: 59px">+84 (0) 944567788 (hotline)</span>
                            </li>
                            <li>Fax: <span style="padding-left:29px">+84 (0) 4 39438552</span></li>
                            <li>Email: <span style="padding-left:22px">info@asianventure.com</span></li>

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
            <a href=""> Asianventure Tours &copy; 2015 - 2020</a> | <a
                href="http://www.asianventure.com/common/condition.html"> Terms & Conditions</a> | <a
                href="http://www.asianventure.com/common/privacy.html"> Privacy Policy</a>
        </div>
    </div>
</div>
<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll visible-xs visble-sm">
    <a class="btn btn-grey" href="#page-top">
        <i class="fa fa-chevron-up setoff"></i>
    </a>
</div>

<script type="text/javascript" src="js/readmore.js"></script>
</body>
</html>