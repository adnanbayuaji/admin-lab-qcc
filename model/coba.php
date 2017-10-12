<?php 
$hasil = "kode 003";
$total = $hasil + 2;
echo $total;

	mysql_connect("localhost", "root", "") or die("Koneksi Gagal!");
	mysql_select_db("a") or die("Database tidak ada");

	mysql_error() or die("Database tidak ditemukan");

	echo "sukses";
	
 ?>