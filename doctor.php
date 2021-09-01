<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Prescription Form</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/bootstrap/css/bootstrap.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="fonts/font-awesome-4.7.0/css/font-awesome.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="fonts/iconic/css/material-design-iconic-font.min.css"
    />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css" />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/css-hamburgers/hamburgers.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/animsition/css/animsition.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/select2/select2.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/daterangepicker/daterangepicker.css"
    />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  </head>
  <body style="background-color: #999999">
    <div class="limiter">
      <div class="container-login100">
        <div
          class="login100-more"
          style="background-image: url('images/bg-01.jpg')"
        ></div>

        <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
          <form class="login100-form validate-form" action="doctor_prescription.php" method="POST">
            <span class="login100-form-title p-b-59"> PRESCRIPTION </span>

            <div
              class="wrap-input100 validate-input"
              data-validate="Doctor Name is required"
            >
              <span class="label-input100">Doctor Name</span>
              <input
                class="input100"
                type="text"
                name="d_name"
                placeholder="Dr. Name..."
              />
              <span class="focus-input100"></span>
            </div>
            <div
              class="wrap-input100 validate-input"
              
            >
              <span class="label-input100">Date</span>
              <input type="date" step="any" name="my_date" class="input100" id="my_date" aria-describedby="my_date">
              <span class="focus-input100"></span>
            </div>

            <div
              class="wrap-input100 validate-input"
              data-validate="Patient name is required"
            >
              <span class="label-input100">Patient Name</span>
              <input
                class="input100"
                type="text"
                name="p_name"
                placeholder="Patient name..."
              />
              <span class="focus-input100"></span>
            </div>
            <div
              class="wrap-input100 validate-input"
              data-validate="Patient age is required"
            >
              <span class="label-input100">Patient Age</span>
              <input
                class="input100"
                type="text"
                name="age"
                placeholder="Age.."
              />
              <span class="focus-input100"></span>
            </div>
          
            <div
              class="wrap-input100 validate-input"
              data-validate="Sex is required"
            >
              <span class="label-input100">Patient Sex</span>
              <input
                class="input100"
                type="text"
                name="sex"
                placeholder="Male/Female"
              />
              <span class="focus-input100"></span>
            </div>
    
           
            <div class="container-login100-form-btn">
              <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn"></div>
                <button type="submit" class="login100-form-btn" value="Submit" name="submit">Generate Prescription</button>
             
              </div>

              
            </div>
          </form>
        </div>
      </div>
    </div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
  </body>
</html>

<script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]"  placeholder="eg: Brufen - 300 mg" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"name.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      });  
 });  
 </script>