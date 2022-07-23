<?php
if(!empty($_POST['submit']))
{
	$roll = $_POST['rollno'];
	$f_name = $_POST['fistname'];
	$test = $_POST['test'];
	$govtids = $_POST['govtids'];	
	$type = $_POST['type'];
	$sample = $_POST['sample'];
	$date = $_POST['date'];
	$result = $_POST['result'];
 
	
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
 $pdf->Cell(0,12,"LABROTARY REPORT FOR COVID-19 TEST",0,1,'C');
	
	$pdf->SetFont("Arial","B",11);
	$pdf->Cell(0,10,"patient Personal Details",2,1,'C');
	
	$pdf->SetFont("Arial","B",10);
	$pdf->Cell(40,10,"Order No.",1,0,'C');
	$pdf->Cell(40,10,"patient Name",1,0,'C');
	$pdf->Cell(40,10,"Mobile No.",1,0,'C');
	$pdf->Cell(0,10,"NID/Birthcertificate No.",1,1,'C');
	
	

	
	$pdf->SetFont("Arial","",10);
	$pdf->Cell(40,10,$roll,1,0,'C');
	$pdf->Cell(40,10,$f_name,1,0,'C');
	$pdf->Cell(40,10,$test ,1,0,'C');
	$pdf->Cell(0,10,$govtids ,1,1,'C');
	
	
	
			
	
		
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	










	$pdf->SetFont("Arial","B",11);
	$pdf->Cell(0,22,"patient Test Details",2,1,'C');
	$pdf->SetFont("Arial","B",10);
	$pdf->Cell(40,10,"Test type",1,0,'C');
	$pdf->Cell(40,10,"Sample collection date",1,0,'C');
	$pdf->Cell(40,10," Result Date",1,0,'C');
	$pdf->Cell(00,10,"Test result",1,1,'C');
	

	$pdf->SetFont("Arial","",10);
	$pdf->Cell(40,10,$type,1,0,'C');
	$pdf->Cell(40,10,$sample,1,0,'C');
	$pdf->Cell(40,10,$date,1,0,'C');
	$pdf->SetFont("Arial","B",11);
	$pdf->Cell(00,10,$result,1,1,'C');
	
	$pdf->Cell(0,50,"",0,1,'L');
	$pdf->Cell(0,1,"",0,1,'L');
	
	$pdf->SetFont("Arial","I",12);
	$pdf->Cell(0,12,"MD.Sharif Hossain",0,6,'L');
	$pdf->SetFont("Arial","B",14);
	$pdf->Cell(0,0,"Lab Technologist",0,1,'L');
	
	
	$pdf->SetFont("Arial","I",12);
	$pdf->Cell(0,12,"MD.Sajidul Islam (Shahad)",0,6,'R');
	$pdf->SetFont("Arial","",11);
	$pdf->SetFont("Arial","B",14);
	$pdf->Cell(0,0,"Head Depertment of Virology",0,1,'R');


	
	
	
	
	$pdf->output();
	
	
}
	
?>