
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="../css/all.css">
   <link rel="stylesheet" href="../css/bootstrap.css">


   <style>
      #img {
         /* ye pattern1 ka design hai */
         /* border: 3px solid red; */

         /* ye pattern2 ka design hai */
         border: 5px solid #f2bc94 ;

         /* ye pattern3 ka design hai */
         /* border: 5px solid #CC0000; */
     
      }

      .hello{
              /* ye pattern1 ka design hai */
            /* border-left:5px solid red; */

            /* ye pattern2 ka design hai */
            border-left:5px solid #f2bc94;
               
                /* ye pattern3 ka design hai */
         /* border-left: 5px solid #CC0000; */

      }
      .md1 {
           border-top-left-radius: 50px;
           border-bottom-right-radius: 50px;
      }

      #md2 {
        /* ye pattern1 ka design hai */
        /* background: url("../images1/wave-haikei (7).svg"); */

        /* ye pattern2 ka design hai */
        background:url("../images1/15.svg");

        /* ye pattern3 ka design hai */
        /* background-image: url("../images1/29.svg"); */

        background-repeat: no-repeat;
        background-size: cover;
      }
         
      #md3 {
          /* ye pattern1 ka design hai */
        /* background:url("../images1/14.svg"); */

        /* ye pattern2 ka design hai */
        background:url("../images1/low-poly-grid-haikei.svg");

        /* ye pattern3 ka design hai */
        /* background: url("../images1/21.svg"); */
        background-repeat: no-repeat;
        background-size: cover;
      }

      #md3 li{
        font-size: 14px;
        font-weight:700;
        /* ye pattern1 ka design hai */
        /* color:#030E4F; */

        /* ye pattern2 ka design hai */
        color:#4E4E50;
       
      }

     
      .ml {
        margin-left:75px;
      }

      .ml1 {
        margin-left:93px;
      }

      .icon1 {
        font-size:30px;
        padding-top:5px;
        padding-right:10px;
      }

      #pa2 {
        margin-left:96px;
        /* padding-bottom:5px; */
      }

          .en {
            margin-left:87px;
          }

          .ep {
            margin-top:186px;
          }

          .pa {
            margin-left: 96px;
            font-weight:700;
            /* line-height: 0; */
            /* ye pattern1 & pattern2 dono ke liye apply hoga */
            color:#f2bc94;

            /* ye pattern3 ka design hai */
              /* color:#4E4E50; */
          }

          .txt {

            /* ye pattern1 ka design hai */
            /* color:black; */

            /* ye pattern 2 ka design hai */
            color:#f2bc94;

            /* ye pattern3 ka design hai */
            /* color:black; */
          }
          .txt1 {

            font-weight:700;

            /* ye pattern2 & 3 ka design hai  */
            color:#1A1A1D;
            
            /* ye pattern1 ka design hai */
            /* color:#CC0000;  */

          
          }
          .txt2 {
            /* ye pattern 2 ka design hai */
            color:#4E4E50;

            /* ye pattern 1 ka design hai */
            /* color:black; */
          }

          .en1 {

            /* ye pattern1 ka design hai */
            /* color:black; */

            /* ye pattrn 2 ka design hai */
                 color:#f2bc94;

                /* ye pattern3 ka design hai */
                /* color:black; */
          }
       
   </style>



</head>


<body>


<?php

session_start();

?>



<div class="container my-5 ">
      <div class="row">
         <div class="col-md-4 pb-5" id="md2" >
           <div class="row">
            <div class="col-md-12  text-center">

            <!-- ye pattern1 ki image hai -->
            <!-- <img src="../images1/wallpaperflare1.com_wallpaper.jpg" alt="" class="rounded-circle  mt-5 " height="110px" id="img" width="30%" > -->
           

            <!-- ye pattern2 ki image hai -->
               <img src="../images1/<?php echo $_SESSION["file"];?>" alt="" class="rounded-circle  mt-5 " height="110px" id="img" width="30%" > 

            <!-- ye pattern3 ki image hai -->
             <!-- <img src="../images1/388353.jpg" alt="" class="rounded-circle  mt-5" height="110px" id="img" > -->
         

            </div>
           </div>

           <div class="row">
            <div class="col-md-12 p-0">
                <h4 class="mt-5 ml-5 pl-5 txt1" id="txt11">CONTACTS</h4>

            
                <p class="pa" id="pa1">
                <i class="fa-solid fa-location-dot mt-2  en1" id="en"></i>
                    <?php
                    
                    // session_start();
                  
                    echo $_SESSION["add"]." ". $_SESSION["city"];
                    ?>
                </p> 

              

              
                <p class="pa" id="pa3">
                <i class="fa-solid fa-phone   en1" id="en1"></i>
                    <?php
                    
                    // session_start();

                    echo $_SESSION["mob"];
                     ?>
                </p> 

             
                <p class="pa" id="pa4">
                <i class="fa-solid fa-envelope  en1" id="en2"></i>
                    <?php
                    
                    // session_start();

                    echo $_SESSION["email"]; ?>
                </p>
            </div>
           </div>

           <div class="row ep" >
            <div class="col-md-12 p-0">
                <h4 class=" pb-2 txt1 ml-5 pl-5" id="txt12">REFERENCES</h4>
                <p class="en pa" id="pa5">
                    <?php
                    
                    // session_start();

                    echo $_SESSION["reff"]." ".$_SESSION["comm"]; ?>
                </p> 
           
                <p class="pa" id="pa6">
                <i class="fa-solid fa-envelope  en1" id="en3"></i>
                    <?php
                    
                    // session_start();

                    echo $_SESSION["emm"]; ?>
                </p> <br><br>

              
                <p class="pa" id="pa06">
                <i class="fa-solid fa-phone  en1" id="en005"></i>
                    <?php
                    
                    // session_start();

                    echo $_SESSION["phh"]; ?>
                </p>
            </div>
           </div>

           <div class="row mt-4 "  >
            <div class="col-md-12 p-0 fm">
                <p class="en pa " id="pa7">
                   <?php
                   
                  //  session_start();

                   echo $_SESSION["reff2"]. " ".$_SESSION["comm2"]; ?>
                </p>

             
                <p class="pa" id="pa07">
                <i class="fa-solid fa-envelope  en1" id="en4"></i>
                    <?php
                    
                    // session_start();

                    echo $_SESSION["emm2"]; ?>
                </p> <br> <br>

            
                <p class=" pa" id="pa8">
                <i class="fa-solid fa-phone  en1" id="en05"></i>
                    <?php
                    
                    // session_start();

                    echo $_SESSION["phh2"]; ?>
                </p>
            </div>
           </div>
         </div>

         <div class="col-md-8 pb-5 " id="md3">
            <div class="row pb-5 ml-3">
                <div class="col-md-12" >
                <h1 class="mt-5 en1" id="ena"><?php
                
                // session_start();

                echo $_SESSION["fname"].$_SESSION["lname"]; ?></h1>
                 <h6 class="en1" id="ena"><?php
                 
                //  session_start();

                 echo $_SESSION["job"]; ?></h6>
                </div>
            </div>

            <div class="row pb-5 ml-3 pt-4">
            <i class="fa-solid fa-graduation-cap text-dark icon1"></i>
                <div class="col-md-10 bg-danger md1" >
               
                <h2 class="d-inline"> EDUCATION</h2>
                </div>
                
            </div>

            <div class="row hello ml-3 pb-5" id="hl1">
                
                <div class="col-md-12">
                    <h4 class="pb-3 txt" id="txt"><?php echo $_SESSION['deg'] ." ". $_SESSION['sc']; ?></h4>
                    <h5 class="ml1 font-weight-bold text-danger"><?php  echo $_SESSION['st'].$_SESSION['dt']; ?></h5>
                    <ul class="ml" >
                        <li id="ul1"><?php
                        
                        // session_start();

                        echo $_SESSION["txt1"]; ?> </li>
                        <li id="ul2"><?php
                        
                        // session_start();

                        echo $_SESSION["txt2"]; ?> </li>
                        <li id="ul3"><?php
                        
                        // session_start();

                        echo $_SESSION["txt3"]; ?></li>
                        <li id="ul4"><?php
                        
                        // session_start();

                        echo $_SESSION["txt4"]; ?> </li>
                    </ul>
                </div>
            </div>

            <div class="row hello ml-3 pb-4" id="hl2" >
                
                <div class="col-md-12">
                    <h4 class="pb-3 txt" id="txt1"><?php
                    
                    // session_start();

                    echo $_SESSION["deg1"]." ".$_SESSION["sc1"]; ?></h4>
                    <h5 class="ml1 font-weight-bold text-danger"><?php
                    
                    // session_start();

                    echo $_SESSION["st1"].$_SESSION["dt1"]; ?></h5>
                    <ul class="ml">
                        <li id="ul5"><?php
                        
                        // session_start();


                        echo $_SESSION["txt5"]; ?></li>
                        <li id="ul6"><?php
                        
                        // session_start();

                        echo $_SESSION["txt6"]; ?></li>
                        <li id="ul7"><?php
                        
                        // session_start();

                        echo $_SESSION["txt7"]; ?></li>
                        <li id="ul8"><?php
                        
                        // session_start();

                        echo $_SESSION["txt8"]; ?></li>
                        
                    </ul>
                </div>
            </div>


               <div class="row ml-3 pb-5 mt-5">
            <i class="fa-solid fa-laptop-file icon1"></i>
                <div class="col-md-10 bg-danger md1" >
               
                <h2 class="d-inline"> Working Experience</h2>
                </div>
                
            </div>

            <div class="row hello ml-3 pb-5">
              <div class="col-md-12">
                <h4 class="pb-3 txt"><?php echo $_SESSION["wk"]; ?></h4>
                <h5 class="ml1 font-weight-bold text-danger"> <?php echo $_SESSION["ck"]; ?></h5>
                <ul class="ml">
                         
                   <li><?php echo $_SESSION["txta"]; ?></li>
                   <li><?php echo $_SESSION["txtb"]; ?></li>
                   <li><?php echo $_SESSION["txtc"]; ?></li>
                   <li><?php echo $_SESSION["txtd"]; ?></li>
                </ul>
              </div>
            </div>


            <div class="row hello ml-3 pb-5">
              <div class="col-md-12">
                <h4 class="pb-3 txt"><?php echo $_SESSION["wk1"]; ?></h4>
                <h5 class="ml1 font-weight-bold text-danger"> <?php echo $_SESSION["ck1"]; ?></h5>
                <ul class="ml">
                         
                   <li><?php echo $_SESSION["txte"]; ?></li>
                   <li><?php echo $_SESSION["txtf"]; ?></li>
                   <li><?php echo $_SESSION["txtg"]; ?></li>
                   <li><?php echo $_SESSION["txth"]; ?></li>
                </ul>
              </div>
            </div>
          
          

            <div class="row ml-3 pb-5 mt-5">
            <i class="fa-solid fa-screwdriver-wrench icon1"></i>
                <div class="col-md-10 bg-danger md1" >
                <h2 class="d-inline"> SKILLS & EXPERTISE </h2>
                </div>
                
            </div>

            <div class="row hello  ml-3 pb-4 txt2" id="txt21">
                <div class="col-md-6 ">
                <h6 class="d-inline  "><?php
                
                // session_start();

                echo $_SESSION["inp1"]; ?> </h6>
                
                </div>

                <div class="col-md-6">
                <h6 class="d-inline "> <?php
                
                // session_start();

                echo $_SESSION["inp2"] ?> </h6>
              
                </div>
            </div>

            <div class="row hello ml-3 pb-4 txt2" id="txt22">
                <div class="col-md-6">
                <h6 class="d-inline "> <?php
                
                // session_start();

                echo $_SESSION["inp3"]; ?> </h6>
           
                </div>

                <div class="col-md-6">
                <h6 class="d-inline "> <?php
                
                // session_start();

                echo $_SESSION["inp4"]; ?> </h6>
             
                </div>
            </div>

            <div class="row hello ml-3 pb-4 txt2" id="txt23">
                <div class="col-md-6">
                <h6 class="d-inline"><?php
                
                // session_start();

                echo $_SESSION["inp5"]; ?></h6>
               
                </div>

                <div class="col-md-6">
                <h6 class="d-inline "><?php
                
                // session_start();

                echo $_SESSION["inp6"]; ?> </h6>
              
                </div>
            </div>

            <div class="row hello ml-3 pb-4 txt2" id="txt24">
                <div class="col-md-6">
                <h6 class="d-inline "> <?php
                
                // session_start();

                echo $_SESSION["inp7"]; ?></h6>
                
                </div>

                <div class="col-md-6">
                <h6 class="d-inline "> <?php
                
                // session_start();

                echo $_SESSION["inp8"]; ?> </h6>
              
                </div>
            </div>

            <div class="row ml-3 pb-5 mt-5">
            <i class="fa-solid fa-language icon1"></i>
                <div class="col-md-10 bg-danger md1" >
                <h2 class="d-inline"> Languages </h2>
                </div>
                
            </div>

            <div class="row hello ml-3 pb-5 txt2" id="lg1">
              <div class="col-md-12">
                <h6 class="d-inline mr-5"><?php
                
                // session_start();

                echo $_SESSION["lggg"]; ?></h6>

                <p class="d-inline"><?php 
                
                // session_start();

                echo $_SESSION["rang"]; ?></p>
              </div>
            </div>

            <div class="row hello ml-3 pb-5 txt2" id="lg2">
              <div class="col-md-12">
                <h6 class="d-inline mr-5"> <?php  echo $_SESSION['lbbb']; ?> </h6>
               <p class="d-inline"> <?php
               
              //  session_start();

               echo $_SESSION["rang1"]; ?> </p>
              </div>
            </div>

            <div class="row ml-3 pb-5 mt-5" >
            <i class="fa-solid fa-language icon1"></i>
                <div class="col-md-10 bg-danger md1" >
                <h2 class="d-inline"> Hobbies </h2>
                </div>
                
            </div>

            <div class="row hello ml-3 pb-5 txt2" id="lg4">
              <div class="col-md-12">
                <h4> <?php
                
                // session_start();

                echo $_SESSION["exm"]; ?></h4>
              </div>
            </div>

         </div>
      </div>

      
      <div class="row text-center mt-5">
        <div class="col-md-12">
          <button type="button" class="btn btn-dark" onclick="window.print();">PRINT</button>
        </div>
      </div>
   </div>

   <!-- <div class="container mb-5">
    <div class="row text-center">
      <div class="col-md-6">
      <button type="button" class="btn btn-outline-warning" onclick="myfun1()">PATTERN-1</button>
      </div>

      

      <div class="col-md-6">
      <button type="button" class="btn btn-outline-secondary" onclick="myfun3()">PATTERN-2</button>
      </div>
    </div>
   </div> -->


</body>
</html>
