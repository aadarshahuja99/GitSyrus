<?php

$a= "Today is " . date("l");

if($a=="Tuesday" or $a=="Wednesday")
{
header("refresh: 1; url = satreg.php"); 

}
else{
echo"saturday registeration can be only filled on tuesdays and wednesdays";
	header("refresh: 3; url = index.html"); 
}

?>