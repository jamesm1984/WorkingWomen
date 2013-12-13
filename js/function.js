var jobState = "jobs";
var currentImage = "image1";

$(document).ready(function(){
	$("#mobileNav").click(function(){
		$("nav").slideToggle(500);
	});
	$("#volunteerPositions").click(function(){
		if (jobState==="jobs"){
			$("#ledgendV").removeClass("hidden");
			$("#jobListingsV").removeClass("hidden");
			$("#ledgendJ").addClass("hidden");
			$("#jobListingsJ").addClass("hidden");

			$("#indicatorJ").css("background-Image","url(../images/arrow.png)");
			$("#indicatorJ").css("margin","15px 10px");

			$("#indicatorV").css("background-Image","url(../images/arrow_down.png)");
			$("#indicatorV").css("margin","5px 20px");

			jobState="volunteer";
		}
	});
	$("#jobPositions").click(function(){
		if (jobState==="volunteer"){
			$("#ledgendV").addClass("hidden");
			$("#jobListingsV").addClass("hidden");
			$("#ledgendJ").removeClass("hidden");
			$("#jobListingsJ").removeClass("hidden");

			$("#indicatorJ").css("background-Image","url(../images/arrow_down.png)");
			$("#indicatorJ").css("margin","5px 20px");

			$("#indicatorV").css("background-Image","url(../images/arrow.png)");
			$("#indicatorV").css("margin","15px 10px");

			jobState = "jobs";
		}
	});
	$(".image1").click(function(){
		if (currentImage !== "image1"){
			$("#image2Overlay").removeClass("current");
			$("#image3Overlay").removeClass("current");
			$("#image4Overlay").removeClass("current");
			$("#image5Overlay").removeClass("current");
			$("#image1Overlay").addClass("current");
			document.getElementById("overLayText").innerHTML="Image 1";
			$("#mainImage").css("background","url(/images/picture1.jpg)");
			$("#mainImage").css("background-size","100% 100%");
			currentImage = "image1";
		}
	});
	$(".image2").click(function(){
		if (currentImage !== "image2"){
			$("#image1Overlay").removeClass("current");
			$("#image3Overlay").removeClass("current");
			$("#image4Overlay").removeClass("current");
			$("#image5Overlay").removeClass("current");
			$("#image2Overlay").addClass("current");
			document.getElementById("overLayText").innerHTML="Image 2";
			$("#mainImage").css("background","url(/images/picture2.jpg)");
			$("#mainImage").css("background-size","100% 100%");
			currentImage = "image2";
		}
	});
	$(".image3").click(function(){
		if (currentImage !== "image3"){
			$("#image1Overlay").removeClass("current");
			$("#image2Overlay").removeClass("current");
			$("#image4Overlay").removeClass("current");
			$("#image5Overlay").removeClass("current");
			$("#image3Overlay").addClass("current");
			document.getElementById("overLayText").innerHTML="Image 3";
			$("#mainImage").css("background","url(/images/picture3.jpg)");
			$("#mainImage").css("background-size","100% 100%");
			currentImage = "image3";
		}
	});
	$(".image4").click(function(){
		if (currentImage !== "image4"){
			$("#image1Overlay").removeClass("current");
			$("#image2Overlay").removeClass("current");
			$("#image3Overlay").removeClass("current");
			$("#image5Overlay").removeClass("current");
			$("#image4Overlay").addClass("current");
			document.getElementById("overLayText").innerHTML="Image 4";
			$("#mainImage").css("background","url(/images/picture4.jpg)");
			$("#mainImage").css("background-size","100% 100%");
			currentImage = "image4";
		}
	});
	$(".image5").click(function(){
		if (currentImage !== "image5"){
			$("#image1Overlay").removeClass("current");
			$("#image2Overlay").removeClass("current");
			$("#image3Overlay").removeClass("current");
			$("#image4Overlay").removeClass("current");
			$("#image5Overlay").addClass("current");
			document.getElementById("overLayText").innerHTML="Image 5";
			$("#mainImage").css("background","url(/images/picture5.jpg)");
			$("#mainImage").css("background-size","100% 100%");
			currentImage = "image5";
		}
	});
	$("button").click(function(){
		$("#application").css("display","block");
	});
});