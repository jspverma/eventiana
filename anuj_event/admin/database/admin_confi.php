<?php
$mysqli=new mysqli("50.62.209.49","eventiana","eventiana@gmail","eventiana_db");
//$mysqli=new mysqli("localhost","root","","eventiana_db");
if($mysqli=== false){
    die("ERROR : COULDNOT CONNECT. ".mysqli_connect_error());
}
?>