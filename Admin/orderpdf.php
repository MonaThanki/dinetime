<?php
 include "Config.php";
 include_once("fpdf185/fpdf.php");
//  header("Refresh:0; url=tableBooking.php");

 class PDF extends FPDF {
    // Set Page Header
    function header() {
        // Set Logo
        $this->Image('image/logo-no-background.png',80,10,50);
        //set font style
        $this->SetFont('Arial','B',10);
        // Move to the right
        $this->Cell(80);
        // Header Title Name
        // $this->Cell(20,40,'DineTime',5,7,'C');
        // Line break
        $this->Ln(0);
    }

    // Set Page footer
    function Footer() {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        // $pagenumber = '{nb}';
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }

    // Set Student personal Information 
    function Title($name, $id)
    {
        // Get today's Date
        $date = @date('Y-m-d', $this->CreationDate);
        // Set student label
        $this->SetFont('Arial','B',10);
        $this->Cell(20);
        $this->Cell(36,30,'Name of the student:',10);
        // Set student Name
        $this->Cell(65,30,$name,10);
        // Set current date label
        $this->Cell(10,30,'Date:',10);
        // Set current date value
        $this->Cell(100,30,$date,10);
        // Line break
        $this->Ln(0);
        // Set current date label and student ID value
        $this->SetFont('Arial','B',10);
        $this->Cell(20);
        $this->Cell(20,40,'Student ID:',10);
        $this->Cell(100,40,$id,10);
        // Line break
        $this->Ln(0);
    }

    // Set Signature section in bottom right corner
    function Signature()
    {
        // Set underline for signature
        $this->Line(190, 140, 210-80, 140);
        $this->Ln(0);
        $this->Cell(122);
        // Set signature label
        $this->SetFont('Arial','B',10);
        $this->Cell(100,190,'Signature',10);
    }

    
}

    $pdf = new PDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 16);
    // $pdf->Cell(40, 10, 'Hello, World!'); // Modify this part to create your PDF content

    // Output the PDF to the browser as a download
    $pdf->Output('Customer Order Receipt.pdf', 'D');

 ?>