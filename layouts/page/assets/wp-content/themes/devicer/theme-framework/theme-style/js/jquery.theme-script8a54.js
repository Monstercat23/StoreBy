/**
 * @package 	WordPress
 * @subpackage 	Devicer
 * @version		1.0.0
 * 
 * Theme Scripts
 * Created by CMSMasters
 * 
 */



jQuery(document).ready(function() { 
	"use strict";
	

	/* Menu item custom colors */
	(function ($) { 
		$('.menu-item > a[data-color]').each(function () {
			$(this).attr('style', $(this).data('color'));
		} );
	} )(jQuery);
	

	/* Header Top Hide Toggle */
	(function ($) { 
		$('.header_top_but').on('click', function () { 
			var headerTopBut = $(this), 
				headerTopButArrow = headerTopBut.find('> span'), 
				headerTopOuter = headerTopBut.parents('.header_top').find('.header_top_outer');
			
			if (headerTopBut.hasClass('opened')) {
				headerTopOuter.slideUp();
				
				headerTopButArrow.removeClass('cmsmasters_theme_icon_slide_top').addClass('cmsmasters_theme_icon_slide_bottom');
				
				headerTopBut.removeClass('opened').addClass('closed');
			} else if (headerTopBut.hasClass('closed')) {
				headerTopOuter.slideDown();
				
				headerTopButArrow.removeClass('cmsmasters_theme_icon_slide_bottom').addClass('cmsmasters_theme_icon_slide_top');
				
				headerTopBut.removeClass('closed').addClass('opened');
			}
		} );
	} )(jQuery);

	/* Category Menu JS */

	
	(function ($) {
		var openBtn = $('.bot_cat_button'),
		slideMenu = $('.bot_nav_cat_wrap'),
		headerBotClass = $('.header_bot');
		
		if (cmsmasters_media_width() > 1024) {
			if (slideMenu.hasClass("cat_open_default")) {
				openBtn.addClass("active");
				slideMenu.addClass("active");
				slideMenu.slideDown(300);
			}
		} else {
			slideMenu.slideUp(0);
			openBtn.removeClass("active");
			slideMenu.removeClass("active");
		}

		openBtn.on("click", function() {
			if (slideMenu.is(':hidden')) {
				slideMenu.slideDown(300);
				openBtn.addClass("active");
				openBtn.removeClass("close");
			} else {
				slideMenu.slideUp(300);
				openBtn.removeClass("active");
				openBtn.addClass("close");
				slideMenu.removeClass("active");
			}
		});

		$(window).on('scroll', function() {
			if (cmsmasters_media_width() > 1024) {
				if (headerBotClass.hasClass("header_bot_scroll") && slideMenu.hasClass("cat_open_default")) {
					openBtn.removeClass("active");
					slideMenu.slideUp(300);
				} else if (!headerBotClass.hasClass("header_bot_scroll") && slideMenu.hasClass("cat_open_default") && !openBtn.hasClass("close")) {
					openBtn.addClass("active");
					slideMenu.slideDown(300);
				}
			}
		});

		$(window).on('debouncedresize', function() {
			if ( 
				!checker.os.iphone && 
				!checker.os.ipod && 
				!checker.os.ipad && 
				!checker.os.blackberry && 
				!checker.os.android 
			) {
				if (cmsmasters_media_width() > 1024) {
					return;
				} else {
					slideMenu.slideUp(300);
					openBtn.removeClass("active");
					slideMenu.removeClass("active");
				}
			}
		});
	})(jQuery);
	
	(function ($) {
		var main_menu_mob_btn = $('.resp_bot_nav_outer'),
		main_menu_mob = $('.bot_nav_wrap nav'),
		cat_menu_mob_btn = $('.bot_cat_button'),
		cat_menu_mob = $('.bot_nav_cat_wrap');

		main_menu_mob_btn.on("click", function() {
			if (cat_menu_mob_btn.hasClass('active')) {
				cat_menu_mob.slideUp();
				cat_menu_mob_btn.removeClass('active');
			}
		});

		cat_menu_mob_btn.on("click", function() {
			if (main_menu_mob_btn.hasClass('active')) {
				main_menu_mob.slideUp();
				main_menu_mob_btn.removeClass('active');
			}
		});

	})(jQuery);

	(function ($) {
		var main_menu_mob_btn = $('.resp_mid_nav_outer'),
		main_menu_mob = $('.mid_nav_wrap nav'),
		main_menu_ico = $('.resp_mid_nav');

		main_menu_mob_btn.on("click", function() {
			if(!main_menu_mob_btn.hasClass("active")) {
				main_menu_mob.slideDown();
				main_menu_mob_btn.addClass("active");
				main_menu_ico.addClass("active");
			} else {
				main_menu_mob.slideUp();
				main_menu_mob_btn.removeClass("active");
				main_menu_ico.removeClass("active");
			}
		});

	})(jQuery);
	
	
	
	/* Header Search Form */
	(function ($) { 
		$('.cmsmasters_header_search_but').on('click', function () { 
			$('.cmsmasters_header_search_form').addClass('cmsmasters_show');
			
			$('.cmsmasters_header_search_form').find('input[type=search]').focus();
		} );
		
		
		$('.cmsmasters_header_search_form_close').on('click', function () { 
			$('.cmsmasters_header_search_form').removeClass('cmsmasters_show');
		} );
	} )(jQuery);
	
	
	
	/* Stats Run */
	(function ($) { 
		if ( 
			!checker.os.iphone && 
			!checker.os.ipod && 
			!checker.os.ipad && 
			!checker.os.blackberry && 
			!checker.os.android && 
			!checker.ua.ie9 
		) {
			$('.cmsmasters_stats.stats_mode_circles').waypoint(function () { 
				var i = 1;
				
				
				$(this).find('.cmsmasters_stat').each(function () { 
					var el = $(this);
					
					
					setTimeout(function () { 
						el.easyPieChart( { 
							size : 			170, 
							lineWidth : 	3, 
							lineCap : 		'square', 
							animate : 		1000, 
							scaleColor : 	false, 
							trackColor : 	false, 
							barColor : function () { 
								return ($(this.el).data('bar-color')) ? $(this.el).data('bar-color') : cmsmasters_theme_script.primary_color;
							}, 
							onStep : function (from, to, val) { 
								$(this.el).find('.cmsmasters_stat_counter').text(~~val);
							} 
						} );
					}, 500 * i);
					
					
					i += 1;
				} );
			}, { 
				offset : 		'100%' 
			} );
		} else {
			$('.cmsmasters_stats.stats_mode_circles').find('.cmsmasters_stat').easyPieChart( { 
				size : 			170, 
				lineWidth : 	3, 
				lineCap : 		'square', 
				animate : 		1000, 
				scaleColor : 	false, 
				trackColor : 	false, 
				barColor : function () { 
					return ($(this.el).data('bar-color')) ? $(this.el).data('bar-color') : cmsmasters_theme_script.primary_color;
				}, 
				onStep : function (from, to, val) { 
					$(this.el).find('.cmsmasters_stat_counter').text(~~val);
				} 
			} );
		}
		
		
		if ( 
			!checker.os.iphone && 
			!checker.os.ipod && 
			!checker.os.ipad && 
			!checker.os.blackberry && 
			!checker.os.android && 
			!checker.ua.ie9 
		) {
			$('.cmsmasters_counters').waypoint(function () { 
				var i = 1;
				
				
				$(this).find('.cmsmasters_counter').each(function () { 
					var el = $(this);
					
					
					setTimeout(function () { 
						el.easyPieChart( { 
							size : 			140, 
							lineWidth : 	0, 
							lineCap : 		'square', 
							animate : 		1500, 
							scaleColor : 	false, 
							trackColor : 	false, 
							barColor : 		'#ffffff', 
							onStep : function (from, to, val) { 
								$(this.el).find('.cmsmasters_counter_counter').text(~~val);
							} 
						} );
					}, 500 * i);
					
					
					i += 1;
				} );
			}, { 
				offset : 		'100%' 
			} );
		} else {
			$('.cmsmasters_counters').find('.cmsmasters_counter').easyPieChart( { 
				size : 			140, 
				lineWidth : 	0, 
				lineCap : 		'square', 
				animate : 		1500, 
				scaleColor : 	false, 
				trackColor : 	false, 
				barColor : 		'#ffffff', 
				onStep : function (from, to, val) { 
					$(this.el).find('.cmsmasters_counter_counter').text(~~val);
				} 
			} );
		}
		
		
		if ( 
			!checker.os.iphone && 
			!checker.os.ipod && 
			!checker.os.ipad && 
			!checker.os.blackberry && 
			!checker.os.android && 
			!checker.ua.ie9 
		) {
			$('.cmsmasters_stats.stats_mode_bars').waypoint(function () { 
				$(this).addClass('shortcode_animated').find('.cmsmasters_stat').each(function () { 
					var el = $(this);
					
					
					el.easyPieChart( { 
						size : 			140, 
						lineWidth : 	0, 
						lineCap : 		'square', 
						animate : 		1500, 
						scaleColor : 	false, 
						trackColor : 	false, 
						barColor : 		'#ffffff', 
						onStep : function (from, to, val) { 
							$(this.el).find('.cmsmasters_stat_counter').text(~~val);
						} 
					} );
				} );
			}, { 
				offset : 		'100%' 
			} );
		} else {
			$('.cmsmasters_stats.stats_mode_bars').addClass('shortcode_animated').find('.cmsmasters_stat').easyPieChart( { 
				size : 			140, 
				lineWidth : 	0, 
				lineCap : 		'square', 
				animate : 		1500, 
				scaleColor : 	false, 
				trackColor : 	false, 
				barColor : 		'#ffffff', 
				onStep : function (from, to, val) { 
					$(this.el).find('.cmsmasters_stat_counter').text(~~val);
				} 
			} );
		}
	} )(jQuery);
	
	
	
	/* Responsive Navigation Function Start */
	(function ($) { 
		$('#cat_menu').cmsmastersResponsiveNav();
	} )(jQuery);
} );



/*!
 * Fixed Header Function
 */
!function(e){"use strict";e.fn.cmsmastersFixedHeaderScroll=function(o){var i={headerTop:".header_top",headerMid:".header_mid",headerBot:".header_bot",navBlock:"nav",navList:"#navigation_mid",navTopList:"#top_line_nav",respNavButton:".resp_bot_nav_outer",respTopNavButton:".responsive_top_nav",fixedClass:".fixed_header",fixedClassBlock:"#page",respHideBlocks:"",maxWidthMid:1024,maxWidthBot:1024,changeTopHeight:!0,changeMidHeight:!0,mobileDisabled:!0},t=this,a={};a={init:function(){a.options=a.o=e.extend({},i,o),a.el=t,a.vars=a.v={},a.v.newTopHeight=0,a.v.newMidHeight=0,a.setHeaderVars(),a.startHeader()},setHeaderVars:function(){a.v.headerMidString=a.o.headerMid,a.v.headerTop=a.el.find("> "+a.o.headerTop),a.v.headerMid=a.el.find("> "+a.v.headerMidString),a.v.headerBot=a.el.find("> "+a.o.headerBot),a.v.respNavButton=a.el.find(a.o.respNavButton),a.v.respTopNavButton=a.el.find(a.o.respTopNavButton),a.v.respHideBlocks=e(a.o.respHideBlocks),a.v.fixedClassBlock = e(a.o.fixedClassBlock),a.v.navListString=a.o.navList,a.v.navTopListString=a.o.navTopList,a.v.navBlockString=a.o.navBlock,a.v.navBlock=a.el.find(a.v.navListString).parents(a.v.navBlockString),a.v.navTopBlock=a.el.find(a.v.navTopListString).parents(a.v.navBlockString),a.v.midChangeHeightBlocks=e(a.v.headerMidString),a.v.midChangeHeightBlocksResp=e(a.v.headerMidString),a.v.topHeight=0,a.v.midHeight=a.v.headerMid.attr("data-height"),a.v.win=e(window),a.v.winScrollTop=a.v.win.scrollTop(),a.v.winMidScrollTop=a.v.winScrollTop-a.v.topHeight,a.v.isMobile="ontouchstart"in document.documentElement},startHeader:function(){a.v.headerTop.length>0&&(a.v.topHeight=a.v.headerTop.attr("data-height")),a.attachEvents(),a.v.win.trigger("scroll")},attachEvents:function(){a.v.respNavButton.bind("click",function(){return a.v.respNavButton.is(":not(.active)")?(a.v.navBlock.css({display:"block"}),a.v.respHideBlocks.css({display:"none"}),a.v.respNavButton.addClass("active")):(a.v.navBlock.css({display:"none"}),a.v.respHideBlocks.css({display:"block"}),a.v.respNavButton.removeClass("active")),!1}),a.v.respTopNavButton.bind("click",function(){return a.v.respTopNavButton.is(":not(.active)")?(a.v.navTopBlock.css({display:"block"}),a.v.respHideBlocks.css({display:"none"}),a.v.respTopNavButton.addClass("active")):(a.v.navTopBlock.css({display:"none"}),a.v.respHideBlocks.css({display:"block"}),a.v.respTopNavButton.removeClass("active")),!1}),a.v.win.bind("scroll",function(){cmsmasters_media_width()>a.o.maxWidthMid&&(a.getScrollTop(),a.headerTransform())}),a.v.win.bind("resize",function(){a.v.headerBot.length>0?a.headerResize(a.o.maxWidthBot):a.headerResize(a.o.maxWidthMid)})},getScrollTop:function(){a.v.winScrollTop=a.v.win.scrollTop(),a.v.winMidScrollTop=a.v.winScrollTop-a.v.topHeight},headerTransform:function(){if(a.v.fixedClassBlock.hasClass('fixed_header')){a.v.winScrollTop<a.v.topHeight?(a.v.headerMid.removeClass("header_mid_scroll"),a.v.headerBot.removeClass("header_bot_scroll"),a.v.newTopHeight=a.v.topHeight-a.v.winScrollTop,a.v.headerTop.css({overflow:"hidden",height:a.v.newTopHeight+"px"}),a.v.winScrollTop<=3&&a.v.headerTop.css({overflow:"inherit"}),a.v.midChangeHeightBlocks.css({height:a.v.midHeight+"px"})):(a.v.headerTop.css({overflow:"hidden",height:0}),a.v.winMidScrollTop<a.v.midHeight/3?(a.v.headerMid.removeClass("header_mid_scroll"),a.v.headerBot.removeClass("header_bot_scroll"),a.v.newMidHeight=a.v.midHeight-a.v.winMidScrollTop):(a.v.headerMid.addClass("header_mid_scroll"),a.v.headerBot.addClass("header_bot_scroll"),a.v.newMidHeight=a.v.midHeight/1.5),a.v.midChangeHeightBlocks.css({height:a.v.newMidHeight+"px"}))}},headerResize:function(e){cmsmasters_media_width()>e?(a.v.navBlock.removeAttr("style"),a.v.respHideBlocks.removeAttr("style"),a.v.respNavButton.removeClass("active"),a.getScrollTop(),a.headerTransform()):(a.v.headerTop.removeAttr("style"),(a.v.fixedClassBlock.hasClass('fixed_header') ? a.v.midChangeHeightBlocksResp.css("height", "auto") : ''))}},a.init()}}(jQuery);


/*!
 * Fixed Header Function 2
 */
!function(e){"use strict";e.fn.cmsmastersFixedHeaderScroll=function(o){var i={headerTop:".header_top",headerMid:".header_mid",headerBot:".header_bot",navBlock:"nav",navList:"#navigation",navTopList:"#top_line_nav",respNavButton:".resp_bot_nav_outer",respTopNavButton:".responsive_top_nav",fixedClass:".fixed_header",fixedClassBlock:"#page",respHideBlocks:"",maxWidthMid:1024,maxWidthBot:1024,changeTopHeight:!0,changeMidHeight:!0,mobileDisabled:!0},t=this,a={};a={init:function(){a.options=a.o=e.extend({},i,o),a.el=t,a.vars=a.v={},a.v.newTopHeight=0,a.v.newMidHeight=0,a.setHeaderVars(),a.startHeader()},setHeaderVars:function(){a.v.headerMidString=a.o.headerMid,a.v.headerTop=a.el.find("> "+a.o.headerTop),a.v.headerMid=a.el.find("> "+a.v.headerMidString),a.v.headerBot=a.el.find("> "+a.o.headerBot),a.v.respNavButton=a.el.find(a.o.respNavButton),a.v.respTopNavButton=a.el.find(a.o.respTopNavButton),a.v.respHideBlocks=e(a.o.respHideBlocks),a.v.fixedClassBlock = e(a.o.fixedClassBlock),a.v.navListString=a.o.navList,a.v.navTopListString=a.o.navTopList,a.v.navBlockString=a.o.navBlock,a.v.navBlock=a.el.find(a.v.navListString).parents(a.v.navBlockString),a.v.navTopBlock=a.el.find(a.v.navTopListString).parents(a.v.navBlockString),a.v.midChangeHeightBlocks=e(a.v.headerMidString),a.v.midChangeHeightBlocksResp=e(a.v.headerMidString),a.v.topHeight=0,a.v.midHeight=a.v.headerMid.attr("data-height"),a.v.win=e(window),a.v.winScrollTop=a.v.win.scrollTop(),a.v.winMidScrollTop=a.v.winScrollTop-a.v.topHeight,a.v.isMobile="ontouchstart"in document.documentElement},startHeader:function(){a.v.headerTop.length>0&&(a.v.topHeight=a.v.headerTop.attr("data-height")),a.attachEvents(),a.v.win.trigger("scroll")},attachEvents:function(){a.v.respNavButton.bind("click",function(){return a.v.respNavButton.is(":not(.active)")?(a.v.navBlock.css({display:"block"}),a.v.respHideBlocks.css({display:"none"}),a.v.respNavButton.addClass("active")):(a.v.navBlock.css({display:"none"}),a.v.respHideBlocks.css({display:"block"}),a.v.respNavButton.removeClass("active")),!1}),a.v.respTopNavButton.bind("click",function(){return a.v.respTopNavButton.is(":not(.active)")?(a.v.navTopBlock.css({display:"block"}),a.v.respHideBlocks.css({display:"none"}),a.v.respTopNavButton.addClass("active")):(a.v.navTopBlock.css({display:"none"}),a.v.respHideBlocks.css({display:"block"}),a.v.respTopNavButton.removeClass("active")),!1}),a.v.win.bind("scroll",function(){cmsmasters_media_width()>a.o.maxWidthMid&&(a.getScrollTop(),a.headerTransform())}),a.v.win.bind("resize",function(){a.v.headerBot.length>0?a.headerResize(a.o.maxWidthBot):a.headerResize(a.o.maxWidthMid)})},getScrollTop:function(){a.v.winScrollTop=a.v.win.scrollTop(),a.v.winMidScrollTop=a.v.winScrollTop-a.v.topHeight},headerTransform:function(){if(a.v.fixedClassBlock.hasClass('fixed_header')){a.v.winScrollTop<a.v.topHeight?(a.v.headerMid.removeClass("header_mid_scroll"),a.v.headerBot.removeClass("header_bot_scroll"),a.v.newTopHeight=a.v.topHeight-a.v.winScrollTop,a.v.headerTop.css({overflow:"hidden",height:a.v.newTopHeight+"px"}),a.v.winScrollTop<=3&&a.v.headerTop.css({overflow:"inherit"}),a.v.midChangeHeightBlocks.css({height:a.v.midHeight+"px"})):(a.v.headerTop.css({overflow:"hidden",height:0}),a.v.winMidScrollTop<a.v.midHeight/3?(a.v.headerMid.removeClass("header_mid_scroll"),a.v.headerBot.removeClass("header_bot_scroll"),a.v.newMidHeight=a.v.midHeight-a.v.winMidScrollTop):(a.v.headerMid.addClass("header_mid_scroll"),a.v.headerBot.addClass("header_bot_scroll"),a.v.newMidHeight=a.v.midHeight/1.5),a.v.midChangeHeightBlocks.css({height:a.v.newMidHeight+"px"}))}},headerResize:function(e){cmsmasters_media_width()>e?(a.v.navBlock.removeAttr("style"),a.v.respHideBlocks.removeAttr("style"),a.v.respNavButton.removeClass("active"),a.getScrollTop(),a.headerTransform()):(a.v.headerTop.removeAttr("style"),(a.v.fixedClassBlock.hasClass('fixed_header') ? a.v.midChangeHeightBlocksResp.css("height", "auto") : ''))}},a.init()}}(jQuery);

/*!
 * Responsive Navigation Function
 */
!function(s){"use strict";s.fn.cmsmastersResponsiveNav=function(n){var t={submenu:"ul.sub-menu, ul.children",respButton:".resp_bot_nav_outer",startWidth:1024},e=this,i={};i={init:function(){i.o=s.extend({},t,n),i.el=e,i.v={},i.v.pLinkText="",i.v.subLinkToggle=void 0,i.setVars(),i.restartNav()},setVars:function(){i.v.submenu=i.el.find(i.o.submenu),i.v.subLink=i.v.submenu.closest("li").find("> a"),i.v.respButton=s(i.o.respButton),i.v.startWidth=i.o.startWidth,i.v.win=s(window),i.v.trigger=!1,i.v.counter=0,i.startEvent()},buildNav:function(){i.v.trigger=!0,i.v.counter=1,i.v.subLink.each(function(){""===s(this).text()&&(i.v.pLinkText=s(this).closest("ul").closest("li").find("> a").text(),s(this).addClass("cmsmasters_resp_nav_custom_text").html('<span class="nav_item_wrap"><span class="nav_title">'+i.v.counter+'. '+i.v.pLinkText+'</span></span>'),i.v.counter+=1),s(this).append('<span class="cmsmasters_resp_nav_toggle cmsmasters_theme_icon_resp_nav_slide_down" />')}),i.v.subLinkToggle=i.v.subLink.find("> span.cmsmasters_resp_nav_toggle"),i.v.submenu.hide(),i.attachEvents()},restartNav:function(){!i.v.trigger&&cmsmasters_media_width()<=i.v.startWidth?i.buildNav():i.v.trigger&&cmsmasters_media_width()>i.v.startWidth&&i.destroyNav()},resetNav:function(){i.v.subLinkToggle.removeClass("cmsmasters_theme_icon_resp_nav_slide_up").addClass("cmsmasters_theme_icon_resp_nav_slide_down"),i.v.submenu.hide()},destroyNav:function(){i.v.subLink.each(function(){s(this).hasClass("cmsmasters_resp_nav_custom_text")&&s(this).removeClass("cmsmasters_resp_nav_custom_text").text(""),s(this).find("span.cmsmasters_resp_nav_toggle").remove()}),i.v.submenu.css("display",""),i.v.trigger=!1,i.detachEvents()},startEvent:function(){i.v.win.on("resize",function(){i.restartNav()})},attachEvents:function(){i.v.subLinkToggle.on("click",function(){return s(this).hasClass("cmsmasters_theme_icon_resp_nav_slide_up")?(s(this).removeClass("cmsmasters_theme_icon_resp_nav_slide_up").addClass("cmsmasters_theme_icon_resp_nav_slide_down").closest("li").find("ul.sub-menu, ul.children").hide(),s(this).closest("li").find("span.cmsmasters_resp_nav_toggle").removeClass("cmsmasters_theme_icon_resp_nav_slide_up").addClass("cmsmasters_theme_icon_resp_nav_slide_down")):(s(this).removeClass("cmsmasters_theme_icon_resp_nav_slide_down").addClass("cmsmasters_theme_icon_resp_nav_slide_up"), s(this).closest("li").find("> ul.sub-menu, > ul.children").show(),s(this).closest("li").find("> div > ul.sub-menu, > div > ul.children").show()),!1}),i.v.respButton.on("click",function(){i.v.trigger&&s(this).hasClass("active")&&i.resetNav()})},detachEvents:function(){i.v.subLinkToggle.off("click")}},i.init()}}(jQuery);



