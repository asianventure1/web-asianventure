<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="Font-Awesome-master/css/font-awesome.css">
    <link href="css/freelancer.css" rel="stylesheet">

    <style>
        .intrepid-product-intro {
            margin: 0;
            padding: 0;
        }

        .intrepid-product-intro h3.price {
            display: inline-block;
            font-weight: 600;
            margin-right: 5px;
            margin: 0;
            padding: 0;
            color: #006699;
        }

        .peak-price-USD {
            display: inline;
        }

        .intrepid-product-intro h3.price .peak-price .price-currency-code {
            font-size: 15px;
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

        /*gallery*/
        .gallery::after, .gallery::before {
            content: " ";
            display: table;
        }

        .gallery::after {
            clear: both;
        }

        .gallery::after, .gallery::before {
            content: " ";
            display: table;
        }


    </style>

    <!--tourdetails page: begin listtourprice table-->
    <link type="text/css" rel="stylesheet" href="css/tourdetails_pricelist.css" media="all">

    <!--tourdetails page: end listtourprice table-->
</head>
<body>
<p style="height: 100px"></p>

<div class="container">
<div class="col-md-8 content_800">
<div class="row bs-section">

<div class="col-md-12 nomarginpadding">
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
<!--end peak-departure-trip-availability-->

</div>
<div class="row">
<div class="col-md-6 bs-section nopaddingleft">
    <div style="background: #f6f9fa; min-height: 120px; color: #006699;">
        <div class="col-md-6 nopaddingleft">
            <img src="img/common/tourdetails_hotel.png" width="100%" style="min-height: 120px">

            <p class="tourde-top-dest-title-country-background-bottom">Sofitel Legend Metropole Ha noi Hotel -
                Vietnam</p>
        </div>
        <div class="col-md-6 nopaddingleft">
            <h5 class="margintop5 marginbottom3">HANOI, VIETNAM</h5>
            <hr style="width: 95%; height: 5px;" class="nomarginpadding">
            <p class="nomarginpadding">GUESTS' RATING - 4.2/5</p>

            <p class="margintop5">based on 450 reviews</p>

            <div class="intrepid-product-intro text-right paddingright10">
                <h3 class="price">
                    <div class="peak-price peak-price-USD" style="margin-top: 10px; font-size: 45px">
                        <span class="price-currency-code">STAR</span>5
                        <img src="img/common/tourdetails_hotel_icon.png">
                    </div>
                </h3>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6 bs-section nopaddingright">
    <div style="background: #f6f9fa; min-height: 120px; color: #006699;">
        <div class="col-md-6 nopaddingleft">
            <img src="img/common/tourdetails_hotel.png" width="100%" style="min-height: 120px">

            <p class="tourde-top-dest-title-country-background-bottom">Sofitel Legend Metropole Ha noi Hotel -
                Vietnam</p>
        </div>
        <div class="col-md-6 nopaddingleft">
            <h5 class="margintop5 marginbottom3">HANOI, VIETNAM</h5>
            <hr style="width: 95%; height: 5px;" class="nomarginpadding">
            <p class="nomarginpadding">GUESTS' RATING - 4.2/5</p>

            <p class="margintop5">based on 450 reviews</p>

            <div class="intrepid-product-intro text-right paddingright10">
                <h3 class="price">
                    <div class="peak-price peak-price-USD" style="margin-top: 10px; font-size: 45px">
                        <span class="price-currency-code">STAR</span>5
                        <img src="img/common/tourdetails_hotel_icon.png">
                    </div>
                </h3>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6 bs-section nopaddingleft">
    <div style="background: #f6f9fa; min-height: 120px; color: #006699;">
        <div class="col-md-6 nopaddingleft">
            <img src="img/common/tourdetails_hotel.png" width="100%" style="min-height: 120px">

            <p class="tourde-top-dest-title-country-background-bottom">Sofitel Legend Metropole Ha noi Hotel -
                Vietnam</p>
        </div>
        <div class="col-md-6 nopaddingleft">
            <h5 class="margintop5 marginbottom3">HANOI, VIETNAM</h5>
            <hr style="width: 95%; height: 5px;" class="nomarginpadding">
            <p class="nomarginpadding">GUESTS' RATING - 4.2/5</p>

            <p class="margintop5">based on 450 reviews</p>

            <div class="intrepid-product-intro text-right paddingright10">
                <h3 class="price">
                    <div class="peak-price peak-price-USD" style="margin-top: 10px; font-size: 45px">
                        <span class="price-currency-code">STAR</span>5
                        <img src="img/common/tourdetails_hotel_icon.png">
                    </div>
                </h3>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6 bs-section nopaddingright">
    <div style="background: #f6f9fa; min-height: 120px; color: #006699;">
        <div class="col-md-6 nopaddingleft">
            <img src="img/common/tourdetails_hotel.png" width="100%" style="min-height: 120px">

            <p class="tourde-top-dest-title-country-background-bottom">Sofitel Legend Metropole Ha noi Hotel -
                Vietnam</p>
        </div>
        <div class="col-md-6 nopaddingleft">
            <h5 class="margintop5 marginbottom3">HANOI, VIETNAM</h5>
            <hr style="width: 95%; height: 5px;" class="nomarginpadding">
            <p class="nomarginpadding">GUESTS' RATING - 4.2/5</p>

            <p class="margintop5">based on 450 reviews</p>

            <div class="intrepid-product-intro text-right paddingright10">
                <h3 class="price">
                    <div class="peak-price peak-price-USD" style="margin-top: 10px; font-size: 45px">
                        <span class="price-currency-code">STAR</span>5
                        <img src="img/common/tourdetails_hotel_icon.png">
                    </div>
                </h3>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6 bs-section nopaddingleft">
    <div style="background: #f6f9fa; min-height: 120px; color: #006699;">
        <div class="col-md-6 nopaddingleft">
            <img src="img/common/tourdetails_hotel.png" width="100%" style="min-height: 120px">

            <p class="tourde-top-dest-title-country-background-bottom">Sofitel Legend Metropole Ha noi Hotel -
                Vietnam</p>
        </div>
        <div class="col-md-6 nopaddingleft">
            <h5 class="margintop5 marginbottom3">HANOI, VIETNAM</h5>
            <hr style="width: 95%; height: 5px;" class="nomarginpadding">
            <p class="nomarginpadding">GUESTS' RATING - 4.2/5</p>

            <p class="margintop5">based on 450 reviews</p>

            <div class="intrepid-product-intro text-right paddingright10">
                <h3 class="price">
                    <div class="peak-price peak-price-USD" style="margin-top: 10px; font-size: 45px">
                        <span class="price-currency-code">STAR</span>5
                        <img src="img/common/tourdetails_hotel_icon.png">
                    </div>
                </h3>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6 bs-section nopaddingright">
    <div style="background: #f6f9fa; min-height: 120px; color: #006699;">
        <div class="col-md-6 nopaddingleft">
            <img src="img/common/tourdetails_hotel.png" width="100%" style="min-height: 120px">

            <p class="tourde-top-dest-title-country-background-bottom">Sofitel Legend Metropole Ha noi Hotel -
                Vietnam</p>
        </div>
        <div class="col-md-6 nopaddingleft">
            <h5 class="margintop5 marginbottom3">HANOI, VIETNAM</h5>
            <hr style="width: 95%; height: 5px;" class="nomarginpadding">
            <p class="nomarginpadding">GUESTS' RATING - 4.2/5</p>

            <p class="margintop5">based on 450 reviews</p>

            <div class="intrepid-product-intro text-right paddingright10">
                <h3 class="price">
                    <div class="peak-price peak-price-USD" style="margin-top: 10px; font-size: 45px">
                        <span class="price-currency-code">STAR</span>5
                        <img src="img/common/tourdetails_hotel_icon.png">
                    </div>
                </h3>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6 bs-section nopaddingleft">
    <div style="background: #f6f9fa; min-height: 120px; color: #006699;">
        <div class="col-md-6 nopaddingleft">
            <img src="img/common/tourdetails_hotel.png" width="100%" style="min-height: 120px">

            <p class="tourde-top-dest-title-country-background-bottom">Sofitel Legend Metropole Ha noi Hotel -
                Vietnam</p>
        </div>
        <div class="col-md-6 nopaddingleft">
            <h5 class="margintop5 marginbottom3">HANOI, VIETNAM</h5>
            <hr style="width: 95%; height: 5px;" class="nomarginpadding">
            <p class="nomarginpadding">GUESTS' RATING - 4.2/5</p>

            <p class="margintop5">based on 450 reviews</p>

            <div class="intrepid-product-intro text-right paddingright10">
                <h3 class="price">
                    <div class="peak-price peak-price-USD" style="margin-top: 10px; font-size: 45px">
                        <span class="price-currency-code">STAR</span>5
                        <img src="img/common/tourdetails_hotel_icon.png">
                    </div>
                </h3>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6 bs-section nopaddingright">
    <div style="background: #f6f9fa; min-height: 120px; color: #006699;">
        <div class="col-md-6 nopaddingleft">
            <img src="img/common/tourdetails_hotel.png" width="100%" style="min-height: 120px">

            <p class="tourde-top-dest-title-country-background-bottom">Sofitel Legend Metropole Ha noi Hotel -
                Vietnam</p>
        </div>
        <div class="col-md-6 nopaddingleft">
            <h5 class="margintop5 marginbottom3">HANOI, VIETNAM</h5>
            <hr style="width: 95%; height: 5px;" class="nomarginpadding">
            <p class="nomarginpadding">GUESTS' RATING - 4.2/5</p>

            <p class="margintop5">based on 450 reviews</p>

            <div class="intrepid-product-intro text-right paddingright10">
                <h3 class="price">
                    <div class="peak-price peak-price-USD" style="margin-top: 10px; font-size: 45px">
                        <span class="price-currency-code">STAR</span>5
                        <img src="img/common/tourdetails_hotel_icon.png">
                    </div>
                </h3>
            </div>
        </div>
    </div>
</div>
</div>

<!--review-->
<div class="stars">
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
<div class="row bs-section b" style="background: #f7ecec; min-height:50px">
    <div class="col-md-2" style="padding-top: 3px; background: #fbf5f5">
        <img src="img/common/tourdetails_clicktorate.png">

        <p class="margintop3 marginbottom3 font-bold font12">CLICK TO RATE</p></div>
    <div class="col-md-7 nopaddingleft">
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
    <div class="col-md-3">
        <div class="btn-group" style="padding-top: 10px">
            <p class="text_left font-bold" style="padding-top: 10px; padding-right: 5px;">SORT BY</p>
            <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">Date / Star <span
                    class="caret"></span></button>
            <ul role="menu" class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="row bs-section margintop30 b" style="background:#f8f7f5">
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

            <div class="b" style="min-height: 28px; padding:3px 0">
                <div style="width: 80%; float: left; padding: 2px 10px">
                    <p>Was this review helpful to you?</p></div>
                <div style="width: 20%; float: left">
                    <button class="btn btn-grey btn-xs">Yes</button>
                    <button class="btn btn-grey btn-xs">No</button>
                </div>
            </div>
            <div class="text-right margintop5 clear">
                <a href=""> Comment</a> | <a href="">Add your comment</a> | <a href="">Report Abuse</a> | <a href="">Subcrible</a>
                | <a href="">Share</a>
            </div>
        </div>
    </div>
</div>

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
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" style="display: inline-block;">
                <a class="thumbnail" href="#"><img alt="image" src="img/gallery/7.jpg"></a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" style="display: inline-block;">
                <a class="thumbnail" href="#"><img alt="image" src="img/gallery/8.jpg"></a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" style="display: inline-block;">
                <a class="thumbnail" href="#"><img alt="image" src="img/gallery/9.jpg"></a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" style="display: inline-block;">
                <a class="thumbnail" href="#"><img alt="image" src="img/gallery/10.jpg"></a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" style="display: inline-block;">
                <a class="thumbnail" href="#"><img alt="image" src="img/gallery/11.jpg"></a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" style="display: inline-block;">
                <a class="thumbnail" href="#"><img alt="image" src="img/gallery/12.jpg"></a>
            </div>
        </div>
    </div>
</div>
<!--gallery-->
</div>

</body>
</html>