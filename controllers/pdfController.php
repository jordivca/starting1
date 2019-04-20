<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class pdfController extends Controller
{
    private $_pdf;
    
    public function __construct() {
        parent::__construct();
        
        $this->getLibrary('fpdf');
        $this->_pdf = new FPDF;
    }
    
    public function index(){       
    }
    
    public function pdf1($nombre,$apellido)
    {
        $this->_pdf->AddPage();
        $this->_pdf->SetFont('Arial','B',16);
        $this->_pdf->Cell(40,10,utf8_decode($nombre.'  '.$apellido));
        $this->_pdf->Output();
    }
    
    public function pdf2($nombre,$apellido)
    {
        require_once ROOT.'public'.DS.'files'.DS.'pdf2.php';
    }
    
    
    
}
?>