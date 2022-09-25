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
    .hd1 {
        border-bottom: 3px solid whitesmoke;
    }

    .cd {
        background-color: rgba( 0, 0, 0 , 0.55);
        margin-top: 140px;
    padding-bottom: 47px;
  
    }

   
    .r2 {
        /* background-color: rgb(54, 18, 0 ); */
        background-color: #6d2602;
    }

    .hd2 {
        border-bottom: 3px solid gray;
    }

    span {
        /* border: 1px solid whitesmoke; */
        background-color:rgb(255, 162, 0 ) ;
    }

    .para {
        color: orange;
        font-size: 20px;
        font-weight: 500;
    }

    .wd{
        font-size: 40px;
    }

    .btn {
        background-color: orange;
    }

    .con1 {
        background: url("../images1/pk3.svg");
        background-repeat: no-repeat;
        background-position: center;
    }
   </style>
</head>
<body>

<?php
session_start();
?>

    <div class="container shadow-lg my-5 bg-white rounded ">
        <div class="row">
            <div class="col-md-4 r1">
                <div class="row ">
                    
                    <div class="card col-md-12 text-white p-0 ">
                       <img src="../images1/<?php echo $_SESSION["file"];?>" class="card-img" alt="..." height="520px" width="100%">
                       <div class="card-img-overlay ">
                         <div class="row">
                            <div class="col-md-12 cd">
                            <h5 class="card-title hd1 pb-2 pt-5"><i class="fa-solid fa-hourglass pr-3"></i>HOBBIES</h5>
                         <p class="card-text "><?php echo $_SESSION["exm"];?></p>
                            </div>
                         </div>
                        
                       </div>
                     </div>
                    
                </div>

                <div class="row">
                    <div class="col-md-12 r2">
                      <div class="row mt-4">
                        <div class="col-md-12">
                        <h5 class="hd1 text-light pb-2"><i class="fa-solid fa-language pr-3"></i> LANGUAGE</h5>
                        <p class="text-light mt-4">
                            <?php echo $_SESSION["lggg"];?>  <input type="range" class="ml-5 ">

                        </p>

                        <p class="text-light">
                            <?php echo $_SESSION["lbbb"];?>  <input type="range" class="ml-5">
                            
                        </p>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12 text-light">
                            <div class="row mt-4">
                                <div class="col-md-12">
                                <h5 class="hd1 text-light pb-2"><i class="fa-solid fa-medal pr-3"></i> SKILLS</h5>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <p> <?php echo $_SESSION["inp1"];?></p>
                                </div>
                                <div class="col-md-6">
                                    <p> <?php echo $_SESSION["inp2"];?></p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <p> <?php echo $_SESSION["inp3"];?></p>
                                </div>
                                <div class="col-md-6">
                                    <p> <?php echo $_SESSION["inp4"];?></p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <p> <?php echo $_SESSION["inp5"];?></p>
                                </div>
                                <div class="col-md-6">
                                    <p> <?php echo $_SESSION["inp6"];?></p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <p> <?php echo $_SESSION["inp7"];?></p>
                                </div>
                                <div class="col-md-6">
                                    <p> <?php echo $_SESSION["inp8"];?></p>
                                </div>
                            </div>
                        </div>
                      </div>

                   
                    </div>
                </div>

                <div class="row  text-dark r1">
                        <div class="col-md-12">
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <h5 class="hd2 pb-2"><i class="fa-solid fa-file-lines pr-3"></i> REFERENCES</h5>
                                </div>
                            </div>
                           
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <h6><?php echo $_SESSION["reff"]." :- ". $_SESSION["comm"]; ?></h6>
                                    <p><i class="fa-solid fa-phone"></i> <?php echo $_SESSION["phh"];?></p>
                                    <p>  <i class="fa-solid fa-envelope"></i><?php echo $_SESSION["emm"];?></p>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <h6><?php echo $_SESSION["reff2"]." :- ". $_SESSION["comm2"]; ?></h6>
                                    <p><i class="fa-solid fa-phone"></i> <?php echo $_SESSION["phh2"];?></p>
                                    <p>  <i class="fa-solid fa-envelope"></i><?php echo $_SESSION["emm2"];?></p>
                                </div>
                            </div>
                        </div>
                      </div>
            </div>

            <div class="col-md-8 con1">
                <div class="row  pt-5 r1">
                    <div class="col-md-12">
                        <h2><span class="mr-2 px-2 ml-5"><?php echo $_SESSION["fname"];?></span> <?php echo $_SESSION["lname"];?></h2>
                        <p class="para ml-5"> <?php echo $_SESSION["job"]; ?></p>
                    </div>
                </div>

                <div class="row text-light">
                    <div class="col-md-12 pt-4 ml-3">
                        <h5 class="hd2 pt-4 pb-2 font-weight-bold"><i class="fa-solid fa-id-card-clip pr-2"></i> CONTACT</h5>
                    </div>
                </div>

                <div class="row mt-3 text-light">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="ml-3"><i class="fa-solid fa-phone-flip pr-2"></i> PHONE</h6>
                                <p class="ml-3"><?php echo $_SESSION["mob"];?></p>
                            </div>

                            <div class="col-md-6">
                                <h6 class="ml-3"><i class="fa-solid fa-location-crosshairs pr-2"></i> ADDRESS</h6>
                                <p class="ml-3"><?php echo $_SESSION["add"];?></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="ml-3"><i class="fa-solid fa-envelope-open pr-2"></i> EMAIL</h6>
                                <p class="ml-3"><?php echo $_SESSION["email"];?></p>
                            </div>

                            <div class="col-md-6">
                                <h6 class="ml-3"><i class="fa-solid fa-city pr-2"></i>CITY</h6>
                                <p class="ml-3"><?php echo $_SESSION["city"];?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row text-light">
                    <div class="col-md-12 ml-3 pt-5 pb-3">
                        <h5 class="hd2 pb-2"><i class="fa-solid fa-book-open pr-2"></i>EDUCATION</h5>
                    </div>
                </div>

                <div class="row pb-3 text-light">
                    <div class="col-md-10 ">
                       <div class="row">
                        <div class="col-md-12">
                        <h6 class="ml-3"><i class="fa-solid fa-graduation-cap"></i> <?php echo $_SESSION["deg"];?></h6>
                        <p class="font-weight-bold ml-3"> <?php echo $_SESSION["sc"];?></p>
                        </div>
                       </div>

                       <div class="row">
                        <div class="col-md-12">
                            <ul>
                                <li><?php echo $_SESSION["txt1"];?></li>
                                <li><?php echo $_SESSION["txt2"];?></li>
                                <li><?php echo $_SESSION["txt3"];?></li>
                                <li><?php echo $_SESSION["txt4"];?></li>
                            </ul>
                        </div>
                       </div>
                    </div>

                    <div class="col-md-2">
                          <h6> <?php echo $_SESSION["st"];?></h6>
                          <p> <?php echo $_SESSION["dt"];?></p>
                    </div>
                </div>

                <div class="row text-light">
                    <div class="col-md-10">
                       <div class="row">
                        <div class="col-md-12">
                        <h6 class="ml-3"><i class="fa-solid fa-graduation-cap"></i> <?php echo $_SESSION["deg1"];?></h6>
                        <p class="font-weight-bold ml-3"> <?php echo $_SESSION["sc1"];?></p>
                        </div>
                       </div>

                       <div class="row pb-3">
                        <div class="col-md-12">
                            <ul>
                                <li><?php echo $_SESSION["txt5"];?></li>
                                <li><?php echo $_SESSION["txt6"];?></li>
                                <li><?php echo $_SESSION["txt7"];?></li>
                                <li><?php echo $_SESSION["txt8"];?></li>
                            </ul>
                        </div>
                       </div>
                    </div>

                    <div class="col-md-2">
                          <h6> <?php echo $_SESSION["st1"];?></h6>
                          <p> <?php echo $_SESSION["dt1"];?></p>
                    </div>
                </div>

                <div class="row mt-5 pt-2 text-light">
                    <div class="col-md-12 ml-3">
                        <h5 class="hd2 pb-2" ><i class="fa-solid fa-briefcase"></i> WORK EXPERIENCE & EXPERTISE</h5>
                    </div>
                </div>

                <div class="row mt-4 ml-3 text-light">
                    <div class="col-md-2">
                        <h6><i class="fa-solid fa-file-word wd"></i></h6>
                    </div>

                    <div class="col-md-10 ">
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="ml-5 font-weight-bold"><?php echo $_SESSION["wk"];?></h6>
                                <p class="ml-5"><?php echo $_SESSION["ck"];?></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 ">
                                <ul class="ml-5" >
                                    <li><?php echo $_SESSION["txta"];?></li>
                                    <li><?php echo $_SESSION["txtb"];?></li>
                                    <li><?php echo $_SESSION["txtc"];?></li>
                                    <li><?php echo $_SESSION["txtd"];?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row ml-3 pt-3 text-light">
                    <div class="col-md-2 ">
                        <h6><i class="fa-solid fa-file-word wd"></i></h6>
                    </div>

                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="ml-5 font-weight-bold"><?php echo $_SESSION["wk1"];?></h6>
                                <p class="ml-5"><?php echo $_SESSION["ck1"];?></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 ">
                                <ul class="ml-5">
                                    <li><?php echo $_SESSION["txte"];?></li>
                                    <li><?php echo $_SESSION["txtf"];?></li>
                                    <li><?php echo $_SESSION["txtg"];?></li>
                                    <li><?php echo $_SESSION["txth"];?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
    </div>

    <div class="container">
    <div class="row mt-5 text-center">
            <div class="col-md-12 ">
                <button type="button" class="btn" onclick="window.print();">PRINT</button>
            </div>
        </div>
    </div>
</body>
</html>