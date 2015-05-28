/*
Program: JNglobal.js
Purpose: global varaibles functions
Author: Jacob Naiyeju
Last Updated: 2014-03-31
*/
var JNFeedbackDb;
var numberOfEntries;

function errorhandler(tx, error)
{
	alert("SQL Error:"+error);
}



$(document).ready(function(){
	JNFeedbackDb=openDatabase("JNFeedbackDb","1.0","JNFeedback DB",2*1024*1024);
	 
	dropTypeTable();
	createTypeTable();
	createReviewTable();
	get_jntype();
	addDropbox();
	$("#jnratingFields").hide();
	$("#jnEratingFields").hide();
	$("#jnchkAddRatings").toggle(function(){
		$("#jnratingFields").show();
		$(".jnvalue").change(function(){
		calculateOverallDisplay(parseInt($("#jntxtrFood").val()),
			parseInt($("#jntxtrService").val()),parseInt($("#jntxtrValue").val()));
	});
	},function(){
		resetRatingFields();
		$("#jnratingFields").hide();
	});
	
	$("#jnEchkAddRatings").toggle(function(){
		
		$("#jnEratingFields").show();
		$(".jnvalue").change(function(){
		calculateEOverallDisplay(parseInt($("#jnEtxtrFood").val()),
			parseInt($("#jnEtxtrService").val()),parseInt($("#jnEtxtrValue").val()));
		});
	
	},function(){
		$("#jnEratingFields").hide();
	
	});
		$("#jnbtnSubmit").tap(function(){
		handleAddForm();
		resetToDefault();
		return false;
	});
	$("#jnbtnClearData").tap(function(){
		var result=confirm("All review records will be deleted permanently. Continue?");
		if(result==true){
			dropReviewTable();
			alert("review records has been deleted");
		}
	});
	$("#jnbtnClearData2").tap(function(){
		countEntries();
	});
	$("#jnbtnAboutUs").tap(function(){
		displayAbout();
	});
	$("#jnbtnSaveDefault").tap(function(){
		handlesSettingsForm();
		return false;
	});
	setDateField();
	if(localStorage.default_email!=null){
		$("#jntxtRemail").val(localStorage.default_email);
		$("#jnDRemail").val(localStorage.default_email);
	}
	setDateField();
	$('#JNViewFeedback').live("pageshow", function(){
    	retrieveReviews;
	});
	$('#JNViewFeedback').on("pageshow",retrieveReviews);
	
	$("#jnbtnupdate").click(function(){
		handleEditForm();
		$.mobile.changePage("#JNViewFeedback");
		return false;
	});
	$("#jnbtndelete").click(function(){
		var choice = confirm("Are you sure you want to delete record?");
		if(choice == true){
			deleteReview();
			$.mobile.changePage("#JNViewFeedback");
			}
		return false;
	});
	$("#jnbtncancel").click(function(){
		$.mobile.changePage("#JNViewFeedback");
		return false;
	});
});


