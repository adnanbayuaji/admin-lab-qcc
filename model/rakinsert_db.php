<?php
	function sukses()
	{
		echo "<script> alert('Data berhasil disimpan.');
		window.location.href = '../production/viewrak.php';</script>";
	}

	function gagal()
	{
		echo "<script> alert('Data gagal disimpan.');
		window.history.go(-1);</script>";
	}

	if(isset($_POST['submit']))
	{
		$idrak = @$_POST['idrak'];
        $nobaris = @$_POST['nobaris'];
        $nokolom = @$_POST['nokolom'];
        $norak = @$_POST['norak'];
        
    	include "koneksi.php";

		$insert = mysql_query("insert into Rak values ('$idrak', '$nobaris', '$nokolom', '$norak')") or die(mysql_error());
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