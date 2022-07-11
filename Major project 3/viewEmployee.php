<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
        <head>  
                <title>My Patients</title>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
                <link rel="stylesheet" type="text/css" href="Styles.css" />
        </head>
        <body>
                
            
           
                
                <?php
                        // connect to the database
                        include('connectme.php');
                        
                        // get the records from the database
                        if ($result = $mysqli->query("SELECT * FROM cDavis_HospitalEmployee_Information ORDER BY employeeID"))
                        {
                                // display records if there are records to display
                                if ($result->num_rows > 0)
                                {
                                        // display records in a table
                                        echo "<table border='1' cellpadding='10'>";
                                         echo "<tr><th><center><h3>Hospital Employee Information </h3></center></th> </tr>";
                                        // set table headers
                                        echo "<tr><th>Employee ID</th> <th>employeeFirstName</th> <th>employeeLastName</th> <th>employeeAddress</th> <th>employeePhone</th> <th>employeeJobTitle</th> <th></th> <th></th> </tr>";
                                        
                                        while ($row = $result->fetch_object())
                                        {
                                                 echo "<tr>";
                                                echo "<td>" . $row->employeeID . "</td>";
                                               echo "<td>" . $row->employeeFirstName . "</td>";
                                                echo "<td>" . $row->employeeLastName . "</td>";
                                                echo "<td>" . $row->employeeAddress . "</td>";
                                                echo "<td>" . $row->employeePhone . "</td>";
                                                echo "<td>" . $row->employeeJobTitle . "</td>";
                                                
                                                
                                                echo "<td><a href='model3.php?employeeID=" . $row->employeeID . "'>Edit</a></td>";
                                                echo "<td><a href='deletepatient.php?employeeID=" . $row->employeeID . "'>Delete</a></td>";
                                                echo "</tr>";
                                        }
                                        
                                        echo "</table>";
                                }
                                // if there are no records in the database, display an alert message
                                else
                                {
                                        echo "No results to display!";
                                }
                        }
                        // show an error if there is an issue with the database query
                        else
                        {
                                echo "Error: " . $mysqli->error;
                        }
                        
                        // close database connection
                        $mysqli->close();
                
                ?>
                
             <h4>   <a href="model3.php">Add New Employee Record</a> </h4>
        </body>
</html>
 
    




    