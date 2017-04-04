/*1. MAKE MULTIPLE AND CONSOLIDATE FORM VALIDATION FORMS HERE (SIGN UP, CONTACT US, LOGIN, REGISTER). 
  2. Typed this to STANDARDIZE ID names, so we don't have to make too many Script forms*/
  
  
/*               HTML-->SCRIPT  SCRIPT->PHP?        SCRIPT->HTML+CSS        SCRIPT->HTML+CSS
    functionID	    id HTML(IN)	id script(outbound)	innerHTML(text alert)	innerclassName(css errors)		1stInnerHTML*		2ndclassName*			comments (what needs work?)
1. testpassword 				@MAKE FORM_VALIDATE FOR OUTBOUND
	<=8				password	password			passwordp				PASSWORD, WARNPASS
	eIF !Val=Val	password						warnpass				WARNPASS
	if  !Val=Val	password						warnpass				WARNPASS
	else											warnpass
	
2. testemail
	IF TRUE.											
   warnemail										warn +id				WARNEMAIL
													warn +id				WARNEMAIL
		else										warn +id
3. testselect (registration form?)
	warnselect										'ALERT'					WARNGENDER
4. warnselect2 (CONTACT US) NEED TO SET VALUE = 0 to work.'ALERT'			WARNGENDER2

5. USERNAME
id username 
	<=4												usernamep				usernamesign
id firstname
	<=0												firstnamep				usernamesign
id lastname
	<=0												lastnamep

6. selectrobot
	if !(id_										'ALERT'
	
7.	val



FORM_VALIDATE (BELOW)
1. login

2. signup

3. contactus.
*/

function $(id){
	var element = document.getElementById(id);
	if(element== null)
		alert('program error: '+ id +'does not exist.');
	return element;
}

/*match password*/
function testpassword(){
<<<<<<< HEAD
	if(($("password").value.length <= 8))
		$("passwordp").innerHTML="Please enter at least eight characters for your password";
		$("PASSWORD").className="error";
	else if(($("password").value)!=($("ConfirmPassword").value))
		$("warnpass").innerHTML="The passwords do not match. Please try again.";
		$("WARNPASS").className="error";
=======
	if(($("password").value)!=($("ConfirmPassword").value))
		$("warnpass").innerHTML="The passwords do not match. Please try again.";
		$("WARNPASS").className="error";
>>>>>>> e59baf4bf058eaf03b1b1457ec212178e70ad13a
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
<<<<<<< HEAD
		$("warn"+id).innerHTML="Please enter valid email";
		$("WARNEMAIL").className="error";
=======
		$("warn"+id).innerHTML="please enter valid email";
		$("WARNEMAIL2").className="error";
>>>>>>> e59baf4bf058eaf03b1b1457ec212178e70ad13a
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
		$("WARNGENDER").className="error";
}

function warnselect2(id) {
	if (!testselect(id))
		alert("You must select a topic");
		
		$("WARNGENDER2").className="error";
}

/*user name*/
 		function testusername(id) {
 			var z =document.getElementById("username").value;
 			if (z.length <= 4)
 				document.getElementById("usernamep").innerHTML="A username requires a minimum of 5 characters";
				$("usernamesign").className="error";
        }
/*name*/
        function testfirstname() {
        	var x = document.getElementById("firstname").value;
        	if (x.length <= 0)
        		document.getElementById("firstnamep").innerHTML="Please enter your first name";
				$("usernamesign").className="error";
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
	
/*contact us*/
	
/*validateREG/loginSignatures*/
		function validatesignUp() {
			if(testusername(usernamesign))
				return true;
			else
				return false;
		}
		
		function validatelogin() {
		}