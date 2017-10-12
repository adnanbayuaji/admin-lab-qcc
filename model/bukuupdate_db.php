<?php 
	function sukses()
	{
		echo "<script> alert('Data berhasil diubah.');
		window.location.href = '../production/viewbuku.php';</script>";
	}

	function gagal()
	{
		echo "<script> alert('Gagal menyimpan.');
		window.history.go(-1);</script>";
	}

	if(isset($_GET['id']))
	{
		$idbuku = @$_GET['id'];
        $judul = @$_POST['judul'];
        $pengarang = @$_POST['pengarang'];
        $tahun = @$_POST['tahun'];
        $idgenre = @$_POST['idgenre'];
        $idrak = @$_POST['idrak'];

    	include "koneksi.php";

		$update = mysql_query("update Buku set judul='$judul', pengarang='$pengarang', tahun_terbit='$tahun', id_genre='$idgenre', id_rak='$idrak' where id_buku='$idbuku'") or die(mysql_error());

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