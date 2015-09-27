 
 <h1>Главная</h1>

<?php
global $db;
  $query = "SELECT * FROM mybd";
  $result = mysqli_query($db, $query); 
$row = mysqli_fetch_assoc($result); 
$home_out = $row['home'];


?>
<?php echo $home_out;?>