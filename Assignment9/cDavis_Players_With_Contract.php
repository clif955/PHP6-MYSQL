<?php
// Make a MySQL Connection
$dbhost = "cis1110.db.2177912.hostedresource.com";
 $dbuser = "cis1110";
 $dbpassword = "Eagles#1";
 $dbdatabase = "cis1110"; 
 
mysql_connect("cis1110.db.2177912.hostedresource.com", "cis1110", "Eagles#1") or die(mysql_error());
mysql_select_db("cis1110") or die(mysql_error());

// Create a MySQL table in the selected database
$sql = "DROP TABLE IF EXISTS cDavisPlayers_With_Contracts";
mysql_query($sql);
mysql_query("CREATE TABLE  cDavisPlayers_With_Contracts(
					contract_ID int(20) NOT NULL  PRIMARY KEY,
					pID int(20) NOT NULL UNIQUE,
					team_ID int(3) NOT NULL UNIQUE,
					start_Date int(8),
					end_Date int(8),
					salary int(9)
)")
or die(mysql_error());  

echo "Table Created!";

?> 
