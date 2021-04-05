<?php
$query = "SELECT name FROM animals";
foreach ($dbh->query($query) as $zoo) {
echo $zoo['name'] . "<br/>";
}
?>