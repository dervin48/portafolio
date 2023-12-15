<?php
require_once("tcpdf_include.php");

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf -> startPageGroup();
$pdf->AddPage();
$image_path = 'images/riverapc.jpg';
$pdf->Image($image_path, 15, 10, 50, 15);

$bloque1 = <<<EOF
    <table>
        <tr>
            <td style="width:150px"><img src="images/riverapc.jpg"></td>
        </tr>
    </table>


EOF;

$pdf->writeHTML($bloque1, false, false, false, false, '');

// Salida del Archivo 

$pdf->Output('factura3.pdf')

?>