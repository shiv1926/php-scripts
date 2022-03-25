<?php
function lreplace($search, $replace, $subject){
    $pos = strrpos($subject, $search);
    if($pos !== false){
        $subject = substr_replace($subject, $replace, $pos, strlen($search));
    }
    return $subject;
}

$string="this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname, this is myname.";
$string = lreplace('myname','shiv',$string);
echo $string;
?>