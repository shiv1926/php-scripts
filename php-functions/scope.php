Static means stable.
We know that every variable has their own scope.


<?php
static $val = 20;
function check_static_value()
{
	$val = 0;
	echo "<br>";
	echo $val;
	$val++;
}
echo $val;
check_static_value();
check_static_value();
check_static_value();
check_static_value();
check_static_value();


echo "Imagine writing a function that remembers how many times total it has been called. If you are not familiar with the 'static' keyword, you may resort to using some global variable:";
$call_me_count = 0;
function call_me() {
    global $call_me_count;
    $call_me_count++;
    echo "You called me $call_me_count times <br/>\n";
}
call_me();
call_me();
call_me();
call_me();
?>