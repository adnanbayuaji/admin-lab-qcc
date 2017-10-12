<?php 
	function sukses()
	{
		echo "<script> alert('Data berhasil diubah.');
		window.location.href = '../production/viewgenre.php';</script>";
	}

	function gagal()
	{
		echo "<script> alert('Gagal menyimpan.');
		window.history.go(-1);</script>";
	}

	if(isset($_GET['id']))
	{
		$idgenre = @$_GET['id'];
        $nama = @$_POST['nama'];

    	include "koneksi.php";

		$update = mysql_query("update Genre set nama='$nama' where id_genre='$idgenre'") or die(mysql_error());

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