
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="member_registration_form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts.css">

    <style type="text/css">
        .checkmark {
          position: absolute;
          top: 0;
          left: 0;
          height: 0px;
          width: 0px;
          background-color: #fff;
        }
    </style>
    <title>Event Registration Form</title>
  </head>
  <body>
    <div class="container">
    	<div class="head row">

            <div class="col-md-2">
                <img src="images/tlogo.png" class="img-fluid">
            </div>
            <div class="col-md-10 pt-4">
                <h1 class="">COMSATS Literary Society</h1>
                <h3 class="ml-2">Event Registration Form</h3>
            </div>
    		
    	</div>

    	<div> 
    		<form action="eformbackend.php" method="post">
    			<div class="main_form">

    				<h3 class="portion_heading">Personal Information</h3>

    				<!-- full name -->

    				<div class="row mt-5">


    					<div class="col-sm-3"> 
    						<label for='name'>Full Name:</label>
    					</div>


    					<div class="col-sm-9">

    						<div class="row">
    							<div class="col-sm-3">
    								<input type="text" name="f_name" required="required" class="mr-2"><br>
    								<label for="f_name" class="sub_label mr-2">First Name</label>
    							</div>
    							<div class="col-sm-3 ">
    								<input type="text" name="l_name" class="" required="required"><br>
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
    						<select name="batch" style="width: 100px;" class="mr-2" required="required">
    							<option>FA22</option>
    							<option>SP22</option>
    							<option>FA21</option>
    							<option>SP21</option>
    							<option>FA20</option>
    							<option>SP20</option>
    							<option>FA19</option>
    							<option>SP19</option>
    							<option>FA18</option>

    						</select>
    						-	
    						<select id="program" name="program" class="mx-2" style="width: 100px;" required="required">
    							<option>BAF</option>
    							<option>BBA</option>
    							<option>BCS</option>
    							<option>BSE</option>
    							<option>BME</option>
    							<option>BEE</option>
    							<option>BSI</option>
    							<option>FSN</option>

    							<option>CVE</option>
    							<option>MCS</option>
    							<option>MMT</option>
    							<option>BSI</option>
    							<option>FSN</option>
    							

    						</select>
    						-
    						<input type="Text" name="reg_no" maxlength="3" class="ml-2" style="height: 25px; width: 120px;" required="required">
    					</div>

    				</div>

    				<!-- Phone Number -->

    				<div class="row mt-5">
    					<div class="col-sm-3">
    						<label for="phone_no">Phone Number:</label>
    					</div>
    					<div class="col-sm-9">
    						<input type="text" name="phone_no" placeholder="0312456789" required="required">
    						
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
    						<input type="radio" name="gender" class="gender mr-1" required="required">Male
    						<input type="radio" name="gender" class="gender mr-1 ml-2" required="required">Female
    						
    					</div>

    				</div>


                    <!-- Events -->

                    <h3 class="mt-5 portion_heading">Events</h3>
                    <p class="ml-2">Select all the events you want to register.</p>


                    <section class="my-5">
                        <div class="card-deck">
                          
                          <div class="card ">
                            <img class="card-img-top" src="images/naatqirat.JPG" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Naat & Qirat</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer" >
                                <!-- <a class="button2 btn" id="btn1" onclick="change('btn1')" >Select</a> -->
                                <label >
                                <input name="events[]" class="checkmark" value="Naat & Qiraat" type="checkbox" aria-label="Checkbox for following text input" class="mr-2" ><a class="button2 btn" id="btn1" onclick="change('btn1')" >Select</a>
                                  </label>
                               

                            </div>
                          </div>
                          <div class="card">
                            <img class="card-img-top" src="images/declamation.JPG" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Declamations</h5>
                              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="card-footer">
                                <!-- <a class="button2 btn" id="btn2" onclick="change('btn2')" >Select</a> -->
                                <label >
                                <input name="events[]" class="checkmark" value="Declamation" type="checkbox" aria-label="Checkbox for following text input" class="mr-2" ><a class="button2 btn" id="btn2" onclick="change('btn2')" >Select</a>
                                  </label>
                            </div>
                          </div>
                          <div class="card">
                            <img class="card-img-top" src="images/ylp.JPG" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Youth Leadership Parliament</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            </div>
                            <div class="card-footer">
                              <!-- <a class="button2 btn" id="btn3" onclick="change('btn3')" >Select</a> -->
                              <label >
                                <input name="events[]" class="checkmark" value="YLP" type="checkbox" aria-label="Checkbox for following text input" class="mr-2" ><a class="button2 btn" id="btn3" onclick="change('btn3')" >Select</a>
                                  </label>
                            </div>
                          </div>
                        </div>
                    </section>

                    <section class="my-5">    
                        <div class="card-deck">
                          <div class="card">
                            <img class="card-img-top" src="images/publicspeaking.JPG" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Public Speaking</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                             <!-- <a class="button2 btn" id="btn4" onclick="change('btn4')" >Select</a> -->
                             <label >
                                <input name="events[]" class="checkmark" value="Public Speaking" type="checkbox" aria-label="Checkbox for following text input" class="mr-2" ><a class="button2 btn" id="btn4" onclick="change('btn4')" >Select</a>
                                  </label>
                            </div>
                          </div>
                          <div class="card">
                            <img class="card-img-top" src="images/poetry.JPG" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Poetry Competition</h5>
                              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="card-footer">
                              <!-- <a class="button2 btn" id="btn5" onclick="change('btn5')" >Select</a> -->
                              <label >
                                <input name="events[]" class="checkmark" value="Poetry" type="checkbox" aria-label="Checkbox for following text input" class="mr-2" ><a class="button2 btn" id="btn5" onclick="change('btn5')" >Select</a>
                                  </label>
                            </div>
                          </div>
                          <div class="card">
                            <img class="card-img-top" src="images/creativewriting.JPG" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Creative Writing</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            </div>
                            <div class="card-footer">
                              <!-- <a class="button2 btn" id="btn6" onclick="change('btn6')" >Select</a> -->
                            <label >
                                <input name="events[]" class="checkmark" value="Creative Writing" type="checkbox" aria-label="Checkbox for following text input" class="mr-2" ><a class="button2 btn" id="btn6" onclick="change('btn6')" >Select</a>
                                  </label>
                            </div>
                          </div>
                        </div>
                    </section>
                            				
    			<div class="my-5">  
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

    <script>
                    
        function change(button_id){

          const btn = document.getElementById(button_id);

            // if(btn.style.backgroundColor === "#2E6DA4"){
            //     btn.style.backgroundColor = "white";
            //     btn.style.color = "#2E6DA4";
           
            // }
            // else{
            //       btn.style.backgroundColor = "#2E6DA4";
            //       btn.style.color = "white";
                  
            // }
          
           if(btn.innerText === "Select"){
            btn.innerText = "Selected";
            btn.style.backgroundColor = "#2E6DA4";
            btn.style.color = "white";
            

            }
            else{
            btn.innerText= "Select";
            btn.style.backgroundColor = "white";
            btn.style.color = "#2E6DA4";
        }

        }

    </script>
  </body>
</html>