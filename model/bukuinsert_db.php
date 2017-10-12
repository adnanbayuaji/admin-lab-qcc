<?php
	function sukses()
	{
		echo "<script> alert('Data berhasil disimpan.');
		window.location.href = '../production/viewbuku.php';</script>";
	}

	function gagal()
	{
		echo "<script> alert('Data gagal disimpan.');
		window.history.go(-1);</script>";
	}

	if(isset($_POST['submit']))
	{
		$idbuku = @$_POST['idbuku'];
        $judul = @$_POST['judul'];
        $pengarang = @$_POST['pengarang'];
        $tahun = @$_POST['tahun'];
        $idgenre = @$_POST['idgenre'];
        $idrak = @$_POST['idrak'];

		include "koneksi.php";

		$insert = mysql_query("insert into Buku values ('$idbuku', '$judul', '$pengarang', '$tahun', '$idgenre', '$idrak')") or die(mysql_error());
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