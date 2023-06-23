<?php

$conn=mysqli_connect("localhost","root","","cls");



$f_name = $_REQUEST['f_name'];
$l_name = $_REQUEST['l_name'];
$batch = $_REQUEST['batch'];
$program = $_REQUEST['program'];
$reg_no = $_REQUEST['reg_no'];
$registration = $batch."-".$program."-".$reg_no;
$phone_no = $_REQUEST['phone_no'];
$email = $_REQUEST['email'];
$gender = $_REQUEST['gender'];
$events = $_POST['events'];
$events = implode(", ", $events);
$about = $_REQUEST['about'];
$join = $_REQUEST['join'];
$experience = $_REQUEST['experience'];
$expectation = $_REQUEST['expectation'];

$qry = "select * from member_registration where registration = '$registration'";

$row = mysqli_query($conn , $qry);



if(mysqli_num_rows($row)>0){
	header("location: member_registration_form.php");
	
}

else{
	$qry = "INSERT INTO member_registration ( first_name, last_name, registration, phone_number, email, gender, events, about, join_us, experience, expectations) VALUES ('$f_name', '$l_name', '$registration', '$phone_no', '$email', '$gender','$events', '$about', '$join', '$experience', '$expectation')";

mysqli_query($conn,$qry);
}



?>