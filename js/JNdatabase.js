/*
Program: JNdatabase.js
Purpose: database functions
Author: Jacob Naiyeju
Last Updated: 2014-03-31
*/

function createReviewTable(){
	JNFeedbackDb.transaction(function(tx){
		var sqlString="CREATE TABLE IF NOT EXISTS jnreview("
		+"id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,"
		+"business_name VARCHAR(30) NOT NULL,"
		+"type_id INTEGER NOT NULL,"
		+"reviewer_email VARCHAR(30) NOT NULL,"
		+"reviewer_comment TEXT,"
		+"review_date DATE,"
		+"has_rating VARCHAR(1),"
		+"rating1 INTEGER,"
		+"rating2 INTEGER,"
		+"rating3 INTEGER,"
		+"CONSTRAINT jnreview_fk FOREIGN KEY(type_id) REFERENCES jntype(type_id)"
		+");";
		
		tx.executeSql(sqlString,[],null,errorhandler);
	},errorhandler);
}

function createTypeTable(){
	JNFeedbackDb.transaction(function(tx){
		var sqlString="CREATE TABLE IF NOT EXISTS jntype("
		+"type_id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,"
		+"type_name VARCHAR(20) NOT NULL"
		+");";
		
		tx.executeSql(sqlString,[],null,errorhandler);
	},errorhandler);
}

function dropTypeTable(){
	JNFeedbackDb.transaction(function(tx){
		var query="SELECT COUNT(*) FROM sqlite_master WHERE type='table' and name='jntype'";
		var sqlString="DROP TABLE jntype;";
		
		tx.executeSql(query,[],function(tx,result){
			if(result!=null)
			{
				tx.executeSql(sqlString,[],null,errorhandler);
			}
		},errorhandler);
	},errorhandler);
}
function dropReviewTable(){
	JNFeedbackDb.transaction(function(tx){
		var query="SELECT COUNT(*) FROM sqlite_master WHERE type='table' and name='jnreview'";
		var sqlString="DROP TABLE jnreview;";
		
		tx.executeSql(query,[],function(tx,result){
			if(result!=null)
			{
				tx.executeSql(sqlString,[],null,errorhandler);
			}
		},errorhandler);
	},errorhandler);
}
function get_jntype(){
	JNFeedbackDb.transaction(function(tx){
		var sqlString="INSERT INTO jntype (type_name)" 
		+"VALUES(?);";
		
		tx.executeSql(sqlString,["Coffee Shop"],null,errorhandler);
		tx.executeSql(sqlString,["Canadian"],null,errorhandler);
		tx.executeSql(sqlString,["Asian"],null,errorhandler);
		tx.executeSql(sqlString,["Others"],null,errorhandler);
		
	},errorhandler);
}

function add_jnreview(name,type,email,comment,date,hasrating,rating1,rating2,rating3)
{
	JNFeedbackDb.transaction(function(tx){
		var sqlString='INSERT INTO jnreview(business_name,type_id,'
		+'reviewer_email,reviewer_comment,review_date,has_rating,rating1,'
		+'rating2,rating3)'
		+' VALUES(?,?,?,?,?,?,?,?,?);';
		
		tx.executeSql(sqlString,[name,type,email,comment,
			date,hasrating,rating1,rating2,rating3],function(tx,result){
				alert("record has been inserted sucessfully");
				
			},errorhandler);
	},errorhandler);

}
function edit_jnreview(name,type,email,comment,date,hasrating,rating1,rating2,rating3){
	JNFeedbackDb.transaction(function(tx){
		var sqlString="UPDATE jnreview SET business_name= ?,type_id= ?,"
		+"reviewer_email= ?,reviewer_comment= ?,review_date= ?,has_rating= ?,rating1= ?,"
		+"rating2= ?,rating3= ? "
		+" WHERE id='"+parseInt(localStorage.recordId)
		+"';";
		
		tx.executeSql(sqlString,[name,type,email,comment,
			date,hasrating,rating1,rating2,rating3],function(tx,result){
				alert("record has been updated sucessfully");
			},errorhandler);
	},errorhandler);
}
function deleteReview(){
	JNFeedbackDb.transaction(function(tx){
		var sqlString="DELETE FROM jnreview "
		+" WHERE id='"+parseInt(localStorage.recordId)
		+"';";
		
		tx.executeSql(sqlString,[],function(tx,result){
				alert("record has been deleted");
			},errorhandler);
	},errorhandler);
}
function addDropbox(){
	JNFeedbackDb.transaction(function(tx){
		var sqlString="SELECT * FROM jntype ORDER BY type_name DESC;";
		
		tx.executeSql(sqlString,[],function(tx,result){
			var dropcontent="";
			var dropcontent2="";
			for(var i=0;i<result.rows.length;i++)
			{
				var mike=result.rows.item(i);
				if(i==0){
					dropcontent += '<option id="'+mike['type_id']+'"'
					+' value="'+ mike['type_id']
					+'" selected="'
					+'selected"'
					+'>'+mike['type_name']
					+'</option>';
					dropcontent2 += '<option id="E'+mike['type_id']+'"'
					+' value="'+ mike['type_id']
					+'">'+mike['type_name']
					+'</option>';
				}
				else
				{
					dropcontent += '<option id="'+mike['type_id']+'"' 
					+' value="'+ mike['type_id']
					+'"'
					+'>'+mike['type_name']
					+'</option>';
					dropcontent2 += '<option id="E'+mike['type_id']+'"' 
					+' value="'+ mike['type_id']
					+'"'
					+'>'+mike['type_name']
					+'</option>';
				}
			}
			$("#jnDropList").html(dropcontent);
			$("#jnEDropList").html(dropcontent2);
			
		},errorhandler);
	});
}

function retrieveReviews(){
	JNFeedbackDb.transaction(function(tx){
		var sqlString="SELECT * FROM jnreview;";
		tx.executeSql(sqlString,[],function(tx,result){
			var stringHtml='';
			for(var i=0;i<result.rows.length;i++){
				var item=result.rows.item(i);
				stringHtml+=buildListItem(item);;
			}
			addReviewsToHtml(stringHtml);
		},errorhandler);
	},errorhandler);
}
function countEntries(){
	JNFeedbackDb.transaction(function(tx){
		var sqlString="SELECT * FROM jnreview;";
		
		tx.executeSql(sqlString,[],function(tx,res){
			var number=res.rows.length;
			var result=confirm("All "+number+" review records will be deleted permanently. Continue?");
			if(result==true)
			{
				dropReviewTable();
				alert("review records has been deleted");
			}
		},errorhandler);
	},errorhandler);
	return number;
}
function fillReviewRecord(value){
	localStorage.setItem("recordId",value);
	JNFeedbackDb.transaction(function(tx){
		var sqlString="SELECT * FROM jnreview WHERE id= ? ;";
		
		tx.executeSql(sqlString,[value],function(tx,result){
			var record=result.rows.item(0);
			addRecordToFields(record);
		},errorhandler);
	});
	$('select').selectmenu('refresh');
}

function searchTable(value){
	JNFeedbackDb.transaction(function(tx){
		var sqlString="SELECT * FROM jnreview WHERE business_name LIKE ?;";
		tx.executeSql(sqlString,['%'+value+'%'],function(tx,result){
			var stringHtml='';
			for(var i=0;i<result.rows.length;i++){
				var item=result.rows.item(i);
				stringHtml+=buildListItem(item);;
			}
			$("#jnsearchResults").html(stringHtml);
			$('#jnsearchResults').listview();
			$('#jnsearchResults').listview('refresh');
		},errorhandler);
	},errorhandler);
}
