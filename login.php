<?php
  include_once 'functions/conn.php';
  if(isset($_COOKIE['sessionkey'])){
  $kuncimotor = $_COOKIE['sessionkey'];

  if(mysqli_num_rows(mysqli_query($conn,"SELECT * FROM usersession WHERE sessionkey='$kuncimotor'")) == 1){
    header("Location: index.php");
  }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="shortcut icon" href="images/favicon.png">
  <meta charset="utf-8">
  <title>Login</title>
</head>

<body>
  <?php include_once 'nav.php';?>
  <h1 class="login-text">Login</h1>
  <form class="login-dialog" method="post">
    <p>Username</p>
    <input name="username" type="text" placeholder="Masukkan Username">
    <p>Password</p>
    <input name="password" type="password" placeholder="Masukkan Password"><br><br>
    <input name="submit" type="submit" class="submit-btn">
    <?php
      if(isset($_POST['username']) || isset($_POST['password'])){
          $username = mysqli_escape_string($conn,$_POST['username']);
          $cari = "SELECT * FROM userdata WHERE username='$username'";
          $cariquery = mysqli_query($conn,$cari);
          if(mysqli_num_rows($cariquery) != 0){
            while($row = mysqli_fetch_assoc($cariquery)){
              $pwenc = $row['password'];
            }
          if(password_verify($_POST['password'],$pwenc)){
            $kunci = password_hash("",PASSWORD_BCRYPT);
            if(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM usersession WHERE username='$username'")) == 1){
              mysqli_query($conn,"UPDATE usersession SET sessionkey='$kunci' WHERE username='$username'");
              setcookie('sessionkey',$kunci);
              header("Location: index.php");
            }else{
              mysqli_query($conn,"INSERT INTO usersession (username,sessionkey) VALUES username='$username' sessionkey='$kunci'");
              setcookie('sessionkey',$kunci);
              header("Location: index.php");
            }
          }
          else{
            echo 'Username/Password salah';
          }
        }

          else{
            echo 'Username/Password salah';
          }
      }
    ?>
  </form>


<br><a class="login-dialog" href="register.php">Belom punya akun Belajar Jakarta? Daftar Disini</a>

</body>

</html>
