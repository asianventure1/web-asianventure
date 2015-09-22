<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>DOMTab - Navigation tabs with CSS and DOMscripting</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7" />
    <title>Skandal Holiday</title>
    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">
    <link href="css/slider.css" rel="stylesheet">

    <!--chay slide 5 tours trang index-->
    <script src="js/sliderjs/jquery-1.js"></script>
    <script src="js/sliderjs/jquery_002.js"></script>
    <script src="js/sliderjs/customize.js"></script>

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
    <script type="text/javascript">
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
        hr.hrline {
            background: url(img/common/hr_line.jpg) no-repeat center;
            border: 0;
        }

        /*css topplace in homepage*/
        .topservice_line {margin: 15px 0 0 0;}
        .topservice_line.first { margin: 10px 0 0;}
        .topservice_line:hover { background: #f7f7f7; }

        .topdiscount_index > p {
            font-size: 14px;
            line-height: 14px;
            margin: 5px 0 0 0;
            padding: 0 }



        .topdiscount_index > ul.block1 {
            width: 80%;
            margin: 0;
            padding: 3px 5px 0 3px;
            float: left;
            min-height: 70px
        }

        ul.block1 li {
            lline-height: 15px;
            text-align: right;
            color: #000000;
            font-family: arial, helvetica, sans-serif;
            font-size: 13px;
        }

        .topdiscount_index .pricebox1 {
            float: left;
            width:20%;
            margin: 10px 0;
            text-align: center;
            font-family: 'OpenSansLight', sans-serif;
            padding: 0 2px 0 3px;
            font-size: 14px;
            font-weight: bold;
            min-height:55px;
            color: #990000;
        }

        .topdiscount_index .pricebox1 .date {
            color: #990000;
            text-align: center;
            margin: 10px 0 2px 0;
            padding: ;
            font-size: 14px;
        }
        .topdiscount_index .pricebox1 .date1 {
            margin: 0;
            padding: 2px 0;
            font-size: 14px
        }

        #topservice .deals_img {
            width: 120px;
            height: 75px;
        }

        @media (max-width: 568px) {

            #topservice .deals_img {
                display: none;
            }
        }


        <!--
        div#scroll {
            width: 100%;
            height: 285px;
            overflow: hidden;
            padding: 4px;
            margin-bottom: 20px;
            text-align:justify
        }
        -->

    </style>

</head>

<body>
<p></p>

<!-- Portfolio Grid Section -->
<div class="container" >
<div class="row">




<div class="col-md-4" style="margin-right: 20px">
   <div class="row">
       <img src="img/common/feature_holiday.jpg" width="100%">
       <div style="background: #FFFFFF;border: 1px solid #cccccc">
           <h4 style="margin: 0; padding: 10px 0 0; color: #018f99; text-align: center">FEATURED HOLIDAY PACKAGES</h4>
           <hr class="hrline" style="height:9px; margin:10px 0 0;">
           <div id="scroll">
               <div class="row topservice_line first">
                   <div class="col-md-4">
                       <img class="deals_img" src="img/common/feature_holiday_test.jpg">
                   </div>
                   <div class="col-md-8 nopadding topdiscount_index">
                       <ul class="block1">
                           <li>
                               <span style="font-weight: bold">Win 3 free nights in Scotland</span>, Win a free three nights accommodation for two at Edinburgh, Scotland. Winner get to choose suitable 3 consecutive,..<a href="" class="read-more"> Read more</a>
                           </li>
                       </ul>
                       <ul class="topdiscount_index pricebox1" style="border-left: 1px solid #f7f7f7">
                           <li style="line-height: 15px; height: 30px">
                               <p class="date">16</p>
                               <hr style="margin: 0; padding:1px 0;">
                               <p class="date1">Jun.15</p>
                           </li>
                       </ul>
                   </div>
               </div>
               <div class="row topservice_line">
                   <div class="col-md-4">
                       <img class="deals_img" src="img/common/feature_holiday_test.jpg">
                   </div>
                   <div class="col-md-8 nopadding topdiscount_index">
                       <ul class="block1">
                           <li>
                               <span style="font-weight: bold">Win 3 free nights in Scotland</span>, Win a free three nights accommodation for two at Edinburgh, Scotland. Winner get to choose suitable 3 consecutive,..<a href="" class="read-more"> Read more</a>
                           </li>
                       </ul>
                       <ul class="topdiscount_index pricebox1" style="border-left: 1px solid #f7f7f7">
                           <li style="line-height: 15px; height: 30px">
                               <p class="date">16</p>
                               <hr style="margin: 0; padding:1px 0;">
                               <p class="date1">Jun.15</p>
                           </li>
                       </ul>
                   </div>
               </div>
               <div class="row topservice_line">
                   <div class="col-md-4">
                       <img class="deals_img" src="img/common/feature_holiday_test.jpg">
                   </div>
                   <div class="col-md-8 nopadding topdiscount_index">
                       <ul class="block1">
                           <li>
                               <span style="font-weight: bold">Win 3 free nights in Scotland</span>, Win a free three nights accommodation for two at Edinburgh, Scotland. Winner get to choose suitable 3 consecutive,..<a href="" class="read-more"> Read more</a>
                           </li>
                       </ul>
                       <ul class="topdiscount_index pricebox1" style="border-left: 1px solid #f7f7f7">
                           <li style="line-height: 15px; height: 30px">
                               <p class="date">16</p>
                               <hr style="margin: 0; padding:1px 0;">
                               <p class="date1">Jun.15</p>
                           </li>
                       </ul>
                   </div>
               </div>
               <div class="row topservice_line">
                   <div class="col-md-4">
                       <img class="deals_img" src="img/common/feature_holiday_test.jpg">
                   </div>
                   <div class="col-md-8 nopadding topdiscount_index">
                       <ul class="block1">
                           <li>
                               <span style="font-weight: bold">Win 3 free nights in Scotland</span>, Win a free three nights accommodation for two at Edinburgh, Scotland. Winner get to choose suitable 3 consecutive,..<a href="" class="read-more"> Read more</a>
                           </li>
                       </ul>
                       <ul class="topdiscount_index pricebox1" style="border-left: 1px solid #f7f7f7">
                           <li style="line-height: 15px; height: 30px">
                               <p class="date">16</p>
                               <hr style="margin: 0; padding:1px 0;">
                               <p class="date1">Jun.15</p>
                           </li>
                       </ul>
                   </div>
               </div>

               <a href="">
                   <div class="row topservice_line">
                       <div class="col-md-4">
                           <img class="deals_img" src="img/common/feature_holiday_test.jpg">
                       </div>
                       <div class="col-md-8 nopadding topdiscount_index">
                           <ul class="block1">
                               <li>
                                   <span style="font-weight: bold">Win 3 free nights in Scotland</span>, Win a free three nights accommodation for two at Edinburgh, Scotland. Winner get to choose suitable 3 consecutive,..<a href="" class="read-more"> Read more</a>
                               </li>
                           </ul>
                           <ul class="topdiscount_index pricebox1" style="border-left: 1px solid #f7f7f7">
                               <li style="line-height: 15px; height: 30px">
                                   <p class="date">16</p>
                                   <hr style="margin: 0; padding:1px 0;">
                                   <p class="date1">Jun.15</p>
                               </li>
                           </ul>
                       </div>
                   </div>
               </a>
               <a href="">
                   <div class="row topservice_line">
                       <div class="col-md-4">
                           <img class="deals_img" src="img/common/feature_holiday_test.jpg">
                       </div>
                       <div class="col-md-8 nopadding topdiscount_index">
                           <ul class="block1">
                               <li>
                                   <span style="font-weight: bold">Win 3 free nights in Scotland</span>, Win a free three nights accommodation for two at Edinburgh, Scotland. Winner get to choose suitable 3 consecutive,..<a href="" class="read-more"> Read more</a>
                               </li>
                           </ul>
                           <ul class="topdiscount_index pricebox1" style="border-left: 1px solid #f7f7f7">
                               <li style="line-height: 15px; height: 30px">
                                   <p class="date">16</p>
                                   <hr style="margin: 0; padding:1px 0;">
                                   <p class="date1">Jun.15</p>
                               </li>
                           </ul>
                       </div>
                   </div>
               </a>
           </div>
           <div style="padding: 8px 10px; text-align: right; border-top: 1px solid #f2f2f2; width: 92%; margin: 0 20px">
               <a href="#" id="scroll-down"><img src="img/common/icon_down1.png" width="17" height="15" border="0"></a> <span style="font-size: 11px; font-weight: bold">MORE</span> <a href="#" id="scroll-up"><img src="img/common/icon_top1.png" width="17" height="15" border="0"></a>
           </div>
       </div>
   </div>

</div>

<div class="col-md-8">

</div>
Cum compater ortum, omnes hilotaees consumere regius, festus adgiumes.Sunt onuses imitari fatalis, noster eleateses.Azureus, regius brabeutas grauiter contactus de alter, neuter advena.
    A falsis, nomen regius sectam.A falsis, apolloniates altus sectam.jh
    Voxs messis in berolinum!Exemplar, zeta, et verpa.
    A falsis, terror bassus fermium.Devatio de fatalis cedrium, amor hippotoxota!Vae, festus capio!
    Nixuss messis!Gratis verpas ducunt ad secula.Pol, usus!
    Albus, regius scutums saepe reperire de varius, teres sectam.Est altus species, cesaris.Usus experimentums, tanquam mirabilis nix.
    Galluss mori in varius aetheres!Alter, raptus extums sapienter perdere de primus, albus mortem.Cur epos messis?
    Bursa messiss, tanquam altus consilium.Sunt eposes transferre altus, flavum poetaes.


</div>



</div>






</body>

</html>
