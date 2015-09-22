/*
 Bones Scripts File
 Author: Eddie Machado

 This file should contain any js scripts you want to add to the site.
 Instead of calling it in the header or throwing it inside wp_head()
 this file will be called automatically in the footer so as not to
 slow the page load.

 */

// as the page loads, call these scripts
jQuery(document).ready(function($) {

    function getInnerContentSize(o, padding) {
        padding = padding || 0;
        var contentSize = 0;
        o.removeClass('truncate-text');
        o.css({height: 'auto'});
        contentSize = o.outerHeight() + padding;
        o.addClass('truncate-text');
        o.css({height: o.attr('data-minheight')});
        return contentSize;
    }

    // Setup truncatable text
    var expandableText = $('.enable-text-truncate');
    var extraInfo = expandableText.siblings().first();
    if (expandableText.length) {
        var eto = expandableText.first(), contentSize = getInnerContentSize(eto);
        if (contentSize <= eto.height()) {
            $('.display-all-text').hide();
            $('.display-all-text').first().parent().siblings().first().addClass('first-child');
            eto.removeClass('truncate-text');
            eto.height(eto.height());
        }
    }

    $(".display-all-text").click(function(e) {
        var textContainer = $(this).closest('.post-content').find('.enable-text-truncate').first();

        if(textContainer.hasClass('truncate-text')) {
            $(this).html('Read Less');
            extraInfo.addClass('revealed');

            // What we should do is calculate how much space the content is taking up. So let's do that...
            var contentSize = getInnerContentSize(textContainer, 0);/*chinh khoảng cách read less với phần trên*/
            textContainer.animate({
                height: contentSize
            }, 350, function() {
                textContainer.removeClass('truncate-text');
            });
        }
        else {
            $(this).html('Read More');
            extraInfo.removeClass('revealed');
            textContainer.addClass('truncate-text');

            textContainer.animate({
                height: textContainer.attr('data-minheight')
            }, 350);
        }

        e.preventDefault();
    });


});