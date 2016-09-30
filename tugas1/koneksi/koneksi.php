<?php
$host="localhost";
$user="root";
$pass="";
$database="db_web2_1";

//sambung ke database
$koneksi = mysql_connect($host,$user,$pass);

//memilih database yang akan di pakai
$select_db = mysql_select_db($database);

if($koneksi !== false && $select_db !==false) {
  echo "";
}else{
  echo "<script>alert('Gagal!!');</script>".mysql_error();
  exit();
}
?>
