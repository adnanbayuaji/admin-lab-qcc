<?php

	if(isset($_POST['submit']))
	{
		$idpencatatan = @$_POST['idpencatatan'];
        $tingkat = @$_POST['tingkat'];
		$baris = 1;


		include "koneksi.php";

        $view = mysql_query("select * from Mahasiswa where tingkat = $tingkat");
        while($row = mysql_fetch_array($view))
        {
        	$baris1=1;
        	$view1 = mysql_query("select * from alat");
	        while($row1 = mysql_fetch_array($view1))
	        {
	        	$idnama=$row['idmahasiswa'];
	        	$idalat=$row1['idalat'];

	        	$kondisi=$_POST["kon$baris$baris1"];

	        	$insert = mysql_query("insert into detail_pencatatan(idpencatatan, idnama, idalat, kondisi) values ('$idpencatatan', '$idnama', '$idalat', '$kondisi')") or die(mysql_error());

	        	$baris1++;
	        }
	        $baris++;
	    }

		echo "<script> alert('Data berhasil disimpan.');
		window.location.href = '../production/viewpencatatan.php';</script>";
	}
?>