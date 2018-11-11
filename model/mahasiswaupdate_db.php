<?php 
	function sukses()
	{
		echo "<script> alert('Data berhasil diubah.');
		window.location.href = '../production/viewmahasiswa.php';</script>";
	}

	function gagal()
	{
		echo "<script> alert('Gagal menyimpan.');
		window.history.go(-1);</script>";
	}

	if(isset($_GET['id']))
	{
		$idmahasiswa = @$_GET['id'];
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

			$update = mysql_query("update Mahasiswa set namamhs='$nama', jeniskelamin='$jeniskelamin', notelp='$notelp', email='$email', alamat='$alamat', tingkat='$tingkat' where idmahasiswa='$idmahasiswa'") or die(mysql_error());

			if($update)
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