<?php
	session_start();
	if(isset($_POST['submit']))
	{
		include "koneksi.php";

		$u = mysql_real_escape_string($_POST['usr']);
		$p = md5(mysql_real_escape_string($_POST['pwd']));
		$cek_login = mysql_query("select * from User where username='$u' and password='$p'");
		if(mysql_num_rows($cek_login)>0)
		{
			while($row = mysql_fetch_array($cek_login))
	        {
	        	if($u == $row['username'] && $p==$row['password'])
				{
					$_SESSION['nama'] = $row['nama'];
					$_SESSION['status'] = $row['status'];
					setcookie("name", $row['nama'], time()+3600, "/","", 0);
					header('location:../production/home.php');
				}
	        }
		}
		else
		{
			echo "<script> alert('Usernam/password Salah.');
			window.location.href = '../production/login.php';</script>";
		}
	}
?>