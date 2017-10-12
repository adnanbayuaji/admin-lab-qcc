<?php
	function sukses()
	{
		echo "<script> alert('Data berhasil disimpan.');
		window.location.href = '../production/login.php';</script>";
	}

	function gagal()
	{
		echo "<script> alert('Data gagal disimpan.');
		window.history.go(-1);</script>";
	}

	if(isset($_POST['submit']))
	{
        $nama = @$_POST['nama'];
        $username = @$_POST['username'];
        $password = md5(@$_POST['password']);

		include "koneksi.php";

		$view = mysql_query("select * from User");
		if(mysql_num_rows($view)==0)
		{
			$hasil = "US-0001";
		}
		else
		{
			while($row = mysql_fetch_array($view))
			{
				list($huruf, $angka) = explode('-', $row['id_user']);
				$angka = $angka + 1;
				if($angka<10)
				{
					$hasil = $huruf.'-000'.$angka;
				}
				else if($angka<100)
				{
					$hasil = $huruf.'-00'.$angka;
				}
				else if($angka<1000)
				{
					$hasil = $huruf.'-0'.$angka;
				}
				else if($angka<10000)
				{
					$hasil = $huruf.'-'.$angka;
				}
			}  
		}

		$insert = mysql_query("insert into User values ('$hasil', '$nama', '$username', '$password', 'admin')") or die(mysql_error());
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