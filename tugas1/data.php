<!-- CREATE BY : bakti nur wahyudin -->
<?php
error_reporting(0);
include "koneksi/koneksi.php";
?>
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
      <li><a href="./">Input Data</a></li>
      <li class="aktif"><a href="#" class="aktif">Lihat Data</a></li>
    </ul>
  </div>
  <center>
  <br/><br/>
  <div style="text-align: center; font-weight: bold; margin-bottom: 10px;">
    <tr>
      <td height="60" colspan="3"><h2>Halaman Tampilan Data</h2></td>
    </tr>
  </div>
  <table class="table">
    <thead class="thead">
      <tr>
        <th width="30">No</th>
        <th width="150">Nama</th>
        <th width="100">Username</th>
        <th width="100">Email</th>
        <th>Pilihan</th>
      </tr>
    </thead>
    <tbody class="tbody">
      <?php
      $query = mysql_query("SELECT *FROM db_crud_lat1");
      $no=0;
      while($data=mysql_fetch_array($query)){
        $no++;
        ?>
        <tr>
          <td><?php echo $no;?></td>
          <td><?php echo $data['nama'];?></td>
          <td><?php echo $data['username'];?></td>
          <td><?php echo $data['email'];?></td>
          <td><a href="edit.php?id=<?php echo $data[id];?>" class="btn-edit">Edit </a>||<a href="proses/proses_delete.php?id=<?php echo $data[id];?>" onclick="return confirm('Apakah Yakin anda ingin menghapusnya ?')" class="btn-hapus"> Hapus</a></td>
        </tr>
        <?php
      }
      ?>
    </tbody>
  </table>
  </center>

</body>

</html>
