

		$(function(){
			$(".submenu").hide().parent().on('mouseenter', function() {
				$this = $(this);
				if ( ! $this.hasClass("hover")) {
					$this.addClass("hover").children(".submenu").stop().slideToggle(800, "easeOutBounce");						
				}
			}).on('mouseleave', function() { 
				$this = $(this);
				if ( $this.hasClass("hover")) {
					$this.removeClass("hover").children(".submenu").slideToggle(800, "easeOutBounce");					
				}
			});
		});