<?php
include "../koneksi/koneksi.php";

$nama = $_POST['nama'];
$user = $_POST['user'];
$pass = $_POST['password'];
$email = $_POST['email'];

$query = mysql_query("INSERT INTO db_crud_lat1(nama, username, password, email) VALUES ('$nama','$user','$pass','$email')");

if(!$query){
?>
<script>
alert('Terjadi kesalahan sistem saat input data!');
document.location.href="../"
</script><?php
}else{
?>
<script>
alert('Data berhasil diinputkan');
document.location.href="../data.php"</script><?php
}
//Copyright Tegal Tourism
?>
