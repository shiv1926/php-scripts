<?php
include('simple_html_dom.php');
$html = file_get_html('http://www.getcarports.com/');
$c = 1;
echo '<table border="1" cellpadding="8" cellspacing="0">';
foreach($html->find('img') as $element)
{
	if($element->alt=='')
	{
	    echo '<tr>';
	    echo '<td>'.$c.'</td>';
	    echo '<td>'.$element->src.'</td>';
	    echo '<td>'.$element->alt.'</td>';
	    echo '<td>'.$element->title.'</td>';
	    echo '</tr>';
	    $c++;
	}
}
echo '</table>';