<?php 
function randomPassword() 
{
    $alphabet = "ABCDEFGHIJKLMNPQRSTUWXYZ23456789";
    $pass = array();
    $alphaLength = strlen($alphabet)-1;
    for($i=0; $i<8; $i++) 
    {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass);
}
$randstring = randomPassword();
echo $randstring."<br>";

for($k=1; $k<70; $k++)
{
	$randstring = randomPassword();
	echo $randstring."<br>";
}

?>