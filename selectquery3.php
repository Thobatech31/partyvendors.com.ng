<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<form class="form-inline" role="form" action="selectquery3.php" method="POST">	
		<select name="vendor" id="vendor">
		    <option value="">Select Country</option>
		    <option value="photographer">Lagos</option>
		    <option value="america">America</option>
		</select>

		<select name="city" id="select2">
		    <option value="">Select Country</option>
		    <option value="Lagos">Lagos State</option>
		    <option value="america">America</option>
		</select>

		<select name="location" id="select3" >
		    <option value="">Select State</option>
		    <option data-value="Lagos" value="agege">Agege Lagos</option>
		    <option data-value="Lagos" value="apapa">Apapa Lagos</option>
		    <option data-value="america" value="america">USA</option>
		    <option data-value="america" value="america">California</option>
		</select>

		<button type="submit" class="btn btn-primary" name="submit" style="margin-top: 40px; margin-left: 40px;">Search</button>
</form>



<?php
									if (isset($_POST['submit'])) {
										$vendor=$_POST['vendor'];
										$location=$_POST['location'];
										$city=$_POST['city'];
										switch ($vendor . $location . $city) {

											case 'choose':
											header("location:index.php");
												break;

											# BEGINING PHOTGRAPHER LOCATION

												case 'photographer'.'apapa'.'Lagos':
											header("location:apapaphotogra.php");												break;

											

												case 'photographer'.'agege'.'Lagos':
											header("location:agegephotogra.php");												break;


												#END PHOTGRAPHER LOCATION



												#END MARKUP LOCATION

											default:
												
												break;
										}
										# code...
									}
									
								?>

<script type="text/javascript">

$("#select2").change(function() {
  if ($(this).data('options') == undefined) {
    $(this).data('options', $('#select3 option').clone());
  }
  var id = $(this).val();
  var options = $(this).data('options').filter('[data-value=' + id + ']');
  $('#select3').html(options).show();
});
</script>