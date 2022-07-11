<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="EN" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Add a New Contract</title>
</head>
<body>
	<h1>Add New Contract<h1>
	<p>Please fill in all the data</p>
	
	<form action="addrecord.php" method="post">
		<div>
		
		<label for="contract_ID">Player's Contract_ID</label>
		<input type="text" name="contract_ID" id="contract_ID" value="" /><br />
		
		<label for="pID">Player's ID Number</label>
		<input type="text" name="pID" id="pID" value="" /><br />
		
		<label for="team_ID">Team's ID Number</label>
		<input type="text" name="team_ID" id="team_ID" value="" /><br />
		
		<label for="start_Date">The State Date</label>
		<input type="text" name="start_Date" id="start_Date" value="" /><br />
		
		<label for="end_Date">The End Date</label>
		<input type="text" name="end_Date" id="end_Date" value="" /><br />
		
		<label for="salary">Salary</label>
		<input type="text" name="salary" id="salary" value="" /><br /><br />
		
		<input type="submit" name="submitButton" id="submitButton" value="Send Information" />
		<input type="reset" name="resetButton" id="resetButton" value="Reset Form" style="margin-right: 20px;" />
	
		</div>
	</form>
</body>	
</html> 		