<? ob_start(); ?>
<?php
        /*
                Allows the user to both create new model and edit existing model
        */

        // connect to the database
        include("connectme.php");

        // creates the new/edit record form
        // since this form is used multiple times in this file, I have made it a function that is easily reusable
       
	    function renderForm( $patientFirstName = '', $patientLastName = '', $patientAddress = '', $patientPhone = '', $patientIllness = '', $error = '', $patientID = '')
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
                                <h1><?php if ($patientID != '') { echo "Edit Record"; } else { echo "New Record"; } ?></h1>
                                <?php if ($error != '') {
                                        echo "<div style='padding:4px; border:1px solID yellow; color:red'>" . $error
                                                . "</div>";
                                } ?>
                                 
                                <form action="" method="post">
                                <div>
                                        <?php if ($patientID != '') { ?>
                                                <input type="hIDden" name="patientID" value="<?php echo $patientID; ?>" />
                                                <p>ID: <?php echo $patientID; ?></p><br/>
                                        <?php } ?>
                                       
                                         <strong>*firstname*: </strong> <input type="text" name="firstname"
                                                value="<?php echo $patientFirstName; ?>"/><br/>
                                        <strong>*lastname*: </strong> <input type="text" name="lastname"
                                                value="<?php echo $patientLastName; ?>"/><br/>
                                        <strong>address: </strong> <input type="text" name="address"
                                                value="<?php echo $patientAddress; ?>"/><br/>
                                        <strong>phone: </strong> <input type="text" name="phone"
                                                value="<?php echo $patientPhone; ?>"/><br/>
                                        <strong>patient Illness: </strong> <input type="text" name="emergencycontact"
                                                value="<?php echo $patientIllness; ?>"/><br/>
                                            <p>* required</p>
                                        <input type="submit" name="submit" value="Submit" />
                                </div>
                                </form>
                        </body>
                </html>
                
        <?php }



       

           //EDIT RECORD

        
        // if the 'ID' variable is set in the URL, we know that we need to edit a record
        if (isset($_GET['patientID']))
        {
                // if the form's submit button is clicked, we need to process the form
                if (isset($_POST['submit']))
                {
                        // make sure the 'ID' in the URL is valID
                        if (is_numeric($_POST['patientID']))
                        {
                                // get variables from the URL/form
                                //ENT_QUOTES - Decodes double and single quotes
                                $patientID = $_POST['patientID'];
                                $patientFirstName = htmlentities($_POST['patientFirstName'], ENT_QUOTES);
                                  $patientLastName = htmlentities($_POST['patientLastName'], ENT_QUOTES);
                                    $patientAddress = htmlentities($_POST['patientAddress'], ENT_QUOTES);
                                      $patientPhone = htmlentities($_POST['patientPhone'], ENT_QUOTES);
                                        $patientIllness = htmlentities($_POST['patientIllness'], ENT_QUOTES);
                                         
                                          
                                
                                // check that firstname and addressname are both not empty
                                if ($patientFirstName == '' || $patientLastName == '')
                                {
                                        // if they are empty, show an error message and display the form
                                        $error = 'ERROR: Please fill in all required fields!';
                                        renderForm( $patientFirstName, $patientLastName, $error, $patientID);
                                }
                                else
                                {
                                        // if everything is fine, update the record in the database
                                        // bind statement string, string, string, integer
                                        if ($stmt = $mysqli->prepare("UPDATE cDavis_PatientRecords SET patientFirstName = ?, patientLastName = ?, patientAddress = ?, patientPhone = ?, patientIllness = ?
                                                WHERE patientID=?"))
                                        {
                                                $stmt->bind_param("sssssi",  $patientFirstName, $patientLastName, $patientAddress, $patientPhone, $patientIllness, $patientID);
                                                $stmt->execute();
                                                $stmt->close();
                                        }
                                        // show an error message if the query has an error
                                        else
                                        {
                                                echo "ERROR: could not prepare SQL statement.";
                                        }
                                        
                                        // redirect the user once the form is updated
                                        
                                       header("Location: PatientsCheckin_Form.html");
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
                        if (is_numeric($_GET['patientID']) && $_GET['patientID'] > 0)
                        {
                                // get 'ID' from URL
                                $patientID = $_GET['patientID'];
                                
                                // get the recod from the database
                                if($stmt = $mysqli->prepare("SELECT * FROM cDavis_PatientRecords WHERE patientID=?"))
                                {
                                        $stmt->bind_param("i", $patientID);
                                        $stmt->execute();
                                        
                                        $stmt->bind_result($patientID, $patientFirstName, $patientLastName, $patientAddress, $patientPhone, $patientIllness);
                                        $stmt->fetch();
                                        
                                        // show the form
                                        renderForm( $patientFirstName, $patientLastName, $patientAddress, $patientPhone, $patientIllness, NULL, $patientID);
                                        
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
                                header("Location: cDavis_PatientsCheckin_Form.html");
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
                        $patientFirstName = htmlentities($_POST['patientFirstName'], ENT_QUOTES);
                          $patientLastName = htmlentities($_POST['patientLastName'], ENT_QUOTES);
                            $patientAddress = htmlentities($_POST['patientAddress'], ENT_QUOTES);
                              $$patientPhone = htmlentities($_POST['$patientPhone'], ENT_QUOTES);
                                $patientIllness = htmlentities($_POST['patientIllness'], ENT_QUOTES);
                        
                        // check that patientFirstName and patientAddressname are both not empty
                        if ($patientFirstName == '' || $patientLastName == '')
                        {
                                // if they are empty, show an error message and display the form
                                $error = 'ERROR: Please fill in all required fields!';
                                renderForm(  $patientFirstName, $patientLastName, $patientAddress, $$patientPhone, $patientIllness, $error);
                        }
                        else
                        {
                                // insert the new record into the database
                                if ($stmt = $mysqli->prepare("INSERT thePatient ( patientFirstName, patientLastName, patientAddress, $patientPhone, patientIllness) VALUES (?, ?, ?, ?, ?)"))
                                {
                                        $stmt->bind_param("sssss", $patientFirstName, $patientLastName, $patientAddress, $$patientPhone, $patientIllness);
                                        $stmt->execute();
                                        $stmt->close();
                                }
                                // show an error if the query has an error
                                else
                                {
                                        echo "ERROR: Could not prepare SQL statement.";
                                }
                                
                                // redirec the user
                                header("Location: cDavis_PatientsCheckin_Form.html");
                        }
                        
                }
                // if the form hasn't been submitted yet, show the form
                else
                {
                        renderForm();
                }
        }
        
        // close the mysqli connection
        $mysqli->close();
?> 


<? ob_flush(); ?>


    