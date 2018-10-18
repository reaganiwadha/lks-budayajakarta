<?php
  setcookie('sessionkey','');
  session_destroy();
  header('Location: index.php');
?>
