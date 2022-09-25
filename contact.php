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
   <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/bootstrap.css">

    <style>
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


     .ic {
      color: #580c00;
      font-size: 30px;
     }

     #ad {
      color: #580c00;
     }

     #rg2 h4{
    color: whitesmoke;
   }

   #rg2 p{
    color: #fef4c6;
   }

   #rg3 {
    color: #fef4c6;
   }

   
   #md1 {
margin: -50px auto;
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
    
<div class="container-fluid">
<div class="row" id="roww" >
            <div class="col-md-4">
                <img src="../images1/coler.png" alt="" height="70px" width="33%">
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
                             <a class="nav-link  aa " href="home.php " id="a3"> <i class="fa-solid fa-house-user mr-2 a1"></i>Home</a>
                        </li>
                        <li class="nav-item a2">
                          <a class="nav-link aa " href="Resume.php" id="a2"><i class="fa-solid fa-file mr-2 a1"></i>Build Resume</a>
                        </li>
                       


                        <li class="nav-item  a2">
                            <a class="nav-link aa " href="#" id="a1"><i class="fa-solid fa-id-badge mr-2 a1"></i>Contact</a>
                          </li>
                      </ul>
                     
                    </div>
                  </nav>
            </div>
        </div>
</div>

<div class="container text-center my-5 py-5" id="con2">
        <div class="row">
            <div class="col-md-12">
                <h1><i class="fa-solid fa-address-card " id="ad"></i> Contact Us</h1>
               <p>Easy to find this location. See you there!</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <i class="fa-solid fa-location-dot ic"></i>
                <h5> Location</h5>
                <p>500 South Capitol Avenue, <br>
                    Indianapolis, IN 46225
                    
                    </p>
            </div>

            <div class="col-md-4">
                <i class="fa-solid fa-users-line ic"></i>
                <h5>Coordinator </h5>
                <p>prof. John Doe <br>
                    +123 456 7890 <br>
                    
                    contact@zoutula.com
                    
                    </p>
            </div>

            <div class="col-md-4">
                <i class="fa-solid fa-clock-rotate-left ic"></i>
                <h5>   Duration</h5>
                <p>
                    Monday, <br>
                     8.00 am – 6.00 pm <br>
                    (2 Lunch Breaks)
                </p>
            </div>
        </div>
    </div>

    <div class="container pb-5 mb-5" id="con4">
        <div class="row">
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d196237.84520380892!2d-86.27283606632827!3d39.779700291266195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886b50ffa7796a03%3A0xd68e9df640b9ea7c!2sIndianapolis%2C%20IN!5e0!3m2!1sen!2sus!4v1654847758027!5m2!1sen!2sus" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    <div class="container text-center my-5  " id="con3">
        <div class="row">
            <div class="col-md-12">
                <h2>Get In Touch</h2>
                <p>
                    Do you have any additional questions? Send them our way!
                </p>
            </div>
        </div>

        <div class="row" id="rv">
            <div class="col-md-12">
                <form class="needs-validation" novalidate>
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="validationTooltip01">First name</label>
                        <input type="text" class="form-control" id="validationTooltip01" value="Mark" required>
                        <div class="valid-tooltip">
                          Looks good!
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="validationTooltip02">Last name</label>
                        <input type="text" class="form-control" id="validationTooltip02" value="Otto" required>
                        <div class="valid-tooltip">
                          Looks good!
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="validationTooltip03">City</label>
                        <input type="text" class="form-control" id="validationTooltip03" required>
                        <div class="invalid-tooltip">
                          Please provide a valid city.
                        </div>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="validationTooltip04">State</label>
                        <select class="custom-select" id="validationTooltip04" required>
                          <option selected disabled value="">Choose...</option>
                          <option>...</option>
                        </select>
                        <div class="invalid-tooltip">
                          Please select a valid state.
                        </div>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="validationTooltip05">Zip</label>
                        <input type="text" class="form-control" id="validationTooltip05" required>
                        <div class="invalid-tooltip">
                          Please provide a valid zip.
                        </div>
                      </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit form</button>
                  </form>
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