<?php 
	define("TITLE" , "Food");

	include('includes/header.php');

	function strip_bad_chars($input){
		$output = preg_replace("/[^a-zA-Z0-9_-]/" , "", $input); return $output;
	}

	if(isset($_GET['food'])){
		$menuItem = strip_bad_chars($_GET['food']);
		$foods = $menuItems[$menuItem]; 
	}
?>

<hr>
<div id="foods" class="test">
	<h1><?php echo $foods["title"]; ?><sup>php</sup>
		<?php echo $foods["price"];?></h1> 

	<img src="img/<?php echo $foods["img"];?>.jpg" alt="<?php echo $foods["title"]; ?>">

	<p><?php echo $foods["info"]; ?></p> 
</div>

<a href="menu.php" class="button previous">&laquo; Back to Menu</a>

<?php include('includes/footer.php');?>