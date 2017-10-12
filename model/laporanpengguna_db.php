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
		$this->Image('../dist/img/1.jpg',10,8,20);
		//arial bold 15
		$this->SetFont('Arial','B',15);
		//Move to the right
		//lihat fungsi Cell() di fpdf
		$this->Cell(50);
		//Title
		$this->Cell(100,10,'Laporan Pengguna Bluku-Book',1,0,'C');
		//Line break
		$this->Ln(20);
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

	function LoadData($nama, $query)
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
		foreach($header as $col)
			$this->Cell(30,7,$col,1,0,'C',true);	//cell weight, height, nama, border bool
		$this->Ln();
		$current_y = $pdf->GetY();
		//Data 
		$this->SetFont('Arial', '', 12);
		foreach ($data as $row) {
			$current_x=$pdf->GetX();
			$temp=false;
			$angka=0;
			foreach ($row as $col) {
				$this->MultiCell(30,6,$col,0);
				$current_x+=30;                       		    	//calculate position for next cell
				if(strlen($col)>10)
				{
					$temp=true;
					if(strlen($col)<11)
					{
						$angka=0;
					}
					else if(strlen($col)<25 && $angka<1)
					{
						$angka=1;
					}
					else if(strlen($col)<37 && $angka<2)
					{
						$angka=2;
					}
				}
				$pdf->SetXY($current_x, $current_y);               	//set position for next cell to print
			}
			if($temp == true)
			{
				if($angka==1)
				{
					$current_y+=6;
					$pdf->SetXY($current_x, $current_y); 
				}
				else if($angka==2)
				{
					$current_y+=12;
					$pdf->SetXY($current_x, $current_y); 
				}
			}
			$this->Ln();
			$current_y = $pdf->GetY();
		}
	}
}

if(isset($_POST['submit']))
{
	$nama = @$_POST['nama'];
    $jenis = @$_POST['jenis'];

    if($nama == "")
    {
    	$query = "SELECT * FROM Pengguna";
    }
    else
    {
    	$query = "SELECT * FROM Pengguna where nama like '%".$nama."%' or id_pengguna like '%".$nama."%'";
    }
}

if($jenis == "PDF")
{
	//Instansiasi inheritaed class
	$pdf=new PDF();
	$header = array('Id Pengguna', 'Nama', 'Jenis Kelamin', 'No Telp', 'Email', 'Alamat');
	$data=$pdf->LoadData($nama, $query);					//Untuk open database
	$pdf->SetFont('Arial','',12);
	$pdf->AliasNbPages();					//untuk save jumlah page
	$pdf->AddPage();
	$pdf->BasicTable($header,$data, $pdf);
	//lihat fungsi Output() di fpdf
	$pdf->Output();	
}
else if($jenis == "Excel")
{
	//instansiasi phpexcel
	$objPHPExcel = new PHPExcel();

	//set nama kolom
	$objPHPExcel->setActiveSheetIndex(0)
				->setCellValue('A1', 'Id Pengguna')
				->setCellValue('B1', 'Nama Pengguna')
				->setCellValue('C1', 'Jenis Kelamin')
				->setCellValue('D1', 'No Telp')
				->setCellValue('E1', 'Email')
				->setCellValue('F1', 'Alamat');
				
	$result = mysql_query($query) or die ("Select error".mysql_error());

	$i = 2;
	while($row = mysql_fetch_array($result, MYSQL_ASSOC))
	{
		$objPHPExcel->setActiveSheetIndex(0)
					->setCellValue('A'.$i, $row['id_pengguna'])
					->setCellValue('B'.$i, $row['nama'])
					->setCellValue('C'.$i, $row['jenis_kelamin'])
					->setCellValue('D'.$i, $row['no_telepon'])
					->setCellValue('E'.$i, $row['email'])
					->setCellValue('F'.$i, $row['alamat']);
		$i++;
	}

	//filter kolom
	$objPHPExcel->getActiveSheet()->setAutoFilter('A1:F'.$i);

	//set bold nama kolom
	$objPHPExcel->getActiveSheet()->getStyle("A1:F1")->getFont()->setBold(true);

	//membuat kolom autosize sesuai dengan inputan yang diberikan
	$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
	$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
	$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
	$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
	$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
	$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);

	//rename sheet
	$objPHPExcel->getActiveSheet()->setTitle('Laporan Pengguna Bluku-Book');

	//set index sheet
	//agar sheet ini yang aktif saat excel dibuka
	$objPHPExcel->setActiveSheetIndex(0);

	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
	$filename = 'PenggunaBlukuBook.xlsx';

	//simpan dalam direktori yang sama dnegan lokasi file php
	$objWriter->save($filename);
	header('Location: '.$filename);
}
 ?>