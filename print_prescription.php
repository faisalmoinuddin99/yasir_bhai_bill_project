<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $d_name = $_POST['d_name'] ;
       
        $p_name = $_POST['p_name'] ;
       
        $sex = $_POST['sex'] ;
       
        $age = $_POST['age'] ;
      
        $m_type = $_POST['m_type'] ;
        
       
        $my_date = $_POST['my_date'] ;
        
       $info = $_POST['info'] ;
       $number = count($_POST["name"]);  
 
        $period = $_POST['period'] ;
        // echo $period ;
$servername = "localhost";
      $username = "root";
      $passowrd = "" ;
      $database = "doctor_pres" ;

      $conn = mysqli_connect($servername, $username , $passowrd, $database ) ;

       // Die if connection not successfull
       if(!$conn){
        die("Sorry unable to connect :".mysqli_connect_error()) ;
    }


    $bill_no = mt_rand() ;
    

    $insert_data = "INSERT INTO `prescription_form` (`reg_id`, `d_name`, `p_name`, `sex`, `age`, `date`) 
    VALUES ('$bill_no', '$d_name', '$p_name', '$sex', '$age', '$my_date');";

$result=mysqli_query($conn ,$insert_data) ;

// check for table creation success
if($result){
    
          
      }else {
          echo "Inserted data was not successfull because of this error --> ".mysqli_error($conn) ;
      }

    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Prescription-Details</title>
  </head>
  <body>
  <div class="container mt-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-8">
            <div class="p-3 bg-white rounded">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="text-uppercase">Prescription</h1>
                        <div class="billed"><span class="font-weight-bold text-uppercase">Patient Name: </span><span class="ml-1"><?php echo $p_name ?></span></div>
                        <div class="billed"><span class="font-weight-bold text-uppercase">Age: </span><span class="ml-1"><?php echo $age ?></span></div>
                        <div class="billed"><span class="font-weight-bold text-uppercase">Sex: </span><span class="ml-1"></span><?php echo $sex ?></div>
                        <div class="billed"><span class="font-weight-bold text-uppercase">Date: </span><span class="ml-1"><?php echo $my_date ?></span></div>
                        <div class="billed"><span class="font-weight-bold text-uppercase"><b>Registration ID: </b></span><span class="ml-1"><?php echo $bill_no ?></span></div>
                    </div>
                    <div class="col-md-6 text-right mt-3">
                        <h4 class="text-danger mb-0"><?php echo "Dr.". $d_name ?></h4>
                    <img src="index.jpg" align="right" alt="" srcset="">
                    </div>
                </div>
                <div class="mt-3">
                    <div class="table-responsive">
                   
                    <table class="table">
                            <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Drug & Dosage</th>
                                    <!-- <th>Dosage</th> -->
                                    <th>Frequency</th>
                                    <th>Period</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $m_type ?></td>
                                    <td><?php   
 
    //for($i=0; $i<$number; $i++)  {
        if(!empty($_POST['name'])) {
        foreach($_POST['name'] as $value){
       
           
            //    echo $_POST["name"][$i]." " ;
            echo "".$value.'<br/>';
           }
    }
 ?></td>
                                    
                                    <td><?php 
                                    
                                    $info = $_POST['info'] ;
        if(isset($_POST['submit'])){

            if(!empty($_POST['lang'])) {
        
                foreach($_POST['lang'] as $value){
                    echo "".$value.'<br/>';
                }
        
            }
        }
                                    ?></td>
                                    <td><?php echo $period ?></td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="text-right mb-3"><button id="printPageButton" class="btn btn-danger btn-sm mr-5" onClick="window.print();" >Print Now</button></div>
            </div>
        </div>
    </div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>
