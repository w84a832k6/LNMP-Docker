<?php
try{
    $con =new PDO("mysql:host=mysql;dbname=mysql","root","Canon0228-");
    echo"ok...";
}catch(PDOException $e){
    echo $e->getMessage();
}
$con = new mysqli("mysql","root","Canon0228-");
if($con->connect_error){
    die("connect fail".$con->connect_error);
}else{
    echo "connect success!";
}
