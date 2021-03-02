<html>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method = "post">
	<table>
	<tr> <td> Full Name: </td>
	<td> <input type="text" name ="fname"> </td></tr>
	<tr> <td> Email</td>
	<td> <input type="text" name="email"> </td>
	<tr> <td> Username </td>
	<td> <input type="text" name ="uname"> </td></tr>
<tr> <td> Password </td>
	<td> <input type="Password" name ="pass"> </td></tr>
	<tr> <td> Confirm Password: </td>
	<td> <input type="Password" name ="Cpass"> </td></tr>
</tr>
</table>

	
<br>

	<br> <input type = "submit" value="Register">
<input type="Reset" name="Reset" >
</form>

<?php
$validateemail="";
$validatename="";
$validatepassword="";
$validateradio="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$uname=$_REQUEST["uname"];
	$email=$_REQUEST["email"];
	$fname=$_REQUEST["fname"];
	if(empty($uname) && (preg_match("/^[a-zA-Z-' ]*$/",$uname)) && $uname<5)
	{
		$validatename="Please Enter Valid name";
	}
	else
	{
		
	}

	if (empty($email) ||!filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		$validateemail= "Please Enter valid email";
	}
	else
	{
	}

}

$servername="localhost";
$username="root";
$password="";
$conn = new mysqli($servername,$username,$password);
if($conn->connect_error){
	die ("Connection failed: ". $conn->connect_error);
}
echo "Connected successfully";

$sql = "CREATE DATABASE mydata";
if(mysqli_query($conn,$sql))
{
	echo "Database Created Successfuly";
}
else {
	echo "Error Creating database ".mysqli_error($conn);
}

$dbname="mydata";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE data (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Full_name VARCHAR(30) NOT NULL,
Username VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if($conn->query($sql)=== TRUE)
{
	echo "Table CREATED ";
}
else 
{
	echo "Error creating table ".$conn->error;
}



$sql = "INSERT INTO Data (Full_name, Username, email)
VALUES ('$fname', '$uname', '$email')";
if ($conn->query($sql) === TRUE) {
 echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}


?>


</body>
</html>
