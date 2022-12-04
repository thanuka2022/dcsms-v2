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
    <link rel="stylesheet" href="CSS/complaign.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <script>
        var count;
        
        function starmark(item)
        {
        count=item.id[0];
        sessionStorage.starRating = count;
        var subid= item.id.substring(1);
        for(var i=0;i<5;i++)
        {
        if(i<count)
        {
        document.getElementById((i+1)+subid).style.color="orange";
        }
        else
        {
        document.getElementById((i+1)+subid).style.color="black";
        }
        
        
        }
        
        }
        
        function result()
        {
        //Rating : Count
        //Review : Comment(id)
        alert("Rating : "+count+"\nReview : "+document.getElementById("comment").value);
        }
        
        </script>

<div class="main-container d-flex">
    <div class="sidebar " id="side_nav">
         <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">
            <h1 class="fs-4 ms-2 name"><span class="text">DCSMS</span></h1>
            <button class="btn d-md-none d-block close-btn px-1 py-0 text-white"><i class="fa-solid fa-bars-staggered"></i></button>
        </div>

    
        <ul class="list-unstyled px-2 ">
            <li class=""><a href="postjob.php" class="text-decoration-none px-3 py-3 d-block">POST JOB</a></li>
            <li class=""><a href="orderstatus.php" class="text-decoration-none px-3 py-3 d-block">ORDER STATUS</a></li>
            <li class=""><a href="payment.php" class="text-decoration-none px-3 py-3 d-block">PAYMENT</a></li>
            <li class=""><a href="ordercancel.php" class="text-decoration-none px-3 py-3 d-block">CANCEL / CHANGE</a></li>
            <li class="active"><a href="complaign.php" class="text-decoration-none px-3 py-3 d-block">COMPLAIN</a></li>
            <li class=""><a href="updateprofile.php" class="text-decoration-none px-3 py-3 d-block">UPDATE PROFILE</a></li>
            <li class=""><a href="help.php" class="text-decoration-none px-3 py-3 d-block">HELP</a></li>

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
                <button  type= "button" class="btn btn-secondary btn-lg ms-2" onclick="window.location.href='../Home-Page/index.html'">Logout</button>
               </div>
            </div>
        </nav>

        <div class="dashboard-content ms-5 px-3 pt-4">
            
                <table class="table table-borderless justify-content-center  " >
                        <thead></thead>
                               <tbody>
                                   
                                    <tr>
                                        <td scope="col">
                                            <textarea class="form-control z-depth-1" id="exampleFormControlTextarea1" rows="10" cols="50" placeholder="Type your complain here"></textarea>
                                        </td>
                                    </tr>
                                        <tr>
                                        <td></td>
                                        <td>
                                           <div class="containe">
                                            <button type="button" class="btn btn-primary btn btn-sm col-sm-7 ">Submit</button>
                                           </div>
                                        </td>
                                    </tr>
                               </tbody>
                               
                               
                    </table> 

                    <table class="table table-borderless justify-content-center   " >
                        <thead>
                            <th class="text text-primary">REVIEWS</th>
                        </thead>
                               <tbody  class="text-center">
                                <tr>
                                    <td class="text text-info">
                                        Work On Time
                                    </td>
                                    <td class="text ">
                                        <span  onmouseover="starmark(this)" onclick="starmark(this)" id="1one" style="font: size 20px;cursor:pointer;"  class="fa fa-star checked"></span>
                                        <span onmouseover="starmark(this)" onclick="starmark(this)" id="2one"  style="font: size 20px;cursor:pointer;" class="fa fa-star "></span>
                                        <span onmouseover="starmark(this)" onclick="starmark(this)" id="3one"  style="font: size 20px;cursor:pointer;" class="fa fa-star "></span>
                                        <span onmouseover="starmark(this)" onclick="starmark(this)" id="4one"  style="font: size 20px;cursor:pointer;" class="fa fa-star"></span>
                                        <span onmouseover="starmark(this)" onclick="starmark(this)" id="5one"  style="font: size 20px;cursor:pointer;" class="fa fa-star"></span>
                                    </td>

                                 </tr>
                                 <tr>
                                    <tr>
                                        <td class="text text-info">
                                            Friendly Service
                                        </td>
                                        <td class="text ">
                                        <span  onmouseover="starmark(this)" onclick="starmark(this)" id="1one" style="font: size 20px;cursor:pointer;"  class="fa fa-star checked"></span>
                                        <span onmouseover="starmark(this)" onclick="starmark(this)" id="2one"  style="font: size 20px;cursor:pointer;" class="fa fa-star "></span>
                                        <span onmouseover="starmark(this)" onclick="starmark(this)" id="3one"  style="font: size 20px;cursor:pointer;" class="fa fa-star "></span>
                                        <span onmouseover="starmark(this)" onclick="starmark(this)" id="4one"  style="font: size 20px;cursor:pointer;" class="fa fa-star"></span>
                                        <span onmouseover="starmark(this)" onclick="starmark(this)" id="5one"  style="font: size 20px;cursor:pointer;" class="fa fa-star"></span>
                                        </td>
    
                                     </tr> 
                                 </tr>
                                 <tr>
                                    <td class="text text-info">
                                        Charging
                                    </td>
                                    <td class="text ">
                                        <span  onmouseover="starmark(this)" onclick="starmark(this)" id="1one" style="font: size 20px;cursor:pointer;"  class="fa fa-star checked"></span>
                                        <span onmouseover="starmark(this)" onclick="starmark(this)" id="2one"  style="font: size 20px;cursor:pointer;" class="fa fa-star "></span>
                                        <span onmouseover="starmark(this)" onclick="starmark(this)" id="3one"  style="font: size 20px;cursor:pointer;" class="fa fa-star "></span>
                                        <span onmouseover="starmark(this)" onclick="starmark(this)" id="4one"  style="font: size 20px;cursor:pointer;" class="fa fa-star"></span>
                                        <span onmouseover="starmark(this)" onclick="starmark(this)" id="5one"  style="font: size 20px;cursor:pointer;" class="fa fa-star"></span>
                                    </td>

                                 </tr>
                                 <tr>
                                    <td class="text text-info">
                                        About Work
                                    </td>
                                    <td class="text ">
                                        <span  onmouseover="starmark(this)" onclick="starmark(this)" id="1one" style="font: size 20px;cursor:pointer;"  class="fa fa-star checked"></span>
                                        <span onmouseover="starmark(this)" onclick="starmark(this)" id="2one"  style="font: size 20px;cursor:pointer;" class="fa fa-star "></span>
                                        <span onmouseover="starmark(this)" onclick="starmark(this)" id="3one"  style="font: size 20px;cursor:pointer;" class="fa fa-star "></span>
                                        <span onmouseover="starmark(this)" onclick="starmark(this)" id="4one"  style="font: size 20px;cursor:pointer;" class="fa fa-star"></span>
                                        <span onmouseover="starmark(this)" onclick="starmark(this)" id="5one"  style="font: size 20px;cursor:pointer;" class="fa fa-star"></span>
                                    </td>

                                 </tr>

                                 <tr>
                                    <td class="mt-5">
                                    <button  onclick="result()" type="button" style="margin-top:10px;margin-right:5px;" class="btn btn-sm btn-primary">Submit</button>
                                </td>
                                </tr>
                                   
                               </tbody>
                               
                               
                    </table> 
                    
                    
                    
                    
                                
        
                            
            
                        
             
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

        $('.open-btn').on('click',function(){
     $('.sidebar').addClass('active');
        })

        $('.close-btn').on('click',function(){
     $('.sidebar').removeClass('active');
        })
        

        
    </script>


</body>
</html>