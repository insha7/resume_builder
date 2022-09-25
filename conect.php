<?php


$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "resume";

$con = mysqli_connect($hostname,$username,$password, $dbname);

if($con)
{
    // echo "connected success";

   // mysqli_select_db($dbname);
}

else {
    echo "Not connected ";
}

?>