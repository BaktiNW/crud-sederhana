<!-- CREATE BY : bakti nur wahyudin -->
<?php
error_reporting(0);
include "koneksi/koneksi.php";
$id = $_GET['id'];
$query = mysql_query("SELECT *FROM db_crud_lat1 where id='$id'");
$data = mysql_fetch_array($query);
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>CRUD Sederhana Bakti </title>
<link href="css/style.css" rel="stylesheet" />
</head>

<body>
  <div class="heading">
    <h1>Web Programming II</h1>
    <h2>Program CRUD Sederhana dengan PHP</h2>
  </div>
  <center>
  <br/><br/>
  <div style="text-align: center; font-weight: bold; margin-bottom: 10px;">
    <tr>
      <td height="60" colspan="3"><h2>Halaman Edit data</h2></td>
    </tr>
  </div>
  <table style="border:1px solid black; padding: 50px;">
    <form action="proses/proses_update.php" method="post">
      <input type="hidden" name="id" value="<?php echo $data['id'];?>">
    <tr>
      <td height="30">Nama</td>
      <td>:</td>
      <td><input type="text" name="nama" value="<?php echo $data['nama'];?>" required=""></td>
    </tr>
    <tr>
      <td height="30">Username</td>
      <td>:</td>
      <td><input type="text" name="user" value="<?php echo $data['username'];?>" required=""></td>
    </tr>
    <tr>
      <td height="30">Password</td>
      <td>:</td>
      <td><input type="password" name="password" value="<?php echo $data['password'];?>" required=""></td>
    </tr>
    <tr>
      <td height="30">Email</td>
      <td>:</td>
      <td><input type="email" name="email" value="<?php echo $data['email'];?>" required=""></td>
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
