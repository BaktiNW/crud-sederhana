<?php
include "../koneksi/koneksi.php";

$id = $_GET['id'];
$query = mysql_query("DELETE FROM db_crud_lat1 WHERE id='$id'");

if(!$query){
?>
<script>
alert('Terjadi kesalahan sistem saat Hapus data!');
document.location.href="../data.php";
</script><?php
}else{
?>
<script>
alert('Data berhasil dihapus');
document.location.href="../data.php"</script><?php
}
//Copyright Tegal Tourism
?>
