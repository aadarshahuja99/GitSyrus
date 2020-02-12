<?php
     require 'db.php';
     require 'header.php';
     require 'PHPMailer/PHPMailerAutoload.php';     $query = 'SELECT city, field1 FROM volunteers1';
     $result = mysqli_query($conn, $query);
     while($row=mysqli_fetch_array($result))
     {
          if($row['city']=='others' or $row['field1']=='others')
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
               $mail->addAddress('aadarshahuja99@gmail.com');
               $mail->Subject = 'Geography';
               $mail->msgHTML('this is to inform you that you ae through to the next round....your username is your email and your password is your email for login purpose');
               if (!$mail->send()) {
               $error = "Mailer Error: " . $mail->ErrorInfo;
               echo '<p id="para">'.$error.'</p>';
               }
               else {
               echo '<p id="para">Message sent!</p>';
               }
          }
               
               else{
               echo '<p id="para">Please enter valid data</p>';
               }            
          }

     mysqli_close($conn);
     

?>
