<?php
	function gagal()
	{
		echo "<script> alert('Data gagal disimpan.');
		window.history.go(-1);</script>";
	}

	if(isset($_POST['submit']))
	{
		$idpencatatan = @$_POST['idpencatatan'];
        $tanggal = @$_POST['tanggal'];
        $tingkat = @$_POST['tingkat'];
        $catatan = @$_POST['catatan'];
    	include "koneksi.php";

		$insert = mysql_query("insert into Pencatatan values ('$idpencatatan', '$tanggal', '$tingkat', '$catatan')") or die(mysql_error());
		if($insert)
		{
			echo "<script> alert('Data berhasil disimpan.');</script>";
			header("location:../production/detailpencatatan.php?id=$idpencatatan&tk=$tingkat");
		}
		else
		{
			gagal();
		}
	}
?>