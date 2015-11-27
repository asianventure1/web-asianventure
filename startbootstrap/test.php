<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>DOMTab - Navigation tabs with CSS and DOMscripting</title>
    <style type="text/css">
        @import "css/domtab.css";
    </style>
    <!--[if gt IE 6]>
    <style type="text/css">
        html>body ul.domtabs a:link,
        html>body ul.domtabs a:visited,
        html>body ul.domtabs a:active,
        html>body ul.domtabs a:hover{
            height:2em;
        }
    </style>
    <![endif]-->
    <script type="text/javascript" src="js/domtab.js"></script>
    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<head>
    <link href="css/demo1.css?v=1.0.2" type="text/css" rel="stylesheet" />
    <script src="js/res/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="js/jquery.exposure.js?v=1.0.2" type="text/javascript"></script>
    <script type="text/javascript">
        $(function(){
            var gallery = $('#images');
            gallery.exposure({controlsTarget : '#controls',
                controls : { prevNext : true, pageNumbers : true, firstLast : false },
                visiblePages : 2,
                maxWidth: 690,
                maxHeight:360,
                slideshowControlsTarget : '#slideshow',
                onThumb : function(thumb) {
                    var li = thumb.parents('li');
                    var fadeTo = li.hasClass($.exposure.activeThumbClass) ? 1 : 0.3;

                    thumb.css({display : 'none', opacity : fadeTo}).stop().fadeIn(200);

                    thumb.hover(function() {
                        thumb.fadeTo('fast',1);
                    }, function() {
                        li.not('.' + $.exposure.activeThumbClass).children('img').fadeTo('fast', 0.3);
                    });
                },
                onImage : function(image, imageData, thumb) {
                    // Fade out the previous image.
                    image.siblings('.' + $.exposure.lastImageClass).stop().fadeOut(500, function() {
                        $(this).remove();
                    });

                    // Fade in the current image.
                    image.hide().stop().fadeIn(1000);

                    // Fade in selected thumbnail (and fade out others).
                    if (gallery.showThumbs && thumb && thumb.length) {
                        thumb.parents('li').siblings().children('img.' + $.exposure.selectedImageClass).stop().fadeTo(200, 0.3, function() { $(this).removeClass($.exposure.selectedImageClass); });
                        thumb.fadeTo('fast', 1).addClass($.exposure.selectedImageClass);
                    }
                },
                onPageChanged : function() {
                    // Fade in thumbnails on current page.
                    gallery.find('li.' + $.exposure.currentThumbClass).hide().stop().fadeIn('fast');
                }
            });
        });
    </script>
</head>
<body>


<div id="main">
    <div class="panel">
        <ul id="images">
            <li><a href="img/slides/IMG_2198.jpg"><img src="img/thumbs/IMG_2198.jpg" title="Home made" /></a></li>
            <li><a href="img/slides/IMG_2339.jpg"><img src="img/thumbs/IMG_2339.jpg" title="Chocolate"/></a></li>
            <li><a href="img/slides/IMG_2446.jpg"><img src="img/thumbs/IMG_2446.jpg" title="Love birds"/></a></li>
            <li><a href="img/slides/IMG_2623.jpg"><img src="img/thumbs/IMG_2623.jpg" title="Blue"/></a></li>
            <li><a href="img/slides/IMG_5077.jpg"><img src="img/thumbs/IMG_5077.jpg" title="White"/></a></li>
            <li><a href="img/slides/IMG_5177.jpg"><img src="img/thumbs/IMG_5177.jpg" title="Yellow on blue"/></a></li>
            <li><a href="img/slides/IMG_5278.jpg"><img src="img/thumbs/IMG_5278.jpg" title="Heat"/></a></li>
            <li><a href="img/slides/IMG_5324.jpg"><img src="img/thumbs/IMG_5324.jpg" title="Cold"/></a></li>
            <li><a href="img/slides/IMG_5650.jpg"><img src="img/thumbs/IMG_5650.jpg" title="Homes"/></a></li>
            <li><a href="img/slides/IMG_9006.jpg"><img src="img/thumbs/IMG_9006.jpg" title="Ace"/></a></li>
        </ul>
        <div id="controls"></div>
        <div class="clear"></div>
    </div>
    <div id="exposure"></div>
</div>

</body>
</html>
