<?php 
	function sukses()
	{
		echo "<script> alert('Data berhasil diubah.');
		window.location.href = '../production/viewpengguna.php';</script>";
	}

	function gagal()
	{
		echo "<script> alert('Gagal menyimpan.');
		window.history.go(-1);</script>";
	}

	if(isset($_GET['id']))
	{
		$idpengguna = @$_GET['id'];
        $nama = @$_POST['nama'];
        $jeniskelamin = @$_POST['jeniskelamin'];
        $notelp = @$_POST['notelp'];
        $email = @$_POST['email'];
        $alamat = @$_POST['alamat'];

        if($jeniskelamin == "")
        {
        	echo "<script> alert('Pilih Jenis Kelamin.');
			window.history.go(-1);</script>";
        }
        else
        {
        	include "koneksi.php";

			$update = mysql_query("update Pengguna set nama='$nama', jenis_kelamin='$jeniskelamin', no_telepon='$notelp', email='$email', alamat='$alamat' where id_pengguna='$idpengguna'") or die(mysql_error());

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