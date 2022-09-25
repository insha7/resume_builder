<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
   <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/bootstrap.css">

    <style>

      body {
        margin: 0;
        padding: 0;
      }
        #md2 {
            /* background: rgba( 219, 255, 248, 0.25 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 16.5px );
-webkit-backdrop-filter: blur( 16.5px );
border-radius: 10px; */

/* backdrop-filter: blur(5px); background-color: rgba(255, 255, 255, 0.5); border-radius: 38px; box-shadow: -35px 35px 68px 0px rgba(145, 255, 245, 0.5), inset 7px -7px 16px 0px rgba(145, 255, 245, 0.6), inset 0px 11px 28px 0px rgb(255, 255, 255); */

/* backdrop-filter: blur(10px); background-color: rgba(255, 255, 255, 0.1); border-radius: 29px; box-shadow: -35px 35px 68px 0px rgba(145, 255, 245, 0.5), inset 5px -5px 16px 0px rgba(145, 255, 245, 0.6), inset 0px 11px 28px 0px rgb(255, 255, 255); */
 margin: 0px 78px;
 /* backdrop-filter: blur(0px); background-color: rgba(255, 255, 255, 0.3); border-radius: 20px; box-shadow: 35px 35px 68px 0px rgba(145, 180, 255, 0.5), inset -12px -12px 16px 0px rgba(145, 180, 255, 0.6), inset 0px 11px 28px 0px rgb(255, 255, 255); */
 backdrop-filter: blur(0px); background-color: rgba(255, 255, 255, 0.5); border-radius: 23px; box-shadow: 35px 35px 68px 0px rgba(255, 255, 255, 0.5), inset -4px -4px 16px 0px rgba(255, 255, 255, 0.6), inset 0px 11px 28px 0px rgb(255, 255, 255);

        }

        #img {
          height: 500px;
    
        }
     
        #md1 {

               margin: -50px auto;
        }

        #con1 {
            /* background: url("../images1/104.svg"); */
            background: url("../images1/205.svg");
            background-repeat: no-repeat;
            background-size: cover;
           padding-bottom: 50px;
        }

        #con2 {
            background: url("../images1/108.svg");
            background-repeat: no-repeat;
            background-size: cover;
            border: none;
            padding-bottom: 20px;
        }

        #nav {
            margin: 5px 3px;
         
        }

        .aa{
          color: whitesmoke;
        }

      .a2 {
        margin-right: 125px;
     
        position: relative;
        background-color: none;
      
      }
   .aa::before {
       content: "";
       position: absolute;
       background-color: whitesmoke;
       height: 2px;
       width: 100%;
       top: 40px;
       left: 0;
       transform: scaleX(0);
       transform-origin: left;
       padding: 0px 10px;
       transition: all 0.5s ease-in;
      
   }

   .aa:hover {
    transform: scale(1.2);
    transition: all 0.5s linear;
   }

  
   .aa:hover::before{
     transform: scaleX(1);
   }

   .aa::after {
       content: "";
       position: absolute;
       background-color: whitesmoke;
       height: 2px;
       width: 100%;
       top: 0;
       left: 0;
       transform: scaleX(0);
       transform-origin: right;
       padding: 0px 10px;
       transition: all 0.5s ease-in;
      
   }

  
   .aa:hover::after{
     transform: scaleX(1);
   }

   

        .a1{
            /* color: #fef4c6; */
            color: whitesmoke;
            
        }

        #a1{
            color: #fef4c6;
        
            /* color: whitesmoke; */
        }

        #a2{
            color: #fef4c6;
            /* color: whitesmoke; */
        }

        #a3{
            color: #fef4c6;
            /* color: whitesmoke; */
        }

        #rg1 {
            padding-bottom: 140px;
            padding-top: 50px;
        }

   #roww {
    background-color: #580c00; 

     /* background-color: #fef4c6;
     /* background-color: #240047; */
   }

   .inp{
      padding: 0px 20px;
   }

   #rg2 h4{
    color: whitesmoke;
   }

   #rg2 p{
    color: #fef4c6;
   }

   .hd1 {
    color: #fef4c6;
    position: relative;
    padding: 0px 10px;

   }

   

   .hd1::before{
     position: absolute;
     content: "";
     top: 0;
     left: 0;
     height: 100%;
     width: 3px;
     background-color: #fef4c6;
     transform: scaleY(0);
     transform-origin: top;
     transition: all 0.5s linear;

   }

   .hd1:hover {
       transform: scale(1.2);
       transition: all 0.5s linear;
   }

   .hd1:hover::before {
     transform: scaleY(1);
   }

   .hd1::after{
     position: absolute;
     content: "";
     top: 0;
     left: 100%;
     height: 100%;
     width: 3px;
     background-color: #fef4c6;
     transform: scaleY(0);
     transform-origin: bottom;
     transition: all 0.5s linear;

   }

   .hd1:hover::after {
     transform: scaleY(1);
   }

   #rg3 {
    color: #fef4c6;
   }

   .para {
    padding-left: 52px;
   }
/* 
   #cook p{
    color: yellow;
   } */

   #cook {
    border-left: 5px solid #580c00;
      cursor: pointer;
      background-color: none;
      position: relative;
      transition: color 0.4s linear;
      border-radius: 5px;
      padding: 5px 30px;
      z-index: 1;
      transition: color 0.6s linear;
      
   
    }

    #cook:hover {
      color: whitesmoke;

    }

    /* #cook::before{
      content: "";
       position: absolute;
      left: 0;
      top: 0;
      background-color: #580c00;
     transform: scaleX(0);
     transition: transform 0.6s linear;
     transform-origin: right; 
     
    }

     #cook:hover::before {
       transform: scaleX(-0.5);
   
       
       
     }  */

     #cook::after{
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        background-color:#580c00;
       transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.8s linear; 
     } 

     #cook:hover::after{
      transform: scaleX(1);
      z-index: -1;

     }

/* 
   .hd2 {
    color:#580c00;
   } */

   .col3 {
    margin: 0px auto;
   }

   #cd1 {
    margin: -60px 178px;
   }

   #hd3 {
    color: #580c00;
    font-size: 17px;
   }

   .cd2{
        border-radius: 30px;
        padding: 10px 5px ;
   }

   .cd2:hover {
    transform: scale(1.1);
    transition: transform 0.7s ease-in;
   }

   #dark{
    margin-top: 230px;
    padding-bottom: 40px;
   }

   .hov1:hover{
    margin-top: -40px;
     transition: margin-top  0.5s ease-in;
   }

    #md1:hover {
        transform: scale(1.1);
        transition: transform  0.7s ease-in;
    }

    #sub {
      cursor: pointer;
      background-color: none;
      position: relative;
      transition: color 0.4s linear;
      border: 2px solid black;
      border-radius: 5px;
      padding: 5px 30px;
      z-index: 1;
      transition: color 1s linear;
    }

    #sub:hover {
      color: whitesmoke;
    }

    #sub::before{
      content: "";
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: #580c00;
      z-index: -1;
     transform: scaleY(0);
     transition: transform 1s linear;
     transform-origin: top;
 
    }

     #sub:hover::before {
       transform: scaleY(1);
     }

     #sub::after{
      content: "";
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: #580c00;
      z-index: -1;
     transform: scaleY(0);
     transition: transform 1s linear;
     transform-origin: bottom;
 
    }

     #sub:hover::after {
       transform: scaleY(1);
     }

     #sub11 {
      cursor: pointer;
      background-color: none;
      position: relative;
      transition: color 0.4s linear;
      border: 2px solid black;
      border-radius: 5px;
      padding: 5px 30px;
      z-index: 1;
      transition: color 1s linear;
    }

    #sub11:hover {
      color: whitesmoke;
    }

    #sub11::before{
      content: "";
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: #580c00;
      z-index: -1;
     transform: scaleY(0);
     transition: transform 1s linear;
     transform-origin: left;
 
    }

     #sub11:hover::before {
       transform: scaleY(1);
     }

     #sub11::after{
      content: "";
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: #580c00;
      z-index: -1;
     transform: scaleY(0);
     transition: transform 1s linear;
     transform-origin: right;
 
    }

     #sub11:hover::after {
       transform: scaleY(1);
     }


     
     #sub22 {
      cursor: pointer;
      background-color: none;
      position: relative;
      transition: color 0.4s linear;
      border: 2px solid black;
      border-radius: 5px;
      padding: 5px 30px;
      z-index: 1;
      transition: color 1s linear;
    }

    #sub22:hover {
      color: whitesmoke;
    }

    #sub22::before{
      content: "";
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: #580c00;
      z-index: -1;
     transform: scaleX(0);
     transition: transform 1s linear;
     transform-origin: top;
 
    }

     #sub22:hover::before {
       transform: scaleX(1);
     }

     #sub22::after{
      content: "";
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: #580c00;
      z-index: -1;
     transform: scaleX(0);
     transition: transform 1s linear;
     transform-origin: bottom;
 
    }

     #sub22:hover::after {
       transform: scaleX(1);
       
     }

     .lc {
  font-size: 20px;
}

.lc:hover {
  transform: scale(1.5);
  transition: all 0.5s linear;
}

      
    </style>

    
</head>
<body>

<div class="container-fluid" id="con1">
<div class="row" id="roww" >
            <div class="col-md-4">
                <img src="resumel.png" alt="" height="70px" width="33%">
                <h6 class="d-inline-block hd1">Resume Maker</h6>
            </div>

            <div class="col-md-8">
                <nav class="navbar navbar-expand-lg navbar-light " id="nav">
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav font-weight-bold " id="ol1">
                        <li class="nav-item a2 ">
                             <a class="nav-link  aa " href="home.php" id="a3"> <i class="fa-solid fa-house-user mr-2 a1"></i>Home</a>
                        </li>
                        <li class="nav-item a2">
                          <a class="nav-link aa " href="Resume.php" id="a2"><i class="fa-solid fa-file mr-2 a1"></i>Build Resume</a>
                        </li>
                       


                        <li class="nav-item  a2">
                            <a class="nav-link aa " href="contact.php" id="a1"><i class="fa-solid fa-id-badge mr-2 a1"></i>Contact</a>
                          </li>
                      </ul>
                     
                    </div>
                  </nav>
            </div>
        </div>

    
 
 
        <div class="row" id="rg1" >
            <div class="col-md-6 mt-5 pt-1 p-0">
                <h1 class="pb-1 ml-5">MAKE YOUR </h1>
                <h3 class="pb-2 ml-5"> ONLINE RESUME</h3>
                <p class="ml-5">
                    <i class="fa-solid fa-check-double"></i>Customizable, HR-approved, ready-to-use resume templates
                </p>

                <p class="ml-5"> 
                    <i class="fa-solid fa-check-double"></i>Step-by-step guidance and expert tips to create a targeted, job-scoring resume

                </p>

                <p  class="ml-5">
                    <i class="fa-solid fa-check-double"></i>Free industry-specific, pre-written examples you can add with the click of a button

                </p>

              

              <a href="Resume.php" onclick="show()"><button type="button" class="btn ml-5" id="sub11" >Create Your Resume</button></a>
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-8 p-0 " id="md2" >
                    <div class="row text-center">
                        <div class="col-md-12">
                            <h5 class="pt-3">QUICK LOGIN HERE</h5>
                        </div>
                    </div>

                    <div class="row text-center pb-3">
                        <div class="col-md-5 p-0 mx-3 mt-2">
                            <button type="button" class="btn btn-primary"><i class="fa-brands fa-facebook"></i>  facebook</button>

                        </div>

                        <div class="col-md-5 p-0 mx-2 mt-2">
                            <button type="button" class="btn btn-danger"><i class="fa-brands fa-instagram"></i> instagram</button>
                        </div>
                    </div>

                    <div class="row">
                       <div class="col-md-12">
                        <form action="Resume.php" method="POST">
                            <div class="form-row inp">
                                <div class="col-md-12">
                                    <label for="email">Email address:</label>
                                    <input type="email" class="form-control" placeholder="Enter email" id="email" required>
                                </div>
                            </div>

                            <div class="form-row inp">
                                <div class="col-md-12">
                                    <label for="pwd">Password:</label>
                                  <input type="password" class="form-control" placeholder="Enter password" id="pwd" required>
                                </div>
                            </div>

                            <div class="form-row text-center pt-4 pb-5">
                                <div class="col-md-12">
                                    <button type="submit" class="btn"  id="sub" name="submit" >Register</button>
                                </div>
                            </div>
                        </form>
                       </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
                

    <div class="container-fluid " id="con2">
        <div class="row py-5 ">
         

        <div class="col-md-4 ">
            <div class="card shadow-lg mb-5  rounded p-0 hov1" style="width: 100%;">
              <div class="card-body">
            
                   <div class="row  pb-2">
                    <div class="col-md-2 ">
                        <img src="person.jpg" class="rounded-circle" alt="" width="100%" height="50px">
                    </div>

                    <div class="col-md-10 p-0">
                      <div class="row ">
                       <div class="col-md-12 ">
                       <h6 class="pl-5"> David Jones</h6>
                       </div>
                        
                      </div>
                      <div class="row ">
                        <div class="col-md-6 ">
                        <h6 class="text-warning pl-5"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h6>
                        </div>

                        <div class="col-md-6 ">
                            <p class="d-inline para">2 days ago</p>
                        </div>
                      </div>
                    </div>
                   </div>

                   <div class="row">
                    <div class="col-md-12 pr-0">
                        <h5> Get a job in Week</h5>
                        <p>
                Voluptatibus doloremque distinctio maxime consectetur.esse temporibus incidunt
                        </p>
                    </div>
                   </div>
               
                  </div>
                   </div>
            </div>

            <div class="col-md-4 ">
            <div class="card shadow-lg mb-5  rounded p-0 hov1" style="width: 100%;">
              <div class="card-body">
            
                   <div class="row  pb-2">
                    <div class="col-md-2 ">
                        <img src="person.jpg" class="rounded-circle" alt="" width="100%" height="50px">
                    </div>

                    <div class="col-md-10 p-0">
                      <div class="row ">
                       <div class="col-md-12 ">
                       <h6 class="pl-5"> David Jones</h6>
                       </div>
                        
                      </div>
                      <div class="row ">
                        <div class="col-md-6 ">
                        <h6 class="text-warning pl-5"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h6>
                        </div>

                        <div class="col-md-6 ">
                            <p class="d-inline para">2 days ago</p>
                        </div>
                      </div>
                    </div>
                   </div>

                   <div class="row">
                    <div class="col-md-12 pr-0">
                        <h5> Get a job in Week</h5>
                        <p>
                Voluptatibus doloremque distinctio maxime consectetur.esse temporibus incidunt
                        </p>
                    </div>
                   </div>
               
                  </div>
                   </div>
            </div>


              <div class="col-md-4 ">
            <div class="card shadow-lg mb-5  rounded p-0 hov1" style="width: 100%;">
              <div class="card-body">
            
                   <div class="row  pb-2">
                    <div class="col-md-2 ">
                        <img src="person.jpg" class="rounded-circle" alt="" width="100%" height="50px">
                    </div>

                    <div class="col-md-10 p-0">
                      <div class="row ">
                       <div class="col-md-12 ">
                       <h6 class="pl-5"> David Jones</h6>
                       </div>
                        
                      </div>
                      <div class="row ">
                        <div class="col-md-6 ">
                        <h6 class="text-warning pl-5"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h6>
                        </div>

                        <div class="col-md-6">
                            <p class="d-inline para">2 days ago</p>
                        </div>
                      </div>
                    </div>
                   </div>

                   <div class="row">
                    <div class="col-md-12 pr-0">
                        <h5> Get a job in Week</h5>
                        <p>
                Voluptatibus doloremque distinctio maxime consectetur.esse temporibus incidunt
                        </p>
                    </div>
                   </div>
               
                  </div>
                   </div>
            </div>


        </div>
    </div>

       <div class="container pb-5 mb-5 ">
        <div class="row">
            <div class="col-md-5">
           <div class="row">
            <div class="col-md-12">
            <div class="card  border-0"  >
              <img src="resume_icons_1.jpg" class="card-img img-fluid" style="max-width: 100%;" alt="..." id="img">
              <div class="card-img-overlay" id="ig1">

              </div>
            </div>
            </div>
           </div>

           <div class="row">
            <div class="col-md-3" id="cd1">
            <div class="card shadow-lg bg-white cd2" style="width: 18rem;">
              <div class="card-body ">
              <h6 class="card-subtitle mb-2 " id="hd3"><i class="fa-solid fa-stopwatch pr-2"></i>CV PRO TIPS</h6>
            <h6 class="card-title"> What are your 3 biggest <br> success in career?</h6>

                <p class="card-text">Some quick example text to build on the card title and make up </p>
                
              </div>
            </div>
            </div>
           </div>
            </div>

            <div class="col-md-7 ">
                <div class="row pb-4">
                  <div class="col-md-8 col3">
                  <h2> Welcome in <br> Your CV</h2>
                <h6>Best in Class</h6>
                <p class="text-justify">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium, officia adipisci! Eligendi necessitatibus libero sint assumenda quia, ipsam iure 
                </p>
                  </div>
                </div>

                <div class="row pb-5">
                  <div class="col-md-8 col3 " >
                  <div class="card" style="width: 100%;" id="cook">
                   <div class="card-body" >
                     <h5 class="card-title hd2">Tips & Advices</h5>
                     
                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    
                   </div>
                 </div>
                  </div>
                </div>

                <div class="row pb-2">
                  <div class="col-md-8 col3">
                    <h6> Poor Review</h6>
                    <p>
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem autem doloremque pariatur suscipit, porro cum libero voluptas harum excepturi sint
                    </p>
                  </div>
                </div>

            </div>
        </div>
       </div>

    <div class="container-fluid bg-dark" id="dark">
        <div class="row ">
            <div class="col-md-10  card shadow-lg mb-5 bg-white rounded py-5" id="md1">
                <div class="row ">
                    <div class="col-md-8">
                        <p>
                             Harum natus unde fugiat placeat quod, iusto, sapiente consequatur quos maiores adipisci repellat repellendus sequi! Omnis natus consequatur aperiam tempore maiores nobis!
                        </p>
                    </div>

                    <div class="col-md-4 text-center">
                        <a href="Resume.php"><button type="button" class="btn" id="sub22">Build Resume</button></a>
                    </div>
                </div>

     
            </div>
        </div>

        <div class="row px-5 pt-5" id="rg2">
    <div class="col-md-6 md">
     <div class="row">
        <div class="col-md-12">
        <h4>AGUS</h4>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, veritatis? Eaque molestias mollitia, tenetur exercitationem facere enim veniam placeat iusto ipsam
      </p>
        </div>
     </div>

     <div class="row " id="rg3">
        <div class="col-md-12">
        <i class="fa-brands fa-facebook pr-2 pl-0 lc"></i>
        <i class="fa-brands fa-whatsapp px-2 lc"></i>
        <i class="fa-brands fa-instagram px-2 lc"></i>
        <i class="fa-brands fa-linkedin-in px-2 lc"></i>
        </div>
     </div>
    </div>

    <div class="col-md-6 md">
      <div class="row">
        <div class="col-md-4">
          <h4>AGUS</h4>
          <p>
            Lorem <br>
            ipsum <br>
            dolor <br>
           
          </p>
        </div>

        <div class="col-md-4">
          <h4>AGUS</h4>
          <p>
            Lorem <br>
            ipsum <br>
            dolor <br>
           
          </p>
        </div>

        <div class="col-md-4">
          <h4>AGUS</h4>
          <p>
            Lorem <br>
            ipsum <br>
            dolor <br>
           
          </p>
        </div>
      </div>
    </div>
  </div>
    </div>
</body>


</html>