<?php
     require 'db.php';
     require 'header.php';
     $query = 'SELECT * FROM volunteers2';
     $result = mysqli_query($conn, $query);
     $volunteers = mysqli_fetch_all($result, MYSQLI_ASSOC);
     mysqli_close($conn);
?>
<div class="container">
<div class="top">
  <h2>Announce Result For Form1</h2>
  
  <form action="Selector.php" method="POST">
  <input type="submit" class="btn btn-primary" name="publish"></input>
  </form>
  <h2>Announce Result For Form2</h2>
  
  <form action="Selector.php" method="POST">
  <input type="submit" class="btn btn-primary" name="publish1"></input>
  </form>
  <h2>Announce Result For Telephonic Interview</h2>
  
  <form action="Selector.php" method="POST">
  <input type="submit" class="btn btn-primary" name="publish2"></input>
  </form>
  </div>
  <?php
     require 'db.php';
     require 'PHPMailer/PHPMailerAutoload.php';  
     $conn = mysqli_connect("localhost", "root", "", "goonj");
  if(mysqli_connect_errno()){
    echo 'Failed to connect to bradphpblog '. mysqli_connect_errno();
  }
  if (isset($_POST['publish'])) {   
     $query = 'SELECT email,city, field1 FROM volunteers1';
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
               $mail->addAddress($row['email']);
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
               $mail->addAddress('pawanchichariya5@gmail.com');
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
         
               // else{
               // echo '<p id="para">Please enter valid data</p>';
               // }            
          }
          mysqli_close($conn);
     }

          if (isset($_POST['publish1'])){   
               $query = 'SELECT er_rating FROM volunteers2';
               $result = mysqli_query($conn, $query);
               while($row=mysqli_fetch_array($result))
               {          
               if($row['er_rating']>=3)
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
                    $mail->msgHTML('this is to inform you that you are selected for the telephonic interview round');
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
          }
                    // else{
                    // echo '<p id="para">Please enter valid data</p>';
                    // }            
                    mysqli_close($conn);
               }

          if (isset($_POST['publish2'])){   
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
                    $mail->msgHTML('this is to inform you that you are selected for the telephonic interview round');
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
          }
                    // else{
                    // echo '<p id="para">Please enter valid data</p>';
                    // }            
                    mysqli_close($conn);
               }
                    
     

        ?>
  <h1>Volunteers</h1>
  <div class="box-body table-responsive no-padding">
     <table class="table table-hover">
          <tr>
              <th>ID</th>
              <th>Experience</th>
              <th>Description</th>
              <th>Suburb1</th>
              <th>Suburb2</th>
              <th>Suburb3</th>
              <th>Answer1</th>
              <th>Answer2</th>
              <th>Answer3</th>
              <th>Field</th>
          </tr>
  <?php foreach($volunteers as $volunteer) : ?>
  <tr>
    <td><?php echo $volunteer['v2_id']; ?></td>
    <td><?php echo $volunteer['experience']; ?></td>
    <td><?php echo $volunteer['description']; ?></td>
    <td><?php echo $volunteer['suburb_pref1']; ?></td>
    <td><?php echo $volunteer['suburb_pref2']; ?></td>
    <td><?php echo $volunteer['suburb_pref3']; ?></td>
    <td><?php echo $volunteer['answer1']; ?></td>
    <td><?php echo $volunteer['answer2']; ?></td>
    <td><?php echo $volunteer['answer3']; ?></td>
    <td><?php echo $volunteer['field1']; ?></td>
    </tr>
  <?php endforeach; ?>
  </table>
</div>

<div id ="rating">
<div id ="rating">
<form action="Selector.php" method="POST">
Enter id<input type="text" class="form-control" name="id"></input>
Enter Educational ratings<input type="text" class="form-control" name="ratings"></input>
<br><input type="submit" name="submit"></input><br>
</form>
<?php
  $conn = mysqli_connect("localhost", "root", "", "goonj");
  if(mysqli_connect_errno()){
    echo 'Failed to connect to bradphpblog '. mysqli_connect_errno();
  }
  if (isset($_POST['submit'])){
  $id=mysqli_real_escape_string($conn,$_POST['id']);
  
  $ratings=mysqli_real_escape_string($conn,$_POST['ratings']);
  $query = "UPDATE volunteers2  SET er_rating ='". $ratings ."' 
  WHERE v2_id = '".$id."'" ;
  mysqli_query($conn,$query);
  }?>
<form action="Selector.php" method="POST">
Enter id<input type="text" class="form-control" name="id"></input>
Enter Phone Interview ratings<input type="text" class="form-control" name="Pratings"></input>
<br><input type="submit" name="submit1"></input><br>
</form>
<?php
  $conn = mysqli_connect("localhost", "root", "", "goonj");
  if(mysqli_connect_errno()){
    echo 'Failed to connect to bradphpblog '. mysqli_connect_errno();
  }
  if (isset($_POST['submit1'])){
  $id=mysqli_real_escape_string($conn,$_POST['id']);
  
  $Pratings=mysqli_real_escape_string($conn,$_POST['Pratings']);
  $query = "UPDATE volunteers2  SET pr_rating ='". $Pratings ."' 
  WHERE v2_id = '".$id."'" ;
  mysqli_query($conn,$query);
  }?>
</div>
<?php include 'footer.php'; ?>