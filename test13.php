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
<style>

    /*see more vietnam tours*/
    .brall {
        border-radius: 4px;
    }

    .b {
        border: 1px solid #e7e7e2;
    }

    .tile-stats-1 .tile-stats-1-content {
        padding: 10px 0;
        margin: 0 0;
        width: 100%;
        color: #000000;
        height: auto;
        text-align: center;
    }

    .travelguide_topvote {
        border-top: 1px solid #cccccc;
        clear: both;
        margin: 8px 0;
    }
    .topvote {
        padding: 0;
        margin:10px 0 0 0;
    }

    .topvote td.text{
        font-size: 12px;
        line-height: 14px;
        text-align: right;
    }

    .topvote td.text div{
        padding:0 5px 0 0;
        border-right: 1px solid #cccccc;
        min-height:61px
    }

    .topvote td.date p {
        padding: 15px 0 6px 0;
        line-height: 17px;
        height: 17px;
        text-align: center;
    }

    .topvote tbody tr .map-thumb img {
        cursor: pointer;
        width: 120px;
        height: 65px;
    }

    @media (max-width: 678px) {
        .topvote td.text div {
            border-right: none;
            margin:0;
            padding: 0;
        }
        .topvote td.text h6,.topvote td.text p {
            height: 17px;
            line-height: 17px;
            margin: 0;
            padding:3px 0 0 0;
        }
    }
</style>
</head>
<body id="page-top">




<!-- Begin Body -->
<div class="container margintop70 mobile_nomargintop">

    <div class="row bs-section">

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

    <div class="row" id="topplace">
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
                <span class="top-dest-title-city-bottom">Halong, Vietnam</span>
            </a>
            </div>
            <div class="col-md-3 destination nopaddingleft nopaddingright">
            <a href="">
                <img src="img/common/travelguide_nhatrang.jpg" width="100%"  height="163">
                <span class="top-dest-title-city-bottom">Halong, Vietnam</span>
            </a>
            </div>
            <div class="col-md-3 destination nopaddingleft nopaddingright">
            <a href="">
                <img src="img/common/travelguide_hochiminh.jpg" width="100%"  height="163">
                <span class="top-dest-title-city-bottom">Halong, Vietnam</span>
            </a>
            </div>
            <div class="col-md-3 destination nopaddingleft">
            <a href="">
                <img src="img/common/travelguide_dalat.jpg" width="100%"  height="163">
                <span class="top-dest-title-city-bottom">Halong, Vietnam</span>
            </a>
            </div>
        </div>
        </div>
    </div>


    <div class="bs-section clear margintop20">
        <div class="col-md-2 mobile_marginbottom20">
            <div class="row">
                <div class="tile-stats paddingright24 mobile_nopadding">
                    <a href=#>
                        <div class=tile-stats-content style="height: 250px">
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
                                <i class="fa fa-map-marker fa-1x"></i> <h5 class="font14 font-normal inline-display"><a href="http://www.asianventure.com/vietnam/guide/hanoi.html" class="color-blue"> Hanoi, Vietnam</a></h5>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 countrynews">
                            <img src="http://www.asianventure.com/images/vietnam/vietnam_hue.jpg" alt="vietnam" height="120" width="100%">
                            <div class="content1" style="min-height: 130px">
                                <h6 class="text-left"><a href="http://www.asianventure.com/vietnam/guide/hue/attraction/hue_citadel.html"> Hue Citadel</a> </h6>
                                <p class="briefdes">One of the reasons that Hanoi - the capital city of Vietnam, has attracted so many tourists over the years is its,... </p>
                                <i class="fa fa-map-marker fa-1x"></i> <h5 class="font14 font-normal inline-display"><a href="http://www.asianventure.com/vietnam/guide/hue.html" class="color-blue"> Hue, Vietnam</a></h5>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 countrynews">
                            <img src="img/portfolio/travelguide_articles2_268x172.jpg" alt="vietnam" height="120" width="100%">
                            <div class="content1" style="min-height: 130px">
                                <h6 class="text-left"><a href="http://www.asianventure.com/vietnam/guide/can_tho/attraction/can_tho_floating_markets.html"> Can Tho Floating Market</a> </h6>
                                <p class="briefdes">One of the reasons that Hanoi - the capital city of Vietnam, has attracted so many tourists over the years is its,... </p>
                                <i class="fa fa-map-marker fa-1x"></i> <h5 class="font14 font-normal inline-display"><a href="http://www.asianventure.com/vietnam/guide/can_tho.html" class="color-blue"> Mekong, Vietnam</a></h5>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 countrynews">
                            <img src="http://www.asianventure.com/images/vietnam/vietnam_hue.jpg" alt="vietnam" height="120" width="100%">
                            <div class="content1" style="min-height: 130px">
                                <h6 class="text-left"><a href="http://www.asianventure.com/vietnam/guide/hue/attraction/hue_citadel.html"> Hue Citadel</a> </h6>
                                <p class="briefdes">One of the reasons that Hanoi - the capital city of Vietnam, has attracted so many tourists over the years is its,... </p>
                                <i class="fa fa-map-marker fa-1x"></i> <h5 class="font14 font-normal inline-display"><a href="http://www.asianventure.com/vietnam/guide/hue.html" class="color-blue"> Hue, Vietnam</a></h5>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="bs-section clear margintop20">
        <div class="col-md-2 mobile_marginbottom20">
            <div class="row">
                <div class="tile-stats paddingright24 mobile_nopadding">
                    <a href=#>
                        <div class=tile-stats-content style="height: 250px">
                            <img src="img/common/travelguide_artical_icon.png">
                            <div class="tile-stats-number font22 margintop20">VIETNAM</div>
                            <div class="tile-stats-text font16 paddingtop5">TRAVEL ARTICALS</div>
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
                                <i class="fa fa-map-marker fa-1x"></i> <h5 class="font14 font-normal inline-display"><a href="http://www.asianventure.com/vietnam/guide/hanoi.html" class="color-blue"> Hanoi, Vietnam</a></h5>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 countrynews">
                            <img src="http://www.asianventure.com/images/vietnam/vietnam_hue.jpg" alt="vietnam" height="120" width="100%">
                            <div class="content1" style="min-height: 130px">
                                <h6 class="text-left"><a href="http://www.asianventure.com/vietnam/guide/hue/attraction/hue_citadel.html"> Hue Citadel</a> </h6>
                                <p class="briefdes">One of the reasons that Hanoi - the capital city of Vietnam, has attracted so many tourists over the years is its,... </p>
                                <i class="fa fa-map-marker fa-1x"></i> <h5 class="font14 font-normal inline-display"><a href="http://www.asianventure.com/vietnam/guide/hue.html" class="color-blue"> Hue, Vietnam</a></h5>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 countrynews">
                            <img src="img/portfolio/travelguide_articles2_268x172.jpg" alt="vietnam" height="120" width="100%">
                            <div class="content1" style="min-height: 130px">
                                <h6 class="text-left"><a href="http://www.asianventure.com/vietnam/guide/can_tho/attraction/can_tho_floating_markets.html"> Can Tho Floating Market</a> </h6>
                                <p class="briefdes">One of the reasons that Hanoi - the capital city of Vietnam, has attracted so many tourists over the years is its,... </p>
                                <i class="fa fa-map-marker fa-1x"></i> <h5 class="font14 font-normal inline-display"><a href="http://www.asianventure.com/vietnam/guide/can_tho.html" class="color-blue"> Mekong, Vietnam</a></h5>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 countrynews">
                            <img src="http://www.asianventure.com/images/vietnam/vietnam_hue.jpg" alt="vietnam" height="120" width="100%">
                            <div class="content1" style="min-height: 130px">
                                <h6 class="text-left"><a href="http://www.asianventure.com/vietnam/guide/hue/attraction/hue_citadel.html"> Hue Citadel</a> </h6>
                                <p class="briefdes">One of the reasons that Hanoi - the capital city of Vietnam, has attracted so many tourists over the years is its,... </p>
                                <i class="fa fa-map-marker fa-1x"></i> <h5 class="font14 font-normal inline-display"><a href="http://www.asianventure.com/vietnam/guide/hue.html" class="color-blue"> Hue, Vietnam</a></h5>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="row bs-section">
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
    <p></p>
</div>

<!-- End Body -->

<p></p>



<script src="js/sliderjs/bjqs-1.js"></script>
</body>

</html>