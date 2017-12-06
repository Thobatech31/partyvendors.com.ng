					<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
					<form class="form-inline" role="form" action="selectquery2.php" method="POST">			
							<div class="col-md-3 col-sm-12 col-xs-12" >
									<div class="form"> 
										   <label for="Country" control-label" ></label><br/>
												<p id="header">I Am Looking For</p>
												<select class="form-control"  name="select"  id="select" >
													
													<option value="photographer">Photographer</option> 
													
													
												</select> 
										</div>
								</div>


								<div class="col-md-3 col-sm-12 col-xs-12" >
										 <div class="form"> 
										   <label for="Country"  control-label" ></label><br/>
												<p id="header">In What City</p>
												<select class="form-control" name="city"  id="select1">
													<option value="choose">Choose a City</option> 
													

													<option value="1"> Lagos State </option>
													
													
												</select> 
										</div>
								</div>


							<div class="col-md-3 col-sm-12 col-xs-12">
											
										<div class="form" > 
										   <label for="Country" class="col-md-2 col-sm-12 col-xs-12  control-label"></label><br/>
											<p id="header">In What Location</p>
												<select class="form-control" id="select2" name="location">
													<option>Choose a Location</option> 
													<option value="1">Agege  Lagos State</option>
													<option value="1">pppgege  Lagos State</option>
													<option value="agege">bbbgege  Lagos State</option>
													
														
												
												</select>
										</div>
								</div>

								 <div class="col-md-2 col-sm-12 col-xs-12">
								  	<div class="form-group"> 
										<div class="col-sm-offset-2 col-sm-2"> 
												 <button type="submit" class="btn btn-primary" name="submit" style="margin-top: 40px; margin-left: 40px;">Search</button>
										</div> 
									</div> 
								</div>
					</form>

					<?php
									if (isset($_POST['submit'])) {
										$select=$_POST['select'];
										$location=$_POST['location'];
										$city=$_POST['city'];
										switch ($select . $location . $city) {

											case 'choose':
											header("location:index.php");
												break;

											# BEGINING PHOTGRAPHER LOCATION
											case 'photographer'.'ikeja'.'Lagos State':
											header("location:ikejaphotogra.php");
												break;

												case 'photographer'.'lekki'.'Lagos State':								
											header("location:lekkiphotogra.php");											
												break;

												case 'photographer'.'maryland'.'Lagos State':
											header("location:marylandphotogra.php");										break;

												case 'photographer'.'victoria'.'Lagos State':
											header("location:victoriaphotogra.php");												break;

												case 'photographer'.'apapa'.'Lagos State':
											header("location:apapaphotogra.php");												break;

												case 'photographer'.'ikotun'.'Lagos State':
											header("location:ikotunphotogra.php");												break;

												case 'photographer'.'agege'.'Lagos State':
											header("location:agegephotogra.php");												break;

												case 'photographer'.'iyanaipaja'.'Lagos State':
											header("location:iyanaipajaphotogra.php");												break;

												case 'photographer'.'berger'.'Lagos State':
											header("location:bergerphotogra.php");												break;

												case 'photographer'.'egbeda'.'Lagos State':
											header("location:egbedaphotogra.php");												break;

												#END PHOTGRAPHER LOCATION



												#END MARKUP LOCATION

											default:
												
												break;
										}
										# code...
									}
									
								?>


								<script type="text/javascript">
  $("#select1").change(function() {
  if ($(this).data('options') === undefined) {
    /*Taking an array of all options-2 and kind of embedding it on the select1*/
    $(this).data('options', $('#select2 option').clone());
  }
  var id = $(this).val();
  var options = $(this).data('options').filter('[value=' + id + ']');
  $('#select2').html(options);
});
</script>