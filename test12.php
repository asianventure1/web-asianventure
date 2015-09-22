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
<style>
    /**
  * Horizontal Type Line Behind Text
  * Inspired by this discussion @ CSS-Tricks: http://css-tricks.com/forums/topic/css-trick-for-a-horizontal-type-line-behind-text/#post-151970
  * Available on jsFiddle: http://jsfiddle.net/ericrasch/jAXXA/
  * Available on Dabblet: http://dabblet.com/gist/2045198
  * Available on GitHub Gist: https://gist.github.com/2045198
  */
/*VIETNAM TREND in tours page*/
    h2.background {
        font: 20px sans-serif;
        margin-top:0px;
        text-align: center;
        text-transform: uppercase;
        position: relative;
        z-index: 1;
    }
    h2.background:before {
        border-top: 2px solid #dfdfdf;
        content: "";
        margin: 0 auto;
        /* this centers the line to the full width specified */
        position: absolute;
        /* positioning must be absolute here, and relative positioning must be applied to the parent */
        top: 50%;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        z-index: -1;
    }
    h2.background span {
        /* to hide the lines from behind the text, you have to set the background color the same as the container */
        background: #fff;
        padding: 0 15px;
    }
    h2.double:before {
        /* this is just to undo the :before styling from above */
        border-top: none;
    }
    h2.double:after {
        border-bottom: 1px solid #16a085;
        -webkit-box-shadow: 0 1px 0 0 #16a085;
        -moz-box-shadow: 0 1px 0 0 #16a085;
        box-shadow: 0 1px 0 0 #16a085;
        content: "";
        margin: 0 auto;
        /* this centers the line to the full width specified */
        position: absolute;
        top: 45%;
        left: 0;
        right: 0;
        width: 100%;
        z-index: -1;
    }

    .tours_topsites {
        border-top: 1px solid #cccccc;
        clear: both;
        margin: 5px 0
    }
    .line16 {
        line-height: 16px;
    }

    .topsite {
        padding: 0;
        margin:10px 0 0 0;
    }

    .topsite td.text{
        font-size: 12px;
        line-height: 14px;
        text-align: right;
    }

    .topsite td.text div{
        padding:0 5px 0 0;
        border-right: 1px solid #cccccc;
        min-height:61px
    }

       .topsite td.date p {
        padding: 15px 0 6px 0;
        line-height: 17px;
        height: 17px;
        text-align: center;
    }

    .topsite tbody tr .map-thumb img {
        cursor: pointer;
        width: 120px;
        height: 65px;
    }

    @media (max-width: 678px) {
        .topsite td.text div {
            border-right: none;
            margin:0;
            padding: 0;
        }
        .topsite td.text h6,.topsite td.text p {
            height: 17px;
            line-height: 17px;
            margin: 0;
            padding:3px 0 0 0;
        }
    }
/*see more vietnam tours*/
    .tile-stats .tile-stats-content {
        float: left;
        padding: 18px 0;
        margin: 0 0;
        width: 100%;
        background: #006699;
        color: #ffffff;
        height: 165px;
        text-align: center;
    }
</style>
</head>
<body id="page-top">




<!-- Begin Body -->
<div class="container margintop70 mobile_nomargintop">

<div class="row bs-section clear">
    <div class="col-md-8">
          <h2 class="background double"><span>VIETNAM TREND</span></h2>
        <div class="row">
            <div class="col-md-6">
                <img src="img/common/tours_trending_activity.jpg" width="100%">
            </div>
            <div class="col-md-6">
                <h5 class="text-center nomarginpadding">ACTIVITIES FOR VIETNAM HOLIDAYS</h5>
                <p class="line16">You are the only person who knows what kind of holiday you prefer. However, it's a good idea to determine your preferred tour activities, to give yourself a jump on what places to include or leave off your around-the world itinerary. Pround of prestine beach, rough mountain, rich culture  and diverse food taste, Vietnam is good place for  classic culture , adventure and many more theme acitivties. The below information help to fast identify the best places for your preferred tour activities in Vietnam.</p>
                <button class="btn btn-danger text_right">Read More</button>
            </div>
        </div>

        <div class="tours_topsites">
            <h4 class="margintop10 marginbottom3">TOP SIGN FOR VIETNAM TRIPS</h4>
            <div class="row">
                <div class="col-md-6">
                    <table class="table topsite">
                        <tbody>
                        <tr>
                            <td class="map-thumb first">
                                <img src="http://www.asianventure.com/images/news/view_thaihoa_palace.jpg">
                            </td>
                            <td class="first text nopaddingright">
                                <div>
                                    <h6 class="font13 font-normal nomarginpadding">Temple of Litterature</h6>
                                    <p>a Temple of Confucius in Hanoi</p>
                                    <p class="margintop10 text_right">
                                    <i class="fa fa-map-marker"></i>
                                    <a href="" class="read-more"> Hanoi, Vietnam</a>
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
                                    <h6 class="font13 font-normal nomarginpadding">Cu Chi Tunnels</h6>
                                    <p>a Temple of Confucius in Hanoi</p>
                                    <p class="margintop10 text_right">
                                        <i class="fa fa-map-marker"></i>
                                        <a href="" class="read-more"> Hanoi, Vietnam</a>
                                    </p>
                                </div>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                  <table class="table topsite">
                        <tbody>
                        <tr>
                            <td class="map-thumb first">
                                <img src="http://www.asianventure.com/images/news/view_thaihoa_palace.jpg" class="thumb" alt="">
                            </td>
                            <td class="first text nopaddingright">
                                <div>
                                    <h6 class="font13 font-normal nomarginpadding">Bat Trang Ceramic Village</h6>
                                    <p>a Temple of Confucius in Hanoi</p>
                                    <p class="margintop10 text_right">
                                        <i class="fa fa-map-marker"></i>
                                        <a href="" class="read-more"> Hanoi, Vietnam</a>
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
                                    <span style="font-weight: bold">Hiking and exploring mountain</span>
                                    <p>a Temple of Confucius in Hanoi</p>
                                    <p class="margintop10 text_right">
                                        <i class="fa fa-map-marker"></i>
                                        <a href="" class="read-more"> Hanoi, Vietnam</a>
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
        <img src="img/common/vietnammap.jpg" width="100%">
    </div>
</div>

<div class="bs-section clear margintop30">
        <div class="col-md-2">
            <div class="row">
                <div class="tile-stats">
                <a href=#>
                    <div class=tile-stats-content>
                        <img src="img/common/tours_seemore.png">
                        <div class="tile-stats-number font18 margintop20">SEE MORE</div>
                        <div class="tile-stats-text font18 paddingtop5">VIENAM TOURS</div>
                    </div>
                    <div class=clearfix></div>
                </a></div>
            </div>
        </div>
        <div class="col-md-10 paddingleft4">
            <div class="row">
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
    </div>

</div>

<!-- End Body -->

<p></p>



<script src="js/sliderjs/bjqs-1.js"></script>
</body>

</html>