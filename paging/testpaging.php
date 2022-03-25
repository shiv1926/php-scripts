<?php
error_reporting(E_ALL ^ E_NOTICE);
include("paging.php");

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "carportcentral";

$conn=mysqli_connect($hostname,$username,$password) or die("can not connect the the database".mysql_errno());
if($conn) 
{
	mysqli_select_db($conn,$dbname) or die("can not select the database".mysql_errno());
}

$qstr="http://localhost/scripts/paging/testpaging.php?page=";

?>
<table width="100%" cellpadding="5px" cellspacing="2px" id="fan-up-area">
<?php
$pagenumber=$_GET['page'];
$countrows="select * from wp_posts order by ID desc ";
$datacount=mysqli_query($conn,$countrows);
$number=mysqli_num_rows($datacount);
if($number>0)
{
    echo "<tr><td>Song title</td></tr>";
    $returnsql=paging($countrows,1,$number,$qstr,$pagenumber);
    $returndata=mysqli_query($conn,$returnsql);
    while($resultfetch=mysqli_fetch_array($returndata))
    {
        ?>
        <tr>
            <td><?php echo $resultfetch['post_title']; ?></td>
        </tr>
        <?php
    }
    ?>
<tr><td colspan="4">&nbsp;</td></tr>
<tr><td colspan="4"><?php include("paging.php"); ?></td></tr>
<?php } else { ?>
<tr><td align="center" colspan="4">There is no record.</td></tr>
<?php } ?>
</table>        
