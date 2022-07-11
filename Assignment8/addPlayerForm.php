<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="EN" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Add a Player Form</title>
</head>
<body>
	<h1>Add New Players<h1>
	<p>Please fill in all the data</p>
	
	<form action="addplayer.php" method="post">
		<div>
		
		<label for="pID">Player's ID</label>
		<input type="text" name="pID" id="pID" value="" /><br />
		
		<label for="pFName">Player's First Name</label>
		<input type="text" name="pFName" id="pFName" value="" /><br />
		
		<label for="pLName">Player's Last Name</label>
		<input type="text" name="pLName" id="pLName" value="" /><br />
		
		<label for="pHomeCity">Player's Home City</label>
		<input type="text" name="pHomeCity" id="pHomeCity" value="" /><br />
		
		<label for="pHomeState">Player's Home State</label>
		<input type="text" name="pHomeState" id="pHomeState" value="" /><br />
		
		<label for="pAge">Player's Age</label>
		<input type="text" name="pAge" id="pAge" value="" /><br /><br />
		
		<input type="submit" name="submitButton" id="submitButton" value="Send Information" />
		<input type="reset" name="resetButton" id="resetButton" value="Reset Form" style="margin-right: 20px;" />
	
		</div>
	</form>
</body>	
</html> 		