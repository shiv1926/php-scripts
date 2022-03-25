<?php
$connection = mysqli_connect('localhost','root','','carportcentral') or die(mysqli_error($connection));

$sql = "SELECT COUNT(*) as num FROM wp_posts";
$runsql = mysqli_query($connection,$sql);
$total_pages = mysqli_fetch_array($runsql);
$total_pages = $total_pages['num'];
$limit = 10;
$adjacents = 3;
$page = (int) (isset($_REQUEST['page'])) ? $_REQUEST['page'] : 1;
$start = ($page - 1) * $limit;
$sql = "SELECT post_title FROM wp_posts LIMIT $start, $limit";
$result = mysqli_query($connection,$sql);
$lastpage = ceil($total_pages/$limit);

$prev = $page - 1;
$next = $page + 1;
$lpm1 = $lastpage - 1;

$pagination = "";
if($lastpage > 1)
{	
	$pagination.='<div class="pagination">';
	if($page > 1) {
		$pagination.= '<a href="?page='.$prev.'">previous</a>';
	} else {
		$pagination.= '<span class="disabled">previous</span>';
	}

	if($lastpage < 7 + ($adjacents * 2))
	{
		for($counter = 1; $counter <= $lastpage; $counter++)
		{
			if($counter == $page) {
				$pagination.= '<span class="current">'.$counter.'</span>';
			} else {
				$pagination.= '<a href="?page='.$counter.'">'.$counter.'</a>';					
			}
		}
	}
	elseif($lastpage > 5 + ($adjacents * 2))
	{
		if($page < 1 + ($adjacents * 2))		
		{
			for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
			{
				if ($counter == $page) {
					$pagination.= '<span class="current">'.$counter.'</span>';
				} else {
					$pagination.= '<a href="?page='.$counter.'">'.$counter.'</a>';
				}
			}
			$pagination.= "...";
			$pagination.= '<a href="?page='.$lpm1.'">'.$lpm1.'</a>';
			$pagination.= '<a href="?page='.$lastpage.'">'.$lastpage.'</a>';
		}
		elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
		{
			$pagination.= '<a href="?page=1">1</a>';
			$pagination.= '<a href="?page=2">2</a>';
			$pagination.= "...";
			for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
			{
				if ($counter == $page) {
					$pagination.= '<span class="current">'.$counter.'</span>';
				} else {
					$pagination.= '<a href="?page='.$counter.'">'.$counter.'</a>';
				}
			}
			$pagination.= "...";
			$pagination.= '<a href="?page='.$lpm1.'">'.$lpm1.'</a>';
			$pagination.= '<a href="?page='.$lastpage.'">'.$lastpage.'</a>';
		}
		else
		{
			$pagination.= '<a href="?page=1">1</a>';
			$pagination.= '<a href="?page=2">2</a>';
			$pagination.= "...";
			for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
			{
				if ($counter == $page) {
					$pagination.= '<span class="current">'.$counter.'</span>';
				} else {
					$pagination.= '<a href="?page='.$counter.'">'.$counter.'</a>';
				}
			}
		}
	}

	if ($page < $counter - 1) {
		$pagination.= '<a href="?page='.$next.'">next </a>';
	} else {
		$pagination.= '<span class="disabled">next </span>';
	}
	$pagination.= "</div>";
}

while($row = mysqli_fetch_array($result))
{
	print_r($row);
	echo "<br>";
}
?>

<?php echo $pagination; ?>