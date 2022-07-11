
USE cis1110;

DROP TABLE IF EXISTS  cliftondavis_doctor_Table;
CREATE TABLE   cliftondavis_doctor_Table (
					doctorId INT PRIMARY KEY,
					doctorFirstName VARCHAR(15),
					doctorLastName VARCHAR(15),
					doctorSpecialty VARCHAR(50)
);
DROP TABLE IF EXISTS  cliftondavis_patient_Table;
CREATE TABLE   cliftondavis_patient_Table (
					patientId INT PRIMARY KEY,
					patientFirstName VARCHAR(15),
					patientLastName VARCHAR(15),
					patientIllness VARCHAR(25),
					doctorId INT
);
-- building records
INSERT INTO   cliftondavis_doctor_Table
VALUES (1001, 'Clifton', 'Johnson', 'feet issues-Podiatry Specialist'),
				 (1002, 'Joyce', 'Lumpkin', 'headaches-Brain Specialist'),
				 (1003, 'Hellen', 'Jenkins', 'chest pains-Cardiology Specialist'),
				 (1004, 'Bruce', 'Kevorkian', 'psychosis and depression-Psychiatric Specialist');
				 
INSERT INTO  cliftondavis_patient_Table
VALUES (001, 'Tasha', 'Duncan', 'feet issues', NULL),
				 (002, 'Mary', 'Cleaver', 'chest pains', NULL),
				 (003, 'Willie', 'Goodwill', 'depression', NULL),
				 (004, 'Jenny', 'Cooper', 'headaches', NULL),
				 (005, 'Alexia', 'Luthor', 'psychosis', NULL);				 
-- displaying all records	
SELECT * FROM cliftondavis_doctor_Table;			 
SELECT * FROM  cliftondavis_patient_Table;






