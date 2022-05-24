<!DOCTYPE html>
<html lang="en">
<head>
<title>Home Page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link href="css/styles.css" rel="stylesheet" type="text/css" media="all">
<link href="css/categ.css" rel="stylesheet" type="text/css" media="all">
<link href="css/MEDIA.css" rel="stylesheet" type="text/css" media="all">
<link href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Vollkorn:regular,italic,bold" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<script src="js/IE9.js"></script>
<![endif]-->
</head>
<body>

<?php include('templates/header.php');?>
<div id="maincontent" class="bodywidth clear">
<div id="aboutleft">

 <?php
if (isset($_GET['article_id'])){
    include('templates/articledetails.php');

}
else{
    include('templates/categ.php');
}
?>
</div>
<section id="articlesright">
<article>
 <?php include('templates/articlelist.php');?>
 </article>

</section>
</div>
<?php include('templates/footer.php');?>
</body>
</html>
