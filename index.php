<?php
  session_start();
  include_once 'functions/conn.php';
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="shortcut icon" href="images/favicon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta init-viewport=>
  <title>Budaya Jakarta</title>
</head>

<body>
  <?php include_once 'nav.php';?>
  <div class="content-1">
    <div>
      <h1 class="ibukota">Ibukota Indonesia, dengan beragam Budayanya.</h1>
      <p class="ibukota-p">DKI Jakarta adalah ibukota dari indonesia yang memiliki luas 661KM. Jakarta menjadi pusat segala macam pekerjaan di indonesia Mulai dari Politik, Bisnis dan Kebudayaan.</p>
      <p class="ibukota-p">Selain itu, Jakarta memiliki beragam budaya seperti Kerak Telor, Ondel Ondel, dan Silat. Namun apabila kita mengabaikan budaya budaya Jakarta, pasti akan punah. </p>
      <p class="ibukota-p">Dengan situs ini, kamu bisa belajar budaya jakarta dengan mudah karena kamu bisa berdiskusi membahas tentang budaya jakarta. Selain itu, di situs ini kamu bisa belajar tentang budaya jakarta dengan materi yang sudah disediakan.</p>

    </div>
      <img class="bg" alt="Gambaran Jakarta" src="images/skyline.jpg">
  </div>

  <div class="ayo-belajar">
    <h1>Ayo! Belajar Budaya Jakarta</h1>
    <a href="belajar/belajar.php"><button class='submit-btn'>Belajar</button></a>
  </div>

  <footer class="footer">
    <p>©Copyright Team LKSN 2018</p>
    <p>Karya ini dibuat dalam rangka mengikuti LKS SMK 2018 dalam Bidang WEB DESIGN & DEVELOPMENT</p>
  </footer>

</body>

</html>
