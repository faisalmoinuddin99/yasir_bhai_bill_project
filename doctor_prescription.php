<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $d_name = $_POST['d_name'] ;
       
        $p_name = $_POST['p_name'] ;
       
        $sex = $_POST['sex'] ;
       
        $age = $_POST['age'] ;        
       
        $my_date = $_POST['my_date'] ;
        

$servername = "localhost";
      $username = "root";
      $passowrd = "" ;
      $database = "doctor_pres" ;

      $conn = mysqli_connect($servername, $username , $passowrd, $database ) ;

       // Die if connection not successfull
       if(!$conn){
        die("Sorry unable to connect :".mysqli_connect_error()) ;
    }


    $reg_id = mt_rand() ;
    

    $insert_data = "INSERT INTO `prescription_form` (`reg_id`, `d_name`, `p_name`, `sex`, `age`, `date`) 
	VALUES ('$reg_id', '$d_name', '$p_name', '$sex', '$age', '$my_date');";

$result=mysqli_query($conn ,$insert_data) ;

// check for table creation success
if($result){
    
          
      }else {
          echo "Inserted data was not successfull because of this error --> ".mysqli_error($conn) ;
      }

    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
	function myFunction() {
    window.print();
}
</script>
    <style>
		.dr {
  position: absolute;
  bottom: 8mm;
  right: 20mm;
}
.float-container {
    border: 3px solid #fff;
    padding: 20px;
}

.float-child {
    width: 50%;
    float: left;
    padding: 20px;
    /* border: 2px solid red; */
}  
	</style>
  </head>
  <body>
	  <div class="col d-flex justify-content-center">
  <div class="card" style="width: 108rem;">
  <img class="card-img-top" src="header.jpg" alt="Card image cap">
  <hr>
  <div class="card-body" style="height:800px">
    <!-- <h5 class="card-title">Card title</h5> -->
    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
	<div class="float-child">
    <div class="green">
	<span class="font-weight-bold text-uppercase">Patient Name: </span><span class="ml-1"><?php echo $p_name ?></span>
	</div>
  </div>
  
  <div class="float-child">
    <div class="blue">
	<span class="font-weight-bold text-uppercase">Age: </span><span class="ml-1"><?php echo $age ?></span>
	</div>
  </div>
  <div class="float-child">
    <div class="green">
	<span class="font-weight-bold text-uppercase">Sex: </span><span class="ml-1"><?php echo $sex ?></span>
	</div>
  </div>
  
  <div class="float-child">
    <div class="blue">
	<span class="font-weight-bold text-uppercase">Date: </span><span class="ml-1"><?php echo $my_date ?></span>
	</div>
  </div>
  <div class="float-child">
    <div class="blue">
	<span class="font-weight-bold text-uppercase">Registration ID: </span><span class="ml-1"><?php echo $reg_id ?></span>
	</div>
  </div>
   
</div>

<div class="dr"><span class="font-weight"><b>Dr. </b></span><span class="ml-1"><?php echo $d_name ?></span></div>  

<div>
<center>
             <button class="btn btn-primary hidden-print" onclick="myFunction()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
	    </center>
        
    </div>
</div>

</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>