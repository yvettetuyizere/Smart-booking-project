<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="payment";

$con = mysqli_connect($servername,$username,$password,$dbname);
if($con){
    echo "connect ok";
}
else{
    echo "connect fail".mysqli.error();
}
?>