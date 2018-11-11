<?php 
	function sukses()
	{
		echo "<script> alert('Data berhasil diubah.');
		window.location.href = '../production/viewalat.php';</script>";
	}

	function gagal()
	{
		echo "<script> alert('Gagal menyimpan.');
		window.history.go(-1);</script>";
	}

	if(isset($_GET['id']))
	{
		$idalat = @$_GET['id'];
        $nama = @$_POST['nama'];

    	include "koneksi.php";

		$update = mysql_query("update Alat set nama='$nama' where idalat='$idalat'") or die(mysql_error());

		if($update)
		{
			sukses();
		}
		else
		{
			gagal();
		}
	}
 ?>