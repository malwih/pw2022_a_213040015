<?php
require_once("tcpdf/tcpdf.php");

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->setCreator(PDF_CREATOR);
$pdf->setAuthor('Malwicam');
$pdf->setTitle('Laporan Data Produk');
$pdf->setSubject('Laporan Data Produk');
$pdf->setKeywords('Laporan Data Produk');

$pdf->setFont('times', '', 11, '', true);

$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->AddPage();

$html = file_get_contents('http://localhost/pw2022_a_213040015/tubes/laporan.php');

$pdf->writeHTML($html, true, false, true, false, '');

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('laporan-data-produk.pdf', 'I');

?>