
var imageCount=0;
var maxCount=4;
localStorage["imageCount"]=imageCount;

function stringbuild(data){
	
}


function testSwipe(){
	imageCount++;
	localStorage.imageCount=imageCount;
	displayNext();
}
function displayNext(){
	if(imageCount>maxCount){
		
	}
	else{
		$('#img_'+localStorage.imageCount).removeClass("img").addClass("swipe");
		$('#img_'+((parseInt(localStorage.imageCount))-1)).removeClass("swipe").addClass("img");
	}
}

$(document).ready(function(){

	$("#images_holder").swipe({
	swipeLeft:function(event, direction, distance, duration, fingerCount) {
    //This only fires when the user swipes left
	imageCount++;
	localStorage.imageCount=imageCount;
	displayNext();
	}});
});