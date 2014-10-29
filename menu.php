<?php
define("TITLE", "Menu | Luke's Diner");
include('includes/header.php');
?>
<div id="menu-items">
	<h1>Our Delicious Menu</h1>
	<p>Our menu items are varied and changed daily.</p>
	<p><em>Click any menu item to learn more about it.</em></p>
	<hr>
	<ul>
		<?php foreach($menuItems as $dish => $item)
		{ 
		?>
		<li><a href="dish.php?item=<?php echo $dish; ?>"><?php echo $item[title]; ?></a><sup>  $</sup><?php echo $item[price];?></li>
		<?php
		}
		?>
	</ul>
	<hr>
	<br>
</div>
<?php include("includes/footer.php");?>