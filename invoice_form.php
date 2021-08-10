
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Invoice</title>
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


<div class="container mt-3">
<h1>Form</h1>
    <form action="print_invoice.php" method="post">
    <div class="form-group">
        <label for="party_name">Party Name*</label>
        <input type="text" required step="any" name="pname" class="form-control" id="pname" aria-describedby="pname">
    </div>
    <div class="form-group">
        <label for="add">Address*</label>
        <input type="text" required step="any" name="add" class="form-control" id="add" aria-describedby="add">
    </div>
    <div class="form-group">
        <label for="journey_start_date">Journey Start Date*</label>
        <input type="date" required step="any" name="journey_start_date" class="form-control" id="journey_start_date" aria-describedby="journey_start_date">
    </div>
    <div class="form-group">
        <label for="journey_end_date">Journey End Date*</label>
        <input type="date" required step="any" name="journey_end_date" class="form-control" id="journey_end_date" aria-describedby="journey_end_date">
    </div>
    <div class="form-group">
        <label for="particulars">Particulars* </label>
        <input type="text" required step="any" class="form-control" id="particulars" name="particulars">     
    </div>
    <div class="form-group">
        <label for="used_hour">Used Hour* </label>
        <input type="number" required step="any" class="form-control" id="used_hour" name="used_hour">     
    </div>
    <div class="form-group">
        <label for="used_distance">Used Distance* </label>
        <input type="number" required step="any" class="form-control" id="used_distance" name="used_distance">     
    </div>
    <div class="form-group">
        <label for="average">Average* </label>
        <input type="number"required step="any" class="form-control" id="average" name="average">     
    </div>
    <div class="form-group">
        <label for="fule_rate">Fule Rate* </label>
        <input type="number" required step="any" class="form-control" id="fule_rate" name="fule_rate">     
    </div>
    <div class="form-group">
        <label for="car_rent">Car Rent* </label>
        <input type="number" required step="any" class="form-control" id="car_rent" name="car_rent">     
    </div>
    <div class="form-group">
        <label for="parking_nighthalt">Parking/Nighthalt* </label>
        <input type="number"required step="any" class="form-control" id="parking_nighthalt" name="parking_nighthalt">     
    </div>
    <div class="form-group">
        <label for="ta">TA</label>
        <input type="number"required step="any" class="form-control" id="ta" name="ta" >     
    </div>
    <span class="form-group">
        <label for="percentage">CGST Percentage*</label>
        <select name="percentage" required id="percentage">
        <?php
    for ($i=1; $i<=100; $i++)
    {
        ?>
            <option value="<?php echo $i;?>"><?php echo $i."%";?></option>
        <?php
    }
    ?>
        
        
</select>

</span>
<span class="form-group">
        <label for="spercentage">SGST Percentage*</label>
        <select name="spercentage" required id="spercentage">
        <?php
    for ($i=1; $i<=100; $i++)
    {
        ?>
            <option value="<?php echo $i;?>"><?php echo $i."%";?></option>
        <?php
    }
?>
  
</select>

</span>


</span>
    <div class="form-group">
        <label for="optional_charges">Optional Charges</label>
        <input type="number" step="any" class="form-control" id="optional_charges" name="optional_charges" >     
    </div>
  

    <?php 
    // $hour = $_POST['used_hour'] ;
    // $distance = $_POST['used_km'] ;

    // $average = $distance / $hour ;

    // echo $average ;
    ?>

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

