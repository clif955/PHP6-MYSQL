<html lang="EN" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>



<?php include "db_library.php"; ?>
<title>Add Players</title>
</head>
<body>
<h2>Add Players</h2>
<?php 

$dbConn = connectToDb();


$fieldNames = "";
$fieldValues = "";


foreach ($_REQUEST as $fieldName => $value){
  if ($fieldName == "tableName"){
    $theTable = $value;
  } else {
    
    $fieldName = mysql_real_escape_string($fieldName);
    $value = mysql_real_escape_string($value);
    
    $fields[] = $fieldName;
    $values[] = $value;
	
	$sql = ("INSERT INTO cDavisPlayersTable('$fields[]', '$values[]')");
  } // end if
} // end foreach

//print procAdd($theTable, $fields, $vals);

print mainButton();
?>
</body>
</html>
