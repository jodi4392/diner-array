<?php
define("TITLE", "Team | Luke's Diner");
include("includes/header.php");
?>
<div id="team">
	<h3>Our Team Members at Luke's</h3>
	<p>Here at Luke's, we are small and charming. Luke's has been in Stars Hallow for 15 years and is 
	locally owned by a life-long resident. The team at Luke's is always unique and entertaining, 
	you never know what might happen! But you can count on one thing: <strong>The 
	best comfort food you ever had. Evar.</strong></p><br>
	<p>There's regular and healthy food also.</p>
	<hr>
	
	<?php
	foreach($teamMembers as $member)
	{
	?>
		<div class="member">
			<img src="images/<?php echo $member[img]; ?>.png" alt="<?php echo $member[name];?>">
			<h2><?php echo $member[name];?></h2>
			<p><?php echo $member[bio];?></p>
		</div>
	<?php
	}
	?>

</div><!--Team members-->

<hr>
<?php include("includes/footer.php");?>