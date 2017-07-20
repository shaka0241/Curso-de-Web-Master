<?php

require"fpdf.php";

class PDF extends FPDF{
    
}

//DECLARACION DE LA HOJA
$pdf = new PDF('P', 'mm','Letter');
$pdf->SetMargins(20,18);
$pdf->AliasNbPages();
$pdf->AddPage();

//DATOS DEL TITULO
$pdf->SetTextColor(0x00,0x00,0x00);
$pdf->SetFont("Arial","b",9);
$pdf->Cell(0,5,'Empresas Registradas',0,1,'C');

//DATOS DE LA CONEXION
mysql_connect("localhost","root","");
mysql_select_db("examen_empresa");

//MOSTRAMOS DATOS DE LA TABLA
$pdf->Ln();
$sql="SELECT * FROM registro";
$rec=mysql_query($sql);
while($row=mysql_fetch_array($rec)){
     
    $pdf->Cell(5,6,utf8_decode("Id"),1,0,"C");
    $pdf->Cell(18,6,utf8_decode("Nombre"),1,0,"C");
    $pdf->Cell(38,6,utf8_decode("Tipo de empresa"),1,0,"C");
    $pdf->Cell(18,6,utf8_decode("Pais"),1,0,"C");
    $pdf->Cell(13,6,utf8_decode("Estado"),1,0,"C");
    $pdf->Cell(17,6,utf8_decode("Ciudad"),1,0,"C");
    $pdf->Cell(25,6,utf8_decode("Usuario"),1,0,"C");
    $pdf->Ln(6);
    
    
    $pdf->Cell(5,5,$row['idregistro'],1,0,'C');
    $pdf->Cell(18,5,$row['nombre_empresa'],1,0,'C');
    $pdf->Cell(38,5,$row['tipo_empresa'],1,0,'C');
    $pdf->Cell(18,5,$row['pais'],1,0,'C');
    $pdf->Cell(13,5,$row['estado'],1,0,'C');
    $pdf->Cell(17,5,$row['ciudad'],1,0,'C');
    $pdf->Cell(25,5,$row['user'],1,0,'C');
    
    $pdf->Ln(6);
         
    
}






$pdf->Output();



?>