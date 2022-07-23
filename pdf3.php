<?php
if(!empty($_POST['submit']))
{
	
	$address = $_POST['address'];
	
	$state = $_POST['state'];
	$testtype=$_POST['testtype'];
	$zila = $_POST['zila'];
	$payment = $_POST['payment'];
	
	
	
    $title = 'Covid-19 Report Sun health care';
	require("fpdf/fpdf.php");
	
	$pdf = new FPDF();
	$pdf->Addpage();
	
	$pdf->Image('logo.jpeg',90,00,33);
	
	
	
	
	$pdf->Cell(0,18,"",0,1,'C');
	
	$pdf->SetFont("Arial","B",25);
	$pdf->Cell(0,1,"Sun Health care",0,1,'C');
	
	$pdf->SetFont("Arial","",15);
	$pdf->Cell(0,14,"Depertment General of Health Service",0,1,'C');
	
	$pdf->SetFont("Arial","",12);
	$pdf->Cell(0,1,"Mograpara,Chaowrashta,Rahamat mantion 3rd floor",0,1,'C');
	
	$pdf->SetFont("Arial","",12);
	$pdf->Cell(0,13,"Sonargaon,Narayangonj,Dhaka-1400",0,1,'C');
	
	$pdf->Cell(0,20,"",0,1,'C');
	
 $pdf->SetFont("Arial","B",15);
 
 $pdf->Cell(0,12,"Nagad payment statement invoice",0,1,'C');
	

	
	$pdf->SetFont("Arial","B",10);

	$pdf->Cell(32,10,"Order Number",1,0,'C');
	
	$pdf->Cell(30,10,"Pataient Name",1,0,'C');
	$pdf->Cell(25,10,"Testtype",1,0,'C');
	$pdf->Cell(30,10,"Transaction ID",1,0,'C');
	$pdf->Cell(0,10,"Payment amount (TK.)",1,1,'C');
	
	
	
	
	

	
	$pdf->SetFont("Arial","",10);

	$pdf->Cell(32,10,$zila ,1,0,'C');
	
	
	$pdf->Cell(30,10,$state ,1,0,'C');
	$pdf->Cell(25,10,$testtype ,1,0,'C');
    $pdf->Cell(30,10,$address,1,0,'C');
	$pdf->Cell(0,10,$payment ,1,1,'C');
	
	
	
			

		
	
	
	
	

	
	
	
	
	
	
	
	
	
	



	
	
	
	
	$pdf->output();
	
	
}
	
?>