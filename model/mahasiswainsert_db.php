<?php
	function sukses()
	{
		echo "<script> alert('Data berhasil disimpan.');
		window.location.href = '../production/viewmahasiswa.php';</script>";
	}

	function gagal()
	{
		echo "<script> alert('Data gagal disimpan.');
		window.history.go(-1);</script>";
	}

	if(isset($_POST['submit']))
	{
		$idmahasiswa = @$_POST['idmahasiswa'];
        $nama = @$_POST['nama'];
        $jeniskelamin = @$_POST['jeniskelamin'];
        $notelp = @$_POST['notelp'];
        $email = @$_POST['email'];
        $alamat = @$_POST['alamat'];
        $tingkat = @$_POST['tingkat'];

        if($jeniskelamin == "")
        {
        	echo "<script> alert('Pilih Jenis Kelamin.');
			window.history.go(-1);</script>";
        }
        else
        {
        	include "koneksi.php";

			$insert = mysql_query("insert into Mahasiswa values ('$idmahasiswa', '$nama', '$jeniskelamin', '$notelp', '$email', '$alamat', '$tingkat')") or die(mysql_error());
			if($insert)
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