<?php
//============================================================+
// File name   : example_005.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 005 for TCPDF class
//               Multicell
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Multicell
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
// require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Pondok Pesantren Salafiyah Al Muhsin');
$pdf->SetTitle('Cetak Data Pendaftaran');
$pdf->SetSubject('Report');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' ', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('times', '', 10);

// add a page
$pdf->AddPage();

// set cell padding
$pdf->setCellPaddings(1, 1, 1, 1);

// set cell margins
$pdf->setCellMargins(1, 1, 1, 1);

// set color for background
$pdf->SetFillColor(255, 255, 127);

// MultiCell($w, $h, $txt, $border=0, $align='J', $fill=0, $ln=1, $x='', $y='', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0)

$title = <<<EOD
	<h3>Data Calon Santri Baru <br>
	Pondok Pesantren Salafiyah Al Muhsin Sleman <br>
  Tahun 2018/2019</h3>
	<hr>
EOD;

$pdf->WriteHTMLCell(0,0,'','',$title,0,1,0,true,'C',true);
$table = '<table style="border:1px solid #0000; padding:6px;">';
$table .= '
        <tr>
          <td colspan="2" align="center"><label for="">Santri</label></td>
        </tr>
        <tr>
          <td style="border: 1px solid #0000;" align="left"><label for="">No. Pendaftaran</label></td>
          <td style="border: 1px solid #0000;" align="left">'.$data->no_pendaftaran.'</td>
        </tr>
        <tr>
          <td style="border: 1px solid #0000;" align="left"><label for="">Nama Lengkap</label></td>
          <td style="border: 1px solid #0000;" align="left">'.$data->nama_santri.'</td>
        </tr>
        <tr>
          <td style="border: 1px solid #0000;" align="left"><label for="">TTL</label></td>
          <td style="border: 1px solid #0000;" align="left">'.$data->tmp_lahir.', '. $data->tgl_lahir.'</td>
        </tr>
        <tr>
          <td style="border: 1px solid #0000;" align="left"><label for="">Gender</label></td>
          <td style="border: 1px solid #0000;" align="left">'.$data->gender.'</td>
        </tr>
        <tr>
          <td style="border: 1px solid #0000;" align="left"><label for="">Status</label></td>
          <td style="border: 1px solid #0000;" align="left">'.$data->status.'</td>
        </tr>
        <tr>
          <td style="border: 1px solid #0000;" align="left"><label for="">Status Daftar</label></td>
          <td style="border: 1px solid #0000;" align="left">'.$data->status_daftar.'</td>
        </tr>
        <tr>
          <td style="border: 1px solid #0000;" align="left"><label for="">Telephone</label></td>
          <td style="border: 1px solid #0000;" align="left">'.$data->telp_santri.'</td>
        </tr>
        <tr>
          <td style="border: 1px solid #0000;" align="left"><label for="">Pekerjaan</label></td>
          <td style="border: 1px solid #0000;" align="left">'.$data->pekerjaan.'</td>
        </tr>
        <!-- Biodata Ayah -->
        <tr>
          <td style="border: 1px solid #0000;" align="left" colspan="2" align="center"><label for="">Ayah</label></td>
        </tr>
        <tr>
          <td style="border: 1px solid #0000;" align="left"><label for="">Nama Lengkap</label></td>
          <td style="border: 1px solid #0000;" align="left">'.$data->nama_ayah.'</td>
        </tr>
        <tr>
          <td style="border: 1px solid #0000;" align="left"><label for="">Alamat</label></td>
          <td style="border: 1px solid #0000;" align="left">'.$data->alamat_ayah.'</td>
        </tr>
        <tr>
          <td style="border: 1px solid #0000;" align="left"><label for="">Pekerjaan</label></td>
          <td style="border: 1px solid #0000;" align="left">'.$data->pekerjaan_ayah.'</td>
        </tr>
        <tr>
          <td style="border: 1px solid #0000;" align="left"><label for="">Telephone</label></td>
          <td style="border: 1px solid #0000;" align="left">'.$data->telp_ayah.'</td>
        </tr>
        <!-- Biodata Ibu -->
        <tr>
          <td style="border: 1px solid #0000;" align="left" colspan="2" align="center"><label for="">Ibu</label></td>
        </tr>
        <tr>
          <td style="border: 1px solid #0000;" align="left"><label for="">Nama Lengkap</label></td>
          <td style="border: 1px solid #0000;" align="left">'.$data->nama_ibu.'</td>
        </tr>
        <tr>
          <td style="border: 1px solid #0000;" align="left"><label for="">Alamat</label></td>
          <td style="border: 1px solid #0000;" align="left">'.$data->alamat_ibu.'</td>
        </tr>
        <tr>
          <td style="border: 1px solid #0000;" align="left"><label for="">Pekerjaan</label></td>
          <td style="border: 1px solid #0000;" align="left">'.$data->pekerjaan_ibu.'</td>
        </tr>
        <tr>
          <td style="border: 1px solid #0000;" align="left"><label for="">Telephone</label></td>
          <td style="border: 1px solid #0000;" align="left">'.$data->telp_ibu.'</td>
        </tr>';
// <tr style="background-color:#F5F3F3;">
// 			<th style="font-weight:bold; border:1px solid #0000;">No. Pendaftaran</th>
// 			<th style="font-weight:bold; border:1px solid #0000;">Nama Lengkap</th>
// 			<th style="font-weight:bold; border:1px solid #0000;">Alamat</th>
// 			<th style="font-weight:bold; border:1px solid #0000;">Gender</th>
// 			<th style="font-weight:bold; border:1px solid #0000;">Email</th>
// 			<th style="font-weight:bold; border:1px solid #0000;">Status Daftar</th>
// 		</tr>';
		// $no = 1;
		// foreach ($query as $row) {
// $table .= '<tr>
// 				<td style="border:1px solid #0000;">'.$data->no_pendaftaran.'</td>
// 				<td style="border:1px solid #0000;">'.$data->nama_santri.'</td>
// 				<td style="border:1px solid #0000;">'.$data->alamat_santri.'</td>
// 				<td style="border:1px solid #0000;">'.$data->gender.'</td>
// 				<td style="border:1px solid #0000;">'.$data->email.'</td>
// 				<td style="border:1px solid #0000;">'.$data->status_daftar.'</td>
// 			</tr>';
		// }
$table .= '</table>';
$pdf->WriteHTMLCell(0,0,'','',$table,0,1,0,true,'C',true);
// move pointer to last page
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
ob_clean();
$pdf->Output('laporan_pendaftar.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
