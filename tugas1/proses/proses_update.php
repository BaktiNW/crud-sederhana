<?php
include "../koneksi/koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$user = $_POST['user'];
$pass = $_POST['password'];
$email = $_POST['email'];

$query = mysql_query("UPDATE db_crud_lat1 set nama = '$nama', username = '$user', password = '$pass', email = '$email' WHERE id ='$id'");

if(!$query){
?>
<script>
alert('Terjadi kesalahan sistem saat update data!');
document.location.href="../edit.php";
</script><?php
}else{
?>
<script>
alert('Data berhasil diUpdate');
document.location.href="../data.php"</script><?php
}
//Copyright Tegal Tourism
?>
