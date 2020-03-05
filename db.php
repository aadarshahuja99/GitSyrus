<?php 
  $conn = mysqli_connect('localhost:3307', 'root', '', 'syrus');
  if(mysqli_connect_errno()){
    echo 'Failed to connect to bradphpblog '. mysqli_connect_errno();
  }