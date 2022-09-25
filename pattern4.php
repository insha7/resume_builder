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
    .sl {
        border: 2px solid gray;
        border-radius: 30px;
        padding: 10px 13px;
    }

    .bdb{
        border-bottom: 5px solid gray;
    }

    .ml {
        margin-left: 47px;
        border: 2px solid gray;
        padding: 5px 10px;
    }

    #img {
      border: 3px solid whitesmoke;
      height: 155px;
    width: 59%;
    }

    .hl {
    
      border-bottom: 5px solid whitesmoke;
    }

    .sl1 {
      border: 2px solid whitesmoke;
      border-radius: 30px;
      padding: 8px 15px 8px 8px;
    }

    .sl2 {
      border: 2px solid gray;
      border-radius: 30px;
      background-color: whitesmoke;
      color: black;
      padding: 3px 5px 3px 5px;
      
    }

    .sl3 {
      border: 2px solid gray;
      border-radius: 30px;
      background-color: whitesmoke;
      color: black;
      padding: 5px 4px 5px 4px;
    }

    .sl4 {
      border: 2px solid gray;
      border-radius: 30px;
      padding: 5px 10px;
    }

    .hd1 {
      border-bottom: 5px solid gray;
      margin-left: 30px;
    }

    .hd {
      margin-left: 30px;
    }


   </style>
</head>
<body>

<?php
session_start();
?>
    
<div class="container shadow-lg  mb-5 bg-white rounded mt-5">
    <div class="row " >
        <div class="col-md-8 px-0 pb-5">
            <div class="row mt-5 pt-1">
                <div class="col-md-12">
                <h1 class="text-center"><?php echo $_SESSION["fname"]." ".$_SESSION["lname"];?></h1>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                 <h4 class="text-center bg-dark py-2 text-light"><?php echo $_SESSION["job"]; ?></h4>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-12 ">
                <h4 class="hd1">  <i class="fa-solid fa-pen pr-2 sl "></i>   EDUCATION</h4>
                </div>
            </div>

            <div class="row mt-3">

            <div class="col-md-2 p-0 ">
            <i class="fa-brands fa-accusoft ml"></i>
            </div>
                <div class="col-md-10 p-0 ">

                 <h4 class="pl-1 pb-2"><?php echo $_SESSION["wk"];?></h4>
                 <h6 class="pl-1 pb-2"> <?php echo $_SESSION["ck"]; ?></h6>
                <p class="pl-1 pb-2 ">
                  <i class="fa-solid fa-book"></i> <?php echo $_SESSION["txta"];?>
                </p>

                <p class="pl-1 pb-2">
                  <i class="fa-solid fa-book"></i> <?php echo $_SESSION["txtb"];?>
                </p>

                <p class="pl-1 pb-2">
                  <i class="fa-solid fa-book"></i> <?php echo $_SESSION["txtc"];?>
                </p>

                <p class="pl-1 pb-2">
                  <i class="fa-solid fa-book"></i> <?php echo $_SESSION["txtd"];?>
                </p>
                </div>
            </div>

            <div class="row mt-3">

                                <div class="col-md-2">
                                <i class="fa-brands fa-accusoft ml"></i>
                                </div>
                                    <div class="col-md-10">

                                     <h4 class="pl-1 pb-2"><?php echo $_SESSION["wk1"];?></h4>
                                     <h6 class="pl-1 pb-2"> <?php echo $_SESSION["ck1"]; ?></h6>
                                    <p class="pl-1 pb-2 ">
                                      <i class="fa-solid fa-book"></i> <?php echo $_SESSION["txte"];?>
                                    </p>

                                    <p class="pl-1 pb-2">
                                      <i class="fa-solid fa-book"></i> <?php echo $_SESSION["txtf"];?>
                                    </p>

                                    <p class="pl-1 pb-2">
                                      <i class="fa-solid fa-book"></i> <?php echo $_SESSION["txtg"];?>
                                    </p>

                                    <p class="pl-1 pb-2">
                                      <i class="fa-solid fa-book"></i> <?php echo $_SESSION["txth"];?>
                                    </p>
                                    </div>
                                </div>


                                <div class="row">
                <div class="col-md-12">
           <h4 class="hd1">     <i class="fa-solid fa-pen pr-2 sl "></i>    WORK Experience</h4>
                </div>
            </div>

            <div class="row mt-3">

            <div class="col-md-2">
            <i class="fa-brands fa-accusoft ml"></i>
            </div>
                <div class="col-md-10">

                 <h4 class="pl-1 pb-2"><?php echo $_SESSION["deg"]." ".$_SESSION["sc"];?></h4>
                 <h6 class="pl-1 pb-2"> <?php echo $_SESSION["st"]." ".$_SESSION["dt"]; ?></h6>
                <p class="pl-1 pb-2 ">
                  <i class="fa-solid fa-book"></i> <?php echo $_SESSION["txt1"];?>
                </p>

                <p class="pl-1 pb-2">
                  <i class="fa-solid fa-book"></i> <?php echo $_SESSION["txt2"];?>
                </p>

                <p class="pl-1 pb-2">
                  <i class="fa-solid fa-book"></i> <?php echo $_SESSION["txt3"];?>
                </p>

                <p class="pl-1 pb-2">
                  <i class="fa-solid fa-book"></i> <?php echo $_SESSION["txt4"];?>
                </p>
                </div>
            </div>

            <div class="row mt-3">

                                <div class="col-md-2">
                                <i class="fa-brands fa-accusoft ml"></i>
                                </div>
                                    <div class="col-md-10">

                                     <h4 class="pl-1 pb-2"><?php echo $_SESSION["deg1"]." ".$_SESSION["sc1"];?></h4>
                                     <h6 class="pl-1 pb-2"> <?php echo $_SESSION["st1"]." ".$_SESSION["dt1"]; ?></h6>
                                    <p class="pl-1 pb-2 ">
                                      <i class="fa-solid fa-book"></i> <?php echo $_SESSION["txt5"];?>
                                    </p>

                                    <p class="pl-1 pb-2">
                                      <i class="fa-solid fa-book"></i> <?php echo $_SESSION["txt6"];?>
                                    </p>

                                    <p class="pl-1 pb-2">
                                      <i class="fa-solid fa-book"></i> <?php echo $_SESSION["txt7"];?>
                                    </p>

                                    <p class="pl-1 pb-2">
                                      <i class="fa-solid fa-book"></i> <?php echo $_SESSION["txt8"];?>
                                    </p>
                                    </div>
                                </div>


                                <div class="row mt-3">
                                   <div class="col-md-12 ">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <h4 class="text-dark hd1 "><i class="fa-solid fa-award pr-2 sl4"></i> SKILLS & EXPERTISE</h4>
                                      </div>
                                    </div>

                                    <div class="row mt-3">
                                      <div class="col-md-6">
                                        <p class="ml-4"><i class="fa-solid fa-check-double"></i><?php echo $_SESSION["inp1"]; ?></p>
                                      </div>

                                      <div class="col-md-6">
                                        <p class="ml-4"><i class="fa-solid fa-check-double"></i><?php echo $_SESSION["inp2"]; ?></p>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-6">
                                        <p class="ml-4"><i class="fa-solid fa-check-double"></i><?php echo $_SESSION["inp3"]; ?></p>
                                      </div>

                                      <div class="col-md-6">
                                        <p class="ml-4"><i class="fa-solid fa-check-double"></i><?php echo $_SESSION["inp4"]; ?></p>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-6">
                                        <p class="ml-4"><i class="fa-solid fa-check-double"></i><?php echo $_SESSION["inp5"]; ?></p>
                                      </div>

                                      <div class="col-md-6">
                                        <p class="ml-4"><i class="fa-solid fa-check-double"></i><?php echo $_SESSION["inp6"]; ?></p>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-6">
                                        <p class="ml-4"><i class="fa-solid fa-check-double"></i><?php echo $_SESSION["inp7"]; ?></p>
                                      </div>

                                      <div class="col-md-6">
                                        <p class="ml-4"><i class="fa-solid fa-check-double"></i><?php echo $_SESSION["inp8"]; ?></p>
                                      </div>
                                    </div>

                                 
                                   </div>
                                </div>


                       </div>


                       <div class="col-md-4 bg-dark pb-5">
                        <div class="row text-center mt-4 pb-4 ">
                          <div class="col-md-12">
                            <img src="../images1/<?php echo $_SESSION["file"];?>" alt=""  class="rounded-circle" id="img">
                          </div>
                        </div>

                        <div class="row hl">
                        <div class="col-md-12">
                          <h4 class="text-light"><i class="fa-solid fa-address-card pr-2 mr-2 sl1"></i>CONTACTS</h4>
                           
                        </div>
                       </div>

                       <div class="row mt-5">
                        <div class="col-md-12">
                          <p class="text-light"><i class="fa-solid fa-location-arrow sl2"></i><?php echo " ". $_SESSION["add"]." ".$_SESSION["city"]; ?> </p>
                          <p class="text-light"><i class="fa-solid fa-envelope-circle-check sl3"></i> <?php echo " ". $_SESSION["email"]; ?></p>
                          <p class="text-light"><i class="fa-solid fa-phone-volume sl3"></i> <?php echo " ". $_SESSION["mob"]; ?></p>
                        </div>
                       </div>

                       <div class="row mt-5 hl ">
                        <div class="col-md-12">
                          <h4 class="text-light"><i class="fa-solid fa-rotate pr-2 mr-2 sl1"></i> REFRENCES</h4>
                        </div>
                       </div>

                       <div class="row mt-5">
                        <div class="col-md-12">
                          <h5 class="text-light pb-2"><?php echo $_SESSION["reff"]." :-  ". $_SESSION["comm"];?></h5>
                          <p class="text-light"><i class="fa-solid fa-envelope-circle-check sl3"></i> <?php echo " ". $_SESSION["emm"]; ?></p>
                          <p class="text-light"><i class="fa-solid fa-phone-volume sl3"></i> <?php echo " ". $_SESSION["phh"]; ?></p>
                       
                        </div>
                       </div>

                       <div class="row mt-5">
                        <div class="col-md-12">
                          <h5 class="text-light pb-2"><?php echo $_SESSION["reff2"]." :-  ". $_SESSION["comm2"];?></h5>
                          <p class="text-light"><i class="fa-solid fa-envelope-circle-check sl3"></i> <?php echo " ". $_SESSION["emm2"]; ?></p>
                          <p class="text-light"><i class="fa-solid fa-phone-volume sl3"></i> <?php echo " ". $_SESSION["phh2"]; ?></p>
                       
                        </div>
                       </div>

                       <div class="row mt-5 hl">
                        <div class="col-md-12">
                           <h4 class="text-light"><i class="fa-solid fa-earth-europe pr-2 mr-2 sl1"></i>LANGUAGE</h4>
                        </div>
                       </div>

                       <div class="row mt-5">
                        <div class="col-md-12">
                          <p class="text-light"><?php echo $_SESSION["lggg"]." :- ". $_SESSION["rang"]; ?></p>
                          <input type="range" ><br><br>
                          <p class="text-light"><?php echo $_SESSION["lbbb"]." :- ". $_SESSION["rang1"]; ?></p>
                          <input type="range" >
                        </div>
                       </div>

                       <div class="row mt-5 hl">
                        <div class="col-md-12">
                           <h4 class="text-light"><i class="fa-solid fa-key pr-2 mr-2 sl1"></i>HOBBIES</h4>
                        </div>
                       </div>

                       <div class="row mt-5">
                        <div class="col-md-12">
                          <p class="text-light text-center">
                           <?php echo $_SESSION["exm"];?>
                          </p>
                        </div>
                       </div>
                      
                       </div>

                      
                       </div>

                       
      <div class="row text-center mt-5">
        <div class="col-md-12">
          <button type="button" class="btn btn-primary" onclick="window.print();">PRINT</button>
        </div>
      </div>

                   </div>
               
</body>
</html>