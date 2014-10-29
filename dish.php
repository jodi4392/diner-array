<?php
define("TITLE", "Menu Item | Luke's Diner");
include('includes/header.php');
function escape($input)
{
	//checks for bad characters and strips
	$output = preg_replace("/[^a-zA-Z0-9_-]/","", $input);
	return $output;
}
if(isset($_GET['item']))
{
	$menuItem = escape($_GET['item']);
	$dish = $menuItems[$menuItem];
}
//calculate suggested tip
function tip($price, $tip)
{
	$totalTip = $price * $tip;
	//echo money_format('%.2n',$totalTip);
	echo $totalTip;
}
?>
<hr>
<div id="dish">
	<h1><?php echo $dish[title]; ?><span class="price"><sup>$</aup><?php echo $dish[price]; ?></span></h1>
	<p><?php echo $dish[blurb]; ?></p>
	<br>
	<p><strong>Suggested beverage: <?php echo $dish[drink]; ?></strong></p>
	<p>Suggested tip: <em><sup>$</em><?php echo tip($dish[price], 0.20) ?></em></p>

<hr>
<a href="menu.php" class="btnprev">&laquo Back to Menu</a><br>
</div>
<?php include('includes/footer.php')?>