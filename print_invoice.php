
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $pname = $_POST['pname'] ;
        $address = $_POST['add'] ;
        $journey_start_date=$_POST['journey_start_date'];
        $journey_end_date=$_POST['journey_end_date'] ;
        $particulars = $_POST['particulars'] ;
        $used_hour =$_POST['used_hour'];
        $used_distance  = $_POST['used_distance'];
        $average = $_POST['average'] ;
        $fule_rate = $_POST['fule_rate'];
        $car_rent = $_POST['car_rent'] ;
        $parking_nighthalt = $_POST['parking_nighthalt'] ;
        $ta = $_POST['ta'] ;
        $optional_charges = $_POST['optional_charges'] ;
        $percentage = $_POST['percentage'] ;
        $spercentage = $_POST['spercentage'] ;

        if($optional_charges == ''){
            $optional_charges = 0 ;
        }

     

      //connecting to database
      $servername = "localhost";
      $username = "root";
      $passowrd = "" ;
      $database = "local_invoice" ;
      
      //create connection
      $conn = mysqli_connect($servername, $username , $passowrd, $database ) ;
      
      // Die if connection not successfull
      if(!$conn){
          die("Sorry unable to connect :".mysqli_connect_error()) ;
      }
  
      // Submit these to a database
      
      
      $total1 = ($used_km / $average) * $fule_rate ;
      $bill_no = mt_rand() ;
      $sumOfCarRentndParking = $car_rent + $parking_nighthalt ;
    //   $cgst_amount = ($sumOfCarRentndParking * $percentage) / 100

    $a = 100 + $percentage + $spercentage ;
   
    $gst = $sumOfCarRentndParking/($a)*($percentage + $spercentage) ;
    // echo "GST rate which is inculded in sumOfCarRentndParking: ".$gst ;
    
    $rate =round($sumOfCarRentndParking-$gst,2) ;
    // total rate 
    $cgstAmount = ($rate * $percentage ) / 100 ;
    $sgstAmount = ($rate * $spercentage ) / 100 ;
    $grandTotal = $total1 + $car_rent + $parking_nighthalt + $cgstAmount + $sgstAmount + $optional_charges ;


        $insert_data = "INSERT INTO `invoice` (`bill_no`,`journey_start_date`, 
        `journey_end_date`,`particulars`, `used_hour`, `used_distance`, `average`,
         `fule_rate`, `total1`, `car_rent`, `parking_nighthalt`, `TA`, `CGST`, `SGST`, `optional_charges`, `grand_total`,
         `party_name`,`address`) 
         VALUES ('$bill_no', '$journey_start_date', '$journey_end_date', '$particulars', 
         '$used_hour', '$used_distance', '$average', '$fule_rate', '$total1', 
         '$car_rent', '$parking_nighthalt', '$ta', 
         '$percentage', '$spercentage', '$optional_charges', '$grandTotal','$pname','$address')";
      $result=mysqli_query($conn ,$insert_data) ;
      
      // check for table creation success
      if($result){
    //     echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    //     <strong>Success!</strong> Your entry has been submitted successfully!
    //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //       <span aria-hidden="true">×</span>
    //     </button>
    //   </div>';
          
      }else {
          echo "Inserted data was not successfull because of this error --> ".mysqli_error($conn) ;
      }

    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">LOGO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="invoice_form.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<table class="body-wrap">

    <tbody><tr>
        <td></td>
        <td class="container" width="600">
            <div class="content">
                <table class="main" width="100%" cellpadding="0" cellspacing="0">
                    <tbody><tr>
                        <td class="content-wrap aligncenter">
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tbody><tr>
                                    <td class="alignleft">
                                    <br><?php echo "<b>Party Name: </b>".$pname ?> <br><?php echo "<b>Address: </b> ".$address?></td>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        <table class="invoice">
                                            <tbody><tr>
                                                <td class="alignright"><br><?php echo "<b>Bill no: </b>".$bill_no ?> <br><?php echo "<b>Date: </b>".date("Y-m-d")?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table class="invoice-items" cellpadding="0" cellspacing="0">
                                                        <tbody><tr>
                                                            <td><?php echo "Journey Start Date" ; ?></td>
                                                            <td class="alignright"><?php echo  $_POST['journey_start_date'] ?></td>
                                                        </tr>
                                                        <tr>
                                                        
                                                            <td><?php echo "Journey Start Date" ; ?></td>
                                                            <td class="alignright"><?php echo $_POST['journey_end_date'] ; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo "Particulars" ; ?></td>
                                                            <td class="alignright"><?php echo$_POST['particulars'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo "Used Hour" ; ?></td>
                                                            <td class="alignright"><?php echo $_POST['used_hour']." hr" ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo "Used Distance " ; ?></td>
                                                            <td class="alignright"><?php echo $_POST['used_distance']." km" ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo "Average " ; ?></td>
                                                            <td class="alignright"><?php echo $_POST['average']." kmpl" ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo "Fule Rate " ; ?></td>
                                                            <td class="alignright"><?php echo $_POST['fule_rate']." ₹" ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo "Car Rent " ; ?></td>
                                                            <td class="alignright"><?php echo $_POST['car_rent']." ₹" ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo "Parking/Nighthalt " ; ?></td>
                                                            <td class="alignright"><?php echo $_POST['parking_nighthalt']." ₹" ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo "TA " ; ?></td>
                                                            <td class="alignright"><?php echo $_POST['ta']." ₹" ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo "CGST" ; ?></td>
                                                            <td class="alignright"><?php echo $_POST['percentage']." %" ?></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td><?php echo "SGST" ; ?></td>
                                                            <td class="alignright"><?php echo $_POST['spercentage']." %"?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo "Optional Charges " ; ?></td>
                                                            <td class="alignright"><?php echo $optional_charges." ₹" ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo "GST  " ; ?></td>
                                                            <td class="alignright"><?php echo round($gst,2)." ₹" ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo "Rate " ; ?></td>
                                                           
                                                            <td class="alignright"><?php echo $rate." ₹" ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo "CGST Amount" ; ?></td>
                                                           
                                                            <td class="alignright"><?php echo $cgstAmount." ₹"?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo "SGST Amount" ; ?></td>
                                                           
                                                            <td class="alignright"><?php echo $sgstAmount." ₹"?></td>
                                                        </tr>
                                                        <tr class="total">
                                                            <td class="alignright" width="80%">Grand Total</td>

                                                            <td class="alignright"><?php echo round($grandTotal,2)." ₹" ?></td>
                                                        </tr> 
                                                    </tbody></table>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                    <div class="row d-flex justify-content-center">
                                    <input type="button" onclick="window.print()" value="Print now" style="margin-top:8px;"/>
                                    </div>    
                                </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        <!-- Company Inc. 123 Van Ness, San Francisco 94102 -->
                                        <?php 
                                        echo $address ;
                                        ?>
                                    </td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>
                </tbody></table>
               </div>
        </td>
        <td></td>
    </tr>
</tbody></table>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>