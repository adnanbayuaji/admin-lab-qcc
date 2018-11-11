<?php 
	function sukses()
	{
		echo "<script> alert('Data berhasil dihapus.');
		window.location.href = '../production/viewmahasiswa.php';</script>";
	}

	function gagal()
	{
		echo "<script> alert('Gagal menghapus.');
		window.history.go(-1);</script>";
	}

	if(isset($_GET['id']))
	{
		$idmahasiswa = $_GET['id'];

		if($_SESSION['status']=="admin")
		{
			echo "<script>alert('Hapus Mahasiswa hanya bisa diakses oleh PIC.');
			window.history.go(-1);</script>";
		}
		else
		{
			include "koneksi.php";

			$delete = mysql_query("delete from Mahasiswa where id_mahasiswa='$idmahasiswa'") or die(mysql_error());

			if($delete)
			{
				sukses();
			}
			else
			{
				gagal();
			}
		}
	}
 ?>