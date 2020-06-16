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
      </div>
<div class="container"> 
<title>Form Register</title>
<div align='center'>
      <form action="prosesdaftar.php" method="post">
      <table>      
      <tr>
        <td colspan="2" align="center"><h1>New Register</h1></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td> : <input name="username" type="text"></td>
      </tr>
      <tr>
        <td>Password</td>
        <td> : <input type="password" name="password"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td> : <input name="alamat" type="text"></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td> : <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki</td>
        <td><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</td>
      </tr>
      <tr>
        <td>Jurusan</td>
        <td> : </td>
      <tr>
        <td></td>
        <td><input type="radio" name="jurusan" value="RPL">RPL</td>
      </tr>
      <tr>
        <td></td>
        <td><input type="radio" name="jurusan" value="DKV">FARMASI</td>
      </tr>
      <tr>
        <td>Ekstrakulikuler Yang Diikuti </td>
        <td> : </td>
      </tr>
      <tr>
        <td></td>
        <td><input type="checkbox" name="hobi" value="Basket">Basket</td>
      </tr>
      <tr>
        <td></td>
        <td><input type="checkbox" name="hobi" value="Futsal">Futsal</td>
      </tr>
      <tr>
        <td></td>
        <td><input type="checkbox" name="hobi" value="Renang">Volly</td>
      </tr>
      <tr>
        <td></td>
        <td><input type="checkbox" name="hobi" value="Bersepeda">English Club</td>
      </tr>
      <tr>
        <td></td>
        <td><input type="checkbox" name="hobi" value="Berwisata">Pramuka</td>
      </tr>
      <tr>
        <td colspan="2" align="right"><input value="Daftar" type="submit" onclick="pemberithuan()"> <input value="Batal" type="reset"></td>
      </tr>
      <tr>
        <td colspan="2" align="center">Have an Account? <a href="login.php"><b>Login</b></a></td>
      </tr>
      </table>
      </form>
</div>
</div>
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