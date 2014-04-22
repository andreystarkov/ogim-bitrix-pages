/*
jQuery scripts 
im@andreystarkov.ru
*/

var is_breadcrump_collapsed = 0;
var is_leftpanel_collapsed = 0;
var in_action = 0;

$(document).ready(function() {

$('.pagemenu-nav').flashyNav({
	rolloverColor: 'url(/_images/leftmenu-bg.png) repeat-x center bottom #fff',	
	rolloverDuration: 800,	
	easingMethod: 'easeOutBounce'	
});

 $('#workspace').css({'height': $(document).height()+30}); 

$("#content tbody tr").mouseover(function() { $(this).addClass("row_hover"); });
$("#content tbody tr").mouseout(function() { $(this).removeClass("row_hover");});
$("#content tbody tr:odd").addClass("odd");

$('.person-item').css('opacity', 0.8).hover(function() {
	$(this).fadeTo("100","1")
	}, function() {
    $(this).fadeTo("200", "0.8")
    });

$(".breadcrump").corner();
$("#footer-workspace").corner();

$(".collapse").click(function() { if(is_leftpanel_collapsed == 0){ leftpanel_hide(), is_leftpanel_collapsed = 1} else { leftpanel_show(), is_leftpanel_collapsed = 0 }})

$( ".breadcrump-icon" ).click( function() { is_breadcrump_collapsed = breadcrumb_toggle(is_breadcrump_collapsed) });

	var bc_opacity;

	$('.breadcrump-icon').hover(function() {
			bc_opacity = $('.breadcrump').css('opacity')
				 if(is_breadcrump_collapsed==1 && bc_opacity<0.6) {
					 $('.breadcrump').fadeTo("50","1")
				}
			}, function() {
                if(is_breadcrump_collapsed==1) {
			 		$('.breadcrump').fadeTo("50", "0.5")
			 		}
		});

		 
// left menu highlights

$('.pagemenu-bullet').css('opacity', 0.7);

var pre;
$('.pagemenu-cell').hover(function() {
pre =  $('.pagemenu-bullet', this).attr("src");
$('.pagemenu-bullet', this).fadeTo("100","1");
//$('.pagemenu-bullet', this).attr("src", $('.pagemenu-bullet', this).attr("src-hl"));
}, function() {
//$('.pagemenu-bullet', this).attr("src", "/_images/pagemenu-item-un.png");
 $('.pagemenu-bullet', this).fadeTo("200", "0.7")
});

// auth form init

$.fx.speeds._default = 500;
$( "input:submit, button", "#dialog" ).button();
$( "#dialog" ).dialog({autoOpen: false,show: "fade",hide: "fade",modal: true});
$( ".opener" ).click(function() {$( "#dialog" ).dialog( "open" );return false;});

// corners

$(".pagemenu-block").corner("10px");
$(".breadcrump").corner();

$("#left-gradient").css("height", $(document).height());
$("#right-gradient").css("height", $(document).height());
// $("#workspace-wrapper").css("height", $("#wrapper").height()-165);


var pre1;
$('.eng').css('opacity', 0.6).hover(function() {
	pre = $(this).attr("src");
	$(this).fadeTo("100","1")
	$(this).attr("src", $(this).attr("src-hl"));
	}, function() {
    $(this).fadeTo("200", "0.6")
    $(this).attr("src", pre1);
    });
});

// caf 

$(document).ready(function() {
$("#caf-info").corner();
$("#caf-boss").corner();
$(".news-list-item").corner();
$(".news-list-item").hover(function() {
 $(this).css({"box-shadow": "2px, 2px, 3px, rgba(0,0,0,0.8)"}).animate({"background-color": "#eceae3"}, 300);
 $(this).css().animate({"background-color": "#f8f7ee"}, 300);
                    }, function() {
	 $(this).animate({"background-color": "white", "box-shadow": "0px, 0px, 0px, rgba(0,0,0,0.5)"}, 300);
   }
);

});


$(function() {
		$( "#caf-content" ).accordion({collapsible: true,
		active: false,
			autoHeight: false,
			navigation: true
		});
		
				$( ".caf-content" ).accordion({collapsible: true,
		active: false,
			autoHeight: false,
			navigation: true
		});
});


$(function() {
		$( "#caf-content2" ).accordion({collapsible: true,
		active: false,
			autoHeight: false,
			navigation: true
		});
		
				$( ".caf-content2" ).accordion({collapsible: true,
		active: false,
			autoHeight: false,
			navigation: true
		});
});


$(document).ready(function() {
$(".person-preview-img").corner();
$(".person-info-img").corner();


	$('.person-preview-img').css("opacity", 0.7).hover(function() {
				 if($(this).css("opacity")<=0.7) {
					 $(this).fadeTo("100","1")
				}
			}, function() {
                if($(this).css("opacity")<=1) {
			 		$(this).fadeTo("100", "0.7")
			 		}
		});
// <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
// $( "#dialog:ui-dialog" ).dialog( "destroy" );
	
	
		
		
});
// personalies scroll

$(function(){
    var div = $('div.personalies-list'),
                 ul = $('ul.personalies-list'),
                 ulPadding = 15;
    var divWidth = div.width();

    div.css({overflow: 'hidden'});

    var lastLi = ul.find('li:last-child');

    div.mousemove(function(e){

      var ulWidth = lastLi[0].offsetLeft + lastLi.outerWidth() + ulPadding;

      var left = (e.pageX - div.offset().left) * (ulWidth-divWidth) / divWidth;
      div.scrollLeft(left);
    });
});
