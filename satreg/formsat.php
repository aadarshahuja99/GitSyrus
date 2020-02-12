<?php
include('connection.php');
error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V5</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">



			
			<form class="contact100-form validate-form" method="POST" action="formsat.php">
				<span class="contact100-form-title">
					SATURDAY REGISTERATION FORM
				</span>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">EMAIL ADDRESS</span>
					<input class="input100" type="text" name="email" placeholder="Enter Your Name">
				</div>

				<div class="wrap-input100 validate-input bg1 " data-validate = "Enter Your Email (e@a.x)">
					<span class="label-input100">NAME</span>
					<input class="input100" type="text" name="name" placeholder="Enter Your Email ">
				</div>


				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">CLUB</span>
					<div>
						<select class="js-select2" name="club">
							
          <option value="dance"><div>DANCE</div>         &nbsp   <div></div></option>
          
           <option value="drama"><div>DRAMA</div>         &nbsp   <div></div></option>
          
          <option value="coding"><div>CODING</div>         &nbsp   <div></div></option>

            <option value="electronics"><div>ELECTRONICS</div>         &nbsp   <div></div></option>

              <option value="public speaking"><div>PUBLIC SPEAKING</div>         &nbsp   <div></div></option>
          
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				
					

				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100">Reasson For Absence</span>
					<textarea class="input100" name="reason" placeholder="Your message here..."></textarea>
				</div>


<!-- 				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">Date Of Absence</span>
					<input class="input100" type="date" name="date1" placeholder="Enter Your Name">
				</div>
 -->
      <div class="question wrap-input100 validate-input bg1">
        <p><strong>Do You Have Substitute</strong></p>
        <div class="question-answer">
          <div>
            <input type="radio" value="yes" id="radio_1" name="substitute"/>
            <label for="radio_1" class="radio"><span>Yes</span></label>
          </div>
          <div>
            <input type="radio" value="no" id="radio_2" name="substitute"/>
            <label for="radio_2" class="radio"><span>No</span></label>
          </div>
        </div>
      </div>



      <div class="wrap-input100 validate-input bg0 " data-validate = "">
					<span class="label-input100">Details of substitute</span>
					<textarea class="input100" name="subsidetails" placeholder="Name ,Contact,Phone"></textarea>
				</div>


				  <div class="question wrap-input100 validate-input bg1">
        <p><strong>City</strong></p>
        <div class="question-answer">
          <div>
            <input type="radio" value="mumbai" id="radio_1" name="city"/>
            <label for="radio_1" class="radio"><span>Mumbai</span></label>
          </div>
          <div>
            <input type="radio" value="pune" id="radio_2" name="city"/>
            <label for="radio_2" class="radio"><span>Pune</span></label>
          </div>
        </div>
      </div>





				<div class="container-contact100-form-btn">
					<div class="btn-block">
          <input type="submit" name="submit" class="button btn  btn-lg btn-success " >
        </div>
   				</div>
			</form>
		</div>
	</div>




<?php







if(isset($_POST['submit'])){


$a=$_POST['email'];
$b=$_POST['name'];
$c=$_POST['club'];
$d=$_POST['reason'];
$f=$_POST['substitute'];
$g=$_POST['subsidetails'];
$h=$_POST['city'];





if($a!="" && $b!="" && $c!="" && $d!="" && $f!="" && $g!="" && $h!=""){
echo "Inside If";
$query="INSERT INTO satreg(email,name,club,reason,sustitute,subsidetails,city)
VALUES ('$a','$b','$c','$d','$f','$g','$h') ";
mysqli_query($conn,$query);

// if($data){
//   echo"data inserted";
// }



}
else{
  echo "insert all";
}

//}
// else{
//   echo "insert all";


}





?>





<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="vendor/noui/nouislider.min.js"></script>
	<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>




</body>
</html>
