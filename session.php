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

.md {
  margin-left: 190px;
}

#txt {
  
  text-transform: uppercase;
  font-weight: bold;

}

#txt:hover {
  transform: scaleY(1.5);
  color: brown;
  transition: all 2s linear;

}

   </style>
</head>
<body>



<?php 

session_start();

// $_SESSION["file"] = $_FILES['image'];

$_SESSION["fname"] = $_POST['fname1'];
$_SESSION["lname"]= $_POST['lname1'];
$_SESSION["job"]=  $_POST['job1'];
$_SESSION["add"]=  $_POST['add1'];
$_SESSION["city"]= $_POST['city1'];
$_SESSION["mob"]=  $_POST['phone1'];
$_SESSION["email"]= $_POST['email1'];
$_SESSION["st"]= $_POST['start'];
$_SESSION["dt"]= $_POST['date'];
$_SESSION["sc"]= $_POST['school'];
$_SESSION["deg"]= $_POST['degree'];
$_SESSION["txt1"]= $_POST['text1'];
$_SESSION["txt2"]= $_POST['text2'];
$_SESSION["txt3"]= $_POST['text3'];
$_SESSION["txt4"]= $_POST['text4'];

$_SESSION["st1"] = $_POST['start1'];
$_SESSION["dt1"]= $_POST['date1'];
$_SESSION["sc1"]= $_POST['school1'];
$_SESSION["deg1"]= $_POST['degree1'];
$_SESSION["txt5"]= $_POST['text5'];
$_SESSION["txt6"]= $_POST['text6'];
$_SESSION["txt7"]= $_POST['text7'];
$_SESSION["txt8"]= $_POST['text8'];

$_SESSION["reff"]= $_POST['ref'];
$_SESSION["comm"]= $_POST['com'];
$_SESSION["phh"] = $_POST['ph'];
$_SESSION["emm"]= $_POST['em'];

$_SESSION["reff2"]= $_POST['reff1'];
$_SESSION["comm2"]= $_POST['comm1'];
$_SESSION["phh2"] = $_POST['phh1'];
$_SESSION["emm2"]= $_POST['emm1'];

$_SESSION["inp1"]= $_POST['tc1'];
$_SESSION["inp2"]= $_POST['tc2'];
$_SESSION["inp3"]= $_POST['tc3'];
$_SESSION["inp4"]= $_POST['tc4'];
$_SESSION["inp5"]= $_POST['tc5'];
$_SESSION["inp6"]= $_POST['tc6'];
$_SESSION["inp7"]= $_POST['tc7'];
$_SESSION["inp8"]= $_POST['tc8'];

$_SESSION["lggg"]= $_POST['lga'];
$_SESSION["lbbb"]= $_POST['lgb'];

$_SESSION["exm"]= $_POST['exam'];

$_SESSION["rang"]= $_POST['chng'];
$_SESSION["rang1"] = $_POST['chng1'];

$_SESSION["wk"]= $_POST['wk1'];
$_SESSION["ck"]= $_POST['ck1'];
$_SESSION["txta"]= $_POST['texta'];
$_SESSION["txtb"]= $_POST['textb'];
$_SESSION["txtc"]= $_POST['textc'];
$_SESSION["txtd"]= $_POST['textd'];

$_SESSION["wk1"]= $_POST['wk2'];
$_SESSION["ck1"]= $_POST['ck2'];
$_SESSION["txte"]= $_POST['texte'];
$_SESSION["txtf"]= $_POST['textf'];
$_SESSION["txtg"]= $_POST['textg'];
$_SESSION["txth"]= $_POST['texth'];


// print_r($_FILES);

  $diret= "upload2/";
   
  // $file= basename($_FILES["file1"]["name"]);
  $file= basename($_FILES["image"]["name"]);
  $conect= $diret.$file;
  $image= strtolower(pathinfo($file,PATHINFO_EXTENSION));
  $size= basename($_FILES["image"]["size"]);
  
// print_r($_FILES);

if(isset($_POST["submit"]))
{

  
  
      // check the image real or fake
    if($size==false)
    {
      echo "<script> alert('Please upload the file');
            window.location = 'Resume.php'; </script>";
  
    }
  
    elseif($size >240000)
  {
    echo "<script> alert('sory your image is too large'); 
    window.location = 'Resume.php'; </script>";
  }
  
  // check the file already exist
  
  elseif(file_exists($conect))
  {
    echo "<script>alert('sorry file is already exists');
     window.location = 'Resume.php'; </script>";
  }
  
  // check the format of file type
  
  elseif($image!="jpg" && $image!="png" && $image!="jpeg" && $image!="gif")
  {
    echo "<script> alert('sorry only JPG,PNG, JPEG and GIF file allowed');
     window.location = 'Resume.php'; </script>";
  }
  
  else {
  
      if( move_uploaded_file($_FILES["image"]["tmp_name"],$conect) )
      {
     
            

        // session_start();
        
      //  $_SESSION["file"] = $_FILES['image'];

      $_SESSION["file"] = $file;
     
        echo " <script> alert('YOUR FILE IS SUCCESSFULLY UPLOADED'); </script>";
  
         
      }
  
  
     else{
               
       echo "<script> alert('THERE WAS A TECHNICLE ISSUE');
       
               window.location = 'Resume.php'; </script>";
              
  
      }
  
  }
}


   ?>


<?php

require('conect.php');


$sql = "INSERT INTO `resume_db`.`personal_tb` (`p_sno`, `p_job`, `p_fname`, `p_lname`, `p_email`, `p_city`, `p_phone`, `p_address`,`p_image`, `p_date`) VALUES (NULL, '$_SESSION[job]', '$_SESSION[fname]', '$_SESSION[lname]', '$_SESSION[email]', '$_SESSION[city]', '$_SESSION[mob]', '$_SESSION[add]','$file', CURRENT_TIMESTAMP);";

$res = mysqli_query($con,$sql);



$sql1 = "select * from personal_tb";

$res1 = mysqli_query($con,$sql1);



$sql2 = "INSERT INTO `resume_db`.`education_tb` (`e_id`,`e_school`,`e_degree`,`e_start`,`e_school_1`,`e_degree_1`,`e_start_1`) VALUES (NULL , '$_SESSION[sc]','$_SESSION[deg]','$_SESSION[st]','$_SESSION[sc1]','$_SESSION[deg1]','$_SESSION[st1]');";

$res2 = mysqli_query($con,$sql2);




$sql3 = "select * from education_tb";

$res3 = mysqli_query($con,$sql3);






$sql4 = "INSERT INTO `resume_db`.`reference_tb` (`r_no`,`r_name`,`r_comp`,`r_phone`,`r_email`,`r_name_1`,`r_comp_1`,`r_phone_1`,`r_email_1`) VALUES (NULL , '$_SESSION[reff]','$_SESSION[comm]','$_SESSION[phh]','$_SESSION[emm]','$_SESSION[reff2]',',$_SESSION[comm2]','$_SESSION[phh2]','$_SESSION[emm2]');";

$res4 = mysqli_query($con,$sql4);

  


$sql5 = "select * from reference_tb";

$res5 = mysqli_query($con,$sql5);




$sql6 = "INSERT INTO `resume_db`.`skill_tb` (`s_no`,`s_skill`,`s_lang`) VALUES (NULL , '$_SESSION[inp1],$_SESSION[inp2],$_SESSION[inp3],$_SESSION[inp4],$_SESSION[inp5],$_SESSION[inp6],$_SESSION[inp7],$_SESSION[inp8]','$_SESSION[lggg],$_SESSION[lbbb]');";

$res6 = mysqli_query($con,$sql6);




$sql7 = "select * from skill_tb";

$res7 = mysqli_query($con,$sql7);



$sql8 = "INSERT INTO `resume_db`.`work_tb` (`w_no`,`w_title`,`w_comp`) VALUES (NULL , '$_SESSION[wk],$_SESSION[wk1]','$_SESSION[ck],$_SESSION[ck1]');";

$res8 = mysqli_query($con,$sql8);




$sql9 = "select * from work_tb";

$res9 = mysqli_query($con,$sql9);


if($res && $res2 && $res4 && $res6 && $res8)
{
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong>Your Record has been Submited Successfully.
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>";
}

else {
    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <strong>Error!</strong>Your Record has been Not Submited  There was Some Technicle Issue.
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>";
}

?>


   

   

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
                            <a class="nav-link aa " href="contact.php" id="a1"><i class="fa-solid fa-id-badge mr-2 a1"></i>Contact</a>
                          </li>
                      </ul>
                     
                    </div>
                  </nav>
            </div>
        </div>
</div>

     <div class="container mt-5">
     <div class="row">
            <div class="col-md-12">
                <h2 class="text-center" id="txt">Choose Your Templaate To Get Started</h2>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
           <a href="pattern1.php" target="_blank"> <img src="../images1/screenshot-localhost-2022.07.02-12_17_21.png" class="" alt="..." width="100%"></a>
         
            </div>

            <div class="col-md-4">
         <a href="pattern2.php" target="_blank">   <img src="../images1/screenshot-localhost-2022.07.02-12_16_42.png" class="" alt="..." width="100%"></a>
       
            </div>

            <div class="col-md-4">
          <a href="pattern3.php" target="_blank">  <img src="../images1/screenshot-localhost-2022.07.02-12_18_35.png" class="" alt="..." width="100%"></a>
         
            </div>
        </div>

        <div class="row mt-5">
          <div class="col-md-4">
            <a href="pattern4.php" target="_blank"><img src="../images1/screenshot-localhost-2022.07.04-11_18_00.png" alt="" width="100%"></a>
            
          </div>

          <div class="col-md-4" >
            <a href="pattern5.php" target="_blank"><img src="../images1/screenshot-localhost-2022.07.04-15_26_19.png" alt="" width="100%"></a>
       
          </div>

          <div class="col-md-4">
            <a href="pattern6.php" target="_blank"><img src="../images1/screenshot-localhost-2022.07.16-12_15_23.png" alt="" width="100%"></a>
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