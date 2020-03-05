<?php
     require 'db.php';
     require 'header.php';
     require 'PHPMailer/PHPMailerAutoload.php';
     if (isset($_POST['app'])){
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
               $mail->Password = 'Mummy#papa118810';
               $mail->addAddress('pawanchichariya5@gmail.com');
               $mail->Subject = 'Request For Session';
               $mail->msgHTML('I want To Meet Ypu in Person. ');
               if (!$mail->send()) {
               $error = "Mailer Error: " . $mail->ErrorInfo;
               echo '<p id="para">'.$error.'</p>';
               }
               else {
               echo '<p id="para">Message sent!</p>';
               }
          }
          ?>