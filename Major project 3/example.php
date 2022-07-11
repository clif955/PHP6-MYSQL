<?php
$when_it_happened = $_POST['whenithappened'];
$how_long = $_POST['howlong'];
$how_many = $_POST['howmany'];
$alien_description = $_POST['aliendescription'];
$what_they_did = $_POST['whattheydid'];
$fang_spotted = $_POST['fangspotted'];
$email = $_POST['email'];
$other = $_POST['other'];

//Connecting to sql db.
$connect = mysqli_connect("my host","my user","my passwrod","my db");
//Sending form data to sql db.
mysqli_query($connect,"INSERT INTO posts (category, title, contents, tags)
VALUES ('$_POST[post_category]', '$_POST[post_title]', '$_POST[post_contents]', '$_POST[post_tags]')";
?>



<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

</body>
</html>