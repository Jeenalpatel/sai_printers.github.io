function onclickmenu(){
	document.getElementById("hamburg").classList.toggle("change");
}
// scrollTop start
$(window).scroll(function(){
	if($(window).scrollTop()>200)
	{
		$("#s_top").show();
	}
	else
	{
		$("#s_top").hide();
	}
});

$("#s_top").click(function(){
	$("html").animate({scrollTop:0},2000);
});
// scrollTop over

// header size start
$(document).ready(function(){
	$(window).scroll(function(){
		if($(this).scrollTop()>0){
			$(".main_hed").css({"background-color" : "rgba(249,243,237,1)"});
		}
		else{
			$(".main_hed").css({"background-color" : "rgba(249,243,237,.5)"});
			
		}
	})
})

// header size over