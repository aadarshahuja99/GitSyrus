<?php
session_start();
error_reporting(0);
include('connection.php');

$EmailId = filter_input(INPUT_POST, 'Email');
$LoginPassword = filter_input(INPUT_POST, 'Password');
$Name = filter_input(INPUT_POST, 'FullName');




$b=$_REQUEST['Email'];
$_SESSION['Email'] = $b;




if (!empty($EmailId) && !empty($LoginPassword)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "goonj";
$db="volunteers1";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "SELECT email FROM volunteers1 WHERE email = '$EmailId' and password = '$LoginPassword' and isselected='yes'";
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);
if($count > 0)
{
	echo "Logged In Successfully";
	echo "<br>";
	echo "Redirecting to Home Page";
	header("refresh: 1; url = check.php"); 
}

else{
	echo "Logged In Successfully";
	header("refresh: 1; url = question.php"); 

}

$conn->close();
}
}
?>