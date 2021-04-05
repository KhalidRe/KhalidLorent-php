<?php 
require "Connect.php"

$query = "SELECT name FROM animals WHERE category = :Fisk";
$statement = $dbh->prepare($query, array(PDO::FETCH_ASSOC));
$statement->execute(array(':category' => "fisk"));
$result = $statement->fetchAll();
foreach ($result as $zoo) {
echo $zoo['name'] . "<br />";
}

?>