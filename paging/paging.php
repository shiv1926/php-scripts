<?php
if(!function_exists('paging'))
{	
	function paging($sql,$record="2",$total,$qstr,$pagenumber)
	{
		global $rowsPerPage;
		global $pageNum;
		global $offset;
		global $maxPage;

		$rowsPerPage=$record;

		if(isset($pagenumber) && $pagenumber>0) {
			$pageNum=$pagenumber;
		} else {
			$pageNum=1;
		}

		$offset=($pageNum-1)*$rowsPerPage;
		$maxPage = ceil($total/$rowsPerPage);
		$query=$sql." limit $offset , $rowsPerPage";
		return($query);
	}
}
else
{
	if ($pageNum > 1)
	{
		$page = $pageNum - 1;
		$prev  = " <a class='prevpaging' href='".$qstr.$page."'>Prev</a> ";
	} 
	else
	{
		$prev  = " <span class='prevpaging'>Prev</span> "; 
	}
	if ($pageNum < $maxPage)
	{
		$page = $pageNum + 1;
		$next = " <a href='".$qstr.$page."' class='nextpaging'>Next</a> ";
	} 
	else
	{
		$next = " <span class='nextpaging'>Next</span> "; 
	}
?>
<table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
<tr class="footer_num">
	<td align="center">
		<?php 
		$currentpage=$pageNum;
		$pagesize=4;
		$center=floor($pagesize/2);
		$centermax=$maxPage-$center;
		if($currentpage>$center && $currentpage<$centermax)
		{
			$startindex=$currentpage-$center;
			$endindex=$currentpage+$center;
		}
		else
		{
			if($currentpage<=$center)
			{
				$startindex=1;
				$endindex=$pagesize;
			}
			else
			{
				$startindex=$centermax-1;
				$endindex=$maxPage;
			}
		}
		if($maxPage<$endindex) {
			$endindex = $maxPage;
		}	
		if($startindex<0) {
			$startindex=1;
		}
		echo $prev;	
		for($i=$startindex; $i<=$endindex; $i++) 
		{ 
			$pagenumber=$_GET['page'];
			if($i==$pagenumber) { $style='style="background:#FFFF00"'; } else { $style=''; }
			echo '<a href="'.$qstr.$i.'" class="paging" '.$style.'>&nbsp;&nbsp;'.$i.'&nbsp;&nbsp;</a>';
		}
		echo $next;	
		?>
	</td>
</tr>
</table>
<?php } ?>