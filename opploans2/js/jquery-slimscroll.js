!function(e){e.fn.extend({slimScroll:function(i){var s={width:"auto",height:"250px",size:"7px",color:"#000",position:"right",distance:"1px",start:"top",opacity:.4,alwaysVisible:!1,disableFadeOut:!1,railVisible:!1,railColor:"#333",railOpacity:.2,railDraggable:!0,railClass:"slimScrollRail",barClass:"slimScrollBar",wrapperClass:"slimScrollDiv",allowPageScroll:!1,wheelStep:20,touchScrollStep:200,borderRadius:"7px",railBorderRadius:"7px"},o=e.extend(s,i);return this.each(function(){function s(t){if(h){var t=t||window.event,i=0;t.wheelDelta&&(i=-t.wheelDelta/120),t.detail&&(i=t.detail/3);var s=t.target||t.srcTarget||t.srcElement;e(s).closest("."+o.wrapperClass).is(x.parent())&&r(i,!0),t.preventDefault&&!y&&t.preventDefault(),y||(t.returnValue=!1)}}function r(e,t,i){y=!1;var s=e,r=x.outerHeight()-D.outerHeight();if(t&&(s=parseInt(D.css("top"))+e*parseInt(o.wheelStep)/100*D.outerHeight(),s=Math.min(Math.max(s,0),r),s=e>0?Math.ceil(s):Math.floor(s),D.css({top:s+"px"})),v=parseInt(D.css("top"))/(x.outerHeight()-D.outerHeight()),s=v*(x[0].scrollHeight-x.outerHeight()),i){s=e;var a=s/x[0].scrollHeight*x.outerHeight();a=Math.min(Math.max(a,0),r),D.css({top:a+"px"})}x.scrollTop(s),x.trigger("slimscrolling",~~s),n(),c()}function a(e){window.addEventListener?(e.addEventListener("DOMMouseScroll",s,!1),e.addEventListener("mousewheel",s,!1)):document.attachEvent("onmousewheel",s)}function l(){f=Math.max(x.outerHeight()/x[0].scrollHeight*x.outerHeight(),m),D.css({height:f+"px"});var e=f==x.outerHeight()?"none":"block";D.css({display:e})}function n(){if(l(),clearTimeout(p),v==~~v){if(y=o.allowPageScroll,b!=v){var e=0==~~v?"top":"bottom";x.trigger("slimscroll",e)}}else y=!1;return b=v,f>=x.outerHeight()?void(y=!0):(D.stop(!0,!0).fadeIn("fast"),void(o.railVisible&&R.stop(!0,!0).fadeIn("fast")))}function c(){o.alwaysVisible||(p=setTimeout(function(){o.disableFadeOut&&h||u||d||(D.fadeOut("slow"),R.fadeOut("slow"))},1e3))}var h,u,d,p,g,f,v,b,w="<div></div>",m=30,y=!1,x=e(this);if(x.parent().hasClass(o.wrapperClass)){var C=x.scrollTop();if(D=x.siblings("."+o.barClass),R=x.siblings("."+o.railClass),l(),e.isPlainObject(i)){if("height"in i&&"auto"==i.height){x.parent().css("height","auto"),x.css("height","auto");var H=x.parent().parent().height();x.parent().css("height",H),x.css("height",H)}else if("height"in i){var S=i.height;x.parent().css("height",S),x.css("height",S)}if("scrollTo"in i)C=parseInt(o.scrollTo);else if("scrollBy"in i)C+=parseInt(o.scrollBy);else if("destroy"in i)return D.remove(),R.remove(),void x.unwrap();r(C,!1,!0)}}else if(!(e.isPlainObject(i)&&"destroy"in i)){o.height="auto"==o.height?x.parent().height():o.height;var E=e(w).addClass(o.wrapperClass).css({position:"relative",overflow:"hidden",width:o.width,height:o.height});x.css({overflow:"hidden",width:o.width,height:o.height});var R=e(w).addClass(o.railClass).css({width:o.size,height:"100%",position:"absolute",top:0,display:o.alwaysVisible&&o.railVisible?"block":"none","border-radius":o.railBorderRadius,background:o.railColor,opacity:o.railOpacity,zIndex:90}),D=e(w).addClass(o.barClass).css({background:o.color,width:o.size,position:"absolute",top:0,opacity:o.opacity,display:o.alwaysVisible?"block":"none","border-radius":o.borderRadius,BorderRadius:o.borderRadius,MozBorderRadius:o.borderRadius,WebkitBorderRadius:o.borderRadius,zIndex:99}),M="right"==o.position?{right:o.distance}:{left:o.distance};R.css(M),D.css(M),x.wrap(E),x.parent().append(D),x.parent().append(R),o.railDraggable&&D.bind("mousedown",function(i){var s=e(document);return d=!0,t=parseFloat(D.css("top")),pageY=i.pageY,s.bind("mousemove.slimscroll",function(e){currTop=t+e.pageY-pageY,D.css("top",currTop),r(0,D.position().top,!1)}),s.bind("mouseup.slimscroll",function(e){d=!1,c(),s.unbind(".slimscroll")}),!1}).bind("selectstart.slimscroll",function(e){return e.stopPropagation(),e.preventDefault(),!1}),R.hover(function(){n()},function(){c()}),D.hover(function(){u=!0},function(){u=!1}),x.hover(function(){h=!0,n(),c()},function(){h=!1,c()}),x.bind("touchstart",function(e,t){e.originalEvent.touches.length&&(g=e.originalEvent.touches[0].pageY)}),x.bind("touchmove",function(e){if(y||e.originalEvent.preventDefault(),e.originalEvent.touches.length){var t=(g-e.originalEvent.touches[0].pageY)/o.touchScrollStep;r(t,!0),g=e.originalEvent.touches[0].pageY}}),l(),"bottom"===o.start?(D.css({top:x.outerHeight()-D.outerHeight()}),r(0,!0)):"top"!==o.start&&(r(e(o.start).position().top,null,!0),o.alwaysVisible||D.hide()),a(this)}}),this}}),e.fn.extend({slimscroll:e.fn.slimScroll})}(jQuery);