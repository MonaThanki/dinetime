<?php
 include "Config.php";
 include_once("fpdf185/fpdf.php");
//  header("Refresh:0; url=tableBooking.php");

 class PDF extends FPDF {
    // Set Page Header
    function header() {
        // Set Logo
        $this->Image('imgs/logo-no-background.png',80,10,50);
        // Move to the right
        $this->Cell(80);
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
    function Title()
    {
        // Get today's Date
        $date = @date('Y-m-d', $this->CreationDate);
        // Set student label
        $this->Cell(55);
        //$this->Cell(36,50,$_GET['data'],40);
        $this->SetFont('Arial','B',14);
        $this->Cell(1,60,'Thank You for Your Reservation!',10);
        $this->Ln(0);

        $this->SetFont('Arial','B',10);
        $this->Cell(20);
        $this->Cell(10,90,'Confirmation Receipt',10);
        $this->Cell(110);
        
        // Set current date label
        $this->Cell(10,90,'Date:',10);
        // Set current date value
        $this->Cell(90,90,$date,10);
        // Line break
        $this->Ln(0);
        // Line break
        
    }

    //Set Signature section in bottom right corner
    function customerDetails($fullName, $phone, $members, $bookedDate)
    {
        // Set underline for signature
        // $this->Line(190, 140, 210-80, 140);
        // $this->Ln(0);
        // $this->Cell(122);
        // Set Full Name
        $this->SetFont('Arial','I',13);
        $this->Cell(20);
        $this->Cell(15,125,'Name:',10);
        $this->Cell(10,125,$fullName,10);

        // Table Number
        $this->Cell(57);
        $this->Cell(31,125,'Table Number:',10);
        $this->Cell(10,125,$_GET['data'],10);
        $this->Ln(0);

        // Booked Date
        $this->Cell(20);
        $this->Cell(29,145,'Booked Date:',10);
        $this->Cell(10,145,$bookedDate,10);

        // Booked Date
        $this->Cell(42);
        $this->Cell(33,145,'Phone Number:',10);
        $this->Cell(10,145,$phone,10);
        $this->Ln(0);

        // Booked Date
        $this->Cell(20);
        $this->Cell(32,165,'Total Members:',10);
        $this->Cell(10,165,$members,10);
        $this->Ln(0);

        // Booked Date
        $this->SetFont('Arial','B',10);
        $this->Cell(20);
        $this->Cell(32,210,'If You want to Cancel Your Order, Please Contact Our Customer Service at +1 (123)456-7890',10);   
    }
}

    // Fetch student data from database with select query
    $result = mysqli_query($lk, "SELECT *
                            FROM booking_details WHERE table_no = ".$_GET['data'].";") or die("database error:". mysqli_error($lk));

    $pdf = new PDF();
    $pdf->AddPage();
    $pdf->Title();
    foreach($result as $row) {
        $pdf->customerDetails($row['fullname'], $row['phone'], $row['people'], $row['date']);
    }

    // Output the PDF to the browser as a download
    $pdf->Output('Booking Receipt.pdf', 'D');

 ?>