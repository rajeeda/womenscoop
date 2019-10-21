// JavaScript Document

var id;
var did;
var dcid;
var dname;
var dcname;

//function to delete user
function deleteuser(id){
var message = confirm("Are you sure you want to delete this user?")
if(message==true)
document.location.href="controlers/usercontroler.php?mode=delete&uid="+id;
}

//function to delete campaign
function deletecampaign(id){
var message = confirm("Are you sure you want to delete this campaign?")
if(message==true)
document.location.href="controlers/campaigncontroler.php?mode=delete&cid="+id;
}

//function to delete press
function deletepress(id){
var message = confirm("Are you sure you want to delete this press?")
if(message==true)
document.location.href="controlers/presscontroler.php?mode=delete&pid="+id;
}

//function to delete news entry
function deletenews(id){
var message = confirm("Are you sure you want to delete this news item?")
if(message==true)
document.location.href="controlers/newscontroler.php?mode=delete&nid="+id;
}

//function to delete news entry
function deleteagenda(id){
var message = confirm("Are you sure you want to delete this agenda item?")
if(message==true)
document.location.href="controlers/agendacontroler.php?mode=delete&aid="+id;
}

function deletecategory(id){
	//("Test" + id);
var message = confirm("Are you sure you want to delete this Country?")
if(message==true)
document.location.href="controlers/categorycontroler.php?mode=delete&catid="+id;
}

function deletecountry(id){
	//("Test" + id);
var message = confirm("Are you sure you want to delete this Country?")
if(message==true)
document.location.href="controlers/country_controler.php?mode=delete&countryid="+id;
}

function deleteawards(id){
	//("Test" + id);
var message = confirm("Are you sure you want to delete this awardees?")
if(message==true)
document.location.href="controlers/award_controler.php?mode=delete&award_id="+id;
}

function deletecore_val(id){
	//("Test" + id);
var message = confirm("Are you sure you want to delete this core value?")
if(message==true)
document.location.href="controlers/Core_val_controler.php?mode=delete&core_id="+id;
}

function deletetesy(id){
	//("Test" + id);
var message = confirm("Are you sure you want to delete this testimonial?")
if(message==true)
document.location.href="controlers/Testimonials_controler.php?mode=delete&testy_id="+id;
}

function deletepartner(id){
	//("Test" + id);
var message = confirm("Are you sure you want to delete this Development Partner?")
if(message==true)
document.location.href="controlers/Testimonials_controler.php?mode=deletepartner&partner_id="+id;
}

function deletepubtype(id){
	//("Test" + id);
var message = confirm("Are you sure you want to delete this Publication Type?")
if(message==true)
document.location.href="controlers/publication_type_controler.php?mode=delete&pubtypeid="+id;
}

function deletepubdoc(id){
	//("Test" + id);
var message = confirm("Are you sure you want to delete this Publication Document?")
if(message==true)
document.location.href="controlers/publication_doc_controler.php?mode=delete&pubdocid="+id;
}

function deletemember(id){
	//("Test" + id);
var message = confirm("Are you sure you want to delete this Member?")
if(message==true)
document.location.href="controlers/membercontroler.php?mode=delete&memberid="+id;
}

function deleteNews(id){
	//("Test" + id);
var message = confirm("Are you sure you want to delete this News ?")
if(message==true)
document.location.href="controlers/newscontroler.php?mode=delete&newsid="+id;
}

function deleteFiles(id){
	//("Test" + id);
var message = confirm("Are you sure you want to delete this file ?")
if(message==true)
document.location.href="controlers/newscontroler.php?mode=deletefile&fileid="+id;
}

function deleteevent(id)
{
	var message =confirm("Are you sure you want to delete this event?")
	if(message=true)
	document.location.href="controlers/eventcontroler.php?mode=delete&eventid="+id;
}

function deleteeventFiles(id){
	//alert("Test" + id);
var message = confirm("Are you sure you want to delete this file ?")
if(message==true)
document.location.href="controlers/eventcontroler.php?mode=deletefile&fileid="+id;
}

function deletepubFiles(id){
	//alert("Test" + id);
var message = confirm("Are you sure you want to delete this file ?")
if(message==true)
document.location.href="controlers/publication_doc_controler.php?mode=deletefile&fileid="+id;
}

function deletecusolution(id)
{
	//alert("Test" + id);
	var message = confirm("Are you sure you want to delete this CU Solution?");
	if(message==true){
	document.location.href="controlers/CUSolutioncontroler.php?mode=delete&solution_id="+id;}
}

function deleteImage(id)
{
	//alert("Test" + id);
	var message = confirm("Are you sure you want to delete this Image?");
	if(message==true){
	document.location.href="controlers/gallarycontroler.php?mode=delete&imageid="+id;}
}

function deletedoc(id)
{
	//alert("Test" + id);
	var message = confirm("Are you sure you want to delete this document?");
	if(message==true){
	document.location.href="controlers/publication_doc_controler.php?mode=deletedoc&docid="+id;}
}

function deleteFilescu(id){
	//alert("Test" + id);
var message = confirm("Are you sure you want to delete this file ?")
if(message==true)
document.location.href="controlers/CUSolutioncontroler.php?mode=deletefile&fileid="+id;
}


function deleteFilesNewsAtt1(id){
	//alert("Test" + id);
var message = confirm("Are you sure you want to delete this file ?")
if(message==true)
document.location.href="controlers/newscontroler.php?mode=deletefile&fileid="+id;
}
function deleteFilesNewsAtt2(id){
	//alert("Test" + id);
var message = confirm("Are you sure you want to delete this file ?")
if(message==true)
document.location.href="controlers/newscontroler.php?mode=deletefile2&fileid="+id;
}



function deletecontactperson(id){
	//alert("Test" + id);
var message = confirm("Are you sure you want to delete this file ?")
if(message==true)
document.location.href="controlers/membercontroler.php?mode=deletecontactperson&contactpersonid="+id;
}

function deleteregulator(id){
	//alert("Test" + id);
var message = confirm("Are you sure you want to delete this file ?")
if(message==true)
document.location.href="controlers/membercontroler.php?mode=deleteregulator&regulatorid="+id;
}

function deleteuser(userid)
{
	var message = confirm("Are you sure you want to delete this User?")
	if(message==true)
	document.location.href="controlers/usercontroler.php?mode=delete&userid="+userid;
}

function deleteAboutUS(aboutid)
{
	var message = confirm("Are you sure you want to delete this Member?")
	if(message==true)
	document.location.href="controlers/aboutuscontroler.php?mode=deleteaboutus&aboutusid="+aboutid;
}

//UpdateNews
function UpdateNewsHome(id,nhome)
{
	//alert("Test" + id);
	//var message = confirm("Are you sure you want to delete this Member?")
	//if(message==true)
	document.location.href="controlers/newscontroler.php?mode=newshome&newsid="+id+"&homenews="+nhome;
}

//UpdateEvent
function UpdateEventHome(eid,ehome)
{
	//alert("Test" + eid);
	//var message = confirm("Are you sure you want to delete this Member?")
	//if(message==true)
	document.location.href="controlers/eventcontroler.php?mode=eventhome&eventid="+eid+"&homeevent="+ehome;
}


function deleteFilesEvents(id){
	//alert("Test" + id);
var message = confirm("Are you sure you want to delete this file ?")
if(message==true)
document.location.href="controlers/eventcontroler.php?mode=deletefile&fileid="+id;
}

//function to delete user


//function to delete about us member
function deleteabout_us_member(id){
	var message = confirm("Are you sure you want to delete this member ?")
	if(message==true)
	document.location.href="controlers/about_us_member_controler.php?mode=delete&u_id="+id;
}

//Function Delete Accu Forum Question
function deleteaccu_forum_question(id){
	var message = confirm("Are you sure you want to delete this Question ?")
	if(message==true)
	document.location.href="controlers/accu_forum_controler.php?mode=delete&qid="+id;
}

//Function Delete Accu Forum Question
function updateaccu_forum_question(id,st){
	if(st==1){
	var message = confirm("Make sure you want to publish this Question ?")
	if(message==true)
	document.location.href="controlers/accu_forum_controler.php?mode=publish&qid="+id+"&ststus="+st;
	}
	else{
	var message = confirm("Make sure you want to unpublish this Question ?")
	if(message==true)
	document.location.href="controlers/accu_forum_controler.php?mode=publish&qid="+id+"&ststus="+st;	
	}
}


// Delete Forum Posts
function deleteaccu_forum_Post(id){
	var message = confirm("Are you sure you want to delete this post ?")
	if(message==true)
	document.location.href="controlers/accu_forum_controler.php?mode=deletepost&pid="+id;
}

//Function Delete Accu Forum Question
function updateaccu_forum_post(id,st){
	if(st==1){
	var message = confirm("Make sure you want to publish this post ?")
	if(message==true)
	document.location.href="controlers/accu_forum_controler.php?mode=publishpost&pid="+id+"&ststus="+st;
	}
	else{
	var message = confirm("Make sure you want to unpublish this post ?")
	if(message==true)
	document.location.href="controlers/accu_forum_controler.php?mode=publishpost&pid="+id+"&ststus="+st;
		
	}
}


// Delete About Us member Documents


function deleteabout_us_doc(did,dcid)
{
	var message = confirm("Are you sure you want to delete this Document ?")
	if(message==true)
	{ 
	document.location.href="controlers/about_us_doc_controler.php?mode=delete&doc_id="+did+"&doc_cate_id="+dcid;
	}
}

function deleteabout_us_doc(did,dname,dcid,dcname)
{
 var message = confirm("Are you sure you want to delete this Document ?")
 if(message==true)
 { 
 document.location.href="controlers/about_us_doc_controler.php?mode=delete&doc_id="+did+"&doc_cate_id="+dcid+"&doc_name="+dname+"&doc_cat_name="+dcname;
 }
}