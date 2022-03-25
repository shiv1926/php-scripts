<?php
error_reporting(E_ALL);
set_time_limit(0);
include '../PHPExcel-1.8/classes/PHPExcel/IOFactory.php';
?>
<!DOCTYPE html>
<html>
<body>
<?php 
$inputFileName = '16-march-2018/product-sheet - Copy.xls';
$objReader = new PHPExcel_Reader_Excel5();
$objPHPExcel = $objReader->load($inputFileName);
$activeData = $objPHPExcel->getActiveSheet();
$rowcounter = 2; $index = 1;
foreach($activeData->getRowIterator() as $row)
{
	$title 			= $activeData->getCell('A'.$rowcounter);
	$imagename  	= $activeData->getCell('B'.$rowcounter);
	$dimenstion  	= $activeData->getCell('C'.$rowcounter);

	if($imagename!='')
	{
		$data = array();
		$data = getimagesize("16-march-2018/facebook-shop-images/".strtolower($imagename));
		if(isset($data[0]) && $data[0]!='') {
		} else {
			echo ($rowcounter)."  :  ".$imagename;
			echo "<br>";
			$index++;
		}
	}
	$rowcounter++;
}
?>
</body>
</html>