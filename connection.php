<?php
$db_hostname='localhost';
$db_user='root';
$db_mypass='GRAC3MOAWADk20';
$db_mydd='fitness';

$con=mysqli_connect($db_hostname,$db_user,$db_mypass,$db_mydd);

if(mysqli_connect_errno()){
    echo "the connection to the database failed" . mysqli_connect_error();
}

?>