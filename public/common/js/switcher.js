
/*
  Author: alamin-items
  Template: Jahanaffrin
  Version: 1.0
  URL:https://themeforest.net/user/alamin-items
*/

window.console = window.console || (function(){
	var c = {}; c.log = c.warn = c.debug = c.info = c.error = c.time = c.dir = c.profile = c.clear = c.exception = c.trace = c.assert = function(){};
	return c;
})();


jQuery(document).ready(function($) {
	

		$("ul.pattern .color1" ).click(function(){
			$("#color-opt").attr("href", "css/colors/default.css" );
			return false;
		});
		
		$("ul.pattern .color2" ).click(function(){
			$("#color-opt").attr("href", "css/colors/color-2.css" );
			return false;
		});
		
		$("ul.pattern .color3" ).click(function(){
			$("#color-opt").attr("href", "css/colors/color-3.css" );
			return false;
		});

		$("ul.pattern .color4" ).click(function(){
			$("#color-opt").attr("href", "css/colors/color-4.css" );
			return false;
		});
		$("ul.pattern .color5" ).click(function(){
			$("#color-opt").attr("href", "css/colors/color-5.css" );
			return false;
		});
		$("ul.pattern .color6" ).click(function(){
			$("#color-opt").attr("href", "css/colors/color-6.css" );
			return false;
		});
	
  
		$("#style-switcher .bottom a.settings").click(function(e){
			e.preventDefault();
			var div = $("#style-switcher");
			if (div.css("right") === "-189px") {
				$("#style-switcher").animate({
					right: "0px"
				}); 
			} else {
				$("#style-switcher").animate({
					right: "-189px"
				});
			}
		})
		
		$("ul.pattern li a").click(function(e){
			e.preventDefault();
			$(this).parent().parent().find("a").removeClass("active");
			$(this).addClass("active");
		})

		$("#style-switcher").animate({
			right: "-189px"
		}); 
     
				
	});