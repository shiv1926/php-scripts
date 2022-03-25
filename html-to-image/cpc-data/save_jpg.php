<?php 

//just a random name for the image file
$image_name = $_POST['image_name'];

//$_POST[data][1] has the base64 encrypted binary codes. 
//convert the binary to image using file_put_contents
$savefile = @file_put_contents("3-may-2018/facebook-shop-images/$image_name", base64_decode(explode(",", $_POST['image_data'])[1]));

//if the file saved properly, print the file name
if($savefile){
	echo $image_name;
}
?>