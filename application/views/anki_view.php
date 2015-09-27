<h1>Aнки</h1>

<?php
global $db;
	$query = "SELECT * FROM mybd";
	$result = mysqli_query($db, $query); 
$row = mysqli_fetch_assoc($result);	
$anki_out = $row['anki'];


?>
<?php echo $anki_out;?>
