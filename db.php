<?php 
  $conn = mysqli_connect('localhost', 'root', '', 'goonj');
  if(mysqli_connect_errno()){
    echo 'Failed to connect to bradphpblog '. mysqli_connect_errno();
  }