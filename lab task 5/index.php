<!DOCTYPE HTML>
<html>
<head> 
	<title> Registration</title> 
<link rel="stylesheet" type="text/css" href="mycss.css">

</head>
<body>

<div class="header">
<form class="form" onsubmit="return validateForm()">
<table>

<tr> <td> First Name: </td>
<td><input type="text" id = "first_name" st> </td> </tr>
<tr><td> Last Name: </td>
	<td><input type="text" id = "last_name"> </td> </tr>
<tr><td> Email: </td>
	<td><input type="Email" id = "email"> </td> </tr>
<tr><td> Username: </td>
	<td><input type="text" id = "username"> </td> </tr>
	<tr><td> Password: </td>
	<td><input type="Password" id = "password"> </td> </tr>

<tr><td> Confirm Password: </td>
	<td><input type="ConPassword" id = "cpassword"> </td> </tr>

</table>

	Gender
	<input type="radio" name="Gender">
	Male
	<input type="radio" name="Gender">
	Female 
	<input type="radio" name="Gender">
	Other  
	<br>

Date of Birth:
  <input type="date" id="birthday" name="birthday">
  <br>

  <input type="submit" name="submit" >
  <input type="Reset" name="Reset">
</form>
</div>

</body>
</html>

<script>
const form = document.querySelector('.form');
const firstName = document.querySelector("#first_name").value
const lastName = document.querySelector("#last_name").value
const username = document.querySelector("#username").value
const pwd = document.querySelector("#password").value
const cpwd = document.querySelector("#cpassword").value

function validateForm(){
	if(firstName === "" || lastName === "" || username === "" || pwd === "" || cpwd === ""){
		alert("please input all value");
		return false;
	}
	if(pwd !== cpwd) {
		alert("Password doesnot match");
		return false;
	}
	return true;

}
</script>