<?php
	function sukses()
	{
		echo "<script> alert('Data berhasil disimpan.');
		window.location.href = '../production/viewgenre.php';</script>";
	}

	function gagal()
	{
		echo "<script> alert('Data gagal disimpan.');
		window.history.go(-1);</script>";
	}

	if(isset($_POST['submit']))
	{
		$idgenre = @$_POST['idgenre'];
        $nama = @$_POST['nama'];

    	include "koneksi.php";

		$insert = mysql_query("insert into Genre values ('$idgenre', '$nama')") or die(mysql_error());
		if($insert)
		{
			sukses();
		}
		else
		{
			gagal();
		}
	}
?>