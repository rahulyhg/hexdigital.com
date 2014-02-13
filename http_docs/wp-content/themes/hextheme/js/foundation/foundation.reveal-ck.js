/*jslint unparam: true, browser: true, indent: 2 */(function(e,t,n,r){"use strict";Foundation.libs.reveal={name:"reveal",version:"4.1.2",locked:!1,settings:{animation:"fadeAndPop",animationSpeed:250,closeOnBackgroundClick:!0,dismissModalClass:"close-reveal-modal",bgClass:"reveal-modal-bg",open:function(){},opened:function(){},close:function(){},closed:function(){},bg:e(".reveal-modal-bg"),css:{open:{opacity:0,visibility:"visible",display:"block"},close:{opacity:1,visibility:"hidden",display:"none"}}},init:function(t,n,r){this.scope=t||this.scope;Foundation.inherit(this,"data_options delay");typeof n=="object"?e.extend(!0,this.settings,n):typeof r!="undefined"&&e.extend(!0,this.settings,r);if(typeof n!="string"){this.events();return this.settings.init}return this[n].call(this,r)},events:function(){var t=this;e(this.scope).off(".fndtn.reveal").on("click.fndtn.reveal","[data-reveal-id]",function(n){n.preventDefault();if(!t.locked){t.locked=!0;t.open.call(t,e(this))}}).on("click.fndtn.reveal touchend.click.fndtn.reveal",this.close_targets(),function(n){n.preventDefault();if(!t.locked){t.locked=!0;t.close.call(t,e(this).closest(".reveal-modal"))}}).on("open.fndtn.reveal",".reveal-modal",this.settings.open).on("opened.fndtn.reveal",".reveal-modal",this.settings.opened).on("opened.fndtn.reveal",".reveal-modal",this.open_video).on("close.fndtn.reveal",".reveal-modal",this.settings.close).on("closed.fndtn.reveal",".reveal-modal",this.settings.closed).on("closed.fndtn.reveal",".reveal-modal",this.close_video);return!0},open:function(t){if(t)var n=e("#"+t.data("reveal-id"));else var n=e(this.scope);if(!n.hasClass("open")){var r=e(".reveal-modal.open");typeof n.data("css-top")=="undefined"&&n.data("css-top",parseInt(n.css("top"),10)).data("offset",this.cache_offset(n));n.trigger("open");r.length<1&&this.toggle_bg(n);this.hide(r,this.settings.css.close);this.show(n,this.settings.css.open)}},close:function(t){var t=t||e(this.scope),n=e(".reveal-modal.open");if(n.length>0){this.locked=!0;t.trigger("close");this.toggle_bg(t);this.hide(n,this.settings.css.close)}},close_targets:function(){var e="."+this.settings.dismissModalClass;return this.settings.closeOnBackgroundClick?e+", ."+this.settings.bgClass:e},toggle_bg:function(t){e(".reveal-modal-bg").length===0&&(this.settings.bg=e("<div />",{"class":this.settings.bgClass}).appendTo("body"));this.settings.bg.filter(":visible").length>0?this.hide(this.settings.bg):this.show(this.settings.bg)},show:function(n,r){if(r){if(/pop/i.test(this.settings.animation)){r.top=e(t).scrollTop()-n.data("offset")+"px";var i={top:e(t).scrollTop()+n.data("css-top")+"px",opacity:1};return this.delay(function(){return n.css(r).animate(i,this.settings.animationSpeed,"linear",function(){this.locked=!1;n.trigger("opened")}.bind(this)).addClass("open")}.bind(this),this.settings.animationSpeed/2)}if(/fade/i.test(this.settings.animation)){var i={opacity:1};return this.delay(function(){return n.css(r).animate(i,this.settings.animationSpeed,"linear",function(){this.locked=!1;n.trigger("opened")}.bind(this)).addClass("open")}.bind(this),this.settings.animationSpeed/2)}return n.css(r).show().css({opacity:1}).addClass("open").trigger("opened")}return/fade/i.test(this.settings.animation)?n.fadeIn(this.settings.animationSpeed/2):n.show()},hide:function(n,r){if(r){if(/pop/i.test(this.settings.animation)){var i={top:-e(t).scrollTop()-n.data("offset")+"px",opacity:0};return this.delay(function(){return n.animate(i,this.settings.animationSpeed,"linear",function(){this.locked=!1;n.css(r).trigger("closed")}.bind(this)).removeClass("open")}.bind(this),this.settings.animationSpeed/2)}if(/fade/i.test(this.settings.animation)){var i={opacity:0};return this.delay(function(){return n.animate(i,this.settings.animationSpeed,"linear",function(){this.locked=!1;n.css(r).trigger("closed")}.bind(this)).removeClass("open")}.bind(this),this.settings.animationSpeed/2)}return n.hide().css(r).removeClass("open").trigger("closed")}return/fade/i.test(this.settings.animation)?n.fadeOut(this.settings.animationSpeed/2):n.hide()},close_video:function(t){var n=e(this).find(".flex-video"),r=n.find("iframe");if(r.length>0){r.attr("data-src",r[0].src);r.attr("src","about:blank");n.fadeOut(100).hide()}},open_video:function(t){var n=e(this).find(".flex-video"),r=n.find("iframe");if(r.length>0){var i=r.attr("data-src");typeof i=="string"&&(r[0].src=r.attr("data-src"));n.show().fadeIn(100)}},cache_offset:function(e){var t=e.show().height()+parseInt(e.css("top"),10);e.hide();return t},off:function(){e(this.scope).off(".fndtn.reveal")}}})(Foundation.zj,this,this.document);