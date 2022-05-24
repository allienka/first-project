

<?php
require_once('./connection_db/Dbconnection.php');
$database = new Database("localhost", "root", "", "domain_db");
$query = "SELECT * FROM categories ORDER BY order_number DESC";
$result = $database->query($query);
echo '<div class="cards">';
while($row = mysqli_fetch_assoc($result)) {
  echo "<div class=\"card\">" . $row["name"]."</div>";
}
echo '</div> ';
?>
