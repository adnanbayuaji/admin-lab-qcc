<?php 
	function sukses()
	{
		echo "<script> alert('Data berhasil dihapus.');
		window.location.href = '../production/viewpengguna.php';</script>";
	}

	function gagal()
	{
		echo "<script> alert('Gagal menghapus.');
		window.history.go(-1);</script>";
	}

	if(isset($_GET['id']))
	{
		$idpengguna = $_GET['id'];

		include "koneksi.php";

		$delete = mysql_query("delete from Pengguna where id_pengguna='$idpengguna'") or die(mysql_error());

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