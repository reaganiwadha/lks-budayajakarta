<?php
  $conn = mysqli_connect("127.0.0.1","root","","lks");
  function getun($s,$c){
    while($row = mysqli_fetch_assoc(mysqli_query($c,"SELECT username FROM usersession WHERE sessionkey='$s'"))){
      return $row['username'];
    }
  }
