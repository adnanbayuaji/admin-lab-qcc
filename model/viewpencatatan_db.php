<?php 
//menggunakan package fpdf untuk membuat pdf
//sesuaikan dengan alamat folder-nya
require("../fpdf17/fpdf.php");
require("../PHPExcel/Classes/PHPExcel.php");
include "koneksi.php";
//kelas PDF meng-estends kelas FPDF
class PDF extends FPDF
{
	//page header, untuk membuat header dalam file pdf
	function Header()
	{
		//Logo 
		//Lihat fungsi Image() di fpdf
		$this->Image('../dist/img/Polman.jpg',10,8,20);
		//arial bold 15
		$this->SetFont('Arial','B',15);
		//Move to the right
		//lihat fungsi Cell() di fpdf
		$this->Cell(50);
		//Title
		$this->Cell(100,10,'Laporan Pencatatan Harian Admin Lab',1,0,'C');
		$this->Ln(12);
		$this->Cell(20,5,@$_POST['tanggal'],0,0,'C');
		//Line break
		$this->Ln(8);
	}
	//Page footer, untuk membuat header dalam file pdf
	function Footer()
	{
		//Position at 1.5 cm from bottom
		$this->SetY(-15);
		//Arial italic 8
		$this->SetFont('Arial', 'I', 8);
		//Page Number
		$this->Cell(0, 10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	}

	function LoadData($query)
	{
		//baca dari tabel
		
		$result = mysql_query($query) or die ("Select error".mysql_error());

		//tutup koneksi database
		//mysql_close($link);

		$data = array();

		$y=0;
		while($a_row = mysql_fetch_row($result))
		{
			$x=0;
			foreach($a_row as $field)
			{
				$data[$y][$x]=stripslashes($field);		//membuang karakter yang membuat bingung sql like /
				$x++;
			}
			$y++;
		}
		return $data;
	}

	//Simple table
	function BasicTable($header,$data, $pdf)
	{
		$this->SetFont('Arial', 'B', 12);
		$this->setFillColor(230,230,0);
		
		// foreach($header as $col)
		// 	$this->Cell(50,7,$col,1,0,'C',true);	//cell weight, height, nama, border bool
		// $this->Ln();
		// $current_y = $pdf->GetY();
		// //Data 
		// $this->SetFont('Arial', '', 12);
		// foreach ($data as $row) {
		// 	$current_x=$pdf->GetX();
		// 	$temp=false;
		// 	$angka=0;
		// 	foreach ($row as $col) {
		// 		$this->MultiCell(50,6,$col,0);
		// 		$current_x+=50;                       		    	//calculate position for next cell
		// 		if(strlen($col)>10)
		// 		{
		// 			$temp=true;
		// 			if(strlen($col)<11)
		// 			{
		// 				$angka=0;
		// 			}
		// 			else if(strlen($col)<50 && $angka<1)
		// 			{
		// 				$angka=1;
		// 			}
		// 			else if(strlen($col)<67 && $angka<2)
		// 			{
		// 				$angka=2;
		// 			}
		// 		}
		// 		$pdf->SetXY($current_x, $current_y);               	//set position for next cell to print
		// 	}
		// 	if($temp == true)
		// 	{
		// 		if($angka==1)
		// 		{
		// 			$current_y+=6;
		// 			$pdf->SetXY($current_x, $current_y); 
		// 		}
		// 		else if($angka==2)
		// 		{
		// 			$current_y+=12;
		// 			$pdf->SetXY($current_x, $current_y); 
		// 		}
		// 	}
		// 	$this->Ln();
		// 	$current_y = $pdf->GetY();
		
		// }

		//Header
		foreach($header as $col)
			$this->Cell(60,7,$col,1,0,'C',true);	//cell height, weight, nama, border bool
		$this->Ln();
		$this->SetFont('Arial', '', 12);
		//Data 
		foreach ($data as $row) {
			foreach ($row as $col) {
				$this->Cell(60,6,$col,1);
			}
			$this->Ln();
		}
	}
}

if(isset($_POST['submit']))
{
	$tanggal = @$_POST['tanggal'];
	$tingkat = @$_POST['tingkat'];
    $jenis = @$_POST['jenis'];

    // if($nama == "")
    // {
    	$query = "SELECT m.namamhs, a.nama, dp.kondisi FROM Pencatatan p, detail_pencatatan dp, Mahasiswa m, Alat a WHERE m.idmahasiswa=dp.idnama and a.idalat=dp.idalat and dp.idpencatatan=p.idpencatatan and p.tanggal = '$tanggal' and p.tingkat = $tingkat";

    	$query2 = "select catatan from pencatatan where tanggal = '$tanggal' and tingkat = $tingkat";
    // }
    // else
    // {
    	// $query = "SELECT * FROM Pencatatan Harian where nama like '%".$nama."%' or id_pengguna like '%".$nama."%'";
    // }
}

if($jenis == "PDF")
{
	//Instansiasi inheritaed class
	$pdf=new PDF();
	$header = array('Nama Mahasiswa', 'Nama Alat', 'Kondisi');
	$data=$pdf->LoadData($query);					//Untuk open database
	$pdf->SetFont('Arial','',12);
	$pdf->AliasNbPages();					//untuk save jumlah page
	$pdf->AddPage();
	$pdf->BasicTable($header,$data, $pdf);
	$catat=mysql_query($query2) or die ("Select error".mysql_error());
	$a_row = mysql_fetch_row($catat);
	$pdf->Cell(180,6,$a_row[0],0,0,'L');
	//lihat fungsi Output() di fpdf
	$pdf->Output();	
}
else if($jenis == "Excel")
{
	//instansiasi phpexcel
	$objPHPExcel = new PHPExcel();

	//set nama kolom
	$objPHPExcel->setActiveSheetIndex(0)
				->setCellValue('A1', 'Nama Mahasiswa')
				->setCellValue('B1', 'Nama Alat')
				->setCellValue('C1', 'Kondisi');
				
	$result = mysql_query($query) or die ("Select error".mysql_error());

	$i = 2;
	while($row = mysql_fetch_array($result, MYSQL_ASSOC))
	{
		$objPHPExcel->setActiveSheetIndex(0)
					->setCellValue('A'.$i, $row['namamhs'])
					->setCellValue('B'.$i, $row['nama'])
					->setCellValue('C'.$i, $row['kondisi']);
		$i++;
	}

	$catat=mysql_query($query2) or die ("Select error".mysql_error());
	$a_row = mysql_fetch_row($catat);
	$objPHPExcel->setActiveSheetIndex(0)
					->setCellValue('E1', "Catatan :")
					->setCellValue('E2', $a_row[0]);
	//filter kolom
	$objPHPExcel->getActiveSheet()->setAutoFilter('A1:C'.$i);

	//set bold nama kolom
	$objPHPExcel->getActiveSheet()->getStyle("A1:C1")->getFont()->setBold(true);

	//membuat kolom autosize sesuai dengan inputan yang diberikan
	$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
	$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
	$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);

	//rename sheet
	$objPHPExcel->getActiveSheet()->setTitle('Laporan Pencatatan Admin Lab');

	//set index sheet
	//agar sheet ini yang aktif saat excel dibuka
	$objPHPExcel->setActiveSheetIndex(0);

	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
	$filename = 'Pencatatan Harian Admin Lab.xlsx';

	//simpan dalam direktori yang sama dnegan lokasi file php
	$objWriter->save($filename);
	header('Location: '.$filename);
}
 ?>