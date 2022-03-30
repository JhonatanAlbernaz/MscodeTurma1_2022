$("#image-animation").on("mouseover", function(e) {
	$("#image-animation").css("max-width", "100%");
	$("#image-animation").css("-moz-transition", "all 0.3s");
	$("#image-animation").css("-webkit-transition", "all 0.3s");
	$("#image-animation").css("transition", "all 0.3s");
	$("#image-animation").css("-moz-transform", "scale(1.1)");
	$("#image-animation").css("-webkit-transform", "scale(1.1)");
	$("#transform").css("border-radius", "scale(2.5.2.5)");
});
  
$("#image-animation").on("mouseleave", function(e) {
	$("#image-animation").css("-moz-transform", "");
	$("#image-animation").css("-webkit-transform", "");
	$("#transform").css("border-radius", "");
});