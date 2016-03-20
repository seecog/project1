/*jslint browser: true, devel: true, white: true, nomen: true, unparam: true*//*global jQuery: false, window: false*//**
 * JQuery Tooltip Plugin
 *
 * Licensed under the MIT (http://www.opensource.org/licenses/mit-license.php)
 *
 * Written by Shahrier Akram <shahrier.akram@gmail.com>
 *
 * Tooltip is a jQuery plugin implementing unobtrusive javascript interaction that appears
 * near DOM elements, wherever they may be, that require extra information.
 *
 * Visit http://gdakram.github.com/JQuery-Tooltip-Plugin for demo.
**/(function(e){"use strict";e.fn.tooltip=function(t){function s(){var e=(new Date).getTime();i+=1;return i+"_"+e}function o(t,n){var i=e(t).attr("title")?"<h1>"+e(t).attr("title")+"</h1>":"",o=e(n).attr("id"),u;if(!o){o=s();e(n).attr("id",o)}else if(r[o])return r[o];u=e(["<div class='jquery-gdakram-tooltip'>","<div class='up_arrow arrow'></div>","<div class='left_arrow arrow'></div>","<div class='right_arrow arrow'></div>","<div class='content'>"+i+e(t).html()+"</div>","<div style='clear:both'></div>","<div class='down_arrow arrow'></div>","</div>"].join(""));u.appendTo("body");e(u).bind("mouseenter",function(){e(this).attr("data-mouseenter",1)}).bind("mouseleave",function(){e(this).attr("data-mouseenter",0)});r[o]=u;return u}function u(t){var r=e(t).find(n.dialog_content_selector),i=o(r,t),s=e(t).hasClass("tooltiptopright"),u=e(t).hasClass("tooltipbottomright"),a=e(t).hasClass("tooltipleft"),f=e(t).hasClass("tooltiptop"),l=e(t).hasClass("tooltipbottom"),c=s||u||f||l,h,p=e(t).offset();if(a)h={start:{left:p.left-n.animation_distance-e(i).outerWidth(),top:p.top-e(t).outerHeight()/2+n.arrow_right_offset},end:{left:p.left-e(i).outerWidth()+e(i).find(".right_arrow").outerWidth(),top:p.top-e(t).outerHeight()/2+n.arrow_right_offset},arrow_class:"div.right_arrow"};else if(s||!c&&p.top<e(i).outerHeight()&&p.top>=n.arrow_top_offset)h={start:{left:p.left+e(t).outerWidth()+n.animation_distance,top:p.top+e(t).outerHeight()/2-n.arrow_top_offset},end:{left:p.left+e(t).outerWidth(),top:p.top+e(t).outerHeight()/2-n.arrow_top_offset},arrow_class:"div.left_arrow"};else if(u||!c&&p.left<n.arrow_left_offset+e(t).outerWidth()&&p.top>e(i).outerHeight()){h={start:{left:p.left+e(t).outerWidth()+n.animation_distance,top:p.top+e(t).outerHeight()/2+n.arrow_top_offset-e(i).outerHeight()+n.arrow_height},end:{left:p.left+e(t).outerWidth(),top:p.top+e(t).outerHeight()/2+n.arrow_top_offset-e(i).outerHeight()+n.arrow_height},arrow_class:"div.left_arrow"};e(i).find("div.left_arrow").css({top:e(i).outerHeight()-n.arrow_top_offset*2+"px"})}else if(f||!c&&p.top+n.animation_distance>e(i).outerHeight()&&p.left>=n.arrow_left_offset)h={start:{left:p.left+e(t).outerWidth()/2-n.arrow_left_offset,top:p.top-n.animation_distance-e(i).outerHeight()},end:{left:p.left+e(t).outerWidth()/2-n.arrow_left_offset,top:p.top-e(i).outerHeight()+n.arrow_height},arrow_class:"div.down_arrow"};else if(l||!c&&p.top+n.animation_distance<e(i).outerHeight())h={start:{left:p.left+e(t).outerWidth()/2-n.arrow_left_offset,top:p.top+e(t).outerHeight()+n.animation_distance},end:{left:p.left+e(t).outerWidth()/2-n.arrow_left_offset,top:p.top+e(t).outerHeight()},arrow_class:"div.up_arrow"};e(i).css({top:h.start.top+"px",left:h.start.left+"px",opacity:n.opacity});e(i).find("div.arrow").hide();e(i).find(h.arrow_class).show();e(i).animate({top:h.end.top,left:h.end.left,opacity:"toggle"},n.animation_duration_ms)}function a(t){var n=e(t).attr("id"),i=r[n];if(i)if(parseInt(i.attr("data-mouseenter"),10))setTimeout(function(){a(t)},500);else{i.unbind();i.stop().remove();delete r[n]}}var n,r={},i=1;n={dialog_content_selector:"div.tooltip_description",animation_distance:50,opacity:.85,arrow_left_offset:70,arrow_right_offset:20,arrow_top_offset:50,arrow_height:20,arrow_width:20,animation_duration_ms:300,event_in:"mouseenter",event_out:"mouseleave",hover_in_delay:0,hover_out_delay:0};t&&e.extend(n,t);this.each(function(){var t,r=this;e(this).bind(n.event_in,function(){clearTimeout(t);t=setTimeout(function(){u(r)},n.hover_in_delay)}).bind(n.event_out,function(){clearTimeout(t);t=setTimeout(function(){a(r)},n.hover_out_delay)})});return this}})(jQuery);