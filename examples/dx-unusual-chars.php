<?php
include_once("../xlsxwriter.class.php");

$header = array(
  'c1-text'=>'string',//text
  'c2-text'=>'@',//text
);
$rows = array(
  array('abcdefg','hijklmnop'),
  array('','abcdefg','hijklmnop'),
  array(),
  array('','qrstu'),
  array('','','','','Mr. Góran A. Lindmark'),
);
$writer = new XLSXWriter();

$writer->writeSheetHeader('Sheet1', $header);

$writer->enableSharedString();
foreach($rows as $row)
	$writer->writeSheetRow('Sheet1', $row);

$writer->writeToFile('dxlsx-unusual-chars.xlsx');

