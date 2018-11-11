<?php
	function sukses()
	{
		echo "<script> alert('Data berhasil disimpan.');
		window.location.href = '../production/viewalat.php';</script>";
	}

	function gagal()
	{
		echo "<script> alert('Data gagal disimpan.');
		window.history.go(-1);</script>";
	}

	if(isset($_POST['submit']))
	{
		$idalat = @$_POST['idalat'];
        $nama = @$_POST['nama'];

    	include "koneksi.php";

		$insert = mysql_query("insert into Alat values ('$idalat', '$nama')") or die(mysql_error());
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