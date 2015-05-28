/*
Program: JNutils.js
Purpose: utilities(functions )
Author: Jacob Naiyeju
Last Updated: 2014-03-31
*/

function search(){
	$('#JNFeedbackList').html("");
	var value=$("#jnsearchText").val();
	searchTable(value);
}
function addRecordToFields(record){
			localStorage.setItem("recordId",record['id']);
			if($("#jnEchkAddRatings").is(':checked')){
				$("#jnElblchkAddRatings").click();
			}
        	$("#jnEtxtBname").val(record['business_name']);
        	$("#jnEtxtRemail").val(record['reviewer_email']);
        	$("#jnEtxtarea").val(record['reviewer_comment']);
        	$("#jnEtxtRDate").val(record['review_date']);
        	if(record['has_rating']='Y'){
        		$("#jnElblchkAddRatings").click(); 		
        	}
        	$("#jnEtxtrFood").val(record['rating1']);
			$("#jnEtxtrService").val(record['rating2']); 	
			$("#jnEtxtrValue").val(record['rating3']);
			$("#jnEtxtrOverall").val(calculateOverall(record['rating1'],record['rating2'],record['rating3']));
			$("#E"+record['type_id']).attr('selected',true);
        	$('select').selectmenu('refresh');
        	
}
function buildListItem(item){
	var string = '  <li data-icon = "false">'
            		+'<a id="'+item['id']
            		+'" onclick="'
            		+'fillReviewRecord('+item['id']
            		+')"'
            		+' href="'
            		+'#JNEditFeedback" data-theme="b">'
            		+'<h4>Business Name:' + item['business_name']
            		+'</h4>'
                	+'<p>Reviewer Email:' + item['reviewer_email']
            		+'</p>'
                	+'<p>Comments:' 
                	+ item['reviewer_comment']
            		+'</p>'
                	+'<p>Overall rating:'
                	+ calculateOverall(item['rating1'],item['rating2'],item['rating3']) 
                	+'% </p></a></li>';
	
	return string;
}

function addReviewsToHtml(string){
	$('#JNFeedbackList').html(string);
	$('#JNFeedbackList').listview();
	$('#JNFeedbackList').listview('refresh');
}

function resetToDefault(){
	$("#jnAddForm input").val("");
	$("#jntxtarea").val("");
	$("#jnDropList").val("4");
	$("#jntxtRemail").val(localStorage.default_email);
}
function resetRatingFields(){
	$("#jntxtrFood").val('0');
	$("#jntxtrService").val('0');
	$("#jntxtrValue").val('0');
	$("#jntxtrOverall").val('0');
}
function handlesSettingsForm(){
	$("#jnsettingsForm").validate({
		rules:{
			jnDRemail:{
				required:true
			}
		},
		messages:{
			jnDRemail:{
				required:"Email must be in proper format"
			}
		}
	});
	if($('#jnsettingsForm').valid()){
		storeDefaultEmail();
	}
}
function handleAddForm()
{
	$("#jnAddForm").validate({
		rules:
		{
			jntxtBname:
			{
				required:true,
				rangelength:[2,30]
			},
			jntxtRemail:
			{
				required:true
			},
			jntxtRDate:{
				required:true
			},
			jntxtrFood:
			{
				min: 0,
				max: 5
			},
			jntxtrService:
			{
				min: 0,
				max: 5
			},
			jntxtrValue:
			{
				min: 0,
				max: 5
			}
		},
		messages:
		{
			jntxtBname:
			{
				required:"This is a required field",
				rangelength:"Business name must be between 2 and 30 characters long"
			},
			jntxtRemail:
			{
				required:"Reviewer email is required"
			},
			jntxtRDate:{
				required:"Reviewer date is required"
			},
			jntxtrFood:
			{
				min: "Please enter a value between 0 and 5",
				max: "Please enter a value between 0 and 5"
			},
			jntxtrService:
			{
				min: "Please enter a value between 0 and 5",
				max: "Please enter a value between 0 and 5"
			},
			jntxtrValue:
			{
				min: "Please enter a value between 0 and 5",
				max: "Please enter a value between 0 and 5"
			}
		}
	});
	
	if ($("#jnAddForm").valid()){
		var name =$('#jntxtBname').val();
		var type =parseInt($("#jnDropList").val());
		var email=$('#jntxtRemail').val();
		var comment=$('#jntxtarea').val();
		var date=$('#jntxtRDate').val();
		var hasrating='N';
		if($("#jnchkAddRatings").is(':checked')){
			hasrating='Y';
		}
		var rating1=parseInt($('#jntxtrFood').val());
		var rating2=parseInt($('#jntxtrService').val());
		var rating3=parseInt($('#jntxtrValue').val());
		
		add_jnreview(name,type,email,comment,date,hasrating,rating1,rating2,rating3);
	
	}
	
	
}
function handleEditForm(){
	$("#jnEditForm").validate({
		rules:
		{
			jnEtxtBname:
			{
				required:true,
				rangelength:[2,30]
			},
			jnEtxtRemail:
			{
				required:true
			},
			jnEtxtRDate:{
				required:true
			},
			jnEtxtrFood:
			{
				min: 0,
				max: 5
			},
			jnEtxtrService:
			{
				min: 0,
				max: 5
			},
			jnEtxtrValue:
			{
				min: 0,
				max: 5
			}
		},
		messages:
		{
			jnEtxtBname:
			{
				required:"This is a required field",
				rangelength:"Business name must be between 2 and 30 characters long"
			},
			jnEtxtRemail:
			{
				required:"Reviewer email is required"
			},
			jnEtxtRDate:{
				required:"Reviewer date is required"
			},
			jnEtxtrFood:
			{
				min: "Please enter a value between 0 and 5",
				max: "Please enter a value between 0 and 5"
			},
			jnEtxtrService:
			{
				min: "Please enter a value between 0 and 5",
				max: "Please enter a value between 0 and 5"
			},
			jnEtxtrValue:
			{
				min: "Please enter a value between 0 and 5",
				max: "Please enter a value between 0 and 5"
			}
		}
	});
	if ($("#jnEditForm").valid()){
		var name =$('#jnEtxtBname').val();
		var type =parseInt($("#jnEDropList").val());
		var email=$('#jnEtxtRemail').val();
		var comment=$('#jnEtxtarea').val();
		var date=$('#jnEtxtRDate').val();
		var hasrating='N';
		if($("#jnEchkAddRatings").is(':checked')){
			hasrating='Y';
		}
		var rating1=parseInt($('#jnEtxtrFood').val());
		var rating2=parseInt($('#jnEtxtrService').val());
		var rating3=parseInt($('#jnEtxtrValue').val());
		
		edit_jnreview(name,type,email,comment,date,hasrating,rating1,rating2,rating3);
	
	}
}
function setDateField(){
	var now = new Date();
	var today=now.toJSON().slice(0,10);
    $("#jntxtR2Date").attr('value',today);
}
function calculateOverallDisplay(rating1,rating2,rating3){
	$("#jntxtrOverall").val(calculateOverall(rating1,rating2,rating3));
}
function calculateEOverallDisplay(rating1,rating2,rating3){
	$("#jnEtxtrOverall").val(calculateOverall(rating1,rating2,rating3));
}
function calculateOverall(rating1,rating2,rating3)
{
 	var foodQuality=0;
 	var service=0;
 	var value=0;
 	var rating=0;
 	
 	foodQuality=rating1;
 	service=rating2;
 	value=rating3;
 	
 	rating=((foodQuality/15)+(service/15)+(value/15))*100;
 	
 	return rating;
}

function storeDefaultEmail(){
	var demail=$("#jnDRemail").val();
	localStorage["default_email"]=demail;
	$("#jnDRemail").val("");
}
