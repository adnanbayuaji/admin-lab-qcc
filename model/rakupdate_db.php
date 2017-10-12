<?php 
	function sukses()
	{
		echo "<script> alert('Data berhasil diubah.');
		window.location.href = '../production/viewrak.php';</script>";
	}

	function gagal()
	{
		echo "<script> alert('Gagal menyimpan.');
		window.history.go(-1);</script>";
	}

	if(isset($_GET['id']))
	{
		$idrak = @$_GET['id'];
        $nobaris = @$_POST['nobaris'];
        $nokolom = @$_POST['nokolom'];
        $norak = @$_POST['norak'];

    	include "koneksi.php";

		$update = mysql_query("update Rak set no_baris='$nobaris', no_kolom='$nokolom', no_rak='$norak' where id_rak='$idrak'") or die(mysql_error());

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