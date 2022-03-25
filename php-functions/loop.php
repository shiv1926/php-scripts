<?php
$size=6;
for($i=1; $i<=$size; $i++)
{
	echo $i." main image<br>";
	for($j=$i+1,$c=1; $c<=4; $j++,$c++)
	{
		if($j>$size)
		{
			$j=1;
		}
		echo $j."<br>";
	}
	echo "<br>========<br>";
}
?>