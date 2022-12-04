<?php
include_once('../Home-Page/config.php');


  if (isset($_POST['submit']))
  {
  $fname = $conn->real_escape_string($_POST['fname']);
  $lname = $conn->real_escape_string($_POST['lname']);
  $address = $conn->real_escape_string($_POST['address']);
  $email = $conn->real_escape_string($_POST['email']);
  $postalcode = $conn->real_escape_string($_POST['postalcode']);
  $bankname= $conn->real_escape_string($_POST['bankname']);
  $bankaccno = $conn->real_escape_string($_POST['bankacc']);
  $nic = $conn->real_escape_string($_POST['nic']);
  $qualification = $_POST['qualification'];
 
  $chk="";
  $checkbox1=$_POST['techno'];  
  foreach($checkbox1 as $chk1  )  
     {  
        $chk.= $chk1.",";  
     }
      
  
     $profile = $_FILES['image']['name']; 

     
     $quliphoto = $_FILES['image2']['name']; 
  
  
  $query1  = "INSERT INTO employee(emp_fname,emp_lname,emp_address,emp_email,emp_nic,emp_postalcode,emp_bankname,emp_bankacc,emp_categories,emp_photo,emp_qulification,emp_quliphoto) VALUES ('$fname','$lname','$address','$email','$nic','$postalcode','$bankname','$bankaccno','$chk','$profile','$qualification','$quliphoto')";
  $result = $conn->query($query1);
  

  if(!$result){
      die("not insert data".mysqli_connect_error($conn));
  }
  else {
      echo "succfull";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!--bootstrap css-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="CSS/update.css">

</head>

<body>

  <div class="main-container d-flex">
    <div class="sidebar hh" id="side_nav">
      <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">
        <h1 class="fs-4 ms-2 name"><span class="text">DCSMS</span></h1>
        <button class="btn d-md-none d-block close-btn px-1 py-0 text-white"><i class="fa-solid fa-bars-staggered"></i></button>
      </div>


      <ul class="list-unstyled px-2 ">
        <li class=""><a href="findjob.php" class="text-decoration-none px-3 py-3 d-block">FIND JOB</a></li>
        <li class=""><a href="pending.php" class="text-decoration-none px-3 py-3 d-block">PENDING CONFIRM</a></li>
        <li class=""><a href="cancel.php" class="text-decoration-none px-3 py-3 d-block">CANCEL JOB</a></li>
        <li class=""><a href="works.php" class="text-decoration-none px-3 py-3 d-block">YOUR WORKS</a></li>
        <li class=""><a href="resheduled.php" class="text-decoration-none px-3 py-3 d-block">RESHEDULED</a></li>

        <li class=""><a href="history.php" class="text-decoration-none px-3 py-3 d-block">HISTORY</a></li>

        <li class="active"><a href="updated.php" class="text-decoration-none px-3 py-3 d-block">UPDATE PROFILE</a></li>

      </ul>


    </div>
    <div class="content">

      <nav class="navbar navbar-expand-md py-3 navbar-light bg-light">
        <div class="container-fluid">
          <div class="d-flex justify-content-between d-md-none d-block">
            <button class="btn px-1 py-0 open-btn me-2"><i class="fa-solid fa-bars-staggered"></i></button>
            <a class="navbar-brand fs-4" href="#"></a>
          </div>
          <button class="navbar-toggler p-0 border-0 " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

            <i class="fa-solid fa-bars"></i>
          </button>

          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav  mb-2 mb-lg-0">
              <!--<li class="nav-item py-2 p-2 me-4">
                    <i class="fa-solid fa-bell"></i>
                </li>-->
              <li class="nav-item active">
                <select class="users" id="users">
                  <option><a class="nav-link active" href="#">User</a></option>
                  <option><a class="nav-link active" href="#">Employee</a></option>
                  <option><a class="nav-link active" href="#">Admin</a></option>
                </select>
              </li>

            </ul>
          </div>
        </div>
      </nav>

      <div class="dashboard-content ms-5 px-3 pt-4">
        <div class="container mt-3 ms-2">


          <div class="dashboard-content ms-5 px-3 pt-4">

            <div class="container">
              <form name="myform" class="form-group" enctype='multipart/form-data' method="POST" action="updated.php">
                <div class="row jumbotron">
                  <div class="col-sm-6 mb-4">
                    <label>First Name</label>
                    <input type="text" class="form-control " name="fname">
                  </div>


                  <div class="col-sm-6 mb-4">
                    <label>Last Name</label>
                    <input type="text" class="form-control " name="lname">
                  </div>

                  <div class="col-sm-6 mb-4">
                    <label>Address</label>
                    <input type="text" class="form-control " placeholder="Street-1" name="address">
                  </div>

                  <div class="col-sm-6 mb-4">
                    <label> Bank Name & Account number </label>
                    <input type="text" class="form-control " placeholder="Name" name="bankname">
                  </div>


                  <div class="col-sm-6 mb-4">

                    <input type="text" class="form-control" placeholder="postel-code" name="postalcode">
                  </div>


                  <div class="col-sm-6 mb-4">
                    <input type="text" class="form-control" placeholder="Acc num" name="bankacc">

                  </div>


                  <div class="col-sm-6 mb-4">
                    <label>Work Type</label><br>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="greenclean" name="techno[]">
                      <label class="form-check-label" for="inlineCheckbox1">Green Cleaning</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="indoorclean" name="techno[]">
                      <label class="form-check-label" for="inlineCheckbox2">Indoor Cleaning</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="outdoorclean" name="techno[]">
                      <label class="form-check-label" for="inlineCheckbox3">Outdoor Cleaning</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="specialclean" name="techno[]">
                      <label class="form-check-label" for="inlineCheckbox3">Special Type Cleaning</label>
                    </div>
                  </div>


                  <div class="col-sm-6 mb-4">

                    <!--<input type="checkbox" id="w1" name="w1">-->
                    <label class="mt-2"></label>
                    <select class="form-select" aria-label="" name="qualification">
                      <option selected>Work Status</option>
                      <option value="Currently Working In cleaning service">Currently Working In cleaning service</option>
                      <option value="Worked in cleaning service">Worked in cleaning service</option>
                      <option value="Other">Other</option>
                    </select>
                    <br>

                  </div>


                  <div class="col-sm-6 mb-4">
                    <!--- <label >others</label>
                      <input type = "text" class="form-control" placeholder="Please mention your working status" >
                      <br>-->

                    <div class="upload">
                      <label>Please Upload proof documents</label>
                      <button type="button" class="btn1" name="button">
                        <i class="fa fa-upload"></i>Upload
                        <input type="file" name='image2'>
                      </button>
                    </div>
                  </div>


                  <div class="col-sm-6 mb-4">
                    <label>Email</label>
                    <input type="text" class="form-control" placeholder="Email address" name="email">
                  </div>

                  <div class="col-sm-6 mb-4">
                    <label>NIC</label>
                    <input type="text" class="form-control" placeholder="NIC Number" name="nic">
                  </div>


                  <div class="col-sm-6 mb-4">
                    <label>Profile photo</label>

                    <div class="upload">
                      <button type="button" class="btn1" name="button">
                        <i class="fa fa-upload"></i>Upload
                        <input type="file" name="image">
                      </button>
                    </div>
                  </div>

                  <div class="col-sm-12 mb-4" style=" text-align: right; margin-top: 20px;">
                    <label> </label>

                    <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-md col-sm-1">
                  </div>




                </div>

              </form>
            </div>
          </div>
        </div>



        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/c752b78af3.js" crossorigin="anonymous"></script>


        <script>
          $(".sidebar ul li").on('click', function() {
            $(".sidebar ul li.active").removeClass('active');
            $(this).addClass('active');

          })

          $('.open-btn').on('click', function() {
            $('.sidebar').addClass('active');
          })

          $('.close-btn').on('click', function() {
            $('.sidebar').removeClass('active');
          })
        </script>


</body>

</html>