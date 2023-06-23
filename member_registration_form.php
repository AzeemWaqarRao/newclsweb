
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="member_registration_form.css">

    <title>New Member Registration Form</title>
  </head>
  <body>
    <div class="container">
    	<div class="head row">

            <div class="col-md-2">
                <img src="images/tlogo.png" class="img-fluid">
            </div>
            <div class="col-md-10 pt-4">
                <h1 class="">COMSATS Literary Society</h1>
                <h3 class="ml-2">Membership Registration Form</h3>
            </div>
            
        </div>
    	<div> 
    		<form action="memberbackend.php" method="post">
    			<div class="main_form">

    				<h3 class="portion_heading">Personal Information</h3>

    				<!-- full name -->

    				<div class="row mt-5">


    					<div class="col-sm-3"> 
    						<label for='name'>Full Name:</label>
    					</div>


    					<div class="col-sm-9">

    						<div class="row">
    							<div class="col-sm-3  mr-2">
    								<input type="text" name="f_name" required="required" class="mr-2"><br>
    								<label for="f_name" class="sub_label mr-2">First Name</label>
    							</div>
                                <div class="col-1"></div>
    							<div class="col-sm-3  mr-2">
    								<input type="text" name="l_name"  required="required"><br>
    								<label for="l_name" class="sub_label">Last Name</label>
    							</div>

    						</div>
    						
    					</div>
    				</div>

    				<!-- Registration Number -->

    				<div class="row mt-4">
    					<div class="col-sm-3">
    						<label>Registration Number:</label>
    					</div>
    					<div class="col-sm-9">
    						<select name="batch" style="width: 100px;" class="mr-2 mb-1" required="required">
    							<option value="FA22">FA22</option>
    							<option value="SP22">SP22</option>
    							<option value="FA21">FA21</option>
    							<option value="SP21">SP21</option>
    							<option value="FA20">FA20</option>
    							<option value="SP20">SP20</option>
    							<option value="FA19">FA19</option>
    							<option value="SP19">SP19</option>
    							<option value="FA18">FA18</option>

    						</select>
    						-	
    						<select id="program" name="program" class="mx-2 mb-1" style="width: 100px;" required="required">
    							<option value="BAF">BAF</option>
    							<option value="BBA">BBA</option>
    							<option value="BCS">BCS</option>
    							<option value="BSE">BSE</option>
    							<option value="BME">BME</option>
    							<option value="BEE">BEE</option>
    							<option value="BSI">BSI</option>
    							<option value="FSN">FSN</option>

    							<option value="CVE">CVE</option>
    							<option value="MCS">MCS</option>
    							<option value="MMT">MMT</option>
    							<option value="BSI">BSI</option>
    							<option value="FSN">FSN</option>
    							

    						</select>
    						-
    						<input type="Text" name="reg_no" maxlength="3" class="mb-1" style="height: 25px; width: 120px;" required="required">
    					</div>

    				</div>

    				<!-- Phone Number -->

    				<div class="row mt-5">
    					<div class="col-sm-3">
    						<label for="phone_no">Phone Number:</label>
    					</div>
    					<div class="col-sm-9">
    						<input type="text" name="phone_no" placeholder="03123456789" required="required" maxlength="11">
    						
    					</div>

    				</div>

    				<!-- Email -->

    				<div class="row mt-5">
    					<div class="col-sm-3">
    						<label for="email">Email:</label>
    					</div>
    					<div class="col-sm-9">
    						<input type="email" name="email" required="required">
    						
    						
    					</div>

    				</div>

    				<!-- Gender -->

    				<div class="row mt-5">
    					<div class="col-sm-3">
    						<label for="gender">Gender:</label>
    					</div>
    					<div class="col-sm-9">
    						<input type="radio" name="gender" value="Male" class="gender mr-1" required="required">Male
    						<input type="radio" name="gender" value="Female" class="gender mr-1 ml-2" required="required">Female
    						
    					</div>

    				</div>
    				

    				
    				<h3 class="mt-5 portion_heading">Area of Interest</h3>
    				<p class="ml-2">Check all areas of your interest.</p>

    				<div class="row mx-auto mt-5 ">
    					
    						<div class="input-group mb-3 col-12 col-md-6 col-xl-4">
								<div class="input-group-prepend">
								<div class="input-group-text" style="width: 330px;">
								  <input name="events[]" value="Naat & Qiraat" type="checkbox" aria-label="Checkbox for following text input" class="mr-2">
								  <label class="interest" for="Interest">Naat & Qiraat</label>
								</div>
								</div>
								</div>

								<div class="input-group mb-3 col-12 col-md-6 col-xl-4">
								<div class="input-group-prepend">
								<div class="input-group-text" style="width: 330px;">
								  <input name="events[]" value="Declamation" type="checkbox" aria-label="Checkbox for following text input" class="mr-2">
								  <label class="interest" for="Interest">Declamation</label>
								</div>
								</div>
								</div>

								<div class="input-group mb-3 col-12 col-md-6 col-xl-4">
								<div class="input-group-prepend">
								<div class="input-group-text" style="width: 330px;">
								  <input name="events[]" value="Public Speaking" type="checkbox" aria-label="Checkbox for following text input" class="mr-2">
								  <label class="interest" for="Interest">Public Speaking</label>
								</div>
								</div>
								</div>
						
    						<div class="input-group mb-3 col-12 col-md-6 col-xl-4">
								<div class="input-group-prepend">
								<div class="input-group-text" style="width: 330px;">
								  <input name="events[]" value="Creative Writing" type="checkbox" aria-label="Checkbox for following text input" class="mr-2">
								  <label class="interest" for="Interest">Creative Writing</label>
								</div>
								</div>
								</div>

								<div class="input-group mb-3 col-12 col-md-6 col-xl-4">
								<div class="input-group-prepend">
								<div class="input-group-text" style="width: 330px;">
								  <input name="events[]" value="Mushaira" type="checkbox" aria-label="Checkbox for following text input" class="mr-2">
								  <label class="interest" for="Interest">Mushaira</label>
								</div>
								</div>
								</div>

								<div class="input-group mb-3 col-12 col-md-6 col-xl-4">
								<div class="input-group-prepend">
								<div class="input-group-text" style="width: 330px;">
								  <input name="events[]" value="Bait Baazi" type="checkbox" aria-label="Checkbox for following text input" class="mr-2">
								  <label class="interest" for="Interest">Bait Baazi</label>
								</div>
								</div>
							</div>

    					
    						<div class="input-group mb-3 col-12 col-md-6 col-xl-4">
								<div class="input-group-prepend">
								<div class="input-group-text" style="width: 330px;">
								  <input name="events[]" value="Youth Leadership Parliament" type="checkbox" aria-label="Checkbox for following text input" class="mr-2">
								  <label class="interest" for="Interest">Youth Leadership Parliament</label>
								</div>
								</div>
								</div>

								<div class="input-group mb-3 col-12 col-md-6 col-xl-4">
								<div class="input-group-prepend">
								<div class="input-group-text" style="width: 330px;">
								  <input name="events[]" value="Model United Nations" type="checkbox" aria-label="Checkbox for following text input" class="mr-2">
								  <label class="interest" for="Interest">Model United Nations</label>
								</div>
								</div>
								</div>

								<div class="input-group mb-3 col-12 col-md-6 col-xl-4">
								<div class="input-group-prepend">
								<div class="input-group-text" style="width: 330px;">
								  <input name="events[]" value="British Style Parliamentary Debates" type="checkbox" aria-label="Checkbox for following text input" class="mr-2">
								  <label class="interest" for="Interest">British Style Parliamentary Debates</label>
								</div>
								</div>
							</div>

    					</div>

    				</div>

    				<h3 class="mt-5 portion_heading">Questions</h3>

    				<ol class="mt-5">

	    				<li>Write about yourself?</li>
	    				<textarea name="about" na rows="4"  class="ml-2 mb-5 mt-1" required="required"></textarea>	
	    				<li>Why do yo want to join CLS?</li>
	    				<textarea name="join" rows="4"  class="ml-2 mb-5 mt-1" required="required"></textarea>
	    				<li>Any past experience in literary activities?</li>
	    				<textarea name="experience" rows="4"  class="ml-2 mb-5 mt-1" required="required"></textarea>
	    				<li>What are your expectations from CLS?</li>
	    				<textarea name="expectation" rows="4"  class="ml-2 mb-5 mt-1" required="required"></textarea>

    				</ol>
    			</div>	

    			<div class="mb-5">  
    				<button type="Submit" class="btn submit_btn btn-lg">Submit</button>	
    			</div>
    			<div style="height: 40px;"></div>
    												
    		</form>
    	</div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>