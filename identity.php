<?php

//taking in form answers in php as well ensuring their is no code
if (isset($_POST['submit'])) {

require 'dbs.php';

$first = mysqli_real_escape_string($conn,$_POST['first']);
$middle = mysqli_real_escape_string($conn,$_POST['middle']);
$last = mysqli_real_escape_string($conn,$_POST['last']);
$DateOfBirth = date('Y-m-d',strtotime(mysqli_real_escape_string($conn,$_POST['dateOfBirth'])));

if (empty($first) || empty($last) || empty($DateOfBirth )) {
  header("Location:Home.php?error=emptyFeilds");
  exit();
}

else {
$sql = "INSERT INTO identitificaton ( `firstname`, `middleName`, `lastName`, `date`) VALUES ( '$first','$middle','$last','$DateOfBirth');";//Mysql statement that will do somwting with the database

$results = mysqli_query($conn, $sql);//using our connection to the database

header("Location:results.php?stored=succes");//to show it inputed successfuly on the url
}

}
else {
  header("Location:Home.php");//to show it inputed successfuly on the url
}
