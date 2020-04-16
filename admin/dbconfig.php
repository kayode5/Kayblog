<?php

$con = mysqli_connect("eporqep6b4b8ql12.chr7pe7iynqr.eu-west-1.rds.amazonaws.com","pmvixfp68j2x11t6","pudavx552hiovbkl"); //connecting database

if (!$con) //if connection is not true do this
{
  die('Could not connect: ' . mysqli_error());
}
//then select the database name blog
mysqli_select_db( $con, "epwjnbukp1b6sgfx");

//setting timestamp for every date to be used
date_default_timezone_set("Europe/Dublin");
$date=date('Y-m-d H:i:s');
ob_start();
?>
