
USE cis1110;
DROP TABLE IF EXISTS cliftondavis_doctors_Table;
CREATE TABLE cliftondavis_doctors_Table (
	doctor_Id INT(3) NOT NULL AUTO_INCREMENT, 
	doctor_firstName VARCHAR(15) default NULL,
	doctor_lastName VARCHAR(15) default NULL,
	doctor_Specialty VARCHAR(25) default NULL,
	PRIMARY KEY (doctor_Id),
	FOREIGN KEY (doctor_Specialty)
	);	 
	
	
	
INSERT INTO cliftondavis_doctors_Table
		VALUES (NULL, 'Dr. Clifton', 'Davis','General Practitioner'),

		(NULL, 'Dr. Helen', 'Davis','Dermatology'),

		(NULL,'Dr. Bruce', 'Davis','Endocrinology'),

		(NULL,'Dr. Clarence', 'Davis','Gastroenterology'),

		(NULL, 'Dr. Felton', 'Davis','Gynecologic Oncology');
		
	
SELECT * FROM cliftondavis_doctors_Table;	



   