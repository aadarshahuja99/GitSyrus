<?php
     require 'db.php';
     require 'header.php';
     require 'PHPMailer/PHPMailerAutoload.php';    
     $query = "SELECT * FROM branch";
     $result = mysqli_query($conn, $query);
    while($row=mysqli_fetch_array($result))
      {
        $doms= $row['domains'];
        $domains=explode(" ",$doms);
        
        $query1="SELECT * from volunteers2 where v2_id in (select v2_id from volunteers2 where suburb_pref1='Borivali' or suburb_pref2='Borivali' or suburb_pref3='Borivali') order by pr_rating desc";
        $result1=mysqli_query($conn,$query1);
      }?>
          
<div class="container">
  <div class="box-body table-responsive no-padding">
  <h2> Suggestions </h2>
     <table class="table table-hover">
          <tr>
              <th>ID</th>
              <th>Experience</th>
              <th>Educational_Rating</th>
              <th>Domain</th>
          </tr>
        <?php foreach($result1 as $r1) : ?>
        <tr>
            <td><?php echo $r1['v2_id']; ?></td>
            <td><?php echo $r1['experience']; ?></td>
            <td><?php echo $r1['er_rating']; ?></td>
            <td><?php echo $r1['field1']; ?></td>
            </tr>
          <?php endforeach; ?>
          </table>
          </div>

          <div id ="rating">
<form action="allocation.php" method="POST">
Enter id<input type="text" class="form-control" name="id"></input><br><br>
Enter Branch Allocated<input type="text" class="form-control" name="ratings"></input>
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

  $query = "UPDATE volunteers2  SET branch__id ='$ratings',is_alloc=1 
  WHERE v2_id = '$id'" ;
  mysqli_query($conn,$query);
  }?>
</div>

          </div>
