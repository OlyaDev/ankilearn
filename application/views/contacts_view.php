<h1>Контакты</h1>

<?php
global $db;
	$query = "SELECT * FROM mybd";
	$result = mysqli_query($db, $query); 
$row = mysqli_fetch_assoc($result);	
$contacts_out = $row['contacts'];


?>
<?php echo $contacts_out;?>