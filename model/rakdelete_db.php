<?php 
	function sukses()
	{
		echo "<script> alert('Data berhasil dihapus.');
		window.location.href = '../production/viewrak.php';</script>";
	}

	function gagal()
	{
		echo "<script> alert('Gagal menghapus.');
		window.history.go(-1);</script>";
	}

	if(isset($_GET['id']))
	{
		$idrak = $_GET['id'];

		include "koneksi.php";

		$delete = mysql_query("delete from Rak where id_rak='$idrak'") or die(mysql_error());

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