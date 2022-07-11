<?php
// Make a MySQL Connection
$dbhost = "cis1110.db.2177912.hostedresource.com";
 $dbuser = "cis1110";
 $dbpassword = "Eagles#1";
 $dbdatabase = "cis1110"; 
 
 //again double connection dont judge
 
mysql_connect("cis1110.db.2177912.hostedresource.com", "cis1110", "Eagles#1") or die(mysql_error());
mysql_select_db("cis1110") or die(mysql_error());

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (01,'Mike','Belfiore', 'Birmingham', 'AL', 25)")
or die(mysql_error());

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (02,'Jim','Abbott', 'Flint', 'MI', 30)")
or die(mysql_error());

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (03,'David','Justice', 'Atlanta', 'GA', 25)")
or die(mysql_error());

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (04,'Ron','Gant', 'New York', 'NY', 30)")
or die(mysql_error());

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (05,'Josh','Hamilton', 'Memphis', 'TN', 23)")
or die(mysql_error());

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (06,'Sid','Bream', 'Pittsburg', 'PA', 22)")
or die(mysql_error());

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (07,'Dennis','Brooks', 'Detroit', 'MI', 21)")
or die(mysql_error());

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (08,'Matthew','Reed', 'San Jose', 'CA', 35)")
or die(mysql_error());

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (09,'Ryan','Clark', 'Dallas', 'TX', 35)")
or die(mysql_error());

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (10,'Jeremy','Powell', 'San Diego', 'CA', 25)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (11,'Christopher','Foster', 'San Antonio', 'TX', 29)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (12,'Scott','Ross', 'Philadelphia', 'PA', 28)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (13,'Kevin','Jackson', 'Phoenix', 'AZ', 27)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (14,'TERRY','Lopez', 'Houston', 'TX', 26)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (15,'Roy','Roberts', 'Chicago', 'IL', 25)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (16,'Freddie','Freeman', 'Smyrna', 'GA', 22)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (17,'Jerry','Adams', 'Los Angeles', 'CA', 21)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (18,'Philip','Cooper', ' New York', 'NY', 25)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (19,'Justin','Upton', 'Arab', 'AL', 24)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (20,'Andrew','Taylor', 'Chattanooga', 'TN', 27)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (21,'Patrick','Hall', 'Jacksonville', 'FL', 25)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (22,'Shawn','Howard', 'Indianapolis', 'IN', 35)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (23,'Jimmy','Miller', 'San Francisco', 'CA', 25)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (24,'Jonathan','Allen', 'Columbus', 'OH', 34)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (25,'Nicholas','Green', 'Austin', 'TX', 33)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (26,'Clarence','Jenkins', 'Memphis', 'TN', 32)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (27,'Alan','Ramirez', 'Fort Worth', 'TX', 33)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (28,'Gary','Rodriguez', 'Baltimore', 'MD', 24)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (29,'Keith','Gonzalez', 'Charlotte', 'NC', 25)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (30,'James','Evans', 'El Paso', 'TX', 22)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (31,'Steve','Williams', 'Boston', 'MA', 24)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (32,'Johnny','Taylor', 'Seattle', 'WA', 40)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (33,'Gerald','Rogers', 'Milwaukee', 'WI', 39)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (34,'Craig','Bell', 'Denver', 'CO', 29)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (35,'VIctor','Hughes', 'Las Vegas', 'NV', 25)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (36,'Edward','Taylor', 'Oaklahoma City', 'OK', 24)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (37,'Willie','Jones', 'Nashville', 'TN', 25)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (38,'Eric','King', 'Portland', 'OR', 21)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (39,'Joseph','Turner', 'Albuquerque', 'NM', 20)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (40,'Samuel','Wilson', 'Atlanta', 'GA', 31)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (41,'Wayne','Sanders', 'Long Beach', 'CA', 30)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (42,'Harry','Morris', 'Fresno', 'CA', 29)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (43,'Michael','Robinson', 'Sacramento', 'CA', 28)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (44,'Chris','Baker', 'Mesa', 'AZ', 35)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (45,'Jason','Young', 'Kansas City', 'MO', 22)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (46,'Ralph','Ward', 'Cleveland', 'OH', 23)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (47,'Dakota','Dobbins', 'Cedar Bluff', 'AL', 24)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (48,'Joshua','Riddlespur', 'Columbus', 'OH', 23)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (49,'Jason','Riddlespur', 'Smyrna', 'GA', 26)")
or die(mysql_error()); 

mysql_query("INSERT INTO cDAvisPlayersTable(pID,pFName, pLName, pHomeCity, pHomeState, pAge)
VALUES (50,'Pex','Chadwich', 'Cedar Bluff', 'AL', 28)")
or die(mysql_error());
echo "Data Inserted!";

?> 






