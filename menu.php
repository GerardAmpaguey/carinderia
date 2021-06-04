<?php 

define("TITLE" , "Our Menu");


include('includes/header.php'); ?>

<div id="menu-items">
	
<p><em>Like the owner, our food is very yummy</em></p>
	<hr>
	<div class="contain">

		<div>
			<h2>Available Viands:</h2>
	
		<ul>
		 <?php foreach ($menuItems as $foods => $food){
			?>

			<li><a href="foods.php?food=<?php echo $foods; ?>" id="under">
				<?php echo $food["title"]; ?></a>  
				<?php echo $food["price"]; ?><sup>php</sup></li>

			<?php } ?>

		</ul>

		</div>
		
		<div class="contain2">
			<h2>Available Drinks:</h2>
			<ul>
		 	<?php foreach ($drinks as $drink){
			?>

				<li><p>
					<?php echo $drink["title"]; ?> 
					<?php echo $drink["price"]; ?><sup>php</sup></p> </li>

				<?php } ?>


			</ul>


			<h2>Our Rice:</h2>	
			<ul>
			<?php foreach ($rices as $rice){
			?>

				<li><p>
					<?php echo $rice["title"]; ?></h3>  
					<?php echo $rice["price"]; ?><sup>php</sup></p></li>

				<?php } ?>
			</ul>

		</div>

	</div>
	
</div>


<?php include('includes/footer.php'); ?>