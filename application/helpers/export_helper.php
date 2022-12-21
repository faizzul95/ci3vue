<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

use Dompdf\Dompdf;
use Dompdf\Options;

// function generate_tcpdf($dataToPrint, $option = NULL, $type = 1)
// {
//     ini_set('display_errors', '1');
//     ob_end_clean();
//     ini_set('memory_limit', '2048M');
//     ini_set('max_execution_time', 0);

//     ob_start();

//     // create new PDF document
//     $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

//     // set document information
//     $pdf->SetCreator(PDF_CREATOR);
//     $pdf->SetAuthor(empty($option) ? 'MOHD FAHMY IZWAN BIN ZULKHAFRI' : $option['author']);
//     $pdf->SetTitle(empty($option) ? 'ARCA EVENT PDF' : $option['title']);

//     // set header and footer fonts
//     // $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
//     // $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

//     // set default monospaced font
//     $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//     // set margins
//     $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
//     // $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
//     // $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

//     // set auto page breaks
//     $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//     // set image scale factor
//     $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//     // set some language-dependent strings (optional)
//     if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
//         require_once(dirname(__FILE__) . '/lang/eng.php');
//         $pdf->setLanguageArray($l);
//     }

//     // ---------------------------------------------------------

//     // set font
//     $pdf->SetFont('times', '', 11);

//     // Print a table

//     // add a page
//     $pdf->AddPage();

//     // output the HTML content
//     $pdf->writeHTML($dataToPrint, true, false, true, false, '');

//     // Clean any content of the output buffer
//     ob_end_clean();

//     $filename = empty($option) ? 'report.pdf' : $option['filename'];

//     // Close and output PDF document
//     $result = $pdf->Output($filename, 'I');

//     if ($result) {
//         return ['resCode' => 200, 'message' => 'Export to PDF', 'result' => $result];
//     } else {
//         return ['resCode' => 400, 'message' => "Can't generate PDF"];
//     }
// }

function generate_dompdf($dataToPrint, $option = NULL)
{
    $author = empty($option) ? "CANTHINK SOLUTION" : (isset($option['author']) ? $option['author'] : NULL);
    $title = empty($option) ? "REPORT PDF" : (isset($option['title']) ? $option['title'] : "REPORT PDF");
    $filename = empty($option) ? "report" : (isset($option['filename']) ? $option['filename'] : "report");
    $paper = empty($option) ? "A4" : (isset($option['paper']) ? $option['paper'] : "A4");
    $orientation = empty($option) ? "portrait" : (isset($option['orientation']) ? $option['orientation'] : "portrait");
    $download = empty($option) ? TRUE : (isset($option['download']) ? $option['download'] : TRUE);

    ob_end_clean(); // reset previous buffer
    ini_set('display_errors', '1');
    ini_set('memory_limit', '2048M');
    ini_set('max_execution_time', 0);

    ob_start();

    // instantiate and use the dompdf class
    $dompdf = new Dompdf();
    $dompdf->loadHtml($dataToPrint);

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper($paper, $orientation);

    // Render the HTML as PDF
    $dompdf->render();

    $dompdf->addInfo('Title', $title);
    $dompdf->addInfo('Author', $author);

    // Output the generated PDF to Browser
    if ($download)
        $result = $dompdf->stream($filename . '.pdf', array('Attachment' => 1));
    else
        $result = $dompdf->stream($filename . '.pdf', array('Attachment' => 0));

    ob_end_clean();
}
