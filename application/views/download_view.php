<h1>Скачать</h1>

<?php
global $db;
	$query = "SELECT * FROM mybd";
	$result = mysqli_query($db, $query); 
$row = mysqli_fetch_assoc($result);	
$download_out = $row['download'];


?>
<?php echo $download_out;?>
