/*
jQuery functions 
im@andreystarkov.ru
*/

function leftpanel_hide(){
	$(".collapse").css({"background": "url(/_images/minimize-back.png)"}).animate({"left": "50px"}, 300),
	$(".documents-table").slideToggle(10),$(".pagemenu-table").slideToggle(10),
	$(".documents-head").animate({"margin-left": "20px"}, 300),
    $(".pagemenu-head").animate({"margin-left": "20px"}, 300),

    $(".documents-bg").animate({"width": "0px"}, 300),
    $(".pagemenu-bg").animate({"width": "0px"}, 300),
	$(".pagemenu-nav").fadeToggle(100),

	$("#left-panel").animate(
	{"width": "65", "height": $('#content').css("height")}, 300,function()
	{
            $(".documents-head").fadeTo(1500, "0.3"),
            $(".pagemenu-head").fadeTo(1500, "0.3"),
            $(".breadcrump").animate({"width": "900px"}, 300),
			$("#content").animate({"padding-left": "80px", "width": "900px"}, 300)
	})
}

function leftpanel_show(){
   	$(".collapse").animate({"left": "220"}, 300),
	$(".collapse").css({"background": "url(/_images/minimize.png)"}),
	$("#content").animate({"padding-left": "255px", "width": "730px"}, 300),
	$("#left-panel").animate(
	{"width": "235"}, 300, function()
	{
	        $("#left-panel").fadeTo(500, "1"),

  		 	$(".documents-head").animate({"height": "33px", "margin-top": "0px", "margin-left": "-8px" }, 300),
				$(".pagemenu-head").animate({"height": "33px", "margin-top": "0px", "margin-left": "-8px" }, 300),

   			$(".documents-bg").animate({"width": "252px"}, 300),

  		    $(".pagemenu-bg").animate({"width": "252px"}, 300, function()
  		    {
  		     $(".breadcrump").animate({"width": "715px"}, 300),
            $(".documents-head").fadeTo(1500, "1"),
            $(".pagemenu-head").fadeTo(1500, "1"),
			$(".pagemenu-nav").slideToggle(500, function() { $(".documents-table").slideToggle(500) });
  		    })


	})
}



function breadcrumb_toggle(isToggled){
   	if(isToggled != 1)
	{
		  $(".breadcrump-text").slideToggle(500, function()
		  {
 			  $(".breadcrump").animate({"width": "48px"}, 500),
 			  $(".breadcrump").css({"position": "absolute", "left": $("#content").css("padding-left"), "padding" : "0"})

			  $(".breadcrump").animate({"left": "930px"}, 500, function()
			  {
 		  			$(".breadcrump").animate({"opacity": "0.5"}, 500),
 		 		    $('.breadcrump-icon').fadeTo(50,"1")

 		      })
		  })
    return 1
	} else
	{
				$(".breadcrump").css({"opacity": "1"}),
				$(".breadcrump").animate({"left": $("#content").css("padding-left")}, 500),
				$(".breadcrump").animate({"width": "715px"}, 500, function()
				{
       		       $(".breadcrump").css({"position": "relative", "left": "0px", "padding-left": "55px", "padding-right": "10px"}),
           		   $(".breadcrump-icon").animate({"opacity": "1"}, 2000),
          	   	   $(".breadcrump-text").slideToggle(500)

				});
    return 0
	}
}