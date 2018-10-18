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
  <h1 style="padding-left:1em;">Quiz</h1><h1 id="skor" style="padding-left:1em;"></h1>
  <div class="quiz q1" style="padding-left:2em;">
    <p class="soal">1.Kerak telor menggunakan?</p>
    <input type="checkbox" value="benar">Ebi<br>
    <input type="checkbox">Bayam<br>
    <input type="checkbox">Ubi
  </div>
  <div class="quiz q2" style="padding-left:2em;">
    <p class="soal">2.Tinggi ondel ondel pada biasanya adalah?</p>
    <input type="checkbox">1Meter<br>
    <input type="checkbox" value="benar">2.5Meter<br>
    <input type="checkbox">0.5Meter
  </div>
  <div class="quiz q3" style="padding-left:2em;">
    <p class="soal">3.Ondel Ondel dibuat dari?</p>
    <input type="checkbox">Bambu<br>
    <input type="checkbox" value="benar">Anyaman Bambu<br>
    <input type="checkbox">Kulit sapi
  </div>
  <div class="quiz q4" style="padding-left:2em;">
    <p class="soal">4.Lenong adalah?</p>
    <input type="checkbox">Tari Tradisional<br>
    <input type="checkbox" value="benar">Teater Tradisional<br>
    <input type="checkbox">Alat Musik
  </div>
  <div class="quiz q5" style="padding-left:2em;">
    <p class="soal">5.Lenong memiliki sifat?</p>
    <input type="checkbox" value="benar">Lucu/Humoris<br>
    <input type="checkbox">Membosankan<br>
    <input type="checkbox">Menyedihkan
  </div>

  <button class="submit-btn duaemkekanan" onclick="hitung()">Selesai</button>

  <script>
  function hitung(){
  var jawabBetul = 0;
  var x=document.getElementsByTagName('input')
    for(var y=0; x.length>y; y++){
    	if(x[y].value == 'benar' && x[y].checked){
    	jawabBetul++;
    }
  }

  if(jawabBetul>5){
    jawabBetul='Tidak boleh memilih dua jawaban dalam satu soal'
  }else{
  jawabBetul=jawabBetul*20;
  console.log(jawabBetul);
  jawabBetul = 'Skormu adalah ' + jawabBetul;
}
  document.getElementById('skor').innerHTML = jawabBetul;
}
  </script>

</body>

</html>
