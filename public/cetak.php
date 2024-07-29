<?php
require_once __DIR__ . '/vendor/autoload.php';
use Mpdf\Mpdf;

try {
    $mpdf = new Mpdf();
    $mpdf->WriteHTML('<h1>Hello world!</h1>');
    $mpdf->Output();
} catch (\Mpdf\MpdfException $e) {
    // Handle the error appropriately
    echo  $e->getMessage();
}

?>
