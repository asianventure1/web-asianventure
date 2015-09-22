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

    <style>
        /* country head*/
        .headerbox_tourdetails {
            min-height: 120px;
            margin-top: 10px;
            /* For IE 5.5 - 7*/
            filter:progid:DXImageTransform.Microsoft.gradient(enabled='true', GradientType=0, startColorstr=#FFFFFF, endColorstr=#e0e3e7);
            /* For IE 8*/
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(enabled='true', GradientType=0, startColorstr=#FFFFFF, endColorstr=#e0e3e7)";
            /* Safari 4-5, Chrome 1-9 */
            background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#FFFFFF), to(#e0e3e7));
            /* Safari 5.1, Chrome 10+ */
            background: -webkit-linear-gradient(top, #FFFFFF, #e0e3e7);
            /* Firefox 3.6+ */
            background: -moz-linear-gradient(top, #FFFFFF, #e0e3e7);
            /* IE 10 */
            background: -ms-linear-gradient(top, #FFFFFF, #e0e3e7);
            /* Opera 11.10+ */
            background: -o-linear-gradient(top, #FFFFFF, #e0e3e7);

        }

    </style>
</head>
<body>


<div class="headerbox_tourdetails">
    <div class="col-md-3 paddingtop30">
        <h4>Search site</h4>
        <div class="input-group">
            <input class="form-control">
            <span class="input-group-btn">
            <button class="btn btn-primary" type="button">Go!</button>
            </span>
        </div>
    </div>
    <div class="col-md-9">
        <h4>FIND TOURS</h4>
        <div class="form-group">
            <div class="col-md-5">
                <label class="col-lg-3 col-md-3 col-sm-12 control-label margintop10">Destination</label>
                <div class="col-lg-9 col-md-9 marginbottom10">
                    <select class="form-control">
                        <option value="AK">Alaska </option>
                        <option value="HI">Hawaii </option>
                    </select>
                </div>
                <label class="col-lg-3 col-md-3 col-sm-12 control-label margintop10">Keywords</label>
                <div class="col-lg-9 col-md-9">
                    <input class="form-control">
                </div>
            </div>

            <div class="col-md-5">
                <label class="col-lg-3 col-md-3 col-sm-12 control-label margintop10">Length</label>
                <div class="col-lg-19 col-md-9 marginbottom10">
                    <select class="form-control">
                        <option value="AK">1 Day</option>
                        <option value="HI">Hawaii </option>
                    </select>
                </div>
                <label class="col-lg-3 col-md-3 col-sm-12 control-label margintop10">Time</label>
                <div class="col-lg-19 col-md-9 marginbottom10">
                    <select class="form-control">
                        <option value="AK">January</option>
                        <option value="HI">Hawaii </option>
                    </select>
                </div>
            </div>

            <div class="col-md-2">
                <button class="btn btn-default"> <span class="font-bold" style="font-size: 28px">GO</span> <i class="fa fa-angle-right font-bold" style="font-size: 32px"></i> <br>
                32 Results
                </button>
            </div>
        </div>
    </div>
</div>

</body>
</html>