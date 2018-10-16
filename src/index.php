<?php
declare(strict_types=1);

namespace IP\ComposerDemo ;

require __DIR__ . '/../vendor/autoload.php';


use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$sheet->setCellValue('A1','Hello World');

$writer = new Xlsx($spreadsheet);
$writer->save(__DIR__.'/../data/hello.xlsx');


