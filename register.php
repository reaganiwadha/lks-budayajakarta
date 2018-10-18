<?php include_once 'functions/conn.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="shortcut icon" href="images/favicon.png">
  <meta charset="utf-8">
  <title>Register</title>
</head>

<body>
  <?php include_once 'nav.php';?>
  <h1 class="login-text">Register</h1>
  <form class="login-dialog" method="post">
    <p>Email</p>
    <input name="email" type="text" placeholder="Masukkan Email">
    <p>Username</p>
    <input name="username" type="text" placeholder="Masukkan Username">
    <p>Password</p>
    <input name="password" type="password" placeholder="Masukkan Password"><br><br>
    <input type="submit" class="submit-btn" name='submit'>
    <?php
    if(isset($_POST['submit'])){
      if(isset($_POST['email']) || isset($_POST['username']) || isset($_POST['password'])){
        $email = mysqli_escape_string($conn,$_POST['email']);
        $username = mysqli_escape_string($conn,$_POST['username']);
        $password = password_hash($_POST['password'],PASSWORD_BCRYPT);

        //nyari email yang sama
        $emailquery = mysqli_query($conn, "SELECT email FROM userdata WHERE email='$email'");
        $usernamequery = mysqli_query($conn, "SELECT username FROM userdata WHERE username='$username'");

        if(mysqli_num_rows($emailquery) > 0){
          echo 'Email sudah terpakai';
        }else if(mysqli_num_rows($usernamequery) > 0){
          echo 'Username sudah terpakai';
        }else{
          $querydaftar = "INSERT INTO userdata (email,username,password) VALUES ('$email','$username','$password')";
          mysqli_query($conn,$querydaftar);
          $kunci = password_hash("",PASSWORD_BCRYPT);
          mysqli_query($conn,"INSERT INTO usersession (username,sessionkey) VALUES ('$username','$kunci')");
          setcookie('sessionkey',$kunci);
          header("Location: index.php");
        }
      }
    }
    ?>
  </form>
<br><a class="login-dialog" href="login.php">Sudah punya akun Belajar Jakarta? Login Disini</a>

</body>

</html>
