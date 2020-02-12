<?php
     require 'db.php';
     require 'header.php';
     require 'PHPMailer/PHPMailerAutoload.php';    
     $query = 'SELECT pr_rating FROM volunteers2';
     $result = mysqli_query($conn, $query);
     while($row=mysqli_fetch_array($result))
     {
          if($row['pr_rating']>=3)
          {
               // $email = $_POST['email'];
               // $password = $_POST['password'];
               // $to_id = $_POST['toid'];
               // $message = $_POST['message'];
               // $subject = $_POST['subject'];
               $mail = new PHPMailer;
               $mail->isSMTP();
               $mail->Host = 'smtp.gmail.com';
               $mail->Port = 587;
               $mail->SMTPSecure = 'tls';
               $mail->SMTPAuth = true;
               $mail->Username = 'aadarshahuja99@gmail.com';
               $mail->Password = 'mummy#papa3000';
               $mail->addAddress('2017.sahil.t@ves.ac.in');
               $mail->Subject = 'Geography';
               $mail->msgHTML('this is to inform you that you are selected .... welcome to the TAP Family');
               if (!$mail->send()) {
               $error = "Mailer Error: " . $mail->ErrorInfo;
               echo '<p id="para">'.$error.'</p>';
               }
               else {
               echo '<p id="para">Message sent!</p>';
               }
          }
           
          else
          {
               // $email = $_POST['email'];
               // $password = $_POST['password'];
               // $to_id = $_POST['toid'];
               // $message = $_POST['message'];
               // $subject = $_POST['subject'];
               $mail = new PHPMailer;
               $mail->isSMTP();
               $mail->Host = 'smtp.gmail.com';
               $mail->Port = 587;
               $mail->SMTPSecure = 'tls';
               $mail->SMTPAuth = true;
               $mail->Username = 'aadarshahuja99@gmail.com';
               $mail->Password = 'mummy#papa3000';
               $mail->addAddress('2017.sahil.t@ves.ac.in');
               $mail->Subject = 'Geography';
               $mail->msgHTML('this is to inform you that you are not selected');
               if (!$mail->send()) {
               $error = "Mailer Error: " . $mail->ErrorInfo;
               echo '<p id="para">'.$error.'</p>';
               }
               else {
               echo '<p id="para">Message sent!</p>';
               }
          }
               // else{
               // echo '<p id="para">Please enter valid data</p>';
               // }            
          }

     mysqli_close($conn);
     

?>