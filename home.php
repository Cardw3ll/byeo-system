<?php
    include_once 'dbs.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home page</title>
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
<header>

</header>
<section>
  <nav>
    <a href="home.php">
      <img src="images\logo3.png" alt="logo" width="100" height="100" class="center">
      <p></p>
    </a>
    <ul>

      <li> <a href="home.php">Home</a> </li>
      <li><a href="aboutUs.php">About us</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="policy.php">Policy</a></li>
    </ul>
  </nav>

  <article class="">


    <h2>What is numerology?</h2>
    <p>Numerology is the belief in the divine or mystical relationship between a number and one or more coinciding events. <br>
It is also the study of the numerical value of the letters in words, names, and ideas. It is often associated with
 <br>the paranormal, alongside astrology and similar to divinatory arts.</p>
    <br>
    <h2>What is astrology?</h2>
    <p>Astrology is a pseudoscience that claims to divine information about human affairs and terrestrial
<br>events by studying the movements and relative positions of celestial objects</p>
    <br>
    <form action="identity.php" method="post">
      <label for="">First Name:</label> <input type="text" name="first" placeholder="firstName">
      <br>
      <label for="">Middle Name:</label>  <input type="text" name="middle" placeholder="middleName">
      <br>
      <label for="">Last Name:</label>  <input type="text" name="last" placeholder="lastName">
      <br>
    <label for="">Date Of Birth:</label>  <input type="date" name="dateOfBirth" >
      <br>
     <button type="submit" name="submit" style="background-color:#00FFFF;color:white;"> PREDICT </button>
    </form>

  </article>
</section>

<footer>
  <p>
    &copy Copyright
  </p>
</footer>

  </body>
</html>
