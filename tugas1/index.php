<!-- CREATE BY : bakti nur wahyudin -->
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>CRUD Sederhana Bakti </title>
<link href="css/style.css" rel="stylesheet">
</head>

<body>
  <div class="heading">
    <h1>Web Programming II</h1>
    <h2>Program CRUD Sederhana dengan PHP</h2>
  </div>
  <div class="side-right">
    <ul>
      <li class="aktif"><a class="aktif">Input Data</a></li>
      <li><a href="data.php">Lihat Data</a></li>
    </ul>
  </div>
  <center>
  <br/><br/>
  <div style="text-align: center; font-weight: bold; margin-bottom: 10px;">
    <tr>
      <td height="60" colspan="3"><h2>Halaman Input data</h2></td>
    </tr>
  </div>
  <table style="border:1px solid black; padding: 50px;">
    <form action="proses/proses_input.php" method="post">
    <tr>
      <td height="30">Masukkan Nama</td>
      <td>:</td>
      <td><input type="text" name="nama" placeholder="masukkan nama" required=""></td>
    </tr>
    <tr>
      <td height="30">Masukkan Username</td>
      <td>:</td>
      <td><input type="text" name="user" placeholder="masukkan username" required=""></td>
    </tr>
    <tr>
      <td height="30">Masukkan Password</td>
      <td>:</td>
      <td><input type="password" name="password" placeholder="masukkan password" required=""></td>
    </tr>
    <tr>
      <td height="30">Masukkan Email</td>
      <td>:</td>
      <td><input type="email" name="email" placeholder="masukan email" required=""></td>
    </tr>
    <tr>
      <td height="60" colspan="3"><div align="center">
        <input type="submit" name="Submit" value="Simpan" />
        <input type="reset" name="reset" value="Reset" />
      </div></td>
    </tr>
  </form>
  </table>
  </center>

</body>

</html>
