<?php
$conn=mysqli_connect("localhost","root","","cls");





?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="hierarchy.css">
    <title>CLS Hierarchy</title>
  </head>
  <body>
     <div class="container p-5">
       <h1 class="text-center">Our Hierarchy</h1>
       <div class="m-5 px-4 py-3 border">
         <div class="row">
          
           <div class="col-12 col-md-8 text-left">
             <h2>Badar Iqbal</h2>
             <h3>Convener</h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
             consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
             cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
             proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
           </div>


            <div class="col-12 col-md-4 thumbnail">
             <div   class="picture1">
               <img src="images/badar.jpg" style="width: 300px; height: 300px; "> 
               
             </div>
           </div>


         </div>

       </div>
       <div class="m-5 px-4 py-3 border">
         <div class="row">
           <div class="col-12 col-md-4 thumbnail">
             <div   class="picture2">
               <img src="images/president.jpeg" style="width: 300px; height: 300px; ">
               
             </div>
           </div>
           <div class="col-12 col-md-8 text-right">
             <h2>Sardar Haider Anayat</h2>
             <h3>President</h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
             consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
             cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
             proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
           </div>
         </div>
       </div>
       <div class="m-5 px-4 py-3 border">
         <div class="row">
          
           <div class="col-12 col-md-8 text-left">
             <h2>Azeem Waqar Rao</h2>
             <h3>Vice-President(Male)</h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
             consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
             cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
             proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
           </div>


            <div class="col-12 col-md-4 thumbnail">
             <div   class="picture1">
                <img src="images/vp.png" style="width: 300px; height: 300px; "> 
               
             </div>
           </div>


         </div>

       </div>
       <div class="m-5 px-4 py-3 border">
         <div class="row">
           <div class="col-12 col-md-4 thumbnail">
             <div   class="picture2">
               <img src="images/vpf.jpeg" style="width: 300px; height: 300px; ">
               
             </div>
           </div>
           <div class="col-12 col-md-8 text-right">
             <h2>Aleeza Tariq</h2>
             <h3>Vice-President(Female)</h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
             consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
             cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
             proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
           </div>
         </div>
       </div>
       <div class="m-5">
         <div class="table_div">
           <div>
            <h3 class="text-center">Presidents</h3>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Start Date</th>
      <th scope="col">End Date</th>
    </tr>
  </thead>
  <tbody>
  <?php
$sql = "SELECT * FROM presidents";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
 

  while($row = mysqli_fetch_assoc($result)) {
?>
    <tr>
      <td><?php echo  $row["name"] ?> </td>
      <td><?php echo  $row["start_date"] ?> </td>
      <td><?php echo  $row["end_date"] ?></td>
	  
    </tr>
<?php
}
}
            
        

?>

     

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>