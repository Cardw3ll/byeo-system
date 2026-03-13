<?php
    include_once 'dbs.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      ul{
        list-style-type: none;;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333333;
      }
      li{
        float: left;
      }
      li a{
        display: block;
        color: #c8aa88;
        text-align: center;
        font-size: 40px;
        padding: 30px;
        text-decoration: none;
      }
      body{
        color: black;
        //background-image:url("HOME PAGE1.jpg") ;
        background-repeat: no-repeat;
        background-size: 100% 100%;
      }

      form{
        text-align: center;
      }
      p{
        text-align: center;
        font-size: 20px;

      }
      h2{
          text-align: center;
      }
      .center{
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 10%;
      }
      body{
        background: url("images/3.jpg");
        //background-repeat: no-repeat;
        //background-size: 100% ;
      }
      footer{
        color: #ffffff;
      }
    </style>
  </head>
  <body>
    <nav>
      <a href="home.php">
        <img src="images\logo3.png" alt="logo" width="100" height="100"  class="center">
<p></p>
      </a>
      <ul>

        <li> <a href="home.php">Home</a> </li>
        <li><a href="aboutUs.php">About us</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="policy.php">Policy</a></li>
      </ul>
    </nav>

    <?php
    require 'dbs.php';
    $sql = " SELECT * FROM identitificaton ORDER BY id DESC LIMIT 1";
    $results = mysqli_query($conn, $sql);//using our connection to the database
    $resultscheck = mysqli_num_rows($results);
    $row = mysqli_fetch_assoc( $results);//checking if we have any results from the database
    $date = $row["date"];
    $dateParts = explode('-',$date);
     $year = $dateParts[0];
    $month = $dateParts[1];
    $day = $dateParts[2];





    echo "<h2><br><br>Your full name is ".$row["firstname"]." ".$row["middleName"]." ".$row["lastName"]."</h2>";


      $i = 0;

    $yearly = str_split($year);
       $f = (int)$yearly[0];
       $s = (int)$yearly[1];
       $d = (int)$yearly[2];
       $g = (int)$yearly[3];

       $x = $s + $d +$f +$g;
       $y = 0;
    if ($x > 9) {
       $z = strval($x);

       $upyear = str_split($z);
       $a = (int)$upyear[0];
       $b = (int)$upyear[1];

     $y = $a +$b;
    }else{
     $y = $x;
    }

    $mon = str_split($month);
    $w = (int)$mon[0];
    $e = (int)$mon[1];

      $p = $w+$e;
      $l = 0;
      if($p > 9)
      {
        $z = strval($p);

        $upyear = str_split($z);
        $a = (int)$upyear[0];
        $b = (int)$upyear[1];

       $l = $a + $b;

     }else{
       $l = $p;

     }

      $days = str_split($day);
        $t = (int)$days[0];
        $r = (int)$days[1];

        $m = $t+$r;
        $q = 0;
        if($m > 9)
        {
          $z = strval($m);

          $upyear = str_split($z);
          $a = (int)$upyear[0];
          $b = (int)$upyear[1];

         $q = $a + $b;

       }else{
         $q = $m;

       }

       $total1 = $q+$p+$y;

       if($total1 > 9)
       {
         $z = strval($total1);

         $upyear = str_split($z);
         $a = (int)$upyear[0];
         $b = (int)$upyear[1];

        $i = $a + $b;
      }else{
        $i = $total1;
      }

      echo "<h2><br>Your life path number is ".$i."</h2>";
      $theExpressNo = strval($i);
      $sql = " SELECT `numID`, `numDetail` FROM `numerology` WHERE numID = $theExpressNo";
      $results = mysqli_query($conn, $sql);//using our connection to the database
      $resultscheck = mysqli_num_rows($results);
      $row = mysqli_fetch_assoc( $results);
      echo "<h2><br><br>What your number means</h2>";
      echo "<p><br>".$row["numDetail"]."</p>";


      $sql = " SELECT `personId`, `personDetails` FROM `personality` WHERE personId= $theExpressNo";
      $results = mysqli_query($conn, $sql);//using our connection to the database
      $resultscheck = mysqli_num_rows($results);
      $row = mysqli_fetch_assoc( $results);
      echo "<h2><br><br>The personalities associated with your number are:</h2>";
      echo "<p><br>".$row["personDetails"]."</p>";


      $sql = " SELECT `hobbyId`, `hobbyDetails` FROM `hobbies` WHERE hobbyId= $theExpressNo";
      $results = mysqli_query($conn, $sql);//using our connection to the database
      $resultscheck = mysqli_num_rows($results);
      $row = mysqli_fetch_assoc( $results);
      echo "<h2><br><br>The hobbies associated with your number are:</h2>";
      echo "<p><br>".$row["hobbyDetails"]."</p>";

      $sql = " SELECT `careerId`, `careerDetails` FROM `careeroptions` WHERE careerId = $theExpressNo";
      $results = mysqli_query($conn, $sql);//using our connection to the database
      $resultscheck = mysqli_num_rows($results);
      $row = mysqli_fetch_assoc( $results);
      echo "<h2><br><br>The Careers associated with your number are:</h2>";
      echo "<p><br>".$row["careerDetails"]."</p>";




     ?>



  </body>
</html>
