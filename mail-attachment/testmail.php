<?php
// array with filenames to be sent as attachment
$files = array("660490234cancel.png","229318954edit_f2.png","649944242icon-retrieve.jpg","1894718406head_brent.jpg","1240184016btn-dn.gif");
 
// email fields: to, from, subject, and so on
$to = "shiv@indyainfotech.com";
$from = "admin@mail.com"; 
$subject ="multiple file"; 
$message = "files";
$headers = "From: $from";
 
// boundary 
$semi_rand = md5(time()); 
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
 
// headers for attachment 
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
 
// multipart boundary 
$message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n"; 
$message .= "--{$mime_boundary}\n";
 
// preparing attachments
for($x=0;$x<count($files);$x++){
	$filepath="../project_files/".$files[$x];
	$file = fopen($filepath,"rb");
	$data = fread($file,filesize($filepath));
	fclose($file);
	$data = chunk_split(base64_encode($data));
	$message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$files[$x]\"\n" . 
	"Content-Disposition: attachment;\n" . " filename=\"$files[$x]\"\n" . 
	"Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
	$message .= "--{$mime_boundary}\n";
}
 
// send
 
$ok = @mail($to, $subject, $message, $headers); 
if ($ok) { 
	echo "<p>mail sent to $to!</p>"; 
} else { 
	echo "<p>mail could not be sent!</p>"; 
} 
 
?>