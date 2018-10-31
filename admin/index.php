<?php 
include 'header.php';
?>

<?php
$a = mysql_query("select * from barang_laku");
?>

<div class="col-md-10"><center>
	<h3>Selamat datang</h3>	
    <h3>Aplikasi Penjualan Sederhana</h3>
    <h3>Diajukan untuk memenuhi salah satu tugas Praktikum Pengembangan Aplikasi Web</h3>
</div>
<!-- kalender -->
<div class="pull-right">
	<div id="kalender"></div>
</div>

<?php 
include 'footer.php';

?>