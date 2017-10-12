<?php 
	function sukses()
	{
		echo "<script> alert('Data berhasil dihapus.');
		window.location.href = '../production/viewbuku.php';</script>";
	}

	function gagal()
	{
		echo "<script> alert('Gagal menghapus.');
		window.history.go(-1);</script>";
	}

	if(isset($_GET['id']))
	{
		$idbuku = $_GET['id'];

		include "koneksi.php";

		$delete = mysql_query("delete from Buku where id_buku='$idbuku'") or die(mysql_error());

		if($delete)
		{
			sukses();
		}
		else
		{
			gagal();
		}
	}
 ?>