function $(id){
	var element = document.getElementById(id);
	if(element== null)
		alert('program error: '+ id +'does not exist.');
	return element;
}

/*match password*/
function testpassword(){
	if(($("password").value)!=($("ConfirmPassword").value))
		$("warnpass").innerHTML="please enter two same password";
	else
		$("warnpass").innerHTML="";
}
/*email*/
function testemail(id){
	var testtmail = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((.com|.ca|.org)$)/;
	var email = $(id).value;
		if (testtmail.test(email))
			return true;
		}
function warnemail(id){
	if(!testemail(id))
		$("warn"+id).innerHTML="please enter valid email";
	else
		$("warn"+id).innerHTML="";
}
/*select*/
function testselect(id){
	return($(id).selectedIndex !=0);
}
function warnselect(id){
	if(!testselect(id))
		alert("you must select a gender");
}