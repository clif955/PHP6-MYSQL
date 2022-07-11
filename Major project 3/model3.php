<? ob_start(); ?>
<?php
        /*
                Allows the user to both create new model and edit existing model
        */

        // connect to the database
        include("connectme.php");

        // creates the new/edit record form
        // since this form is used multiple times in this file, I have made it a function that is easily reusable
       
	    function renderForm( $employeeFirstName = '', $employeeLastName = '', $employeeAddress = '', $employeePhone = '', $employeeJobTitle = '', $error = '', $employeeID = '')
        { ?>
                <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
                <html>
                        <head>  
                        	
                                <title>
                                        <?php if ($patientID != '') { echo "Edit Record"; } else { echo "New Record"; } ?>
                                </title>
                                <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
                                <link rel="stylesheet" type="text/css" href="Styles.css" />
                        </head>
                        <body>
                                <h1><?php if ($employeeID != '') { echo "Edit Record"; } else { echo "New Record"; } ?></h1>
                                <?php if ($error != '') {
                                        echo "<div style='padding:4px; border:1px solID yellow; color:red'>" . $error
                                                . "</div>";
                                } ?>
                                 
                                <form action="" method="post">
                                <div>
                                        <?php if ($employeeID != '') { ?>
                                                <input type="hIDden" name="patientID" value="<?php echo $employeeID; ?>" />
                                                <p>ID: <?php echo $employeeID; ?></p><br/>
                                        <?php } ?>
                                       
                                        
								</div>
                                </form>
                        </body>
                </html>
                
        <?php }



       

           //EDIT RECORD

        
        // if the 'ID' variable is set in the URL, we know that we need to edit a record
        if (isset($_GET['$employeeID']))
        {
                // if the form's submit button is clicked, we need to process the form
                if (isset($_POST['submit']))
                {
                        // make sure the 'ID' in the URL is valID
                        if (is_numeric($_POST['$employeeID']))
                        {
                                // get variables from the URL/form
                                //ENT_QUOTES - Decodes double and single quotes
                                $employeeID = $_POST['$employeeID'];
                                $employeeFirstName = htmlentities($_POST['employeeFirstName'], ENT_QUOTES);
                                  $employeeLastName = htmlentities($_POST['employeeLastName'], ENT_QUOTES);
                                    $employeeAddress = htmlentities($_POST['employeeAddress'], ENT_QUOTES);
                                      $employeePhone = htmlentities($_POST['employeePhone'], ENT_QUOTES);
                                        $employeeJobTitle = htmlentities($_POST['employeeJobTitle'], ENT_QUOTES);
                                         
                                          
                                
                                // check that firstname and addressname are both not empty
                                if ($employeeFirstName == '' || $employeeLastName == '')
                                {
                                        // if they are empty, show an error message and display the form
                                        $error = 'ERROR: Please fill in all required fields!';
                                        renderForm( $employeeFirstName, $employeeLastName, $error, $employeeID);
                                }
                                else
                                {
                                        // if everything is fine, update the record in the database
                                        // bind statement string, string, string, integer
                                        if ($stmt = $mysqli->prepare("UPDATE cDavis_HospitalEmployee_Information SET employeeFirstName = ?, employeeLastName = ?, employeeAddress = ?, employeePhone = ?, employeeJobTitle = ?
                                                WHERE employeeID=?"))
                                        {
                                                $stmt->bind_param("sssssi",  $employeeFirstName, $employeeLastName, $employeeAddress, $employeePhone, $employeeJobTitle, $employeeID);
                                                $stmt->execute();
                                                $stmt->close();
                                        }
                                        // show an error message if the query has an error
                                        else
                                        {
                                                echo "ERROR: could not prepare SQL statement.";
                                        }
                                        
                                        // redirect the user once the form is updated
                                        
                                       header("Location: cDavis_HospitalEmployee_Inforamtion.html");
                                }
                        }
                        // if the 'ID' variable is not valID, show an error message
                        else
                        {
                                echo "Error!";
                        }
                }
                // if the form hasn't been submitted yet, get the info from the database and show the form
                else
                {
                        // make sure the 'ID' value is valID
                        if (is_numeric($_GET['$employeeID']) && $_GET['$employeeID'] > 0)
                        {
                                // get 'ID' from URL
                                $employeeID = $_GET['$employeeID'];
                                
                                // get the recod from the database
                                if($stmt = $mysqli->prepare("SELECT * FROM cDavis_HospitalEmployee_Information WHERE patientID=?"))
                                {
                                        $stmt->bind_param("i", $employeeID);
                                        $stmt->execute();
                                        
                                        $stmt->bind_result($$employeeID, $employeeFirstName, $employeeLastName, $employeeAddress, $employeePhone, $employeeJobTitle);
                                        $stmt->fetch();
                                        
                                        // show the form
                                        renderForm( $employeeFirstName, $employeeLastName, $employeeAddress, $employeePhone, $employeeJobTitle, NULL, $employeeID);
                                        
                                        $stmt->close();
                                }
                                // show an error if the query has an error
                                else
                                {
                                        echo "Error: could not prepare SQL statement";
                                }
                        }
                        // if the 'ID' value is not valID, redirect the user back to the view.php page
                        else
                        {
                                header("Location: cDavis_HospitalEmployee_Information.html");
                        }
                }
        }



        /*

           NEW RECORD

        */
        // if the 'ID' variable is not set in the URL, we must be creating a new record
        else
        {
                // if the form's submit button is clicked, we need to process the form
                if (isset($_POST['submit']))
                {
                        // get the form data
                        $employeeFirstName = htmlentities($_POST['employeeFirstName'], ENT_QUOTES);
                          $employeeLastName = htmlentities($_POST['employeeLastName'], ENT_QUOTES);
                            $employeeAddress = htmlentities($_POST['employeeAddress'], ENT_QUOTES);
                              $employeePhone = htmlentities($_POST['$employeePhone'], ENT_QUOTES);
                                $employeeJobTitle = htmlentities($_POST['employeeJobTitle'], ENT_QUOTES);
                        
                        // check that employeeFirstName and patientAddressname are both not empty
                        if ($employeeFirstName == '' || $employeeLastName == '')
                        {
                                // if they are empty, show an error message and display the form
                                $error = 'ERROR: Please fill in all required fields!';
                                renderForm(  $employeeFirstName, $employeeLastName, $employeeAddress, $employeePhone, $employeeJobTitle, $error);
                        }
                        else
                        {
                                // insert the new record into the database
                                if ($stmt = $mysqli->prepare("INSERT cDavis_HospitalEmployee_Information ( employeeFirstName, employeeLastName, employeeAddress, employeePhone, employeeJobTitle) VALUES (?, ?, ?, ?, ?)"))
                                {
                                        $stmt->bind_param("sssss", $employeeFirstName, $employeeLastName, $employeeAddress, $employeePhone, $employeeJobTitle);
                                        $stmt->execute();
                                        $stmt->close();
                                }
                                // show an error if the query has an error
                                else
                                {
                                        echo "ERROR: Could not prepare SQL statement.";
                                }
                                
                                // redirec the user
                                header("Location: cDavis_HospitalEmployee_Information.html");
                        }
                        
                }
                // if the form hasn't been submitted yet, show the form
                else
                {
                       // renderForm();
                }
        }
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
                                        echo "<tr><th><center><h3>UpDated Record </h3></center></th> </tr>";
                                        // set table headers
                                        echo "<tr><th>Employee ID</th> <th>FirstName</th> <th>LastName</th> <th>Address</th> <th>Phone</th> <th>Job Title</th> <th></th> <th></th> </tr>";
                                        
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
                                                echo "<td><a href='deletepatient.php?patientID=" . $row->employeeID . "'>Delete</a></td>";
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
                        //$mysqli->close();
        // close the mysqli connection
        $mysqli->close();
?> 


<? ob_flush(); ?>

		<h4> <a href="cDavis_HospitalEmployee_Information.html">Back to Employee Information Form</a> </h4>

    