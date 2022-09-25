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
  <!-- <script src="https://cdn.lordicon.com/xdjxvujz.js"></script> -->

  <link rel="stylesheet" href="../css/all.css">
  <link rel="stylesheet" href="../css/bootstrap.css">


  <script>
    function vis1() {
      document.getElementById('fm1').style.display = "inline";
      document.getElementById('fm2').style.display = "inline";
      document.getElementById('fm3').style.display = "inline";
      document.getElementById('fm4').style.display = "inline";
      document.getElementById('fm5').style.display = "inline";
      document.getElementById('fm05').style.display = "inline";

      document.getElementById('area1').style.display = "inline";
      document.getElementById('area2').style.display = "inline";
      document.getElementById('area3').style.display = "inline";
      document.getElementById('allow').style.display = "inline";

    }



    function vis2() {
      document.getElementById('fm1').style.display = "none";
      document.getElementById('fm2').style.display = "none";
      document.getElementById('fm3').style.display = "none";
      document.getElementById('fm4').style.display = "none";
      document.getElementById('fm5').style.display = "none";
      document.getElementById('fm05').style.display = "none";

      document.getElementById('area1').style.display = "none";
      document.getElementById('area2').style.display = "none";
      document.getElementById('area3').style.display = "none";
      document.getElementById('allow').style.display = "none";


    }

    function omg() {
      document.getElementById("fm11").style.display = "inline";
      document.getElementById("fm22").style.display = "inline";
      document.getElementById("fm33").style.display = "inline";
      document.getElementById("fm55").style.display = "inline";
      document.getElementById("fm06").style.display = "inline";

    }


    function omg1() {
      document.getElementById("fm11").style.display = "none";
      document.getElementById("fm22").style.display = "none";
      document.getElementById("fm33").style.display = "none";
      document.getElementById("fm55").style.display = "none";
      document.getElementById("fm06").style.display = "none";

    }


    function vs1() {
      document.getElementById('fm6').style.display = "none";
      document.getElementById('fm7').style.display = "none";
      document.getElementById('fm8').style.display = "none";

      document.getElementById('area4').style.display = "none";
      document.getElementById('area5').style.display = "none";
      document.getElementById('area6').style.display = "none";
      document.getElementById('doom').style.display = "none";
    }

    function vs2() {
      document.getElementById('fm6').style.display = "inline";
      document.getElementById('fm7').style.display = "inline";
      document.getElementById('fm8').style.display = "inline";

      document.getElementById('area4').style.display = "inline";
      document.getElementById('area5').style.display = "inline";
      document.getElementById('area6').style.display = "inline";
      document.getElementById('doom').style.display = "inline";
    }



    function first() {
      var x = [];

      x[0] = document.getElementById('inps').value;
      x[1] = document.getElementById('inpd').value;
      document.getElementById('head1').innerHTML = x[0] + x[1];
    }

    function second() {
      var x = [];

      x[0] = document.getElementById('inpst').value;
      x[1] = document.getElementById('inp').value;
      document.getElementById('para').innerHTML = x[0] + x[1];
    }

    function third() {
      var x = [];

      x[0] = document.getElementById('inps1').value;
      x[1] = document.getElementById('inpd1').value;
      document.getElementById('head2').innerHTML = x[0] + x[1];
    }

    function four() {
      var x = [];

      x[0] = document.getElementById('inpst1').value;
      x[1] = document.getElementById('inpm1').value;
      document.getElementById('para1').innerHTML = x[0] + x[1];
    }


    function vis11() {
      document.getElementById('fm11').style.display = "inline";
      document.getElementById('fm22').style.display = "inline";
      document.getElementById('fm33').style.display = "inline";

      document.getElementById('fm55').style.display = "inline";
      document.getElementById('fm66').style.display = "inline";
    }

    function vis22() {
      document.getElementById('fm11').style.display = "none";
      document.getElementById('fm22').style.display = "none";
      document.getElementById('fm33').style.display = "none";

      document.getElementById('fm55').style.display = "none";
      document.getElementById('fm66').style.display = "none";
      document.getElementById('head4').style.display = "none";
      document.getElementById('para3').style.display = "none";
    }

    function first1() {
      var x = [];

      x[0] = document.getElementById('inps2').value;
      x[1] = document.getElementById('inpd2').value;
      document.getElementById('head3').innerHTML = x[0] + x[1];
    }

    function second1() {
      var x = [];

      x[0] = document.getElementById('inpst2').value;
      x[1] = document.getElementById('inpm2').value;
      document.getElementById('para2').innerHTML = x[0] + x[1];
    }

    function third1() {
      var x = [];

      x[0] = document.getElementById('inps3').value;
      x[1] = document.getElementById('inpd3').value;
      document.getElementById('head4').innerHTML = x[0] + x[1];
    }

    function four1() {
      var x = [];

      x[0] = document.getElementById('inpst3').value;
      x[1] = document.getElementById('inpm3').value;
      document.getElementById('para3').innerHTML = x[0] + x[1];
    }

    function col(value) {
      document.getElementById(value).style.backgroundColor = "green";

    }

    function col1(value) {
      document.getElementById(value).style.backgroundColor = "gray";
    }

    function dbl1(value) {
      document.getElementById('inpa').style.color = "whitesmoke";
      document.getElementById('inpa').value = "Teamwork skills";

    }

    function dbl2(value) {

      document.getElementById('inpb').value = "Office Technology skills";
      document.getElementById('inpb').style.color = "whitesmoke";
    }

    function dbl3(value) {

      document.getElementById('inpc').value = "Advance Communication  skills";
      document.getElementById('inpc').style.color = "whitesmoke";
    }

    function lam4(value) {

      document.getElementById('peg').value = "Social media platform";
      document.getElementById('peg').style.color = "whitesmoke";
    }

    function dbl5(value) {
      document.getElementById('inpe').value = "multitasking skills";
      document.getElementById('inpe').style.color = "whitesmoke";
    }

    function dbl6(value) {

      document.getElementById('inpf').value = "Execellent Customer services skills skills";
      document.getElementById('inpf').style.color = "whitesmoke";
    }

    function dbl7(value) {

      document.getElementById('inpg').value = "Knowledge of food safety";
      document.getElementById('inpg').style.color = "whitesmoke";
    }

    function dbl8(value) {

      document.getElementById('inph').value = "Execellent Work Ethic";
      document.getElementById('inph').style.color = "whitesmoke";
    }


    function vep1(value) {
      document.getElementById('inpa').value = " ";
      document.getElementById('inpa').style.color = "#6c757d"
    }

    function vep2(value) {
      document.getElementById('inpb').value = " ";
      document.getElementById('inpb').style.color = "#6c757d"
    }

    function vep3(value) {
      document.getElementById('inpc').value = " ";
      document.getElementById('inpc').style.color = "#6c757d"
    }

    function vep4(value) {
      document.getElementById('inpd').value = " ";
      document.getElementById('peg').style.color = "#6c757d"
    }

    function vep5(value) {
      document.getElementById('inpe').value = " ";
      document.getElementById('inpe').style.color = "#6c757d"
    }

    function vep6(value) {
      document.getElementById('inpf').value = " ";
      document.getElementById('inpf').style.color = "#6c757d"
    }

    function vep7(value) {
      document.getElementById('inpg').value = " ";
      document.getElementById('inpg').style.color = "#6c757d"
    }

    function vep8(value) {
      document.getElementById('inph').value = " ";
      document.getElementById('inph').style.color = "#6c757d"
    }

    // function vep9(value)
    // {
    //   document.getElementById('inpi').style.color="#6c757d"
    // }

    function none() {
      document.getElementById('leve0').style.display = "inline";
      document.getElementById('leve1').style.display = "inline";
      document.getElementById('leve2').style.display = "inline";
      document.getElementById('canc1').style.display = "inline";

    }

    function none1() {
      document.getElementById('leve0').style.display = "none";
      document.getElementById('leve1').style.display = "none";
      document.getElementById('leve2').style.display = "none";
      document.getElementById('canc1').style.display = "none";

    }

    function mth(value) {
      var x = document.getElementById(value).value;
      document.getElementById('holla1').innerHTML = x;

    }

    function method2(value) {
      var x = document.getElementById(value).value;
      document.getElementById('holla2').innerHTML = x;

    }

    function myfun() {
      var x = document.getElementById('slt').value;
      document.getElementById('polla1').innerHTML = x;


    }

    function myfunA() {
      var x = document.getElementById('slt1').value;
      document.getElementById('polla2').innerHTML = x;


    }





    function show(para) {
      var x = document.getElementById(para).value;

      var len = x.length;


      if (len == 9) {
        document.getElementById(para).style.border = "3px solid green";
      } else {
        document.getElementById(para).style.border = "3px solid red";
      }
    }

    function unsh() {
      var y = document.getElementById('inp8').value;
      var zen = y.length;

      document.getElementById('head2').innerHTML = "(" + zen + "/257" + ")";


    }
  </script>


  <style>
    .r1 {
      margin: 65px 0px 0px 0px;
      padding: 12px 0px 5px 0px;
    }

    #file {
      border: none;
      padding: 5px 20px 10px 10px;
      color: whitesmoke;
    }

    #con1 {
      background: url("../images1/111.svg");
      background-repeat: no-repeat;
      background-size: cover;
      margin-bottom: 20px;
    }

    .btn {
      border-radius: 30px;
    }

    p {
      font-weight: 500;
      font-size: 20px;
    }

    .fm {
      display: none;
    }

    #inp {
      margin-top: 8px;
    }

    #inpm1 {
      margin-top: 8px;
    }

    #inpm2 {
      margin-top: 8px;
    }

    #inpm3 {
      margin-top: 8px;
    }

    .fb {
      color: #6c757d;
      height: 80px;
    }

    .moon {
      margin-top: 32px;
    }

    .moon1 {
      margin-top: 32px;
    }

    #rg1 {
      padding: 30px 0px;
    }
  </style>

</head>

<body>








  <div class="container mt-5" id="con1">
    <div class="row text-center pb-5 pt-4 px-5">
      <div class="col-md-12">
        <h3 class="text-center">College Student</h3>
        <i class="fa-solid fa-flag-usa text-danger"> English</i>
      </div>
    </div>

    <div class="row px-5">
      <div class="col-md-12">
        <h4 class="pb-3"> Personal Details<i class="fa-solid fa-pen-to-square"></i></h4>


        <form action="session.php" method="POST" enctype="multipart/form-data">
          <div class="form-row ">
            <div class="col-md-6 pb-3">
              <p>Wanted job Title</p>
              <input type="text" class="form-control bg-secondary text-light" placeholder="e.g.Teacher" onkeyup="upcase('inp1')" id="inp1" name="job1" required>
            </div>

            <div class="col-md-6 pt-3">
              <div class="row" id="rg1">
                <div class="col-md-2">

                  <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                  <lord-icon src="https://cdn.lordicon.com/ajkxzzfb.json" trigger="morph" colors="primary:#848484,secondary:#e83a30" state="morph-group" style="width:100px;height:50px">
                  </lord-icon>

                </div>

                <div class="col-md-10">
                  <input type="file" name="image" class="form-control bg-secondary text-light">
                </div>
              </div>


            </div>

          </div>

          <div class="form-row">
            <div class="col-md-6 pb-3">
              <p>First Name</p>
              <input type="text" class="form-control bg-secondary text-light" placeholder="e.g.Teacher" onkeyup="upcase('inp2')" id="inp2" name="fname1" required>

            </div>

            <div class="col-md-6 pb-3">
              <p>Last Name</p>
              <input type="text" class="form-control bg-secondary text-light" placeholder="e.g.Teacher" onkeyup="upcase('inp2')" id="inp2" name="lname1" required>

            </div>


          </div>

          <div class="form-row">
            <div class="col-md-6 pb-3">
              <p>Email</p>
              <input type="email" class="form-control bg-secondary text-light" id="email" placeholder="e.g.Teacher" onkeyup="upcase('inp3')" id="inp3" name="email1" required>
            </div>

            <div class="col-md-6 pb-3">
              <p>password</p>
              <input type="password" class="form-control bg-secondary text-light" id="email" placeholder="e.g.Teacher" name="email" onkeyup="upcase('inp3')" id="inp3" name="email1" required>
            </div>
          </div>


          <div class="form-row">
            <div class="col-md-6">
              <p>City</p>
              <input type="text" class="form-control bg-secondary text-light" placeholder="e.g.Teacher" onkeyup="upcase('inp4')" id="inp4" name="city1" required>
            </div>

            <div class="col-md-6 pb-3">
              <p>Phone</p>
              <input type="number" class="form-control bg-secondary text-light" placeholder="e.g.Teacher" onkeyup="upcase('inp7'),val()" onkeydown="show('inp7')" id="inp7" name="phone1" required>
            </div>
          </div>

          <div class="form-row pb-4">

            <div class="col-md-12">
              <p class="d-inline pr-5">Address1</p>
              <h6 class="d-inline" id="head2"></h6>
              <input type="text" class="form-control bg-secondary text-light" placeholder="e.g.Teacher" onkeyup="upcase('inp8')" onkeydown="unsh()" id="inp8" name="add1" required>
            </div>


          </div>


          <div class="form-row mt-3">
            <div class="col-md-12">
              <h4>Education <i class="fa-solid fa-pen-to-square"></i></h4>
              <p>A varied Education on Your resume up the value that you learning and background will bring to job</p>
            </div>
          </div>


          <div class="form-row">
            <div class="col-md-12">
              <h4 id="head1"></h4>
              <p id="para"></p>

            </div>


          </div>

          <div class="form-row pb-4">
            <div class="col-md-6">
              <label for="inputAddress">School</label>
              <input type="text" class="form-control bg-secondary text-light" id="inps" placeholder="1234 Main St" onkeyup="first()" name="school">
            </div>

            <div class="col-md-6">
              <label for="inputAddress">Degree</label>
              <input type="text" class="form-control bg-secondary text-light" id="inpd" placeholder="1234 Main St" onkeyup="first()" name="degree">
            </div>
          </div>

          <div class="form-row pb-4">
            <div class="col-md-6">
              <div class="form-row">
                <div class="col-md-6">
                  <label for="inputAddress">Start & Date</label>
                  <input type="date" class="form-control bg-secondary text-light" id="inpst" placeholder="1234 Main St" onkeyup="second()" name="start">
                </div>

                <div class="col-md-6">
                  <label for="inputaddress"></label>
                  <input type="text" class="form-control bg-secondary text-light " id="inp" placeholder="1234 Main St" onkeyup="second()" name="date">
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <label for="inputAddress">City</label>
              <input type="text" class="form-control bg-secondary text-light" placeholder="1234 Main St">
            </div>
          </div>

          <div class="form-row pb-4">
            <div class="col-md-3">
              <label for="exampleFormControlTextarea1">Description</label>
              <textarea class="form-control bg-secondary text-light" id="exampleFormControlTextarea1" rows="5" name="text1"></textarea>
            </div>

            <div class="col-md-3">

              <textarea class="form-control bg-secondary moon text-light" id="exampleFormControlTextarea1" rows="5" name="text2"></textarea>
            </div>

            <div class="col-md-3">

              <textarea class="form-control bg-secondary moon text-light" id="exampleFormControlTextarea1" rows="5" name="text3"></textarea>
            </div>

            <div class="col-md-3">

              <textarea class="form-control bg-secondary moon text-light" id="exampleFormControlTextarea1" rows="5" name="text4"></textarea>
            </div>
          </div>

          <div class="form-row pb-3 ">
            <div class="col-md-12 p-0">
              <button type="button" class="btn btn-primary" onclick="vis1()"> Add more Education</button>
            </div>
          </div>

          <!-- ye vala form tabhi visible hoga jab add more me click hoga -->
          <div class="form-row">

            <div class="col-md-12">
              <h4 id="head2"></h4>
              <p id="para1"></p>

            </div>


          </div>

          <div class="form-row ">
            <div class="col-md-6 fm" id="fm1">
              <label for="inputAddress">School</label>
              <input type="text" class="form-control bg-secondary text-light" id="inps1" placeholder="1234 Main St" onkeyup="third()" name="school1">
            </div>

            <div class="col-md-6 fm" id="fm2">
              <label for="inputAddress">Degree</label>
              <input type="text" class="form-control bg-secondary text-light" id="inpd1" placeholder="1234 Main St" onkeyup="third()" name="degree1">
            </div>
          </div>

          <div class="form-row pb-4">
            <div class="col-md-6  ">
              <div class="form-row ">
                <div class="col-md-6 fm" id="fm3">
                  <label for="inputAddress">Start & Date</label>
                  <input type="date" class="form-control bg-secondary text-light" id="inpst1" placeholder="1234 Main St" onkeyup="four()" name="start1">
                </div>

                <div class="col-md-6 fm" id="fm4">
                  <label for="inputaddress"></label>
                  <input type="text" class="form-control bg-secondary text-light" id="inpm1" placeholder="1234 Main St" onkeyup="four()" name="date1">
                </div>
              </div>
            </div>

            <div class="col-md-6 fm" id="fm5">
              <label for="inputAddress">City</label>
              <input type="text" class="form-control bg-secondary text-light" id="inputAddress" placeholder="1234 Main St">
            </div>
          </div>

          <div class="form-row  pb-3">
            <div class="col-md-3 fm" id="fm05">
              <label for="exampleFormControlTextarea1">Description</label>
              <textarea class="form-control bg-secondary text-light " id="exampleFormControlTextarea1" rows="5" name="text5"></textarea>
            </div>

            <div class="col-md-3 fm moon1" id="area1">

              <textarea class="form-control bg-secondary text-light " rows="5" name="text6"></textarea>
            </div>

            <div class="col-md-3 fm moon1" id="area2">

              <textarea class="form-control bg-secondary text-light " rows="5" name="text7"></textarea>
            </div>

            <div class="col-md-3 fm moon1" id="area3">

              <textarea class="form-control bg-secondary text-light " rows="5" name="text8"></textarea>
            </div>
          </div>

          <div class="form-row pb-3">
            <div class="col-md-12 fm" id="allow">
              <button type="button" class="btn btn-primary" onclick="vis2()">Cancel Education</button>
            </div>
          </div>


          <div class="form-row ">
            <div class="col-md-12">
              <h4>References <i class="fa-solid fa-pen-to-square"></i></h4>
              <input type="checkbox" name="" id="">
              <p class="d-inline">I'd like to hide refrences and make them available only upon request</p>
            </div>
          </div>

          <!-- ye vala form tab visible hoga jab niche ka form bhar diya jaye -->
          <div class="form-row">
            <div class="col-md-12">
              <h4 id="head3"></h4>
              <p id="para2"></p>

            </div>


          </div>

          <div class="form-row pb-4">
            <div class="col-md-6">
              <label for="inputAddress">Referents'Full Name</label>
              <input type="text" class="form-control bg-secondary text-light" id="inps2" placeholder="1234 Main St" onkeyup="first1()" name="ref">
            </div>

            <div class="col-md-6">
              <label for="inputAddress">Company</label>
              <input type="text" class="form-control bg-secondary text-light" id="inpd2" placeholder="1234 Main St" onkeyup="first1()" name="com">
            </div>
          </div>

          <div class="form-row pb-4">
            <div class="col-md-6">
              <label for="inputAddress">Phone</label>
              <input type="number" class="form-control bg-secondary text-light" id="inpst2" placeholder="1234 Main St" onkeyup="second1()" name="ph" onkeydown="show('inpst2')">
            </div>

            <div class="col-md-6">
              <label for="inputAddress">Email</label>
              <input type="email" class="form-control bg-secondary text-light" placeholder="1234 Main St" name="em">
            </div>
          </div>

          <div class="form-row pb-3">
            <div class="col-md-12 p-0">
              <button type="button" class="btn btn-primary" onclick="omg()"><i class="fa-solid fa-plus"></i> Add one More refrences</button>
            </div>
          </div>

          <div class="form-row">

            <div class="col-md-12">
              <h4 id="head4"></h4>
              <p id="para3"></p>

            </div>


          </div>



          <div class="form-row ">
            <div class="col-md-6 fm " id="fm11">
              <label for="inputAddress">Referents'Full Name</label>
              <input type="text" class="form-control bg-secondary text-light" id="inps3" placeholder="1234 Main St" onkeyup="third1()" name="reff1">
            </div>

            <div class="col-md-6 fm" id="fm22">
              <label for="inputAddress">Company</label>
              <input type="text" class="form-control bg-secondary text-light" id="inpd3" placeholder="1234 Main St" onkeyup="third1()" name="comm1">
            </div>
          </div>

          <div class="form-row pb-4">

            <div class="col-md-6 fm " id="fm33">
              <label for="inputAddress">Phone</label>
              <input type="number" class="form-control bg-secondary text-light" id="inpst3" placeholder="1234 Main St" onkeyup="four1()" name="phh1" onkeydown="show('inpst3')">
            </div>

            <div class="col-md-6  fm" id="fm55">
              <label for="inputAddress">Email</label>
              <input type="email" class="form-control bg-secondary text-light" id="inputAddress" placeholder="1234 Main St" name="emm1">
            </div>
          </div>

          <div class="form-row pb-3">
            <div class="col-md-12 fm" id="fm06">
              <button type="button" class="btn btn-primary" onclick="omg1()"><i class="fa-solid fa-plus"></i> Canel refrences</button>
            </div>
          </div>


          <div class="form-row">
            <div class="col-md-12">
              <h4>Work Experience <i class="fa-solid fa-pen-to-square"></i></h4>
            </div>
          </div>

          <div class="form-row">
            <div class="col-md-12">
              <h4></h4>
              <p></p>
            </div>
          </div>

          <div class="form-row pb-3">
            <div class="col-md-6">
              <label for=""> Working Tittle</label>
              <input type="text" class="form-control bg-secondary text-light" name="wk1">
            </div>

            <div class="col-md-6">
              <label for="">Company</label>
              <input type="text" class="form-control bg-secondary text-light" name="ck1">
            </div>
          </div>



          <div class="form-row  pb-3">
            <div class="col-md-3 ">
              <label for="exampleFormControlTextarea1">Description</label>
              <textarea class="form-control bg-secondary text-light " id="exampleFormControlTextarea1" rows="5" name="texta"></textarea>
            </div>

            <div class="col-md-3 ">

              <textarea class="form-control bg-secondary moon text-light" rows="5" name="textb"></textarea>
            </div>

            <div class="col-md-3 ">

              <textarea class="form-control bg-secondary moon text-light" rows="5" name="textc"></textarea>
            </div>

            <div class="col-md-3 ">

              <textarea class="form-control bg-secondary moon text-light" rows="5" name="textd"></textarea>
            </div>
          </div>

          <div class="form-row">
            <div class="col-md-12">
              <button type="button" class="btn btn-primary" onclick="vs2()">Add One more Experience</button>
            </div>
          </div>


          <div class="form-row">
            <div class="col-md-12">
              <h4></h4>
              <p></p>
            </div>
          </div>

          <div class="form-row pb-3">
            <div class="col-md-6 fm" id="fm6">
              <label for=""> Working Tittle</label>
              <input type="text" class="form-control bg-secondary text-light" name="wk2">
            </div>

            <div class="col-md-6 fm" id="fm7">
              <label for="">Company</label>
              <input type="text" class="form-control bg-secondary text-light" name="ck2">
            </div>
          </div>



          <div class="form-row  pb-3">
            <div class="col-md-3 fm" id="fm8">
              <label for="exampleFormControlTextarea1">Description</label>
              <textarea class="form-control bg-secondary text-light " id="exampleFormControlTextarea1" rows="5" name="texte"></textarea>
            </div>

            <div class="col-md-3 fm" id="area4">

              <textarea class="form-control bg-secondary moon text-light" rows="5" name="textf"></textarea>
            </div>

            <div class="col-md-3 fm" id="area5">

              <textarea class="form-control bg-secondary moon text-light" rows="5" name="textg"></textarea>
            </div>

            <div class="col-md-3 fm" id="area6">

              <textarea class="form-control bg-secondary moon text-light" rows="5" name="texth"></textarea>
            </div>
          </div>

          <div class="form-row">
            <div class="col-md-12 fm " id="doom">
              <button type="button" class="btn btn-primary" onclick="vs1()">Cancel Experience</button>
            </div>
          </div>


          <div class="form-row">
            <div class="col-md-12">
              <h4>skills<i class="fa-solid fa-pen-to-square"></i></h4>
              <p>
                Choose five of the most important skills to show your talents! Make sure they match the keywords of the listing if applying via an online system.
              </p>
              <input type="checkbox"> Don't show experience level
            </div>
          </div>

          <div class="form-row py-4">
            <div class="col-md-4 ">
              <button type="button" class="btn btn-secondary" onclick="col('btn1'),dbl1('btn1')" ondblclick="col1('btn1'), vep1('btn1') " id="btn1" value="Teamwork skills">Teamwork skills <i class="fa-solid fa-plus"></i></button>
            </div>

            <div class="col-md-4">
              <button type="button" class="btn btn-secondary" onclick="col('btn2'),dbl2('btn2')" ondblclick="col1('btn2'), vep2('btn2') " id="btn2" value="Office Technology skills">Office Technology skills <i class="fa-solid fa-plus"></i></button>
            </div>

            <div class="col-md-4">
              <button type="button" class="btn btn-secondary" onclick="col('btn3'),dbl3('btn3')" ondblclick="col1('btn3'), vep3('btn3') " id="btn3" value="Advance Communication  skills">Advance Communication skills <i class="fa-solid fa-plus"></i></button>
            </div>
          </div>

          <div class="form-row pb-4">
            <div class="col-md-4">
              <button type="button" class="btn btn-secondary" onclick="col('btn4'),lam4('btn4')" ondblclick="col1('btn4'), vep4('btn4') " id="btn4" value="Social media platform">Social media platform <i class="fa-solid fa-plus"></i></button>
            </div>

            <div class="col-md-4">
              <button type="button" class="btn btn-secondary" onclick="col('btn5'),dbl5('btn5')" ondblclick="col1('btn5'), vep5('btn5') " id="btn5" value="multitasking skills">multitasking skills <i class="fa-solid fa-plus"></i></button>
            </div>

            <div class="col-md-4">
              <button type="button" class="btn btn-secondary" onclick="col('btn6'),dbl6('btn6')" ondblclick="col1('btn6'), vep6('btn6') " id="btn6" value="Execellent Customer services skills skills">Execellent Customer services skills skills <i class="fa-solid fa-plus"></i></button>
            </div>
          </div>

          <div class="form-row pb-4">
            <div class="col-md-6">
              <button type="button" class="btn btn-secondary" onclick="col('btn7'),dbl7('btn7')" ondblclick="col1('btn7'), vep7('btn7') " id="btn7" value="Knowledge of food safety">Knowledge of food safety <i class="fa-solid fa-plus"></i></button>
            </div>

            <div class="col-md-6">
              <button type="button" class="btn btn-secondary" onclick="col('btn8'),dbl8('btn8')" ondblclick="col1('btn8'), vep8('btn8') " id="btn8" value="Execellent Work Ethic">Execellent Work Ethic <i class="fa-solid fa-plus"></i></button>
            </div>


          </div>

          <div class="form-row my-4 ">
            <div class="col-md-12 ">
              <input type="text" class="form-control bg-secondary fb text-center text-light" id="inpa" value="" placeholder="1234 Main St" name="tc1">
            </div>

          </div>

          <div class="form-row my-4">
            <div class="col-md-12  ">
              <input type="text" class="form-control bg-secondary fb text-center text-light" id="inpb" value="" placeholder="1234 Main St" name="tc2">
            </div>
          </div>

          <div class="form-row my-4">
            <div class="col-md-12  ">
              <input type="text" class="form-control bg-secondary fb text-center text-light" id="inpc" value="" placeholder="1234 Main St" name="tc3">
            </div>
          </div>

          <div class="form-row my-4">
            <div class="col-md-12  ">
              <input type="text" class="form-control bg-secondary fb text-center text-light" id="peg" value="" placeholder="1234 Main St" name="tc4">
            </div>
          </div>


          <div class="form-row my-4">
            <div class="col-md-12  ">
              <input type="text" class="form-control bg-secondary fb text-center text-light" id="inpe" value="" placeholder="1234 Main St" name="tc5">
            </div>
          </div>

          <div class="form-row my-4">
            <div class="col-md-12  ">
              <input type="text" class="form-control bg-secondary fb text-center text-light" id="inpf" value="" placeholder="1234 Main St" name="tc6">
            </div>
          </div>

          <div class="form-row my-4">
            <div class="col-md-12  ">
              <input type="text" class="form-control bg-secondary fb text-center text-light" id="inpg" value="" placeholder="1234 Main St" name="tc7">
            </div>
          </div>

          <div class="form-row my-4">
            <div class="col-md-12  ">
              <input type="text" class="form-control bg-secondary fb text-center text-light" id="inph" value="" placeholder="1234 Main St" name="tc8">
            </div>
          </div>


          <div class="form-row">
            <div class="col-md-12">
              <h4>Languages<i class="fa-solid fa-pen-to-square"></i></h4>
            </div>
          </div>

          <div class="form-row">
            <div class="col-md-12">
              <h4 id="holla1"></h4>
              <p id="polla1"></p>
            </div>
          </div>

          <div class="form-row pb-4">
            <div class="col-md-6">
              <label for="inputAddress">Languages</label>
              <input type="text" class="form-control bg-secondary text-light" id="lg" onkeyup="mth('lg')" placeholder="1234 Main St" name="lga">
            </div>

            <div class="col-md-6">
              <label for="inputAddress">level</label>
              <select name="chng" id="slt" class="form-control bg-secondary text-light" onchange="myfun()">
                <option value="Native Speaker">Native Speaker</option>
                <option value="Highly proficient">Highly proficient</option>
                <option value="very good command">very good command</option>
                <option value="Good working Knowledge">Good working Knowledge</option>
                <option value="working Knowledge">working Knowledge</option>
              </select>

            </div>
          </div>

          <div class="form-row">
            <button type="button" class="btn btn-primary" onclick="none()"><i class="fa-solid fa-plus"></i>Add one more Language</button>
          </div>

          <div class="form-row ">
            <div class="col-md-12 fm" id="leve0">
              <h4 id="holla2"></h4>
              <p id="polla2"></p>
            </div>
          </div>

          <div class="form-row pb-4">
            <div class="col-md-6 fm" id="leve1">
              <label for="inputAddress">Languages</label>
              <input type="text" class="form-control bg-secondary text-light" id="lang2" placeholder="1234 Main St" onkeyup="method2('lang2')" name="lgb">
            </div>

            <div class="col-md-6 fm" id="leve2">
              <label for="inputAddress">level</label>
              <select name="chng1" id="slt1" class="form-control bg-secondary text-light" onchange="myfunA()">
                <option value="Native Speaker">Native Speaker</option>
                <option value="Highly proficient">Highly proficient</option>
                <option value="very good command">very good command</option>
                <option value="Good working Knowledge">Good working Knowledge</option>
                <option value="working Knowledge">working Knowledge</option>
              </select>

            </div>
          </div>

          <div class="form-row">
            <div class="col-md-12">
              <button type="button" class="btn btn-primary fm" onclick="none1()" id="canc1"><i class="fa-solid fa-plus"></i> Cancel Language</button>
            </div>
          </div>

          <div class="form-row">
            <div class="col-md-12">
              <h4>Hobbies <i class="fa-solid fa-pen-to-square"></i></h4>
              <p>
                What do you like?
              </p>

            </div>
          </div>

          <div class="form-row">
            <div class="col-md-12">

              <textarea class="form-control bg-secondary text-light" id="exampleFormControlTextarea1" rows="5" name="exam"></textarea>
            </div>
          </div>

          <div class="form-row py-5">

            <div class="col-md-6 text-center">
              <a href="home.php"><button type="button" class="btn btn-secondary font-weight-bold">BACK TO HOME


                </button></a>
              <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
              <lord-icon src="https://cdn.lordicon.com/hjbsbdhw.json" trigger="hover" colors="primary:#3a3347,secondary:#f24c00,tertiary:#b26836,quaternary:#ebe6ef" state="hover" style="width:50px;height:50px">
              </lord-icon>
            </div>

            <div class="col-md-6 text-center">
              <input type="submit" class="btn btn-danger font-weight-bold" value="PREVIEW" name="submit">
              <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
              <lord-icon src="https://cdn.lordicon.com/pqxdilfs.json" trigger="hover" colors="outline:#e4e4e4,primary:#ffffff,secondary:#e4e4e4,tertiary:#e83a30" style="width:50px;height:50px">
              </lord-icon>
            </div>
          </div>

        </form>
      </div>

    </div>

  </div>

</body>




</html>