<?php
   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $alamat = $_POST['alamat'];
   $jenis_kelamin = $_POST['jenis_kelamin'];
   $jurusan = $_POST['jurusan'];
   $hobi = $_POST['hobi'];
   $sql = "SELECT * FROM user WHERE username = '$username'";
   $query = $db->query($sql);
   if($query->num_rows != 0) {
     echo "<div align='center'>Username Ready Register! <a href='daftar.php'>Back</a></div>";
   } else {
     if(!$username || !$pass) {
       echo "<div align='center'>Your Address Not Fully! <a href='daftar.php'>Back</a>";
     } else {
       $data = "INSERT INTO user VALUES (NULL, '$username', '$pass', '$alamat', '$jenis_kelamin', 
       '$jurusan', '$hobi')";
       $simpan = $db->query($data);
       if($simpan) {
         echo "<div align='center'>Register Success!, <a href='login.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Proses Fail!</div>";
       }
     }
   }
?>