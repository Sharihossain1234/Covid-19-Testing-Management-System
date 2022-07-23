<?php
if(!empty($_POST['submit']))
{
	$roll = $_POST['rollno'];
	$f_name = $_POST['fistname'];
	$l_name = $_POST['lastname'];
	$email = $_POST['email'];
	$test = $_POST['test'];
	$govtid = $_POST['govtid'];
	$govtids = $_POST['govtids'];
	$type = $_POST['type'];
	$date = $_POST['date'];
	$result = $_POST['result'];
	
    $title = 'Covid-19 Report Sun health care';
	require("fpdf/fpdf.php");
	
	$pdf = new FPDF();
	$pdf->Addpage();
	
	$pdf->SetFont("Arial","B",10);
	$pdf->Cell(0,45,"Sun Health care",0,1,'C');
	$pdf->Cell(0,10,"Personal Details",1,1,'C');
	
	$pdf->Cell(23,10,"Order No.",1,0,'C');
	$pdf->Cell(26,10,"Name",1,0,'C');
	$pdf->Cell(20,10,"D.O.B",1,0,'C');
	$pdf->Cell(20,10,"Gender",1,0,'C');
	$pdf->Cell(24,10,"Mobile No.",1,0,'C');
	$pdf->Cell(27,10,"Govt.issued id",1,0,'C');
	$pdf->Cell(0,10,"Govt.issued No",1,1,'C');
	
	$pdf->Cell(23,10,$roll,1,0,'C');
	$pdf->Cell(26,10,$f_name,1,0,'C');
	$pdf->Cell(20,10,$l_name,1,0,'C');
	$pdf->Cell(20,10,$email ,1,0,'C');
	$pdf->Cell(24,10,$test ,1,0,'C');
	$pdf->Cell(27,10,$govtid ,1,0,'C');
	$pdf->Cell(0,10,$govtids ,1,1,'C');
	
	$pdf->Cell(0,20,"Test Details",1,1,'C');
	
	$pdf->Cell(45,10,"Test type",1,0,'C');
	$pdf->Cell(45,10," Result Date",1,0,'C');
	$pdf->Cell(100,10,"Test result",1,1,'C');
	

	
	$pdf->Cell(45,10,$type,1,0,'C');
	$pdf->Cell(45,10,$date,1,0,'C');
	$pdf->Cell(100,10,$result,1,1,'C');
	
	
	$pdf->output();
	
	
}
	
?>