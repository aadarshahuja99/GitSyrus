<?php
include('connection.php');
     $query = 'SELECT * FROM volunteers2';
     $result = mysqli_query($conn, $query);
     $volunteers = mysqli_fetch_all($result, MYSQLI_ASSOC);
     mysqli_close($conn);
?>

<div class="container">
  <h2>Announce Result For Form1</h2>
  
  <form action="Selector.php" method="POST">
  <input type="submit" class="btn btn-primary" name="publish"></input>
  </form>
  <?php
    
     require 'PHPMailer/PHPMailerAutoload.php';  
     $conn = mysqli_connect("localhost", "root", "", "goonj");
  if(mysqli_connect_errno()){
    echo 'Failed to connect to bradphpblog '. mysqli_connect_errno();
  }
  if (isset($_POST['publish'])){   
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
     

        }?>
  <h1>Volunteers</h1>
  <a href="#rating">Click Here For Ratings</a>
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
          <tr>
  <?php foreach($volunteers as $volunteer) : ?>
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
  <?php endforeach; ?>
  </tr>
  </table>
</div>

<div id ="rating">
<form action="Selector.php" method="POST">
Enter id<input type="text" name="id"></input>
Enter Eratings<input type="text" name="ratings"></input>
<input type="submit" name="submit"></input>
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







</div>
<?php include 'footer.php'; ?>