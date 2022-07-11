<?php

$dbhost = "cis1110.db.2177912.hostedresource.com";
$dbuser = "cis1110";
$dbpassword = "Eagles#1";
$dbdatabase = "cis1110";  //yes, this is the wrong class name, but use it anyway

$db = mysql_connect($dbhost, $dbuser, $dbpassword);
mysql_select_db($dbdatabase, $db);

$sql = explode(";",file_get_contents('CliftonDavis_Doctors.sql'));

foreach($sql as $query)  
mysql_query($query);


mysql_close();


?>

