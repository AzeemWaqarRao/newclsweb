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





$qry = "select * from event_registration where registration = '$registration' and phone_number = '$phone_no' and events = '$events'";

$row = mysqli_query($conn , $qry);




if(mysqli_num_rows($row)>0){
	header("location: event_registration.php");
	
}

else{
	$qry = "INSERT INTO event_registration ( first_name, last_name, registration, phone_number, email, gender, events) VALUES ('$f_name', '$l_name', '$registration', '$phone_no', '$email', '$gender','$events')";

mysqli_query($conn,$qry);
}








?>