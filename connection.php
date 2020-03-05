<?php

$servername="localhost:3307";
$username="root";
$password="";
$dbname="syrus";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn){

echo"";

}
else{
	echo "connection failed";
}




?>