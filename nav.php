<nav class="navbar">
  <a class="judul" href="index.php">Budaya Jakarta</a>
  <a href="index.php" style="color:white;">Home</a>
  <a href="belajar/belajar.php" style="color:white;">Belajar</a>
  <a href="quiz.php" style="color:white;">Quiz</a>
  <?php
    if(isset($_COOKIE['sessionkey'])){
        echo '<a style="color:white;" href="logout.php">Logout dari '.getun($_COOKIE['sessionkey'],$conn).'<a>';
    }else{
      echo "<a class='loginbtn' href='login.php' style='color:white;'>Login/Register</a>";
    }
  ?>
</nav>
