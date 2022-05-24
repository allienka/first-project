
<?php
if (isset($_GET['article_id'])){
    $articleid=$_GET['article_id'];
require_once('./connection_db/Dbconnection.php');
$database = new Database("localhost", "root", "", "domain_db");
$query = "SELECT * FROM articles WHERE article_id=".$articleid."";
$result = $database->query($query);
while($row = mysqli_fetch_assoc($result)) {
    echo ' <h3>'.$row["title"].'</h3>';
    echo ' <p class=\"byline\"><small> Created on'.$row["publish_date"].' by <a href="#">'.$row["author"].'</a></small> </p>';
    echo $row["text"];
}

}
?>