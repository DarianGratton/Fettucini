function $(id){
	var element = document.getElementById(id);
	if(element== null)
		alert('program error: '+ id +'does not exist.');
	return element;
}

/*match password*/
function testpassword(){
	if(($("password").value.length <= 8))
		$("passwordp").innerHTML="Please enter at least eight characters for your password";
	else if(($("password").value)!=($("ConfirmPassword").value))
		$("warnpass").innerHTML="please enter matching passwords";
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
		$("warn"+id).innerHTML="Please enter valid email";
	else
		$("warn"+id).innerHTML="";
}
/*select*/
function testselect(id){
	return($(id).selectedIndex !=0);
}
function warnselect(id){
	if(!testselect(id))
		alert("You must select a gender");
}

function warnselect2(id) {
	if (!testselect(id))
		alert("You must select a topic");
}

/*user name*/
 		function testusername() {
 			var z =document.getElementById("username").value;
 			if (z.length <= 4)
 				document.getElementById("usernamep").innerHTML="A username requires a minimum of 5 characters";
        }
/*name*/
        function testfirstname() {
        	var x = document.getElementById("firstname").value;
        	if (x.length <= 0)
        		document.getElementById("firstnamep").innerHTML="Please enter your first name";
        }

        function testlastname(){
        	var y = document.getElementById("lastname").value;
        	if (y.length <=0)
        		document.getElementById("lastnamep").innerHTML="Please enter your last name";
        }
/*select robot*/
	function testSelect() {
		var select = document.getElementById("selectrobot").checked;
		if( !testWeb(id) )
			alert("You can't be a robot");
		return false;
	}