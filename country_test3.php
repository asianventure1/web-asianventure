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
        #map-canvas {
            width: 100%;
            height: 400px;
            margin-bottom: 20px;
            border: 1px solid #cccccc;
        }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
        function initialize() {
            var mapCanvas = document.getElementById('map-canvas');
            var mapOptions = {
                center: new google.maps.LatLng(16.76485, 105.22201),
                zoom: 5,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(mapCanvas, mapOptions)
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

</head>
<body id="page-top">



<!-- Begin Body -->
<div class="container">


    <div class="bs-section">
        <div class="row">
            <div class="col-md-6">
                <div class="testimonial1">
                    <h6>REASONS TO BOOK</h6>
                    <div style="min-height: 180px">
                        <img style="padding-left:10px; padding-right:10px; float: left" src="img/common/person_none.png">
                        <p class="text"> Thank you so much for having organized us such a beautiful tour of Vietnam. Everything went well. We loved your country and enjoyed any single place we have visited. Halong Bay was a dream. The cruise very special and the food we had on board, really great.
                            Our drivers and guides were very professional and helpful. We had a good time with them like being in a family. All the hotels were very nice too. We particularly liked the hotel in Hoi An.
                            <br>
                            <span style="color:#006666;line-height: 20px;">Posted on 9 Feb,2015  by Ughetta  from Italy  </span>
                        </p>
                        <span class="more-link"><a style="color:#990000" href="http://www.asianventure.com/testimonial/index.html"> Read more <img src="img/common/icon_readmore.png"> </a></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="reasontobook">
                    <h6>REASONS TO BOOK</h6>
                    <div style="height:auto">
                        <div class="col-md-6">
                            <div class="borderline" style="margin-left:-10px; padding-left: 10px">
                                <div class="row">
                                    <div class="media-left"><img src="img/common/icon_buiding.jpg"></div>
                                    <div class="media-body">
                                        <span style="font-weight: bold;">Diversity of  Travel Products</span><br>
                                        <p style="font-size: 14px; padding-right: 5px">Use the search tools or browse the directtory, you  find  a large arrays of hotels, tours, flights, cars</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="media-left"><img src="img/common/icon_$.png"></div>
                                    <div class="media-body">
                                        <span style="font-weight: bold;">Top Savings and Specials <br></span>
                                        <p style="font-size: 14px; padding-right: 5px">Discover great deals, discounts on many hotels, tours and flights. Book and get credit,...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="borderline_right">
                                <div class="row">
                                    <div class="media-left"><img src="img/common/icon_chat.png"></div>
                                    <div class="media-body">
                                        <span style="font-weight: bold;">Travel Reviews by Real Guests</span><br>
                                        <p style="font-size: 14px; padding-right: 5px">Read the trusted reviews from the real guests who have used our services before and get,..</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="media-left"><img src="img/common/icon_support.png"></div>
                                    <div class="media-body">
                                        <span style="font-weight: bold;">24/7 Emergency Hotline Services</span><br>
                                        <p style="font-size: 14px; padding-right: 5px">Speak or chat with our travel expert in your own language to get the instant support and booking</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>

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
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>


<script src="js/sliderjs/bjqs-1.js"></script>

</body>

</html>