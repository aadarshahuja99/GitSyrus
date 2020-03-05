<?php
include('navbar.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Health medical template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="container">
<h1 class="header1">OUR EXPERTS</h1>
</div>
<div class="container">
<div class="list0">
<div class="image">
<img src="https://stardomspree.com/wp-content/uploads/2019/05/Sandeep-Maheshwari-Biography-Age-Height-Education-and-Family.jpg" class="round">
</div>
<div class="content">
<h1 class="dot">Dr Sandeep Maheshwari</h1>
<p class="innerdot">Contributed in making career of thousands</p>
<form action="onetoone.php" method="POST">
<input type="submit" name="app" class="btn btn-primary">Make an Appointment
</form>

<?php
     require 'db.php';
     require 'header.php';
     require 'PHPMailer/PHPMailerAutoload.php';
     if (isset($_POST['app'])){ 

        
        
        $mail = new PHPMailer;
        //$mail->SMTPDebug = 3;                               // Enable verbose debug output
        
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.mandrillapp.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'aadarshahuja99@gmail.com';                 // SMTP username
        $mail->Password = 'Mummy#papa118810';                           // SMTP password
        $mail->Port = 587;                                    // TCP port to connect to
        $mail->SMTPSecure = 'tls';
        $mail->From = 'aadarshahuja99@gmail.com';
        $mail->FromName = 'aadarsh';
        $mail->addAddress('pawanchichariya5@gmail.com');               // Name is optional
        
        $mail->isHTML(true);                                  // Set email format to HTML
        
        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }


    }
    ?>
</div>
</div>
<br>
<br>
<br>
</div>
</div>
<div>
</div>
<br>
<br>
<br>
</body>
