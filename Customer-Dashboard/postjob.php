<?php

include_once('../Home-Page/config.php');
session_start();

    if(isset($_POST['submit']))
    {
        $category = mysqli_real_escape_string($conn,$_POST['category_name']);
        $date = $_POST['date'];
        $note  = mysqli_real_escape_string($conn,$_POST['note']);
        $postalcode   = mysqli_real_escape_string($conn,$_POST['postal_code']);
        $address     = mysqli_real_escape_string($conn,$_POST['address']);

    
        $query1  = "INSERT INTO job_order(job_order_address,job_order_postalcode,job_order_date,special_note,job_order_category) VALUES ('$address','$postalcode','$date','$note','$category')";
        $result1 = mysqli_query($conn,$query1);

        

        //$query2= "SELECT customer.cus_id,,job_order.job_order_id from customer,job_order where cus_id=$i";
       // $result2 = mysqli_query($conn,$query2);



            if (!$result1 )
            {
                //die("Inavlid query".mysqli_error());
            }
            
            elseif ($row1 = mysqli_fetch_array($result2))
            {

                foreach($row1 as $x => $val) {
                    echo "$x = $val<br>";
                  }
                // arsort($row1);
                // $query3="INSERT INTO post_jobs SELECT DISTINCT customer.cus_id,job_order.job_order_id from users,job_order  ";

                
                // $result3 = mysqli_query($conn,$query3);
                    // if(!$result3)
                    // {
                        // die("Inavlid query".mysqli_error($conn));
                    // }
                
                
             }         

            
    
    }
         mysqli_close($conn);

         
        

    

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
    <link rel="stylesheet" href="CSS/postjob.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <div class="main-container d-flex">
        <div class="sidebar " id="side_nav">
            <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">
                <h1 class="fs-4 ms-2 name"><span class="text">DCSMS</span></h1>
                <button class="btn d-md-none d-block close-btn px-1 py-0 text-white"><i class="fa-solid fa-bars-staggered"></i></button>
            </div>


            <ul class="list-unstyled px-2 ">
                <li class="active"><a href="postjob.php" class="text-decoration-none px-3 py-3 d-block">POST JOB</a></li>
                <li class=""><a href="orderstatus.html" class="text-decoration-none px-3 py-3 d-block">ORDER STATUS</a></li>
                <li class=""><a href="payment.html" class="text-decoration-none px-3 py-3 d-block">PAYMENT</a></li>
                <li class=""><a href="ordercancel.html" class="text-decoration-none px-3 py-3 d-block">CANCEL / CHANGE</a></li>
                <li class=""><a href="complaign.html" class="text-decoration-none px-3 py-3 d-block">COMPLAIN</a></li>
                <li class=""><a href="updateprofile.php" class="text-decoration-none px-3 py-3 d-block">UPDATE PROFILE</a></li>
                <li class=""><a href="help.html" class="text-decoration-none px-3 py-3 d-block">HELP</a></li>

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
                        <!--<ul class="navbar-nav  mb-2 mb-lg-0">
                    <li class="nav-item py-2 p-2 me-4">
                    <i class="fa-solid fa-bell"></i>
                    </li>
                <li class="nav-item active">
                    <select class="users" id="users">
                    <option><a class="nav-link active" href="#">User</a></option>
                    <option><a class="nav-link active" href="#">Employee</a></option>
                    <option><a class="nav-link active" href="#">Admin</a></option>
                    </select>
                </li>

                </ul>-->
                        <button type="button" class="btn btn-secondary btn-lg ms-2" onclick="window.location.href='../Home-Page/index.html'">Logout</button>

                    </div>
                </div>
            </nav>

            <div class="dashboard-content ms-5 px-3 pt-4">
                <div class="jumbotron">
                    <form class="form-group" action="<?php $_PHP_SELF ?>" method="POST">
                        <table class="table table-borderless">
                            <thead></thead>

                            <tbody>

                                <tr>
                                    <td scope="col" class="text-sm">Work type</td>
                                    <td>
                                        <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example" placeholder="Select Work" name="category_name">
                                            <option selected value="select">Select Work</option>
                                            <option value="residential">Residential Cleaning</option>
                                            <option value="green">Green Cleaning</option>
                                            <option value="outdoor">Outdoor Cleaning</option>
                                            <option value="special">Special Event Cleaning</option>
                                        </select>
                                    </td>
                                </tr>



                                <tr>
                                    <td scope="col" class=" text text-sm align-left" >Date</td>
                                    <td>
                                        <input type="date" class="form-control" name="date" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="col" class=" text text-sm">Special Note</td>
                                    <td scope="col">
                                        <textarea class="form-control " id="exampleFormControlTextarea1" rows="5" cols="50" placeholder="Type your special requirments" name="note" required></textarea>
                                    </td>
                                </tr>


                                <tr>
                                    <td scope="col" class="text text-sm">Postal Code</td>
                                    <td><input type="text" placeholder="" class="form-control" name="postal_code" required></td>
                                </tr>
                                <tr>
                                    <td scope="col" class=" text text-sm">Order Address</td>

                                    <td>
                                    <textarea class="form-control " id="exampleFormControlTextarea2" rows="5" cols="10" placeholder="Type Address Here" name="address" required></textarea>

                                    </td>

                                </tr>

                                <tr>






                                </tr>

                                <tr>
                                    <td class="text ">
                                    <input type="submit" name="submit" value="Submit" class="btn btn-primary mt-3">
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>

                        </table>

                    </form>
                </div>
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