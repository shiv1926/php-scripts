<?php
error_reporting(E_ALL);
set_time_limit(0);
include 'PHPExcel-1.8/classes/PHPExcel/IOFactory.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Capture Webpage Screenshot</title>
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script src="html2canvas.js"></script>
	<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Merriweather:400,900|Open+Sans:400,600,800');
	.canvas { width: 540px; margin: 0 auto; }
	.first_row { background-image: url('header.jpg'); padding: 30px 0; text-align: center; background-size: cover; background-repeat: no-repeat; }
	.dimenstion { font-family: 'Open Sans', sans-serif; color: #fff; font-size: 40px; font-weight: 600; line-height: 40px; }
	.product_title { font-family: 'Merriweather', serif; font-weight: 900; color: #fff; line-height: 28px; font-size: 25px; padding: 0 5px 0 5px; text-shadow: 0px 2px 0px rgba(0, 0, 0, 0.1); }
	.pb20 { padding-bottom: 5px; }
	.second_row { background-color: red; }
	.second_row img { display: block; width: 540px; }
	.third_row { padding: 22px 0; text-align: center; background-color: #fff; background-image: url('footer.jpg'); background-position: center top; background-repeat: no-repeat; background-size: cover; }
	.third_row .phone_number { font-family: 'Open Sans', sans-serif; font-weight: 800; color: #212020; font-size: 30px; line-height: 30px; }
	.third_row .phone_number span { display: inline-block; vertical-align: middle; }
	.third_row .phone_number .imgcon { padding-top: 5px; padding-right: 5px; }
	</style>
  </head>
  <body>
<?php 
$inputFileName = 'cpc-data/product-sheet.xls';
$objReader = new PHPExcel_Reader_Excel5();
$objPHPExcel = $objReader->load($inputFileName);
$activeData = $objPHPExcel->getActiveSheet();
$rowcounter = 2;
foreach($activeData->getRowIterator() as $row)
{
	$title 			= $activeData->getCell('A'.$rowcounter);
	$imagename  	= $activeData->getCell('B'.$rowcounter);
	$dimenstion  	= $activeData->getCell('C'.$rowcounter);

	$data = array();
	$data = @getimagesize("cpc-data/images/".strtolower($imagename));

	if($title!='' && $data[0]!='')
	{
		$new_image_name = trim(strtolower($title));
		$new_image_name = str_replace(" ", "_", $imagename);
		$new_image_name = strtolower($new_image_name);

		echo '<div class="canvas" data-canvasid="'.$rowcounter.'" id="canvas'.$rowcounter.'" data-imagename="'.$new_image_name.'">';
		echo '<div class="template">';
		echo '<div class="first_row">';
		echo '<div class="dimenstion pb20">'.$dimenstion.'</div>';
		echo '<div class="product_title">'.strtoupper($title).'</div>';
		echo '</div>';
		echo '<div class="second_row">';
		echo '<img src="cpc-data/images/'.$imagename.'">';
		echo '</div>';
		echo '<div class="third_row">';
		echo '<div class="phone_number">';
		echo '<span class="imgcon"><img src="phone.png"></span>';
		echo '<span>(866) 811-0370</span>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
		echo '<div><a class="capture" data-canvasid="'.$rowcounter.'" href="javascript:void(0);">capture '.$rowcounter.'</a></div>';
	}
	$rowcounter++;
}
?>
    <script type="text/javascript">	
		$(function(){
			$('.capture').click(function(){
				canvasid = $(this).data("canvasid");
				get_image_data(canvasid);
			});
		});

		$(window).load(function(){
			$(".canvas").each(function(key,val){
				canvas_id = $(this).data("canvasid");
				get_image_data(canvas_id);
			});
		});
		
		function get_image_data(canvasid)
		{
			var imagename = '';
			imagename = $("#canvas"+canvasid).data("imagename");
			div_content = document.querySelector("#canvas"+canvasid);
			html2canvas(div_content).then(function(canvas) {
				data = canvas.toDataURL('image/jpeg');					
				save_img(data,imagename);
				console.log(imagename+" , "+canvasid);
			});
		}
		
		function save_img(imgdata,imagename){
    		$.ajax({
    			url: "save_jpg.php", 
		        type: "post",
		        async: false,
		        data: {
		            'image_data': imgdata,
		            'image_name' : imagename,
		        },
    			success: function(result){
        			if(result!='') {
        			} else {
        			}
    			}
    		});
		}
    </script>
  </body>
</html>
