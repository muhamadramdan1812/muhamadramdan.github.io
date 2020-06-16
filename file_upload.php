<?php
include ('koneksi.php');
include ('action_upload.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <title>My Website</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/styleslider.css">
</head>
<body>
<div class="container">
    <div class="header">
    <a href="img/8.png"><img src="img/8.png" width="110" height="120" style="float: left; padding-bottom: 20px"> </a>
    <br>
    <h2 align="center" style="margin-bottom: 10px">SELAMAT DATANG DI SMK BABLO RANCAEKEK</h2>
    </div>
  </div>
  <div class="container">
    <div class="main">
      <div class="right">
      <div id="contoh">
        <h3 align="center">Menu</h3>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="profil.php">Profil</a></li>
                <li><a href="galeri.php">Galeri</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="file_upload.php">File Upload</a></li>
                <li><a href="logout.php">Logout</a></li>
              </li>
          </ul>
          <br>
        <img src="img/gif/1.gif" width="180px" height="120px" style="margin-left: 60px"><br>
      </div>
      </div>
      <div class="center">
        <h1 align="center">SMK BABLO RANCAEKEK</h1>
        <hr>
      </div>
      <br>
      <br>
      <br>
      <br>
<div class="container">

  <div class="content">
    <form method="post" enctype="multipart/form-data" action="">
      <table align="center">
        <tr>
          <td colspan="2" height="25" class="title">Form Upload File</td>
        </tr>
        <tr>
          <td width="100">File</td>
          <td><input type="file" name="data_upload"/></td>
        </tr>
        <tr>
          <td width="100" valign="top">Keterangan</td>
          <td><textarea name="keterangan" cols="30" rows="3"></textarea></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" name="btnUpload" value="Upload"/></td>
        </tr>
      </table>
    </form>
  </div>
</div>
<br>
<br>
<br>
     <div class="footer" style="margin-right: 100px; margin-left: 100px;">
      <a href="" style="float: left;"><img src="img/icon/fb.png" width="50" height="50"></a>
      <a href="" style="float: left;"><img src="img/icon/ig.png" width="50" height="50"></a>
      <a href="" style="float: left;"><img src="img/icon/gs.png" width="50" height="50"></a>
      <a href="" style="float: left;"><img src="img/icon/pin.png" width="50" height="50"></a>
      <a href="" style="float: left;"><img src="img/icon/twitter.png" width="50" height="50"></a>
      <p align="center" style="padding-top: 15px; margin-right: 120px;">Coppright &copy; 2019 <a href="index.html">SMK BABLO RANCAEKEK</a></p>

      </div>
  </div>  
  </div>      
</body>
</html>
