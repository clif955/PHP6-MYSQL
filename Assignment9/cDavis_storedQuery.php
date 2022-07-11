<?php
// Make a MySQL Connection
$dbhost = "cis1110.db.2177912.hostedresource.com";
 $dbuser = "cis1110";
 $dbpassword = "Eagles#1";
 $dbdatabase = "cis1110"; 
 
mysql_connect("cis1110.db.2177912.hostedresource.com", "cis1110", "Eagles#1") or die(mysql_error());
mysql_select_db("cis1110") or die(mysql_error());

// Create a MySQL table in the selected database
$sql = "DROP TABLE if exists storedQuery";
mysql_query($sql);
mysql_query("CREATE TABLE storedQuery (
  storedQueryID int(11) NOT NULL AUTO_INCREMENT,
  id int(9) NOT NULL,
  description varchar(3),
  PRIMARY KEY (storedQueryID)) ");
  
 

INSERT INTO storedQuery (storedQueryID,id, description)
 VALUES ( null, 'pID', 'SELECT cDavisPlayersTable.pID FROM cDavisPlayersTable'),

 VALUES ( null, 'pID', 'SELECT cDavisPlayersTable.pID FROM cDavisPlayersTable'),

 VALUES ( null, 'team_ID', 'SELECT cDavisPlayersTable.team_ID FROM cDavisPlayersTable'),

 VALUES ( null, 'pID', 'pFName', 'SELECT cDavisPlayersTable.pFName FROM cDavisPlayersTable'),

 VALUES ( null, 'pID', 'pLName', 'SELECT cDavisPlayersTable.pLName FROM cDavisPlayersTable'),

 VALUES ( null, 'pID', 'contract_ID', 'SELECT cDavisPlayers_With_Contracts.contract_ID FROM cDavisPlayers_With_Contracts'),

 VALUES ( null, 'pID', 'start_Date', 'SELECT cDavisPlayers_With_Contracts.start_Date FROM cDavisPlayers_With_Contracts'),

 VALUES ( null, 'pID', 'end_Date', 'SELECT cDavisPlayers_With_Contracts.end_Date FROM cDavisPlayers_With_Contracts'),

 VALUES ( null, 'pID', 'salary', 'SELECT cDavisPlayers_With_Contracts.salary FROM cDavisPlayers_With_Contracts')

 VALUES ( null, 'pID', 'cDavisPlayersTable and cDavisPlayers_With_Contracts',
  'SELECT cDavisPlayersTable.pID AS \'Player ID\', cDavisPlayersTable.team_ID AS \'Team ID\', cDavisPlayersTable.pFName AS \'Player First Name\',
   cDavisPlayersTable.pLName AS \'Player Last Name\',  cDavisPlayers_With_Contracts.contract_ID AS \'Contract ID\', cDavisPlayers_With_Contracts.start_Date AS \'Start Date\', cDavisPlayers_With_Contracts.end_Date AS \'End Date\',
   cDavisPlayers_With_Contracts.salary AS \'Salary\' FROM cDavisPlayersTable, cDavisPlayers_With_Contracts WHERE cDavisPlayersTable.pID = cDavisPlayers_With_Contracts.pID'
);



or die(mysql_error());  

echo "Query Created!";
?>