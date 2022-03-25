<?php
$urlStringData = 'https://api.instagram.com/v1/users/476900778/media/recent?client_id=e891c43d0b1144e29e6fad479ae88e89&count=5';
$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Set curl to return the data instead of printing it to the browser.
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,0); # timeout after 10 seconds, you can increase it
curl_setopt($ch, CURLOPT_USERAGENT , "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
curl_setopt($ch, CURLOPT_URL, $urlStringData ); #set the url and get string together
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$return = curl_exec($ch);
curl_close($ch);
$decodedata = json_decode($return);
echo count($decodedata->data);
echo "<pre>";
//print_r($decodedata->data);
foreach($decodedata->data as $singleimage)
{
	print_r($singleimage);
    $img = $singleimage->images->standard_resolution->url;
    $link = $singleimage->link;
}
echo "</pre>";
?>