<!DOCTYPE html>
<html lang=en>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Vietnam Cambodia Laos Thailand Myanmar China Tours, Travel Guide & Holidays || Asianventure Tours</title>
<meta name="description"
      content="Offering Vietnam Cambodia Laos Thailand Myanmar China tours, travel guide, Flights, booking hotels for holidays in Vietnam Cambodia Laos Thailand Myanmar China"/>
<meta name="keywords"
      content="Vietnam Tours, Laos Tours, Cambodia tours, Thailand Tours, Myanmar Tours, China Tours, Vietnam and Cambodia tours,Vietnam and Laos tours,Cambodia and Laos tours,Thailand and Myanmar tours"/>
<meta name="robots" content="index,follow"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7"/>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>

<!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/social.css">
<link rel="stylesheet" href="css/prettyphoto.css">
<link rel="stylesheet" href="css/domtab.css">
<link rel="stylesheet" href="Font-Awesome-master/css/font-awesome.css">

<!-- Custom CSS -->
<link href="css/freelancer.css" rel="stylesheet">
<link href="css/freelancer_mobile.css" rel="stylesheet">


<!--chay slide 3 trang index-->
<script src="js/sliderjs/jquery-1.js"></script>


<!-- Bootstrap Core JavaScript chay slide trang index-->
<script src="js/bootstrap.min.js"></script>


<script type="text/javascript" src="js/domtab.js"></script>
<!-- hien thi palcehoder trong element input-->
<script src="js/jquery.placeholder.1.3.min.js"></script>
<script type="text/javascript">
    // Mock client code for testing purpose
    $(function () {
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
    function customtrip() {
        window.open("http://www.asianventure.com/contact/customtrip.php", 'customtrip', "status=no,toolbar=no,location=no,directories=no,copyhistory=no,menu=no, resizable=no, scrollbars=yes,top=40, left=20, width=620, height=620");
    }

    function chatclose2() {
        document.getElementById('divShock').style.display = 'none';
        customtrip();
    }
</script>
<script type="text/javascript">

    $(document).ready(function () {
        $('#showsearch').click(function () {
            $('.header_search').toggle();
        });
    });

    /*script stick on top*/
    $(function () {

        // grab the initial top offset of the navigation
        var sticky_navigation_offset_top = $('#sticky_navigation').offset().top;

        // our function that decides weather the navigation bar should have "fixed" css position or not.
        var sticky_navigation = function () {
            var scroll_top = $(window).scrollTop(); // our current vertical position from the top

            // if we've scrolled more than the navigation, change its position to fixed to stick to top, otherwise change it back to relative
            if (scroll_top > sticky_navigation_offset_top) {
                $('#sticky_navigation').css({'position': 'fixed', 'top': 0, 'left': 0});
            } else {
                $('#sticky_navigation').css({'position': 'relative'});
            }
        };

        // run our function on load
        sticky_navigation();

        // and run it again every time you scroll
        $(window).scroll(function () {
            sticky_navigation();
        });

        // NOT required:
        // for this demo disable all links that point to "#"
        $('a[href="#"]').click(function (event) {
            event.preventDefault();
        });

    });

    $(document).click(function (event) {
        var clickover = $(event.target);
        menu_content = clickover.closest('#menu-content');
        var _opened = $("#menu-content").hasClass("collapse in");
        if (_opened === true && !clickover.hasClass("menu-content") && !menu_content.hasClass('menu-content')) {
            $(".navbar-toggle").click();
        }
    });

    /*script chay scroll news*/
    $(function () {
        var ele = $('#scroll');
        var speed = 200, scroll = 5, scrolling;

        $('#scroll-up').mouseenter(function () {
            // Scroll the element up
            scrolling = window.setInterval(function () {
                ele.scrollTop(ele.scrollTop() - scroll);
            }, speed);
        });

        $('#scroll-down').mouseenter(function () {
            // Scroll the element down
            scrolling = window.setInterval(function () {
                ele.scrollTop(ele.scrollTop() + scroll);
            }, speed);
        });

        $('#scroll-up, #scroll-down').bind({
            click: function (e) {
                // Prevent the default click action
                e.preventDefault();
            },
            mouseleave: function () {
                if (scrolling) {
                    window.clearInterval(scrolling);
                    scrolling = false;
                }
            }
        });
    });

</script>


<!--slider in tourdetails page-->
<link href="css/demo1.css?v=1.0.2" type="text/css" rel="stylesheet"/>
<script src="js/jquery.exposure1.js?v=1.0.2" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        var gallery = $('#images');
        gallery.exposure({
            controlsTarget: '#controls',
            controls: {prevNext: true, pageNumbers: true, firstLast: false},
            visiblePages: 2,
            maxWidth: 650,
            maxHeight: 340,
            slideshowControlsTarget: '#slideshow',
            onThumb: function (thumb) {
                var li = thumb.parents('li');
                var fadeTo = li.hasClass($.exposure.activeThumbClass) ? 1 : 0.3;

                thumb.css({display: 'none', opacity: fadeTo}).stop().fadeIn(200);

                thumb.hover(function () {
                    thumb.fadeTo('fast', 1);
                }, function () {
                    li.not('.' + $.exposure.activeThumbClass).children('img').fadeTo('fast', 0.3);
                });
            },
            onImage: function (image, imageData, thumb) {
                // Fade out the previous image.
                image.siblings('.' + $.exposure.lastImageClass).stop().fadeOut(500, function () {
                    $(this).remove();
                });

                // Fade in the current image.
                image.hide().stop().fadeIn(1000);

                // Fade in selected thumbnail (and fade out others).
                if (gallery.showThumbs && thumb && thumb.length) {
                    thumb.parents('li').siblings().children('img.' + $.exposure.selectedImageClass).stop().fadeTo(200, 0.3, function () {
                        $(this).removeClass($.exposure.selectedImageClass);
                    });
                    thumb.fadeTo('fast', 1).addClass($.exposure.selectedImageClass);
                }
            },
            onPageChanged: function () {
                // Fade in thumbnails on current page.
                gallery.find('li.' + $.exposure.currentThumbClass).hide().stop().fadeIn('fast');
            }
        });
    });
</script>
<!--slider in tourdetails page-->
<style>
    .tourdetails_head1 {
        font-size: 12px;
        background: url('img/common/bg_445x100.png') top left no-repeat;
        background-size: 100%;
        color: #FFFFFF;
        height: 100px;
        text-align: center;
        width: 100%;
        margin: 0 0;
    }

    @media (max-width: 768px) {
        .tourdetails_head1 {
            background: #007799;
            height: 100px;
            margin: 10px 0 0 -8px;
        }
    }

    .tourdetails_head2 {
        padding: 0px 5px;
        margin: 0;
        font-size: 12px;
        min-height: 225px;
        display: block;
        color: #000000;
    }

    .tourdetails_head2 ul li {
        line-height: 15px;
        font-size: 14px;
    }

    .tour-common {
        position: relative;
    }

    .tour-common .inside {
        background: #4e4538;
        position: absolute;
        top: -21px;
        color: #FFFFFF;
        width: 95%;
        margin-left: 30px
    }

    @media (max-width: 768px) {
        .tour-common {
            margin: 220px 0 0 0;
        }

        .tour-common .inside {
            margin-left: 0;
        }
    }
</style>

<!--scrollbar-->
<link type="text/css" href="asianventure_scroll/style/jquery.jscrollpane.css" rel="stylesheet" media="all"/>
<link type="text/css" href="asianventure_scroll/style/jquery.jscrollpane.lozenge.css" rel="stylesheet" media="all"/>
<script type="text/javascript" src="asianventure_scroll/script/jquery.mousewheel.js"></script>
<script type="text/javascript" src="asianventure_scroll/script/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" id="sourcecode">
    $(function () {
        $('.scroll-pane-whatincluded').jScrollPane(
            {
                showArrows: true,
                horizontalGutter: 10,
                verticalDragMaxHeight: 50,
                horizontalDragMaxWidth: 0,
                scrollPagePercent: 18
            }
        );
    });
</script>
<!--scrollbar-->

<!--responsive tabs trong tours details-->
<link type="text/css" rel="stylesheet" href="css/tours_responsive-tabs.css"/>
<link type="text/css" rel="stylesheet" href="css/tours_tabs_style.css"/>
<!-- Responsive Tabs JS -->
<script src="js/jquery.responsiveTabs.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var $tabs = $('#horizontalTab');
        $tabs.responsiveTabs({
            rotate: false,
            startCollapsed: 'accordion',
            collapsible: 'accordion',
            setHash: true,
            <!--disabled: [3,4],-->
            activate: function (e, tab) {
                $('.info').html('Tab <strong>' + tab.id + '</strong> activated!');
            },
            activateState: function (e, state) {
                //console.log(state);
                $('.info').html('Switched from <strong>' + state.oldState + '</strong> state to <strong>' + state.newState + '</strong> state!');
            }
        });

        //$('#start-rotation').on('click', function() {
        //    $tabs.responsiveTabs('startRotation', 1000);
        //});
        //$('#stop-rotation').on('click', function() {
        //    $tabs.responsiveTabs('stopRotation');
        //});
        //$('#start-rotation').on('click', function() {
        //    $tabs.responsiveTabs('active');
        //});
        //$('#enable-tab').on('click', function() {
        //   $tabs.responsiveTabs('enable', 3);
        //});
        //$('#disable-tab').on('click', function() {
        //    $tabs.responsiveTabs('disable', 3);
        //});
        $('.select-tab').on('click', function () {
            $tabs.responsiveTabs('activate', $(this).val());
        });

    });
</script>

<style>
    .intrepid-product-intro {
        margin: 0;
        padding: 0
    }

    .intrepid-product-intro h3.price {
        display: inline-block;
        font-weight: 600;
        margin-right: 5px;
        font-size: 30px;
        margin: 0;
        padding: 0;
    }

    .peak-price-USD {
        display: inline;
    }

    .intrepid-product-intro h3.price .peak-price .price-currency-code {
        font-size: 16px;
        vertical-align: top;
    }

    /*css stars grade*/
    div.stars {
        display: inline-block;
    }

    input.star {
        display: none;
    }

    label.star {
        float: right;
        padding: 3px;
        font-size: 22px;
        color: #444;
        transition: all .2s;
    }

    input.star:checked ~ label.star:before {
        content: '\f005';
        color: #FD4;
        transition: all .25s;
    }

    input.star-5:checked ~ label.star:before {
        color: #FE7;
        text-shadow: 0 0 20px #952;
    }

    input.star-1:checked ~ label.star:before {
        color: #F62;
    }

    label.star:hover {
        transform: rotate(-15deg) scale(1.3);
    }

    label.star:before {
        content: '\f006';
        font-family: FontAwesome;
    }
</style>

<!--tourdetails page: begin listtourprice table-->
<link type="text/css" rel="stylesheet" href="css/tourdetails_pricelist.css" media="all">
<!--tourdetails page: end listtourprice table-->

</head>


<body>

<!-- Begin Body -->
<div class="container">

<div class="bs-section">
<div id="sticky_navigation"></div>
<!--Horizontal Tab-->
<div class="row margintop70 visible-xs">
    <div class="col-xs-12">
        <div class="col-xs-6 bs-section mobile_nopaddingleft" style="padding-right: 1px">
            <button class="select-tab btn-danger font12 font-bold" value="0" style="width: 100%; padding: 10px 0">OVERVIEW
                <br> <i class="fa fa-map-marker fa-2x"></i>
            </button>
        </div>
        <div class="col-xs-6 bs-section mobile_nopaddingright" style="padding-left: 1px">
            <button class="select-tab btn-info font12 font-bold" value="1" style="width: 100%; padding: 10px">PRICE & DATE
                <br> <i class="fa fa-calendar fa-2x"></i>
            </button>
        </div>
        <div class="col-xs-6 bs-section mobile_nopaddingleft" style="padding-right: 1px">
            <button class="select-tab btn-success font12 font-bold" value="2" style="width: 100%; padding: 10px">DOCUMENT
                <br> <i class="fa fa-hand-o-right fa-2x"></i>
            </button>
        </div>
        <div class="col-xs-6 bs-section mobile_nopaddingright" style="padding-left: 1px">
            <button class="select-tab btn-warning font12 font-bold" value="4" style="width: 100%; padding: 10px">REVIEWS
                <br> <i class="fa fa-file-o fa-2x"></i>
            </button>
        </div>
        <p style="height:100px">
            <button class="select-tab hidden-xs" value="5">5</button>
        <p>
    </div>
</div>
<div class="col-xs-12">
<div class="row">
<!--tabs-->
<div id="horizontalTab">
<ul>
    <li><a href="#tab-1">OVERVIEW</a></li>
    <li><a href="#tab-2">PRICE & DATE</a></li>
    <li><a href="#tab-3">DOCUMENT</a></li>
    <li><a href="#tab-4">PHOTOS</a></li>
    <li><a href="#tab-5">REVIEWS</a></li>
</ul>
<div id="tab-1">
<!--begin itinerary mobile version-->
    <div class="row nomarginpadding" style="margin: 0 -25px">
            <div class="col-xs-12 text-right">
                <a href="javascript:void(0)" class="expand"><i class="fa fa-chevron-circle-down"></i> Open </a> | <a
                    href="javascript:void(0)" class="closeall">Close <i class="fa fa-chevron-circle-up"></i> </a>
            </div>
            <div class="col-xs-12 question">
                <div class="col-xs-2 text-center font-bold" style="background: #f2f2f2; padding: 10px 0; color: #990000">Day <br> 1</div>
                <div class="col-xs-10 font-bold font13h" style="min-height:48px; background-color: rgba(242, 242, 242, 0.5); padding-top: 10px">
                    Arrival Ho Chi Minh City
                </div>
            </div>
            <div class="col-xs-12 answer">
                <p>
                    Integer in libero vitae eros bibendum ultricies. Cras ultricies risus eu massa
                    tincidunt faucibus rutrum enim malesuada. Nullam </p>
            </div>

            <div class="col-xs-12 question">
                <div class="col-xs-2 text-center font-bold" style="background: #f2f2f2; padding: 10px 0; color: #990000">Day <br> 2</div>
                <div class="col-xs-10 font-bold font13h" style="min-height:48px; background-color: rgba(242, 242, 242, 0.5); padding-top: 10px">
                    Ho Chi Minh City Tour
                </div>
            </div>
            <div class="col-xs-12 answer">
                <p style="text-align: justify">
                    Vestibulum in ornare metus. Integer in libero vitae eros bibendum ultricies. Cras ultricies risus eu massa
                    tincidunt faucibus rutrum enim malesuada. Nullam non est a nunc tincidunt porttitor a ac odio. Cras accumsan
                    ante in odio ultrices semper. Fusce dignissim eleifend vehicula. Aenean dictum ante et lorem lacinia vel
                    fringilla urna vestibulum. Duis condimentum felis in ligula venenatis et auctor massa dapibus. Morbi tincidunt
                    elit a odio scelerisque sodales. Integer et egestas lorem. Suspendisse tincidunt varius augue, ac fermentum erat
                    ultricies laoreet. Donec eu dolor justo, a convallis lectus. Pellentesque pellentesque, erat ut dictum lacinia,
                    orci nulla posuere tellus, at gravida nibh tellus dictum velit. Donec molestie sapien non dolor tincidunt eget
                    interdum tortor molestie. Curabitur placerat scelerisque odio, at congue purus malesuada et.</p>

            </div>

            <div class="col-xs-12 question">
                <div class="col-xs-2 text-center font-bold" style="background: #f2f2f2; padding: 10px 0; color: #990000">Day <br> 3</div>
                <div class="col-xs-10 font-bold font13h" style="min-height:48px; background-color: rgba(242, 242, 242, 0.5); padding-top: 10px">
                    Ho Chi Minh City - Can Tho
                </div>
            </div>
            <div class="col-xs-12 answer">
                <p style="text-align: justify">
                    Vestibulum in ornare metus. Integer in libero vitae eros bibendum ultricies. Cras ultricies risus eu massa
                    tincidunt faucibus rutrum enim malesuada. Nullam non est a nunc tincidunt porttitor a ac odio. Cras accumsan
                    ante in odio ultrices semper. Fusce dignissim eleifend vehicula. Aenean dictum ante et lorem lacinia vel
                    fringilla urna vestibulum. Duis condimentum felis in ligula venenatis et auctor massa dapibus. Morbi tincidunt
                    elit a odio scelerisque sodales. Integer et egestas lorem. Suspendisse tincidunt varius augue, ac fermentum erat
                    ultricies laoreet. Donec eu dolor justo, a convallis lectus. Pellentesque pellentesque, erat ut dictum lacinia,
                    orci nulla posuere tellus, at gravida nibh tellus dictum velit. Donec molestie sapien non dolor tincidunt eget
                    interdum tortor molestie. Curabitur placerat scelerisque odio, at congue purus malesuada et.</p>

            </div>

            <div class="col-xs-12 question">
                <div class="col-xs-2 text-center font-bold" style="background: #f2f2f2; padding: 10px 0; color: #990000">Day <br> 4</div>
                <div class="col-xs-10 font-bold font13h" style="min-height:48px; background-color: rgba(242, 242, 242, 0.5); padding-top: 10px">
                    Can Tho - Chau Doc
                </div>
            </div>
            <div class="col-xs-12 answer">
                <p style="text-align: justify">
                    Vestibulum in ornare metus. Integer in libero vitae eros bibendum ultricies. Cras ultricies risus eu massa
                    tincidunt faucibus rutrum enim malesuada. Nullam non est a nunc tincidunt porttitor a ac odio. Cras accumsan
                    ante in odio ultrices semper. Fusce dignissim eleifend vehicula. Aenean dictum ante et lorem lacinia vel
                    fringilla urna vestibulum. Duis condimentum felis in ligula venenatis et auctor massa dapibus. Morbi tincidunt
                    elit a odio scelerisque sodales. Integer et egestas lorem. Suspendisse tincidunt varius augue, ac fermentum erat
                    ultricies laoreet. Donec eu dolor justo, a convallis lectus. Pellentesque pellentesque, erat ut dictum lacinia,
                    orci nulla posuere tellus, at gravida nibh tellus dictum velit. Donec molestie sapien non dolor tincidunt eget
                    interdum tortor molestie. Curabitur placerat scelerisque odio, at congue purus malesuada et.</p>

            </div>
        </div>
<!--end itinerary mobile version-->
    <div class="row margintop30" style="border-top: 2px solid #cccccc">
    <div class="col-md-12">
        <div class="row" style=" margin:0; padding:20px 0;">
            <div class="col-md-8" style="margin: 0 0 0 -15px; padding: 0">
                <ul style="padding: 0; margin: 0; width: 102%">
                    <h6 style="background: #f1f1f1; height: 30px; line-height: 30px; padding-left: 3px; color: #990033">
                        WHAT IS INCLUDED IN THIS TOUR ?</h6>
                    <li style="border-bottom: 1px dotted #af1842">
                        <h6 style="margin:0; padding:3px 0 0 0; color: #006699">TOUR TRANSPORT :</h6>

                        <p style="font-size: 15px; line-height: 15px; text-align: justify">Minivan, bus, taxi, public
                            vehicle, private and joint boat, train, mentioned flights ( 20kg luggage allowance)</p>

                    </li>
                    <li style="border-bottom: 1px dotted #af1842">
                        <h6 style="margin:0; padding:3px 0 0 0; color: #006699">ACCOMMODATION :</h6>

                        <p style="font-size: 15px; line-height: 15px; text-align: justify">17 nights at hotels and 1
                            night on boat ( twin sharing), 1 night on train ( 4 pers. sharing cabin) </p>

                    </li>
                    <li style="border-bottom: 1px dotted #af1842">
                        <h6 style="margin:0; padding:3px 0 0 0; color: #006699">INCLUSIVE MEALS :</h6>

                        <p style="font-size: 15px; line-height: 15px; text-align: justify">8 breakfasts, 2 lunches , 2
                            dinners at local restaurants</p>

                    </li>
                    <li style="border-bottom: 1px dotted #af1842">
                        <h6 style="margin:0; padding:3px 0 0 0; color: #006699">MORE SERVICES :</h6>

                        <p style="font-size: 15px; line-height: 15px; text-align: justify">Service of English speaking
                            guide/Tour leader + Boat trips in Mekong Delta , Siem Reap , Luang Prabang , Bangkok +
                            Specified sightseeing tour with entrance fees: Siem Reap (Three Day Angkor Pass) - Phnom
                            penh (Tuol Sleng Genocide Museum (S21) and Choeung Ek Killing) - Ho Chi Minh ( Cu Chi
                            Tunnels, War Remnant Museum, Reunification Palace) - Nha Trang ( Ponagar Cham Tower) - Hoian
                            ( Ancient Town, Tra Que Village) - Hue ( Imperial Citadel, Thien Mu Pagoda, Minh Mang
                            Mausoleum) - Danang ( Cham Museum - Hanoi (Ho Chi Minh House, One Pillared Pagoda, Temple of
                            Litterature, Hoan Kiem Lake)- Halong Bay ( Two Day Pass) - Perfume Pagoda </p>

                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
<div id="tab-2">
<div class="row bs-section" style="margin: 0 -25px">
    <div class="col-md-12">
<div class="peak-departure-trip-availability">

<div class="departure-price-list">

<div class="filter-container">
    <div class="row hidden-xs">
        <div class="col-md-4 nopaddingleft">
            <span class="color-white font-bold">TOUR START / END DATE</span>
        </div>
        <div class="col-md-2 hidden-xs nopaddingleft">
            <span class="color-white font-bold">TOUR CLASS</span>
        </div>
        <div class="col-md-2">
            <span class="color-white font-bold">TOUR PRICE</span>
        </div>
        <div class="col-md-3 label-column">
            <span class="color-white font-bold">BOOKING</span>
        </div>
        <div class="col-md-1">
        </div>
    </div>
    <div class="row visible-xs">
        <div class="col-xs-6 nopaddingleft">
            <span class="color-white font-bold">TOUR DATE</span>
        </div>
        <div class="col-xs-6">
            <span class="color-white font-bold">TOUR PRICE</span>
        </div>
    </div>
</div>

<!--begin list ting price-->
<div class="departure-info-list">

<div class="departure-info row-gray">
    <div class="info-date departure-day collapsed" data-toggle="collapse" href="#panel-id-1">
        <h5>
            <div class="row hidden-xs">
                <div class="col-md-4 label-column">
                    <img src="img/common/tourdetails_person_icon.png" class="left-places-label hidden-xs">
                    <img src="img/common/arrows-right.png" class="arrow-right">
                    <span class="font12h">26 Sep 2015 - 11 Oct 2015</span>
                </div>
                <div class="col-md-2 label-column hidden-xs">
                    <span>STANDARD</span>
                </div>
                <div class="col-md-2 departure-price">
                    <span class="price font12h">US$ 1190/Pers</span>
                </div>
                <div class="col-md-3 label-column">
                    <div class="status-labels">
                        <span class="left-places-label font14"">
                        AVAIABLE/ REQUEST</span>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="button-wrapper">
                        <i class="fa fa-chevron-circle-down"></i>
                        <i class="fa fa-chevron-circle-up"></i>
                        <i class="fa fa-caret-down pointing-down hidden-xs"></i>
                    </div>
                </div>
            </div>
            <div class="row visible-xs">
                <div class="col-xs-6 label-column">
                    <img src="img/common/tourdetails_person_icon.png">
                    <img src="img/common/arrows-right.png" class="arrow-right" style="margin-left: -5px">
                    <span class="font12h">26 Sep 2015</span>
                </div>
                <div class="col-xs-4 departure-price">
                    <span class="price font14h">US$ 1190</span>
                </div>
                <div class="col-xs-2">
                    <div class="button-wrapper">
                        <i class="fa fa-chevron-circle-down"></i>
                        <i class="fa fa-chevron-circle-up"></i>
                        <i class="fa fa-caret-down pointing-down hidden-xs"></i>
                    </div>
                </div>
                <div class="col-xs-6 label-column clear">
                    <span class="font12 paddingleft20 left-places-label">STANDARD CLASS</span>
                </div>
                <div class="col-xs-6 label-column">
                    <div class="status-labels">
                        <span class="font12 left-places-label">AVAIABLE</span>
                    </div>
                </div>
            </div>
        </h5>
    </div>
    <div style="height: 0px;" id="panel-id-1" class="info-wrapper collapse">
        <div class="inner-wrapper">
            <div class="row departure-date">
                <div class="col-md-6">
                    <div class="col-md-4 col-xs-6">
                        <p class="text-right nomarginpadding mobile_nopadding line16 font-bold">START</p>

                        <p class="text-right nomarginpadding mobile_nopadding line16">Sat, 26 Sep 2015</p>

                        <p class="text-right nomarginpadding mobile_nopadding line16">Hanoi, Vietnam</p>
                    </div>
                    <div class="col-md-4 col-xs-6 nopaddingleft mobile_nopadding">
                        <p class="text-left nomarginpadding mobile_nopadding line16 font-bold">FINISH</p>

                        <p class="text-left nomarginpadding mobile_nopadding line16">Sat, 11 Oct 2015</p>

                        <p class="text-left nomarginpadding mobile_nopadding line16">Luang Prabang, Laos</p>
                    </div>
                    <div class="col-md-4 col-xs-12 nomarginpadding mobile_nomargintop10">
                        <table class="text-right marginbottom10 font12 mobile_marginleft_25per">
                            <tr class="line17">
                                <td class="font-bold">Senior</td>
                                <td class="text-danger font-bold">: US$ 40</td>
                            </tr>
                            <tr class="line17">
                                <td class="font-bold">Adult</td>
                                <td class="text-danger font-bold">: US$ 40</td>
                            </tr>
                            <tr class="line17">
                                <td class="font-bold">Teenage</td>
                                <td class="text-danger font-bold">: US$ 40</td>
                            </tr>
                            <tr class="line17">
                                <td class="font-bold">Child 7-12</td>
                                <td class="text-danger font-bold">: US$ 30</td>
                            </tr>
                            <tr class="line17">
                                <td class="font-bold">Child 3-6</td>
                                <td class="text-danger font-bold">US$ 30</td>
                            </tr>
                            <tr class="line17">
                                <td class="font-bold">Infant</td>
                                <td class="text-danger font-bold">US$ 20</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-6 nopaddingright">
                        <div class="border-right mobile_noborder paddingright10 mobile_nopaddingright"
                             style="height: auto;">
                            <p class="font-bold text-info font12">TOTAL PRICE PER PERSON BASED ON PASSENGER AGE AND TOUR
                                DATE
                                <i class="fa fa-info-circle font16"></i>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="font-bold text-info font12">SELECT PRIVATE ROOM
                            + US$ 300 / PERSON </p>
                    </div>
                    <div class="col-md-12 text-center marginbottom10">
                        <button type="button" class="btn btn-primary"> 20 Seats Left || Book Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="departure-info ng-scope row-white">
    <div class="info-date collapsed departure-day" data-toggle="collapse" href="#panel-id-list-2015-11-07">
        <h5>
            <div class="row hidden-xs">
                <div class="col-md-4 label-column">
                    <img src="img/common/tourdetails_person_icon.png" class="left-places-label hidden-xs">
                    <img src="img/common/arrows-right.png" class="arrow-right">
                    <span class="font12h">26 Sep 2015 - 11 Oct 2015</span>
                </div>
                <div class="col-md-2 label-column hidden-xs">
                    <span>SUPERIOR</span>
                </div>
                <div class="col-md-2 departure-price">
                    <span class="price font12h">US$ 1190/Pers</span>
                </div>
                <div class="col-md-3 label-column">
                    <div class="status-labels">
                        <span class="left-places-label font14"">
                        AVAIABLE/ REQUEST</span>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="button-wrapper">
                        <i class="fa fa-chevron-circle-down"></i>
                        <i class="fa fa-chevron-circle-up"></i>
                        <i class="fa fa-caret-down pointing-down hidden-xs"></i>
                    </div>
                </div>
            </div>
            <div class="row visible-xs">
                <div class="col-xs-6 label-column">
                    <img src="img/common/tourdetails_person_icon.png">
                    <img src="img/common/arrows-right.png" class="arrow-right" style="margin-left: -5px">
                    <span class="font12h">26 Sep 2015</span>
                </div>
                <div class="col-xs-4 departure-price">
                    <span class="price font14h">US$ 1190</span>
                </div>
                <div class="col-xs-2">
                    <div class="button-wrapper">
                        <i class="fa fa-chevron-circle-down"></i>
                        <i class="fa fa-chevron-circle-up"></i>
                        <i class="fa fa-caret-down pointing-down hidden-xs"></i>
                    </div>
                </div>
                <div class="col-xs-6 label-column clear">
                    <span class="font12 paddingleft20 left-places-label">SUPERIOR CLASS</span>
                </div>
                <div class="col-xs-6 label-column">
                    <div class="status-labels">
                        <span class="font12 left-places-label">AVAIABLE</span>
                    </div>
                </div>
            </div>
        </h5>
    </div>
    <div id="panel-id-list-2015-11-07" class="info-wrapper collapse">
        <div class="inner-wrapper">
            <div class="row departure-date">
                <div class="col-md-6">
                    <div class="col-md-4 col-xs-6">
                        <p class="text-right nomarginpadding mobile_nopadding line16 font-bold">START</p>

                        <p class="text-right nomarginpadding mobile_nopadding line16">Sat, 26 Sep 2015</p>

                        <p class="text-right nomarginpadding mobile_nopadding line16">Hanoi, Vietnam</p>
                    </div>
                    <div class="col-md-4 col-xs-6 nopaddingleft mobile_nopadding">
                        <p class="text-left nomarginpadding mobile_nopadding line16 font-bold">FINISH</p>

                        <p class="text-left nomarginpadding mobile_nopadding line16">Sat, 11 Oct 2015</p>

                        <p class="text-left nomarginpadding mobile_nopadding line16">Luang Prabang, Laos</p>
                    </div>
                    <div class="col-md-4 col-xs-12 nomarginpadding mobile_nomargintop10">
                        <table class="text-right marginbottom10 font12 mobile_marginleft_25per">
                            <tr class="line17">
                                <td class="font-bold">Senior</td>
                                <td class="text-danger font-bold">: US$ 40</td>
                            </tr>
                            <tr class="line17">
                                <td class="font-bold">Adult</td>
                                <td class="text-danger font-bold">: US$ 40</td>
                            </tr>
                            <tr class="line17">
                                <td class="font-bold">Teenage</td>
                                <td class="text-danger font-bold">: US$ 40</td>
                            </tr>
                            <tr class="line17">
                                <td class="font-bold">Child 7-12</td>
                                <td class="text-danger font-bold">: US$ 30</td>
                            </tr>
                            <tr class="line17">
                                <td class="font-bold">Child 3-6</td>
                                <td class="text-danger font-bold">US$ 30</td>
                            </tr>
                            <tr class="line17">
                                <td class="font-bold">Infant</td>
                                <td class="text-danger font-bold">US$ 20</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-6 nopaddingright">
                        <div class="border-right mobile_noborder paddingright10 mobile_nopaddingright"
                             style="height: auto;">
                            <p class="font-bold text-info font12">TOTAL PRICE PER PERSON BASED ON PASSENGER AGE AND TOUR
                                DATE
                                <i class="fa fa-info-circle font16"></i>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="font-bold text-info font12">SELECT PRIVATE ROOM
                            + US$ 300 / PERSON </p>
                    </div>
                    <div class="col-md-12 text-center marginbottom10">
                        <button type="button" class="btn btn-primary"> 20 Seats Left || Book Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="departure-info ng-scope row-gray">
    <div class="info-date collapsed departure-day" data-toggle="collapse" href="#panel-id-list-2015-11-14">
        <h5>
            <div class="row hidden-xs">
                <div class="col-md-4 label-column">
                    <img src="img/common/tourdetails_person_icon.png" class="left-places-label hidden-xs">
                    <img src="img/common/arrows-right.png" class="arrow-right">
                    <span class="font12h">26 Sep 2015 - 11 Oct 2015</span>
                </div>
                <div class="col-md-2 label-column hidden-xs">
                    <span>STANDARD</span>
                </div>
                <div class="col-md-2 departure-price">
                    <span class="price font12h">US$ 1190/Pers</span>
                </div>
                <div class="col-md-3 label-column">
                    <div class="status-labels">
                        <span class="left-places-label font14"">
                        AVAIABLE/ REQUEST</span>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="button-wrapper">
                        <i class="fa fa-chevron-circle-down"></i>
                        <i class="fa fa-chevron-circle-up"></i>
                        <i class="fa fa-caret-down pointing-down hidden-xs"></i>
                    </div>
                </div>
            </div>
            <div class="row visible-xs">
                <div class="col-xs-6 label-column">
                    <img src="img/common/tourdetails_person_icon.png">
                    <img src="img/common/arrows-right.png" class="arrow-right" style="margin-left: -5px">
                    <span class="font12h">14 Nov 2015</span>
                </div>
                <div class="col-xs-4 departure-price">
                    <span class="price font14h">US$ 1190</span>
                </div>
                <div class="col-xs-2">
                    <div class="button-wrapper">
                        <i class="fa fa-chevron-circle-down"></i>
                        <i class="fa fa-chevron-circle-up"></i>
                        <i class="fa fa-caret-down pointing-down hidden-xs"></i>
                    </div>
                </div>
                <div class="col-xs-6 label-column clear">
                    <span class="font12 paddingleft20 left-places-label">COMPORT CLASS</span>
                </div>
                <div class="col-xs-6 label-column">
                    <div class="status-labels">
                        <span class="font12 left-places-label">AVAIABLE</span>
                    </div>
                </div>
            </div>
        </h5>
    </div>
    <div id="panel-id-list-2015-11-14" class="info-wrapper collapse">
        <div class="inner-wrapper">
            <div class="row departure-date">
                <div class="col-md-6">
                    <div class="col-md-4 col-xs-6">
                        <p class="text-right nomarginpadding mobile_nopadding line16 font-bold">START</p>

                        <p class="text-right nomarginpadding mobile_nopadding line16">Sat, 26 Sep 2015</p>

                        <p class="text-right nomarginpadding mobile_nopadding line16">Hanoi, Vietnam</p>
                    </div>
                    <div class="col-md-4 col-xs-6 nopaddingleft mobile_nopadding">
                        <p class="text-left nomarginpadding mobile_nopadding line16 font-bold">FINISH</p>

                        <p class="text-left nomarginpadding mobile_nopadding line16">Sat, 11 Oct 2015</p>

                        <p class="text-left nomarginpadding mobile_nopadding line16">Luang Prabang, Laos</p>
                    </div>
                    <div class="col-md-4 col-xs-12 nomarginpadding mobile_nomargintop10">
                        <table class="text-right marginbottom10 font12 mobile_marginleft_25per">
                            <tr class="line17">
                                <td class="font-bold">Senior</td>
                                <td class="text-danger font-bold">: US$ 40</td>
                            </tr>
                            <tr class="line17">
                                <td class="font-bold">Adult</td>
                                <td class="text-danger font-bold">: US$ 40</td>
                            </tr>
                            <tr class="line17">
                                <td class="font-bold">Teenage</td>
                                <td class="text-danger font-bold">: US$ 40</td>
                            </tr>
                            <tr class="line17">
                                <td class="font-bold">Child 7-12</td>
                                <td class="text-danger font-bold">: US$ 30</td>
                            </tr>
                            <tr class="line17">
                                <td class="font-bold">Child 3-6</td>
                                <td class="text-danger font-bold">US$ 30</td>
                            </tr>
                            <tr class="line17">
                                <td class="font-bold">Infant</td>
                                <td class="text-danger font-bold">US$ 20</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-6 nopaddingright">
                        <div class="border-right mobile_noborder paddingright10 mobile_nopaddingright"
                             style="height: auto;">
                            <p class="font-bold text-info font12">TOTAL PRICE PER PERSON BASED ON PASSENGER AGE AND TOUR
                                DATE
                                <i class="fa fa-info-circle font16"></i>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="font-bold text-info font12">SELECT PRIVATE ROOM
                            + US$ 300 / PERSON </p>
                    </div>
                    <div class="col-md-12 text-center marginbottom10">
                        <button type="button" class="btn btn-primary"> 20 Seats Left || Book Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="departure-info ng-scope row-white">
    <div class="info-date collapsed departure-day" data-toggle="collapse" href="#panel-id-list-2016-03-05">
        <h5>
            <div class="row hidden-xs">
                <div class="col-md-4 label-column">
                    <img src="img/common/tourdetails_person_icon.png" class="left-places-label hidden-xs">
                    <img src="img/common/arrows-right.png" class="arrow-right">
                    <span class="font12h">26 Sep 2015 - 11 Oct 2015</span>
                </div>
                <div class="col-md-2 label-column hidden-xs">
                    <span>STANDARD</span>
                </div>
                <div class="col-md-2 departure-price">
                    <span class="price font12h">US$ 1190/Pers</span>
                </div>
                <div class="col-md-3 label-column">
                    <div class="status-labels">
                        <span class="left-places-label font14"">
                        AVAIABLE/ REQUEST</span>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="button-wrapper">
                        <i class="fa fa-chevron-circle-down"></i>
                        <i class="fa fa-chevron-circle-up"></i>
                        <i class="fa fa-caret-down pointing-down hidden-xs"></i>
                    </div>
                </div>
            </div>
            <div class="row visible-xs">
                <div class="col-xs-6 label-column">
                    <img src="img/common/tourdetails_person_icon.png">
                    <img src="img/common/arrows-right.png" class="arrow-right" style="margin-left: -5px">
                    <span class="font12h">7 Mar 2015</span>
                </div>
                <div class="col-xs-4 departure-price">
                    <span class="price font14h">US$ 1190</span>
                </div>
                <div class="col-xs-2">
                    <div class="button-wrapper">
                        <i class="fa fa-chevron-circle-down"></i>
                        <i class="fa fa-chevron-circle-up"></i>
                        <i class="fa fa-caret-down pointing-down hidden-xs"></i>
                    </div>
                </div>
                <div class="col-xs-6 label-column clear">
                    <span class="font12 paddingleft20 left-places-label">STANDARD CLASS</span>
                </div>
                <div class="col-xs-6 label-column">
                    <div class="status-labels">
                        <span class="font12 left-places-label">AVAIABLE</span>
                    </div>
                </div>
            </div>
        </h5>
    </div>
    <div id="panel-id-list-2016-03-05" class="info-wrapper collapse">
        <div class="inner-wrapper">
            <div class="row departure-date">
                <div class="col-md-6">
                    <div class="col-md-4 col-xs-6">
                        <p class="text-right nomarginpadding mobile_nopadding line16 font-bold">START</p>

                        <p class="text-right nomarginpadding mobile_nopadding line16">Sat, 26 Sep 2015</p>

                        <p class="text-right nomarginpadding mobile_nopadding line16">Hanoi, Vietnam</p>
                    </div>
                    <div class="col-md-4 col-xs-6 nopaddingleft mobile_nopadding">
                        <p class="text-left nomarginpadding mobile_nopadding line16 font-bold">FINISH</p>

                        <p class="text-left nomarginpadding mobile_nopadding line16">Sat, 11 Oct 2015</p>

                        <p class="text-left nomarginpadding mobile_nopadding line16">Luang Prabang, Laos</p>
                    </div>
                    <div class="col-md-4 col-xs-12 nomarginpadding mobile_nomargintop10">
                        <table class="text-right marginbottom10 font12 mobile_marginleft_25per">
                            <tr class="line17">
                                <td class="font-bold">Senior</td>
                                <td class="text-danger font-bold">: US$ 40</td>
                            </tr>
                            <tr class="line17">
                                <td class="font-bold">Adult</td>
                                <td class="text-danger font-bold">: US$ 40</td>
                            </tr>
                            <tr class="line17">
                                <td class="font-bold">Teenage</td>
                                <td class="text-danger font-bold">: US$ 40</td>
                            </tr>
                            <tr class="line17">
                                <td class="font-bold">Child 7-12</td>
                                <td class="text-danger font-bold">: US$ 30</td>
                            </tr>
                            <tr class="line17">
                                <td class="font-bold">Child 3-6</td>
                                <td class="text-danger font-bold">US$ 30</td>
                            </tr>
                            <tr class="line17">
                                <td class="font-bold">Infant</td>
                                <td class="text-danger font-bold">US$ 20</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-6 nopaddingright">
                        <div class="border-right mobile_noborder paddingright10 mobile_nopaddingright"
                             style="height: auto;">
                            <p class="font-bold text-info font12">TOTAL PRICE PER PERSON BASED ON PASSENGER AGE AND TOUR
                                DATE
                                <i class="fa fa-info-circle font16"></i>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="font-bold text-info font12">SELECT PRIVATE ROOM
                            + US$ 300 / PERSON </p>
                    </div>
                    <div class="col-md-12 text-center marginbottom10">
                        <button type="button" class="btn btn-primary"> 20 Seats Left || Book Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</div>
<!--end list ting price-->
</div>


</div>
<!--end departure-price-list-->
</div>
</div>
<div class="peak-product-component-content">
    <h5>HOTELS USED ON TOURS</h5>
    <div class="row" style="margin: 0 -25px">
        <div class="col-xs-12 product">
            <div style="background: #f6f9fa; min-height: 100px; color: #006699;">
                <div class="col-xs-7 mobile_nopaddingleft">
                    <img src="img/common/tourdetails_hotel.png" width="100%">
                    <p class="tourde-top-dest-title-country-background-bottom">Sofitel Legend Metropole Ha noi Hotel -
                        Vietnam</p>
                </div>
                <div class="col-xs-5 mobile_nopaddingleft">
                    <h6 class="mobile_margin-top_bottom_5">HANOI, VIETNAM</h6>
                    <hr class="mobile_minmargin">
                    <p class="nomarginpadding font12 font-bold">GUESTS' RATING - 4.2/5</p>
                    <div class="intrepid-product-intro text-right paddingright10">
                        <h3 class="price">
                            <div class="peak-price peak-price-USD" style="font-size:30px;">
                                <span class="price-currency-code">STAR</span>5 <img src="img/common/tourdetails_hotel_icon.png" width="25">
                            </div>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 bs-section nopaddingright product">
            <div style="background: #f6f9fa; min-height: 100px; color: #006699;">
                <div class="col-xs-7 mobile_nopaddingleft">
                    <img src="img/common/tourdetails_hotel.png" width="100%">
                    <p class="tourde-top-dest-title-country-background-bottom">Sofitel Legend Metropole Ha noi Hotel -
                        Vietnam</p>
                </div>
                <div class="col-xs-5 mobile_nopaddingleft">
                    <h6 class="mobile_margin-top_bottom_5">HANOI, VIETNAM</h6>
                    <hr class="mobile_minmargin">
                    <p class="nomarginpadding font12 font-bold">GUESTS' RATING - 4.2/5</p>
                    <div class="intrepid-product-intro text-right paddingright10">
                        <h3 class="price">
                            <div class="peak-price peak-price-USD" style="font-size:30px;">
                                <span class="price-currency-code">STAR</span>5 <img src="img/common/tourdetails_hotel_icon.png" width="25">
                            </div>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 bs-section nopaddingleft product">
            <div style="background: #f6f9fa; min-height: 100px; color: #006699;">
                <div class="col-xs-7 mobile_nopaddingleft">
                    <img src="img/common/tourdetails_hotel.png" width="100%">
                    <p class="tourde-top-dest-title-country-background-bottom">Sofitel Legend Metropole Ha noi Hotel -
                        Vietnam</p>
                </div>
                <div class="col-xs-5 mobile_nopaddingleft">
                    <h6 class="mobile_margin-top_bottom_5">HANOI, VIETNAM</h6>
                    <hr class="mobile_minmargin">
                    <p class="nomarginpadding font12 font-bold">GUESTS' RATING - 4.2/5</p>
                    <div class="intrepid-product-intro text-right paddingright10">
                        <h3 class="price">
                            <div class="peak-price peak-price-USD" style="font-size:30px;">
                                <span class="price-currency-code">STAR</span>5 <img src="img/common/tourdetails_hotel_icon.png" width="25">
                            </div>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 bs-section nopaddingright product">
            <div style="background: #f6f9fa; min-height: 100px; color: #006699;">
                <div class="col-xs-7 mobile_nopaddingleft">
                    <img src="img/common/tourdetails_hotel.png" width="100%">
                    <p class="tourde-top-dest-title-country-background-bottom">Sofitel Legend Metropole Ha noi Hotel -
                        Vietnam</p>
                </div>
                <div class="col-xs-5 mobile_nopaddingleft">
                    <h6 class="mobile_margin-top_bottom_5">HANOI, VIETNAM</h6>
                    <hr class="mobile_minmargin">
                    <p class="nomarginpadding font12 font-bold">GUESTS' RATING - 4.2/5</p>
                    <div class="intrepid-product-intro text-right paddingright10">
                        <h3 class="price">
                            <div class="peak-price peak-price-USD" style="font-size:30px;">
                                <span class="price-currency-code">STAR</span>5 <img src="img/common/tourdetails_hotel_icon.png" width="25">
                            </div>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 bs-section nopaddingleft product">
            <div style="background: #f6f9fa; min-height: 100px; color: #006699;">
                <div class="col-xs-7 mobile_nopaddingleft">
                    <img src="img/common/tourdetails_hotel.png" width="100%">
                    <p class="tourde-top-dest-title-country-background-bottom">Sofitel Legend Metropole Ha noi Hotel -
                        Vietnam</p>
                </div>
                <div class="col-xs-5 mobile_nopaddingleft">
                    <h6 class="mobile_margin-top_bottom_5">HANOI, VIETNAM</h6>
                    <hr class="mobile_minmargin">
                    <p class="nomarginpadding font12 font-bold">GUESTS' RATING - 4.2/5</p>
                    <div class="intrepid-product-intro text-right paddingright10">
                        <h3 class="price">
                            <div class="peak-price peak-price-USD" style="font-size:30px;">
                                <span class="price-currency-code">STAR</span>5 <img src="img/common/tourdetails_hotel_icon.png" width="25">
                            </div>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div id="tab-3">

        <div class="row bs-section">
            <p style="text-align: justify; font-size: 13px; line-height: 16px;">The trip document tells you everything
                you need to know about your holiday. We have prepared specific notes for special departures, which helps
                to make the perfect choice of the trip and departure dates for your dream holiday. You can download this
                trip information as a PDF. You should make sure that you have in hand a final copy of your trip document
                in together with the destination userful information a couple of days prior to your travel date.</p>
            <div class="col-xs-12">
                <button type="button" class="btn btn-block"><h4 style="#006699" class="margintop5">DOWNLOAD DOCUMENT</h4>
                    <h2 style="color: #cc0000" class="margintop5 marginbottom3">CLICK</h2></button>
            </div>
        </div>
        <div class="row">
            <h6 style="height: 40px; background:#f1f1f1; padding: 15px 10px">FREQUENT ASK QUESTIONS</h6>

            <div>
                <div class="tour_document_quest font12h"><a id="show-qa1" onclick="false"
                                                            style="color:#006699; text-decoration: none;"><img
                            src="img/common/tourdetails_document_quest.png"> Can i have an appointement call to an
                        expert in person?</a></div>
                <div id="qa1">
                    <ul style="background: #f9f9f9;">
                        <li style="padding:10px 0 5px 10px; color: #000000">
                            Yes! We welcome the opportunity to speak to our experts . To have a call appointment, you
                            just need to fill up the enquiry form with the subject you are planning to discuss. Our
                            expert will call you in soonest time.
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="tour_document_quest font12h"><a id="show-qa2" onclick="false"
                                                            style="color:#006699; text-decoration: none"><img
                            src="img/common/tourdetails_document_quest.png"> What is the destination expert ?</a></div>
                <div id="qa2">
                    <ul style="background: #f9f9f9;">
                        <li style="padding:10px 0 5px 10px; color: #000000">
                            Our expert provide a unique holiday-planning service. Each expert is focused on a specific
                            destination so you get the benefit of their knowledge and experience. Our expert travel
                            extensively to their destinations - they speak from personal experience. You will have
                            contact with the same specialist throughout the planning process.
                            Their enthusiasm for the destination will mean they can tailor your trip to your exact
                            preferences. They can ensure you make the most of your time and budget during your trip.

                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="tour_document_quest font12h"><a id="show-qa3" onclick="false"
                                                            style="color:#006699; text-decoration: none"><img
                            src="img/common/tourdetails_document_quest.png"> Do i have to travel on certain dates ?</a>
                </div>
                <div id="qa3">
                    <ul style="background: #f9f9f9;">
                        <li style="padding:10px 0 5px 10px; color: #000000">
                            Because all of our trips are tailor-made, you can depart on any date you wish (depending on
                            flights) and for as long as you wish. The itineraries provided on our website are
                            suggestions only and you can change any aspect to suit your tastes and budget. Your
                            destination specialist will be able to provide advice and answer your questions.
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="tour_document_quest font12h"><a id="show-qa4" onclick="false"
                                                            style="color:#006699; text-decoration: none"><img
                            src="img/common/tourdetails_document_quest.png"> Will i be travelling in a part of group
                        ?</a></div>
                <div id="qa4">
                    <ul style="background: #f9f9f9;">
                        <li style="padding:10px 0 5px 10px; color: #000000">
                            No, our tailor-made trips are arranged on an individual basis. This means you are not tied
                            to the wishes of a group and can arrange your itinerary at your own pace. If you are
                            interested in a Group Tour, we do offer a range of departures in small groups of up to 16
                            people.

                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="tour_document_quest font12h"><a id="show-qa5" onclick="false"
                                                            style="color:#006699; text-decoration: none"><img
                            src="img/common/tourdetails_document_quest.png"> Isn’t it easier and cheaper to arrange the
                        holiday myself?
                    </a></div>
                <div id="qa5">
                    <ul style="background: #f9f9f9;">
                        <li style="padding:10px 0 5px 10px; color: #000000">
                            Many of our clients like the independence that tailor-made travel brings, without the
                            'regimentation' of organised group tours, but with the reassurance of our professional
                            planning and back-up services. For example, if the flight that we've booked is delayed, it's
                            down to us to re-arrange your travel in the country.
                            When things go wrong, an independent traveller may find themselves putting in a good deal of
                            time re-organising their plans, when they should be enjoying the trip. We also regularly
                            hear from travellers claiming that they can independently organise the same trip for a lower
                            price. Almost invariably it is not 'like for like' and they may find they incur much more
                            expense during their travels.
                        </li>
                    </ul>
                </div>
            </div>

        </div>

</div>
<div id="tab-4">
    <!--gallery-->
    <div class="row bs-section">
        <div class="gallery">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" style="display: inline-block;">
                    <a class="thumbnail" href="#"><img alt="image" src="img/gallery/1.jpg"></a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" style="display: inline-block;">
                    <a class="thumbnail" href="#"><img alt="image" src="img/gallery/2.jpg"></a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" style="display: inline-block;">
                    <a class="thumbnail" href="#"><img alt="image" src="img/gallery/3.jpg"></a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" style="display: inline-block;">
                    <a class="thumbnail" href="#"><img alt="image" src="img/gallery/4.jpg"></a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" style="display: inline-block;">
                    <a class="thumbnail" href="#"><img alt="image" src="img/gallery/5.jpg"></a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" style="display: inline-block;">
                    <a class="thumbnail" href="#"><img alt="image" src="img/gallery/6.jpg"></a>
                </div>
            </div>
        </div>
    </div>
    <!--gallery-->
</div>
<div id="tab-5">
<h5 class="text-right color-green"><img src="img/common/tourdetails_write_review.png"> WRITE A REVIEW | ADD PHOTOS</h5>

<div class="row bs-section b" style="background: #f7ecec; min-height:50px">
    <div class="col-xs-5" style="padding-top: 3px; background: #fbf5f5">
        <img src="img/common/tourdetails_clicktorate.png">

        <p class="margintop3 marginbottom3 font-bold font12">CLICK TO RATE</p></div>
    <div class="col-xs-7 nopaddingleft">
        <div class="stars" style="padding-top: 15px; padding-left: 5px">
            <form action="">
                <input class="star star-5" id="star-5" type="radio" name="star"/>
                <label class="star star-5" for="star-5"></label>
                <input class="star star-4" id="star-4" type="radio" name="star"/>
                <label class="star star-4" for="star-4"></label>
                <input class="star star-3" id="star-3" type="radio" name="star"/>
                <label class="star star-3" for="star-3"></label>
                <input class="star star-2" id="star-2" type="radio" name="star"/>
                <label class="star star-2" for="star-2"></label>
                <input class="star star-1" id="star-1" type="radio" name="star"/>
                <label class="star star-1" for="star-1"></label>
            </form>
        </div>
    </div>
</div>
<!--begin review list-->
    <div class="row bs-section margintop20 b" style="background:#f8f7f5">
    <div class="col-md-3 paddingleft4">
        <div style="margin:5px 0; padding: 5px 0; background: #FFFFFF; text-align: center; color: #006699">
            <img src="img/common/tourdetails_review_person.png">

            <p class="text-center margintop5 marginbottom3">Perter Smith</p>
            <img src="img/common/vietnam_flag_100x65.png" width="30">

            <p class="text-center margintop5 marginbottom3">United States</p>
        </div>
    </div>
    <div class="col-md-9">
        <div>
            <h5 class="margintop5 marginbottom5">GREAT EXPERIENCE IN LIFE</h5>

            <p class="margintop5 marginbottom5"><img src="img/common/stars_icon.png"> Reviewed July 7, 2015</p>

            <p class="margintop5 marginbottom5">54 /140 visitors found this review helful</p>

            <p class="margintop10 marginbottom5">Would highly recommend this tour. It combined such a variety of
                experiences! The guides were knowledgeable and so friendly. Pace was good and the itinerary arranged so
                that there was adequate free time. Like all tours, you can opt out of planned visits if you so choose. I
                can't believe how much we did in the time,... <a href="" class="read-more"> Read more</a>
            </p>

            <div class="b margintop20" style="min-height: 28px; padding:3px 0">
                <div style="width: 75%; float: left; padding: 2px 2px">
                    <p class="font12h">Was this review helpful to you?</p></div>
                <div style="width: 25%; float: left" class="nomarginpadding">
                    <button class="btn btn-grey btn-xs">Yes</button>
                    <button class="btn btn-grey btn-xs">No</button>
                </div>
            </div>
            <div class="text-left margintop5 marginbottom3 clear font12h">
                <a href=""> Comment</a> | <a href="">Add your comment</a> | <a href="">Report Abuse</a> | <a href="">Subcrible</a>
                | <a href="">Share</a>
            </div>
        </div>
    </div>
</div>
    <div class="row bs-section margintop20 b" style="background:#f8f7f5">
        <div class="col-md-3 paddingleft4">
            <div style="margin:5px 0; padding: 5px 0; background: #FFFFFF; text-align: center; color: #006699">
                <img src="img/common/tourdetails_review_person.png">

                <p class="text-center margintop5 marginbottom3">Perter Smith</p>
                <img src="img/common/vietnam_flag_100x65.png" width="30">

                <p class="text-center margintop5 marginbottom3">United States</p>
            </div>
        </div>
        <div class="col-md-9">
            <div>
                <h5 class="margintop5 marginbottom5">GREAT EXPERIENCE IN LIFE</h5>

                <p class="margintop5 marginbottom5"><img src="img/common/stars_icon.png"> Reviewed July 7, 2015</p>

                <p class="margintop5 marginbottom5">54 /140 visitors found this review helful</p>

                <p class="margintop10 marginbottom5">Would highly recommend this tour. It combined such a variety of
                    experiences! The guides were knowledgeable and so friendly. Pace was good and the itinerary arranged so
                    that there was adequate free time. Like all tours, you can opt out of planned visits if you so choose. I
                    can't believe how much we did in the time,... <a href="" class="read-more"> Read more</a>
                </p>

                <div class="b margintop20" style="min-height: 28px; padding:3px 0">
                    <div style="width: 75%; float: left; padding: 2px 2px">
                        <p class="font12h">Was this review helpful to you?</p></div>
                    <div style="width: 25%; float: left" class="nomarginpadding">
                        <button class="btn btn-grey btn-xs">Yes</button>
                        <button class="btn btn-grey btn-xs">No</button>
                    </div>
                </div>
                <div class="text-left margintop5 marginbottom3 clear font12h">
                    <a href=""> Comment</a> | <a href="">Add your comment</a> | <a href="">Report Abuse</a> | <a href="">Subcrible</a>
                    | <a href="">Share</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row bs-section margintop20 b" style="background:#f8f7f5">
        <div class="col-md-3 paddingleft4">
            <div style="margin:5px 0; padding: 5px 0; background: #FFFFFF; text-align: center; color: #006699">
                <img src="img/common/tourdetails_review_person.png">

                <p class="text-center margintop5 marginbottom3">Perter Smith</p>
                <img src="img/common/vietnam_flag_100x65.png" width="30">

                <p class="text-center margintop5 marginbottom3">United States</p>
            </div>
        </div>
        <div class="col-md-9">
            <div>
                <h5 class="margintop5 marginbottom5">GREAT EXPERIENCE IN LIFE</h5>

                <p class="margintop5 marginbottom5"><img src="img/common/stars_icon.png"> Reviewed July 7, 2015</p>

                <p class="margintop5 marginbottom5">54 /140 visitors found this review helful</p>

                <p class="margintop10 marginbottom5">Would highly recommend this tour. It combined such a variety of
                    experiences! The guides were knowledgeable and so friendly. Pace was good and the itinerary arranged so
                    that there was adequate free time. Like all tours, you can opt out of planned visits if you so choose. I
                    can't believe how much we did in the time,... <a href="" class="read-more"> Read more</a>
                </p>

                <div class="b margintop20" style="min-height: 28px; padding:3px 0">
                    <div style="width: 75%; float: left; padding: 2px 2px">
                        <p class="font12h">Was this review helpful to you?</p></div>
                    <div style="width: 25%; float: left" class="nomarginpadding">
                        <button class="btn btn-grey btn-xs">Yes</button>
                        <button class="btn btn-grey btn-xs">No</button>
                    </div>
                </div>
                <div class="text-left margintop5 marginbottom3 clear font12h">
                    <a href=""> Comment</a> | <a href="">Add your comment</a> | <a href="">Report Abuse</a> | <a href="">Subcrible</a>
                    | <a href="">Share</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row bs-section margintop20 b" style="background:#f8f7f5">
        <div class="col-md-3 paddingleft4">
            <div style="margin:5px 0; padding: 5px 0; background: #FFFFFF; text-align: center; color: #006699">
                <img src="img/common/tourdetails_review_person.png">

                <p class="text-center margintop5 marginbottom3">Perter Smith</p>
                <img src="img/common/vietnam_flag_100x65.png" width="30">

                <p class="text-center margintop5 marginbottom3">United States</p>
            </div>
        </div>
        <div class="col-md-9">
            <div>
                <h5 class="margintop5 marginbottom5">GREAT EXPERIENCE IN LIFE</h5>

                <p class="margintop5 marginbottom5"><img src="img/common/stars_icon.png"> Reviewed July 7, 2015</p>

                <p class="margintop5 marginbottom5">54 /140 visitors found this review helful</p>

                <p class="margintop10 marginbottom5">Would highly recommend this tour. It combined such a variety of
                    experiences! The guides were knowledgeable and so friendly. Pace was good and the itinerary arranged so
                    that there was adequate free time. Like all tours, you can opt out of planned visits if you so choose. I
                    can't believe how much we did in the time,... <a href="" class="read-more"> Read more</a>
                </p>

                <div class="b margintop20" style="min-height: 28px; padding:3px 0">
                    <div style="width: 75%; float: left; padding: 2px 2px">
                        <p class="font12h">Was this review helpful to you?</p></div>
                    <div style="width: 25%; float: left" class="nomarginpadding">
                        <button class="btn btn-grey btn-xs">Yes</button>
                        <button class="btn btn-grey btn-xs">No</button>
                    </div>
                </div>
                <div class="text-left margintop5 marginbottom3 clear font12h">
                    <a href=""> Comment</a> | <a href="">Add your comment</a> | <a href="">Report Abuse</a> | <a href="">Subcrible</a>
                    | <a href="">Share</a>
                </div>
            </div>
        </div>
    </div>

<!--end review list-->
</div>

</div>
</div>
</div>

</div>


<script type="text/javascript">
    // basic show and hide in responsive xs, tab overview
    $(document).ready(function () {
        $('#toggleh1').click(function () {
            $('div.showhide1,h1').toggle();
        });


        $('#toggleh2').click(function () {
            $('div.showhide2,h1').toggle();
        });
    });
</script>
</div>
<!-- End Body -->
<script>
    /*begin open all and close all cho itinerary in mobile version*/
    $(document).ready(function () {
        $('.question').click(function () {

            if ($(this).next().is(':hidden') != true) {
                $(this).removeClass('active');
                $(this).next().slideUp("normal");
            } else {
                $('.question').removeClass('active');
                $('.answer').slideUp('normal');
                if ($(this).next().is(':hidden') == true) {
                    $(this).addClass('active');
                    $(this).next().slideDown('normal');
                }
            }
        });

        $('.answer').hide();

        $('.expand').click(function (event) {
                $('.question').next().slideDown('normal');
                {
                    $('.question').addClass('active');
                }
            }
        );

        $('.closeall').click(function (event) {
                $('.question').next().slideUp('normal');
                {
                    $('.question').removeClass('active');
                }
            }
        );
    });
    /*end open all and close all cho itinerary in mobile version*/
</script>
<script type="text/javascript">
    // basic show and hide in responsive xs, tab overview
    $(document).ready(function () {
        $('#toggleh1').click(function () {
            $('div.showhide1,h1').toggle();
        });


        $('#toggleh2').click(function () {
            $('div.showhide2,h1').toggle();
        });
    });
</script>
<script>
    (function ($) {
        $(document).ready(function ($) {

            //rotate plus
            $('.toggle-date').click(function () {
                if ($(this).hasClass('toggle-date')) {
                    $(this).removeClass('toggle-date')
                } else {
                    $(this).addClass('toggle-date')
                }

                if ($(this).hasClass('toggle-date')) {
                    $(this).find('img').attr('src', 'img/common/tourdetails_icon_down.png');
                } else {
                    $(this).find('img').attr('src', 'img/common/tourdetails_icon_up.png');
                }
            });


            $("#show-example").click(function () {
                if ($('#example').is(":visible")) {
                    $(this).html($(this).html().replace(/Hide/, 'Show'));
                } else {
                    $(this).html($(this).html().replace(/Show/, 'Hide'));
                }
                // Do it afterwards as the operation is async
                $("#example").slideToggle("slow");
            });

            $("#show-example1").click(function () {
                if ($('#example1').is(":visible")) {
                    $(this).html($(this).html().replace(/Hide/, 'Show'));
                } else {
                    $(this).html($(this).html().replace(/Show/, 'Hide'));
                }
                // Do it afterwards as the operation is async
                $("#example1").slideToggle("slow");
            });

            $("#show-example2").click(function () {
                if ($('#example2').is(":visible")) {
                    $(this).html($(this).html().replace(/Hide/, 'Show'));
                } else {
                    $(this).html($(this).html().replace(/Show/, 'Hide'));
                }
                // Do it afterwards as the operation is async
                $("#example2").slideToggle("slow");
            });

            $("#show-qa1").click(function () {
                if ($('#qa1').is(":visible")) {
                    $(this).html($(this).html().replace(/Hide/, 'Show'));
                } else {
                    $(this).html($(this).html().replace(/Show/, 'Hide'));
                }
                // Do it afterwards as the operation is async
                $("#qa1").slideToggle("slow");
            });
            $("#show-qa2").click(function () {
                if ($('#qa2').is(":visible")) {
                    $(this).html($(this).html().replace(/Hide/, 'Show'));
                } else {
                    $(this).html($(this).html().replace(/Show/, 'Hide'));
                }
                // Do it afterwards as the operation is async
                $("#qa2").slideToggle("slow");
            });

            $("#show-qa3").click(function () {
                if ($('#qa3').is(":visible")) {
                    $(this).html($(this).html().replace(/Hide/, 'Show'));
                } else {
                    $(this).html($(this).html().replace(/Show/, 'Hide'));
                }
                // Do it afterwards as the operation is async
                $("#qa3").slideToggle("slow");
            });

            $("#show-qa4").click(function () {
                if ($('#qa4').is(":visible")) {
                    $(this).html($(this).html().replace(/Hide/, 'Show'));
                } else {
                    $(this).html($(this).html().replace(/Show/, 'Hide'));
                }
                // Do it afterwards as the operation is async
                $("#qa4").slideToggle("slow");
            });

            $("#show-qa5").click(function () {
                if ($('#qa5').is(":visible")) {
                    $(this).html($(this).html().replace(/Hide/, 'Show'));
                } else {
                    $(this).html($(this).html().replace(/Show/, 'Hide'));
                }
                // Do it afterwards as the operation is async
                $("#qa5").slideToggle("slow");
            });

            $("#show-qa6").click(function () {
                if ($('#qa6').is(":visible")) {
                    $(this).html($(this).html().replace(/Hide/, 'Show'));
                } else {
                    $(this).html($(this).html().replace(/Show/, 'Hide'));
                }
                // Do it afterwards as the operation is async
                $("#qa6").slideToggle("slow");
            });


        });
    })(jQuery);
</script>
<script type="text/javascript" src="js/readmore.js"></script>
</body>

</html>