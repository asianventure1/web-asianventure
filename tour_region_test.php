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
    <style>
    /* 2.15. Listing Styles ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
    .listing-style1.hotel .box-title:after, .listing-style1.cruise .box-title:after {
        display: table;
        content: "";
        clear: both; }
    .listing-style1.hotel .feedback, .listing-style1.cruise .feedback {
        margin: 5px 0;
        border-top: 1px solid #f5f5f5;
        padding-top: 5px;
        border-bottom: 1px solid #f5f5f5; }
    .listing-style1.hotel .feedback .review, .listing-style1.cruise .feedback .review {
        display: block;
        float: right;
        text-transform: uppercase;
        font-size: 0.8333em;
        color: #9e9e9e; }
    .listing-style1.hotel .five-stars-container, .listing-style1.cruise .five-stars-container {
        color: #dbdbdb; }
    .listing-style1.hotel .action .button:last-child, .listing-style1.cruise .action .button:last-child {
        float: right; }
    .listing-style1.hotel .action .button, .listing-style1.cruise .action .button {
        width: 45%;
        padding: 0;
        text-align: center; }
    .listing-style1.hotel .action .button + .button, .listing-style1.cruise .action .button + .button {
        width: 50%; }
    .listing-style1.flight .details, .listing-style1.car .details {
        padding: 15px 0 0 !important;
        text-transform: uppercase; }
    .listing-style1.flight .details .box-title, .listing-style1.car .details .box-title {
        text-transform: none; }
    .listing-style1.flight .details .box-title:after, .listing-style1.car .details .box-title:after {
        display: table;
        content: "";
        clear: both; }
    .listing-style1.flight .action .button, .listing-style1.car .action .button {
        text-align: center; }
    .listing-style1.flight figure img {
        max-width: 100%; }
    .listing-style1.flight .details .time {
        margin: 10px 0;
        border-top: 1px solid #f5f5f5;
        border-bottom: 1px solid #f5f5f5;
        letter-spacing: 0.04em; }
    .listing-style1.flight .details .time:after {
        display: table;
        content: "";
        clear: both; }
    .listing-style1.flight .details .time > div {
        width: 50%;
        float: left;
        padding: 7px 0; }
    .listing-style1.flight .details .time > div > .icon {
        font-size: 16px;
        float: left; }
    .listing-style1.flight .details .time > div > .icon + div {
        padding-left: 24px; }
    .listing-style1.flight .details .time > div:first-child {
        border-right: 1px solid #f5f5f5; }
    .listing-style1.flight .details .time > div + div {
        padding-left: 20px; }
    .listing-style1.flight .details .duration {
        font-size: 0.8333em;
        text-align: center;
        letter-spacing: 0.04em; }
    .listing-style1.car figure img {
        max-width: 100%; }
    .listing-style1.car .details .mile {
        font-size: 0.8333em;
        text-align: center; }
    .listing-style1.car .details .amenities {
        text-align: center;
        border-top: 1px solid #f5f5f5;
        border-bottom: 1px solid #f5f5f5;
        margin: 10px 0;
        padding: 10px 0 6px; }
    .listing-style1.cruise .time {
        padding-top: 5px; }
    .listing-style1.cruise .time [class^="soap-icon"] {
        float: left;
        font-size: 20px; }
    .listing-style1.cruise .time > div {
        margin-bottom: 10px !important; }
    .listing-style1.cruise .time > div:first-child {
        border-right: 1px solid #f5f5f5; }
    .listing-style1.cruise .time > div > div {
        padding-left: 20px; }
    .listing-style1.cruise .action a.button {
        float: none !important; }
    .listing-style1.cruise .description {
        text-align: center;
        font-size: 0.8333em;
        text-transform: uppercase; }

    .listing-style1.flight .box, .listing-style1.flight.box, .listing-style1.car .box, .listing-style1.car.box, .listing-style2.flight .box, .listing-style2.flight.box, .listing-style2.car .box, .listing-style2.car.box {
        padding: 15px; }
    .listing-style1.flight figure, .listing-style1.car figure, .listing-style2.flight figure, .listing-style2.car figure {
        background: #f5f5f5;
        display: table;
        /*height: 140px;*/
        width: 100%;
        table-layout: fixed; }
    .listing-style1.flight figure > a, .listing-style1.flight figure > span, .listing-style1.car figure > a, .listing-style1.car figure > span, .listing-style2.flight figure > a, .listing-style2.flight figure > span, .listing-style2.car figure > a, .listing-style2.car figure > span {
        display: table-cell;
        vertical-align: middle;
        text-align: center; }
    .listing-style1.flight figure img, .listing-style1.car figure img, .listing-style2.flight figure img, .listing-style2.car figure img {
        width: auto; }

    .listing-style1.flight .icon, .listing-style3.flight .icon {
        font-size: 16px; }
    .listing-style1.flight .take-off > .icon, .listing-style3.flight .take-off > .icon {
        -webkit-transform: rotate(-25deg);
        -moz-transform: rotate(-25deg);
        -ms-transform: rotate(-25deg);
        -o-transform: rotate(-25deg);
        transform: rotate(-25deg);
        display: inline-block; }
    .listing-style1.flight .landing > .icon, .listing-style3.flight .landing > .icon {
        -webkit-transform: rotate(25deg);
        -moz-transform: rotate(25deg);
        -ms-transform: rotate(25deg);
        -o-transform: rotate(25deg);
        transform: rotate(25deg);
        display: inline-block; }
    .listing-style1.car .amenities ul, .listing-style3.car .amenities ul {
        display: inline-block;
        color: #9e9e9e; }
    .listing-style1.car .amenities ul li, .listing-style3.car .amenities ul li {
        float: left;
        text-align: center;
        padding: 0 5px;
        cursor: default;
        font-size: 0.8333em; }
    .listing-style1.car .amenities ul li .glyphicon, .listing-style1.car .amenities ul li [class^="soap-icon"], .listing-style3.car .amenities ul li .glyphicon, .listing-style3.car .amenities ul li [class^="soap-icon"] {
        display: block;
        font-size: 16px;
        color: #d9d9d9;
        overflow: hidden; }
    .listing-style1.car .amenities ul li .glyphicon, .listing-style3.car .amenities ul li .glyphicon {
        line-height: 25px; }
    .listing-style1.car .amenities ul li .glyphicon:before, .listing-style3.car .amenities ul li .glyphicon:before {
        font-size: 12px; }
    .listing-style1.car .amenities ul li:hover, .listing-style1.car .amenities ul li:hover .glyphicon, .listing-style1.car .amenities ul li:hover [class^="soap-icon"], .listing-style3.car .amenities ul li:hover, .listing-style3.car .amenities ul li:hover .glyphicon, .listing-style3.car .amenities ul li:hover [class^="soap-icon"] {
        color: #01b7f2; }
    .listing-style1.car .amenities ul li:hover [class^="soap-icon"]:before, .listing-style3.car .amenities ul li:hover [class^="soap-icon"]:before {
        -webkit-animation: toTopFromBottom 0.35s forwards;
        -moz-animation: toTopFromBottom 0.35s forwards;
        animation: toTopFromBottom 0.35s forwards; }
    .listing-style1.car .amenities ul:after, .listing-style3.car .amenities ul:after {
        display: table;
        content: "";
        clear: both; }

    .listing-style2 .box .box-title {
        margin-bottom: 0; }
    .listing-style2 a.button {
        margin-top: 6px; }
    .listing-style2.flight .details {
        padding: 12px 2px 0; }
    .listing-style2.flight img {
        width: auto;
        max-width: 100%; }

    .listing-style3 .box, .listing-style3.box {
        background: #fff;
        margin-bottom: 30px; }
    .listing-style3 .box > *, .listing-style3.box > * {
        padding: 0; }
    .listing-style3 .box:after, .listing-style3.box:after {
        display: table;
        clear: both;
        content: ""; }
    .listing-style3 .review {
        display: block;
        text-transform: uppercase;
        font-size: 0.8333em;
        color: #9e9e9e; }
    .listing-style3 .five-stars-container, .listing-style3 .review {
        line-height: 1em; }
    .listing-style3 .five-stars-container {
        color: #dbdbdb; }
    .listing-style3 [class^="soap-icon"].circle {
        color: #d9d9d9;
        cursor: default;
        font-size: 16px;
        overflow: hidden; }
    .listing-style3 [class^="soap-icon"].circle:hover {
        color: #01b7f2; }
    .listing-style3 [class^="soap-icon"].circle:hover:before {
        -webkit-animation: toTopFromBottom 0.35s forwards;
        -moz-animation: toTopFromBottom 0.35s forwards;
        animation: toTopFromBottom 0.35s forwards; }
    .listing-style3 .price {
        float: none;
        text-align: center; }
    .listing-style3.hotel figure img {
        width: 100%;
        height: auto; }
    .listing-style3.hotel .box-title {
        margin: 0;
        float: left; }
    .listing-style3.hotel .box-title i {
        font-size: 15px; }
    .listing-style3.hotel .amenities {
        float: right; }
    .listing-style3.hotel .details {
        padding: 15px 0 15px 20px;
        display: table; }
    .listing-style3.hotel .details [class^="soap-icon"].circle {
        margin-right: 5px;
        margin-top: 5px; }
    .listing-style3.hotel .details > * {
        display: table-row; }
    .listing-style3.hotel .details > * > * {
        display: table-cell;
        padding: 10px 15px 0;
        text-align: center;
        vertical-align: middle; }
    .listing-style3.hotel .details > * > *:first-child {
        border-right: 1px solid #f5f5f5;
        padding-left: 0;
        padding-right: 15px;
        text-align: left; }
    .listing-style3.hotel .details > * > *:last-child {
        width: 120px; }
    .listing-style3.hotel .details > *:first-child > * {
        /*border-bottom: 1px solid #f5f5f5;*/
        padding-top: 0;
        padding-bottom: 10px; }
    .listing-style3.hotel .details .button {
        margin-top: 8px; }
    .listing-style3.flight .box, .listing-style3.flight.box {
        padding: 15px;
        display: table;
        width: 100%;
        table-layout: fixed; }
    .listing-style3.flight figure {
        display: table-cell;
        background: #f5f5f5;
        vertical-align: middle;
        float: none; }
    .listing-style3.flight figure span {
        text-align: center;
        display: block; }
    .listing-style3.flight figure span img {
        max-width: 60px;
        height: auto; }
    .listing-style3.flight .box-title {
        float: left; }
    .listing-style3.flight .stop:hover {
        background: #fdb714; }
    .listing-style3.flight .amenities {
        margin-bottom: 10px;
        float: right; }
    .listing-style3.flight .details {
        display: table-cell;
        padding-left: 15px;
        float: none; }
    .listing-style3.flight .details .details-wrapper {
        display: table;
        width: 100%; }
    .listing-style3.flight .details .details-wrapper > * {
        display: table-row; }
    .listing-style3.flight .details .details-wrapper > * > * {
        display: table-cell;
        padding: 15px 15px 0 15px; }
    .listing-style3.flight .details .details-wrapper > * > *:first-child {
        border-right: 1px solid #f5f5f5;
        padding-left: 0; }
    .listing-style3.flight .details .details-wrapper > * > *:last-child {
        text-align: center;
        padding-right: 0; }
    .listing-style3.flight .details .details-wrapper > *:first-child > * {
        border-bottom: 1px solid #f5f5f5;
        padding-top: 0; }
    .listing-style3.flight .details .details-wrapper .box-title {
        margin: 0 10px 15px 0; }
    .listing-style3.flight .details .details-wrapper [class^="soap-icon"].circle {
        margin-right: 5px; }
    .listing-style3.flight .details .details-wrapper [class^="col-"], .listing-style3.flight .details .details-wrapper [class*=" col-"] {
        padding: 0; }
    .listing-style3.flight .details .details-wrapper .time > div {
        border-right: 1px solid #f5f5f5;
        padding-left: 15px; }
    .listing-style3.flight .details .details-wrapper .time > div:last-child {
        border-right: none; }
    .listing-style3.flight .details .details-wrapper .time > div:first-child {
        padding-left: 0; }
    .listing-style3.flight .details .details-wrapper .time > div > div {
        padding-left: 25px; }
    .listing-style3.flight .details .details-wrapper .time .icon {
        float: left;
        padding: 0;
        font-size: 16px; }
    .listing-style3.flight .details .details-wrapper .time {
        letter-spacing: 0.04em; }
    .listing-style3.flight .details .details-wrapper .action {
        vertical-align: top; }
    .listing-style3.car .box, .listing-style3.car.box {
        display: table;
        padding-top: 15px;
        padding-bottom: 15px;
        width: 100%;
        table-layout: fixed; }
    .listing-style3.car figure {
        display: table-cell;
        vertical-align: middle;
        float: none;
        text-align: center;
        border-right: 1px solid #f5f5f5; }
    .listing-style3.car figure img {
        max-width: 80%;
        height: auto; }
    .listing-style3.car .details {
        display: table-cell;
        float: none; }
    .listing-style3.car .details .box-title {
        float: left; }
    .listing-style3.car .details .logo {
        margin: 3px 0 0 8px;
        float: left;
        border-left: 1px solid #e1e1e1;
        padding-left: 8px; }
    .listing-style3.car .details .logo img {
        max-height: 20px;
        width: auto; }
    .listing-style3.car .details .amenities {
        margin-top: 20px; }
    .listing-style3.car .details .character {
        text-align: right;
        text-transform: uppercase;
        font-size: 0.8333em;
        border-right: 1px solid #f5f5f5; }
    .listing-style3.car .details .character dd {
        margin-bottom: 5px; }
    .listing-style3.car .details .character dl {
        margin-bottom: 0; }
    .listing-style3.car .details .action {
        text-align: center;
        text-transform: uppercase; }
    .listing-style3.car .details .action .button {
        margin-top: 30px; }
    .listing-style3.cruise figure img {
        width: 100%;
        height: auto; }
    .listing-style3.cruise .details {
        padding: 15px 20px;
        text-transform: uppercase; }
    .listing-style3.cruise .details img {
        max-width: 100%;
        height: auto; }
    .listing-style3.cruise .details .box-title {
        text-transform: none;
        margin-bottom: 10px; }
    .listing-style3.cruise .details .character {
        font-size: 0.8333em;
        border-top: 1px solid #f5f5f5;
        border-bottom: 1px solid #f5f5f5;
        margin-bottom: 15px;
        display: table;
        width: 100%;
        table-layout: fixed; }
    .listing-style3.cruise .details .character > div {
        display: table-cell;
        float: none;
        vertical-align: middle;
        margin: 0;
        padding-top: 12px;
        padding-bottom: 12px;
        border-left: 1px solid #f5f5f5; }
    .listing-style3.cruise .details .character > div:first-child {
        border: none;
        padding-left: 0; }
    .listing-style3.cruise .details .character > div:last-child {
        padding-right: 0; }
    .listing-style3.cruise .details .character [class^="soap-icon"] {
        font-size: 18px;
        float: left; }
    .listing-style3.cruise .details .character .cruise-logo {
        padding: 0;
        text-align: left; }
    .listing-style3.cruise .details .character .cruise-logo img {
        max-width: 90%;
        width: auto;
        height: auto; }
    .listing-style3.cruise .details .character .date > div, .listing-style3.cruise .details .character .departure > div {
        padding-left: 20px;
        line-height: 1.1667em; }
    .listing-style3.cruise .details .review {
        line-height: 1.6667em; }
    .listing-style3.cruise .details .review .five-stars-container {
        float: left;
        margin-right: 10px; }
    .listing-style3.cruise .details .review span {
        display: block;
        float: left; }

    .tab-container .tab-pane > .listing-style3 .details {
        padding-right: 0; }

    /* 2.16. Pricing Tables ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
    .pricing-table {
        padding: 20px;
        background: #fff;
        /* colored */ }
    .pricing-table .header {
        border-bottom: 1px solid #f5f5f5; }
    .pricing-table .header > i {
        float: left;
        font-size: 16px;
        margin: 3px 8px 0 0; }
    .pricing-table .header .box-title {
        float: left;
        line-height: 1.3333em;
        margin-bottom: 20px; }
    .pricing-table .header .box-title small {
        text-transform: uppercase;
        display: block;
        font-size: 0.6em; }
    .pricing-table .description {
        margin: 15px 0; }
    .pricing-table .features {
        margin-bottom: 15px;
        text-transform: uppercase; }
    .pricing-table .features li {
        margin-top: 1px;
        background: #f5f5f5;
        font-size: 0.9167em;
        padding-left: 20px;
        line-height: 40px; }
    .pricing-table.green, .pricing-table.blue, .pricing-table.yellow, .pricing-table.red {
        color: #fff; }
    .pricing-table.green .box-title, .pricing-table.green .box-title small, .pricing-table.green .price, .pricing-table.green .price small, .pricing-table.blue .box-title, .pricing-table.blue .box-title small, .pricing-table.blue .price, .pricing-table.blue .price small, .pricing-table.yellow .box-title, .pricing-table.yellow .box-title small, .pricing-table.yellow .price, .pricing-table.yellow .price small, .pricing-table.red .box-title, .pricing-table.red .box-title small, .pricing-table.red .price, .pricing-table.red .price small {
        color: #fff; }
    .pricing-table.green .box-title small, .pricing-table.green .price small, .pricing-table.green .description, .pricing-table.blue .box-title small, .pricing-table.blue .price small, .pricing-table.blue .description, .pricing-table.yellow .box-title small, .pricing-table.yellow .price small, .pricing-table.yellow .description, .pricing-table.red .box-title small, .pricing-table.red .price small, .pricing-table.red .description {
        filter: alpha(opacity=60);
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=60)";
        -moz-opacity: 0.6;
        -khtml-opacity: 0.6;
        opacity: 0.6; }
    .pricing-table.green {
        background: #98ce44; }
    .pricing-table.green .header {
        border-bottom-color: #91c63d; }
    .pricing-table.green .features li {
        background: #91c63d; }
    .pricing-table.green .features li:before {
        background: #98ce44; }
    .pricing-table.yellow {
        background: #fdb714; }
    .pricing-table.yellow .header {
        border-bottom-color: #f5b010; }
    .pricing-table.yellow .features li {
        background: #f5b010; }
    .pricing-table.yellow .features li:before {
        background: #fdb714; }
    .pricing-table.blue {
        background: #01b7f2; }
    .pricing-table.blue .header {
        border-bottom-color: #04afe7; }
    .pricing-table.blue .features li {
        background: #04afe7; }
    .pricing-table.blue .features li:before {
        background: #01b7f2; }
    .pricing-table.red {
        background: #e01a33; }
    .pricing-table.red .header {
        border-bottom-color: #d51a32; }
    .pricing-table.red .features li {
        background: #d51a32; }
    .pricing-table.red .features li:before {
        background: #e01a33; }

    .hotel-list {
            margin-top: 3px;
        }
        .listing-style3 .box::after, .listing-style3.box::after {
            clear: both;
            content: "";
            display: table;
        }
        .listing-style3.hotel .details > * {
            display: table-row;
        }

        .listing-style3 .box > *, .listing-style3.box > * {
            padding: 0;
        }
        .listing-style3.hotel .details {
            display: table;
            padding: 15px 0 15px 20px;
        }
        .listing-style3.hotel .box-title {
            float: left;
            margin: 0;
        }
        .box-title, .post-title, .post-meta, .author .name, .mile, .title, .s-title, .price, button, a.button, dl, label, span.info, .price-wrapper, ul.tabs a, .icon-box.style1, .icon-box.style2, .icon-box.style3 .description, .icon-box.style5, .search-results-title, .breadcrumbs {
            letter-spacing: 0.04em;
        }
        .listing-style3.hotel .amenities {
            float: right;
        }
    </style>
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
        <div class="b bs-section">
        <div class="hotel-list listing-style3 hotel">
        <article class="box">
            <div style="width: 100px; float: left; background: #cc9999; min-height: 130px; margin-left:3px; margin-right:3px">
               <p>1</p>
            </div>
            <div class="col-sm-5 col-md-2">
                <a href="" title="">
                    <img width="140" height="130" src="img/common/country_hanoi.jpg" alt=""></a>
            </div>
            <div class="details col-sm-7 col-md-8">
                <div>
                    <div>
                        <h4 class="box-title">Hotel Hilton and Resorts<small><i class="soap-icon-departure yellow-color"></i> Bastille, Paris france</small></h4>
                        <div class="amenities">
                            <i class="soap-icon-wifi circle"></i>
                            <i class="soap-icon-fitnessfacility circle"></i>
                            <i class="soap-icon-fork circle"></i>
                            <i class="soap-icon-television circle"></i>
                        </div>
                    </div>
                    <div>
                        <div class="five-stars-container">
                            <span style="width: 80%;" class="five-stars"></span>
                        </div>
                        <span class="review">270 reviews</span>
                    </div>
                </div>
                <div>
                    <p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.</p>
                    <div>
                        <span class="price"><small>AVG/NIGHT</small>$620</span>
                        <a href="hotel-detailed.html" title="" class="button btn-small full-width text-center">SELECT</a>
                    </div>
                </div>
            </div>
        </article>
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


<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll visible-xs visble-sm">
    <a class="btn btn-grey" href="#page-top">
        <i class="fa fa-chevron-up setoff"></i>
    </a>
</div>

<script type="text/javascript" src="js/readmore.js"></script>
</body>
</html>