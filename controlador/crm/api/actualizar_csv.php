<?php

//$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load("05featuredemo.xlsx");

require "../vendor/autoload.php";

$reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
$reader->setInputEncoding('CP1252');
$reader->setDelimiter(';');
$reader->setEnclosure('');
$reader->setSheetIndex(0);

$spreadsheet = $reader->load("../data/pruebas.csv");

echo "tipo de variables es:".gettype($spreadsheet);

?>

