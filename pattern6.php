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
        #con1 {
            /* background-color: #F8F8F8; */
            background-color: #E8E8E8;
        }

        .md1 {
            background-color: whitesmoke;
            border-right: 10px solid orange;
        }

        .round {
            border: 5px solid whitesmoke;
            border-radius: 10px;
            width: 80%;
            margin: 0px 14px;
        }

        .icon {
            border: 2px solid whitesmoke;
            padding: 5px 10px;
            font-size: 20px;
        }

        #hd2 {
            border-bottom: 3px solid black;
        }

        li {
            padding: 3px 0px;
        }

        .md2 {
            border-radius: 20px;
        }

        span {
            color: orange;
        }

        .icon1 {
            border: 2px solid black;
            padding: 5px 7px;
            margin-right: 10px;
        }

        .col1 {
            border-right: 3px solid black;
            padding-bottom: 80px;
        }

        .col2 {
            border-right: 3px solid black;
            padding-bottom: 70px;
        }

        #rg1 {
            margin-left: 64px;
           
        }

    </style>

</head>

<body>

    <?php
    session_start();
    ?>

    <div class="container" id="con1">
        <div class="row pt-5  mx-3 mt-3 ">
            <div class="col-md-3 ">
                <img src="../images1/<?php echo $_SESSION['file']; ?>" alt="" height="150px" class="round">
            </div>

            <div class="col-md-9 pb-5 pt-4 md1  ">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-uppercase"><?php echo $_SESSION['fname'] . $_SESSION['lname']; ?></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="text-capitalize font-weight-light" id="hd1"> <?php echo $_SESSION['job']; ?></h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-10 p-0 ml-5 pl-2">
                        <p>
                            <?php echo $_SESSION['exm']; ?>
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-11 bg-dark text-light pt-3" id="rg1">
                <div class="row">
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-md-2">
                                <i class="fa-solid fa-mobile icon"></i>
                            </div>

                            <div class="col-md-10">
                                <h6>Phone</h6>
                                <p>
                                    <?php echo $_SESSION['mob']; ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-2">
                                <i class="fa-solid fa-envelope icon"></i>
                            </div>

                            <div class="col-md-10">
                                <h6>Email</h6>
                                <p>
                                    <?php echo $_SESSION['email']; ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-2">
                                <i class="fa-solid fa-location-dot icon"></i>
                            </div>

                            <div class="col-md-10">
                                <h6>Address</h6>
                                <p>
                                    <?php echo $_SESSION['add'] . " " . $_SESSION['city']; ?>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row p-5">
            <div class="col-md-4 bg-light p-4 md2">
                <h2 id="hd2"> <i class="fa-solid fa-award"></i> Skills</h2>
                <ul>
                    <li><?php echo $_SESSION['inp1'] ?></li>
                    <li><?php echo $_SESSION['inp2'] ?></li>
                    <li><?php echo $_SESSION['inp3'] ?></li>
                    <li><?php echo $_SESSION['inp4'] ?></li>
                    <li><?php echo $_SESSION['inp5'] ?></li>
                    <li><?php echo $_SESSION['inp6'] ?></li>
                    <li><?php echo $_SESSION['inp7'] ?></li>
                    <li><?php echo $_SESSION['inp8'] ?></li>
                </ul>
            </div>

            <div class="col-md-8 p-4">


                <div class="row px-5">
                    <div class="col-md-12">
                        <h2 id="hd2"><i class="fa-solid fa-language"> </i> Language</h2>
                    </div>
                </div>

                <div class="row px-5 py-3">
                    <div class="col-md-6">
                        <h5> <span><?php echo $_SESSION['lggg']; ?></span></h5>
                        <p>
                            <?php echo $_SESSION['rang']; ?>
                        </p>
                    </div>

                    <div class="col-md-6">
                        <h5><span> <?php echo $_SESSION['lbbb']; ?></span></h5>
                        <p>
                            <?php echo $_SESSION['rang1']; ?>
                        </p>
                    </div>
                </div>



                <div class="row pb-3 px-5">
                    <div class="col-md-12">
                        <h2 id="hd2"><i class="fa-solid fa-book-open-reader"></i> Reference</h2>
                    </div>
                </div>

                <div class="row px-5">
                    <div class="col-md-6">
                        <div class="row pb-3">
                            <div class="col-md-12">
                                <h6> <span> Company:-</span> <?php echo $_SESSION['comm']; ?></h6>
                                <h6>
                                    <span>Name:-</span> <?php echo $_SESSION['reff']; ?>
                                </h6>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h6><i class="fa-solid fa-phone icon1"></i><?php echo $_SESSION['phh']; ?></h6>
                                <h6> <i class="fa-solid fa-envelope icon1"></i> <?php echo $_SESSION['emm']; ?></h6>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="row pb-3">
                            <div class="col-md-12">
                                <h6> <span> Company:-</span> <?php echo $_SESSION['comm2']; ?></h6>
                                <h6>
                                    <span>Name:-</span> <?php echo $_SESSION['reff2']; ?>
                                </h6>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h6><i class="fa-solid fa-phone icon1"></i> <?php echo $_SESSION['phh2']; ?></h6>
                                <h6> <i class="fa-solid fa-envelope icon1"></i> <?php echo $_SESSION['emm2']; ?></h6>
                            </div>
                        </div>

                    </div>

                </div>



            </div>

        </div>

        

        <div class="row px-5">
            <div class="col-md-12">
                <h2 id="hd2"><i class="fa-solid fa-graduation-cap"></i> Education</h2>
            </div>
        </div>

        <div class="row pt-2 px-5">
            <div class="col-md-4 ">
                <div class="row pt-3">
                    <div class="col-md-12 col1">
                        <h6><span>Degree :- </span> <?php echo $_SESSION['deg']; ?></h6>
                        <p>

                            <?php echo $_SESSION['sc']; ?> <br>
                            <?php echo $_SESSION['st'] . " " . "(" . $_SESSION['dt'] . ")"; ?>

                        </p>
                    </div>
                </div>

                <div class="row pt-5">
                    <div class="col-md-12 col2">
                        <h6><span>Degree :- </span> <?php echo $_SESSION['deg1']; ?></h6>
                        <p>

                            <?php echo $_SESSION['sc1']; ?> <br>
                            <?php echo $_SESSION['st1'] . " " . "(" . $_SESSION['dt1'] . ")"; ?>

                        </p>
                    </div>
                </div>

            </div>

            <div class="col-md-8 ">


                <div class="row pt-2 pb-4">
                    <div class="col-md-12">
                        <ul>
                            <li><?php echo $_SESSION['txt1'] ?></li>
                            <li><?php echo $_SESSION['txt2'] ?></li>
                            <li><?php echo $_SESSION['txt3'] ?></li>
                            <li><?php echo $_SESSION['txt4'] ?></li>
                        </ul>
                    </div>
                </div>

                <div class="row pt-5">
                    <div class="col-md-12">
                        <ul>
                            <li><?php echo $_SESSION['txt5'] ?></li>
                            <li><?php echo $_SESSION['txt6'] ?></li>
                            <li><?php echo $_SESSION['txt7'] ?></li>
                            <li><?php echo $_SESSION['txt8'] ?></li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>

        <div class="row px-5 pt-5">
            <div class="col-md-12">
                <h2 id="hd2"> <i class="fa-solid fa-briefcase"></i> Work Experience</h2>
            </div>
        </div>

        <div class="row px-5 pt-3 ">
            <div class="col-md-4 ">
                <div class="row pt-3  ">
                    <div class="col-md-12 col1 ">
                        <h5> <?php echo $_SESSION['wk']; ?></h5>
                        <p>
                            <?php echo $_SESSION['ck']; ?>
                        </p>
                    </div>
                </div>

                <div class="row py-3 ">
                    <div class="col-md-12 col2">
                        <h5> <?php echo $_SESSION['wk1']; ?></h5>
                        <p>
                            <?php echo $_SESSION['ck1']; ?>
                        </p>
                    </div>
                </div>

            </div>

            <div class="col-md-8">
                <div class="row py-3">
                    <div class="col-md-12">
                        <ul>
                            <li> <?php echo $_SESSION['txta']; ?></li>
                            <li> <?php echo $_SESSION['txtb']; ?></li>
                            <li> <?php echo $_SESSION['txtc']; ?></li>
                            <li> <?php echo $_SESSION['txtd']; ?></li>
                        </ul>
                    </div>
                </div>

                <div class="row py-3">
                    <div class="col-md-12">
                        <ul>
                            <li> <?php echo $_SESSION['txte']; ?></li>
                            <li> <?php echo $_SESSION['txtf']; ?></li>
                            <li> <?php echo $_SESSION['txtg']; ?></li>
                            <li> <?php echo $_SESSION['txth']; ?></li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div class="container">
        
    <div class="row text-center mt-5">
        <div class="col-md-12">
          <button type="button" class="btn btn-secondary" onclick="window.print();">PRINT</button>
        </div>
      </div>

    </div>
</body>

</html>