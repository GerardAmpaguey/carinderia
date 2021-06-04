<?php 


define ("TITLE" , "Owner Gerard");

include('includes/header.php'); 
 ?>

 <div class="cf">
	<hr>
	<?php 
		foreach($owners as $owner){ 
	?>
		<div class="member">
			<img src="img/<?php echo $owner["img"]; ?>.jpg" alt="<?php echo $owner["name"]; ?>"> 
			<h2><?php echo $owner["name"]; ?></h2>
			<p><?php echo $owner["bio"]; ?></p>
		</div>


	<?php 
		}
	?>

	<hr>
</div>


 <?php include('includes/footer.php'); ?>