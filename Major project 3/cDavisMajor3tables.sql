USE `cis1110`;

DROP TABLE IF EXISTS  cDavis_PatientRecords;
CREATE TABLE   cDavis_PatientRecords (
					patientID INT(4) PRIMARY KEY,
					patientFirstName VARCHAR(30),
					patientLastName VARCHAR(30),
					patientAddress VARCHAR(30),
					patientPhone BIGINT(30),
					patientIllness VARCHAR(30),
					patientInsurance VARCHAR(30),
					doctorID INT(4) UNIQUE KEY 
);
DROP TABLE IF EXISTS  cDavis_HospitalEmployee_Information;
CREATE TABLE   cDavis_HospitalEmployee_Information (
					employeeID INT(4) PRIMARY KEY,
					employeeFirstName VARCHAR(30),
					employeeLastName VARCHAR(30),
					employeeAddress VARCHAR(30),
					employeePhone BIGINT(30),
					employeeInsurance VARCHAR(30),
					employeeSpecialities VARCHAR(30),
					employeeDegrees VARCHAR(30),
					employeeJobTitle VARCHAR(30) UNIQUE KEY
);
DROP TABLE IF EXISTS  cDavis_DoctorInformation;
CREATE TABLE   cDavis_DoctorInformation (
					doctorID INT(4) PRIMARY KEY,
					doctorFirstName VARCHAR(15),
					doctorLastName VARCHAR(15),
					doctorAddress VARCHAR(30),
					doctorPhone BIGINT(30),
					doctorSpecialty VARCHAR(50),
					doctorCost INT(7),
					doctorPatients VARCHAR(150),
					doctorNurse VARCHAR(50),
					nurseID INT(4) UNIQUE KEY
);
DROP TABLE IF EXISTS  cDavis_NurseInformation;
CREATE TABLE   cDavis_NurseInformation (
					nurseID INT(4) PRIMARY KEY,
					nurseFirstName VARCHAR(15),
					nurseLastName VARCHAR(15),
					nurseAddress VARCHAR(30),
					nursePhone BIGINT(30),
					nurseSpecialty VARCHAR(50),
					nurseCost INT(6),
					nursePatients VARCHAR(150),
					nurseAid VARCHAR(50),
					aidID INT(4) UNIQUE KEY
);
DROP TABLE IF EXISTS  cDavis_NurseAidInformation;
CREATE TABLE   cDavis_NurseAidInformation (
					aidID INT(4) PRIMARY KEY,
					aidFirstName VARCHAR(15),
					aidLastName VARCHAR(15),
					aidAddress VARCHAR(30),
					aidPhone BIGINT(30),
					aidSpecialty VARCHAR(50),
					aidPatients VARCHAR(150),
					nurseID INT(4) UNIQUE KEY
);
DROP TABLE IF EXISTS  cDavis_BirthingRoom;
CREATE TABLE   cDavis_BirthingRoom (
					birthRoomNumber INT(4) PRIMARY KEY,
					patientID INT(4),
					employeeLastName VARCHAR(30),
					doctorID INT(4),
					doctorLastName VARCHAR(15),
					nurseID INT(4),
					nurseLastName VARCHAR(15),
					birthDate DATE,
					birthTime TIME,
					birthWeight INT(3),
					birthSex VARCHAR(5),
					infantID INT(5) UNIQUE KEY
);
DROP TABLE IF EXISTS  cDavis_HospitalRoom;
CREATE TABLE   cDavis_HospitalRoom (
					HospitalRoomNumber INT(4) NOT NULL AUTO_INCREMENT,
					patientID INT(4),
					employeeLastName VARCHAR(30),
					doctorID INT(4),
					doctorLastName VARCHAR(15),
					nurseID INT(4),
					nurseLastName VARCHAR(15),
					aidID INT(4),
					aidLastName VARCHAR(15),
					patientIllness VARCHAR(30) UNIQUE KEY,
					hospitalCost INT(6),
					PRIMARY KEY(HospitalRoomNumber)
);
-- building records
INSERT INTO   cDavis_DoctorInformation
VALUES (1001, 'James', 'Johnson', '442 pine st, austell ga',4045584795,'obstetrician',3995.00, NULL, NULL, NULL),
				 (1002, 'Sandy', 'Lumpkin','122 clifton st, marietta ga',7895621548, 'obstetrician',3995.00, NULL, NULL, NULL),
				 (1003, 'Jenny', 'Jenkins','789 howard dr, kennesaw ga',1596457412, 'Pediatrian',3995.00, NULL, NULL, NULL),
				 (1004, 'Jack', 'Kevorkian','887 davis dr, smyrna ga','9987412255', 'Pediatrian',3995.00, NULL, NULL, NULL);
				 
INSERT INTO   cDavis_PatientRecords 
VALUES (001, 'Evan', 'Duncan', '472 prine st ,atlanta ga',4045584795, 'hand swollen','obamacare', NULL),
				 (002, 'June', 'Cleaver','152 hifton st, marietta ga',7895678948, 'chest pains','obamacare', NULL),
				 (003, 'monique', 'Goodwill','708 wayward dr, kennesaw ga',1596787412, 'pregnant','romneycare', NULL),
				 (004, 'Winnie', 'Cooper','888 travis dr, smyrna ga',9987412255, 'pregnant','romneycare', NULL);

INSERT INTO   cDavis_NurseInformation
VALUES (2111, 'James', 'Johnson', '442 pine st, austell ga', 4045584795,'delivery nurse',995.00, NULL, NULL, NULL),
				 (2112, 'andy', 'Lumpkin','122 clifton st, marietta ga', 7895621548, 'care nurse',995.00, NULL, NULL, NULL),
				 (2113, 'penny', 'Jenkins','789 howard dr, kennesaw ga', 1596457412, 'special care',995.00, NULL, NULL, NULL),
				 (2114, 'Jacky', 'Kevorkian','887 davis dr, smyrna ga', 9987412255, 'patient',995.00, NULL, NULL, NULL);	

INSERT INTO   cDavis_NurseAidInformation
VALUES (3111, 'hellen', 'Johnson', '442 pine st, austell ga', 4045584795,'delivery aid', NULL, NULL, NULL),
				 (3112, 'joyce', 'Lumpkin','122 clifton st, marietta ga', 7895621548, 'care aid', NULL, NULL, NULL),
				 (3113, 'ruthie', 'Jenkins','789 howard dr, kennesaw ga', 1596457412, 'general aid', NULL, NULL, NULL),
				 (3114, 'linda', 'Kevorkian','887 davis dr, smyrna ga', 9987412255, 'patient aid', NULL, NULL, NULL);	

INSERT INTO    cDavis_BirthingRoom
VALUES (4111, 001, 'Duncan', 1001, 'Johnson',2111,'Johnson', '1976-04-13', '11:30 a.m.', '1 pound', 'male', '41111'),
				 (4112, 003, 'Goodwill', 1002,'Lumpkin',2113, 'Jenkins', '1977-05-14', '12:30 a.m.', '1.5 pound', 'female', '42111');

INSERT INTO    	cDavis_HospitalRoom 
VALUES ( NULL, SELECT 'cDavis_PatientRecords.patientID' AS 'patientID', SELECT 'cDavis_PatientRecords.employeeLastName' AS 'employeeLastName',
				SELECT 'cDavis_DoctorInformation.doctorID' AS 'doctorID', SELECT 'cDavis_DoctorInformation.doctorLastName' AS 'doctorLastName',
				SELECT 'cDavis_NurseInformation.nurseID' AS 'nurseID', SELECT 'cDavis_NurseInformation.nurseLastName' AS 'nurseLastName',
				SELECT 'cDavis_NurseAidInformation.aidID' AS 'aidID', SELECT 'cDavis_NurseAidInformation.aidLastName' AS 'aidLastName',
				SELECT 'cDavis_PatientRecords.patientIllness' AS 'patientIllness', SELECT 'cDavis_HospitalRoom.hospitalCost' AS 'hospitalCost');			 	
				 
-- displaying all records	
SELECT * FROM cDavis_PatientRecords;			 
SELECT * FROM cDavis_DoctorInformation;
SELECT * FROM cDavis_NurseInformation;			 
SELECT * FROM cDavis_NurseAidInformation;
SELECT * FROM cDavis_BirthingRoom;			 
SELECT * FROM cDavis_HospitalRoom;
