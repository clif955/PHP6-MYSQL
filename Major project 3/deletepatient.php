<?php

        // connect to the database
        include('connectme.php');
        
        // confirm that the 'ID' variable has been set
        if (isset($_GET['patientID']) && is_numeric($_GET['patientID']))
        {
                // get the 'ID' variable from the URL
                $patientID = $_GET['patientID'];
                
                // delete record from database
                if ($stmt = $mysqli->prepare("DELETE FROM cDavis_PatientRecords WHERE patientID = ? LIMIT 1"))
                {
                        $stmt->bind_param("i",$patientID);     
                        $stmt->execute();
                        $stmt->close();
                }
                else
                {
                        echo "ERROR: could not prepare SQL statement.";
                }
                $mysqli->close();
                
                // redirect user after delete is successful
                header("Location: cDavis_PatientsCheckin_Form.html");
        }
        else
        // if the 'ID' variable isn't set, redirect the user
        {
                header("Location: cDavis_PatientsCheckin_Form.html");
        }

?> 