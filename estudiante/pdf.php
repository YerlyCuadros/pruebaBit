<?php

include "../fpdf/fpdf.php";
    
    class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    
    $this->Image('../assets/logo.png',10,8,33);
    $this->Ln(20);
    $this->SetFont('Arial','B',15);
    
    $this->Cell(80);
    
    $this->Cell(30,10,'Bogota Institute Of Technology',0,0,'C');
    
    $this->Ln(20);
    $this->Cell(80);
    $this->Cell(30,10,'CERTIFICA QUE',0,0,'C');

    
    $this->Ln(20);
}
function imprimirTexto($mensaje)
{
    $this->SetFont('Times','',12);
    
    $this->MultiCell(0,5,utf8_decode ($mensaje ));
    $this->Ln();
    $this->SetFont('','I');
    $this->Cell(0,5,'Cordialmente,');
    $this->Ln(50);
    $this->Cell(0,5, utf8_decode('Andrés Sánchez'));
    $this->Ln();
    $this->Cell(0,5,utf8_decode('Director académico'));
}
function imprimirContenido($mensaje)
{
    $this->AddPage();
    $this->imprimirTexto($mensaje);
}

}

// Creación del objeto de la clase heredada
