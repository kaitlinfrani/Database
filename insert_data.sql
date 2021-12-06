/* inserting data */
/*3 PROFESSOR*/
INSERT INTO PROFESSOR (SSN, Professor_Name, Street_Address, City_Address, State_Address, ZipCode_Address, AreaCode_Phone, Number_Phone, Professor_Sex, Professor_Title, Professor_Salary, College_Degrees)
VALUES ('123456789', 'Shane Wang', '874 Nordica Street', 'La Palma', 'CA', '92806', '714','5467821', 'M', 'Dr.', '803000', 'PhD Computer Science');

INSERT INTO PROFESSOR (SSN, Professor_Name, Street_Address, City_Address, State_Address, ZipCode_Address, AreaCode_Phone, Number_Phone, Professor_Sex, Professor_Title, Professor_Salary, College_Degrees)
VALUES ('982376812', 'Linda Rogers', '255 Culver Road', 'Fullerton', 'CA', '91873', '562', '6194503', 'F', 'Prof.', '62000', 'BS Sociology');

INSERT INTO PROFESSOR (SSN, Professor_Name, Street_Address, City_Address, State_Address, ZipCode_Address, AreaCode_Phone, Number_Phone, Professor_Sex, Professor_Title, Professor_Salary, College_Degrees)
VALUES ('222387601', 'Crystal Diaz', '4575 Pioneer Blvd', 'Norwalk', 'CA', '90675', '714', '5558978', 'F', 'Prof.', '75000', 'BS Mathematics ');

/*8 STUDENT*/
INSERT INTO STUDENT (CWID, Student_FName, Student_LName, Street_Address, City_Address, State_Address, ZipCode_Address, AreaCode_Phone, Number_Phone, Major_Dept)
VALUES ('7714506', 'John', 'Doe', '6773 Viking Ave', 'Anaheim', 'CA', '93873', '619', '7743434', 'Computer Science');

INSERT INTO STUDENT (CWID, Student_FName, Student_LName, Street_Address, City_Address, State_Address, ZipCode_Address, AreaCode_Phone, Number_Phone, Major_Dept)
VALUES ('9012435', 'Jungkook', 'Jeon', '95 Hilltop St', 'Fullerton', 'CA', '90621', '714', '2029700', 'Computer Science');

INSERT INTO STUDENT (CWID, Student_FName, Student_LName, Street_Address, City_Address, State_Address, ZipCode_Address, AreaCode_Phone, Number_Phone, Major_Dept)
VALUES ('2224891', 'Eva', 'Angeles', '45 Howard Drive', 'Costa Mesa', 'CA', '92627', '714', '2069700', 'Computer Science');

INSERT INTO STUDENT (CWID, Student_FName, Student_LName, Street_Address, City_Address, State_Address, ZipCode_Address, AreaCode_Phone, Number_Phone, Major_Dept)
VALUES ('6013471', 'Jimin', 'Park', '451 Gartner Drive', 'Los Angeles', 'CA', '90034', '209', '2011250', 'Sociology');

INSERT INTO STUDENT (CWID, Student_FName, Student_LName, Street_Address, City_Address, State_Address, ZipCode_Address, AreaCode_Phone, Number_Phone, Major_Dept)
VALUES ('2345012', 'Taylor', 'Swift', '335 South St', 'Anaheim', 'CA', '92851', '714', '2106655', 'Sociology');

INSERT INTO STUDENT (CWID, Student_FName, Student_LName, Street_Address, City_Address, State_Address, ZipCode_Address, AreaCode_Phone, Number_Phone, Major_Dept)
VALUES ('4456717', 'Nathan', 'Gomez', '417 Randall Street', 'Westminister', 'CA', '92683', '714', '4815088', 'Sociology');

INSERT INTO STUDENT (CWID, Student_FName, Student_LName, Street_Address, City_Address, State_Address, ZipCode_Address, AreaCode_Phone, Number_Phone, Major_Dept)
VALUES ('3456781', 'Alex', 'Francis', '223 Lincoln Ave', 'Brea', 'CA', '91278', '714', '243987', 'Mathematics');

INSERT INTO STUDENT (CWID, Student_FName, Student_LName, Street_Address, City_Address, State_Address, ZipCode_Address, AreaCode_Phone, Number_Phone, Major_Dept)
VALUES ('7712345', 'Liza', 'Soberano', '9592 Victoria Lane', 'Anaheim', 'CA', '92801', '714', '2142165', 'Mathematics');

INSERT INTO STUDENT (CWID, Student_FName, Student_LName, Street_Address, City_Address, State_Address, ZipCode_Address, AreaCode_Phone, Number_Phone, Major_Dept)
VALUES ('8841390', 'Johanna', 'Diaz', '7775 Linden Ave', 'Santa Ana', 'CA', '92704', '714', '3437677', 'Mathematics');

INSERT INTO STUDENT (CWID, Student_FName, Student_LName, Street_Address, City_Address, State_Address, ZipCode_Address, AreaCode_Phone, Number_Phone, Major_Dept)
VALUES ('4489219', 'Michael', 'Kang', '8766 Ridge Street', 'Anaheim', 'CA', '92821', '714', '8656060', 'Mathematics');

/*2 DEPARTMENT*/
INSERT INTO DEPARTMENT (Dept_Num, Dept_Name, Dept_Phone, Dept_Office, P_SSN)
VALUES ('43289', 'Department of Computer Science', '6577652021', 'CS-322', '123456789');

INSERT INTO DEPARTMENT (Dept_Num, Dept_Name, Dept_Phone, Dept_Office, P_SSN)
VALUES ('23661', 'Department of Sociology', '65754512', 'CP-444', '982376812');

INSERT INTO DEPARTMENT (Dept_Num, Dept_Name, Dept_Phone, Dept_Office, P_SSN)
VALUES ('76632', 'Department of Mathematics', '6572781331', 'MH-220', '222387601');

/*4 COURSE*/
INSERT INTO COURSE (Course_Num, Course_Title, Course_Textbook, Course_Units, Dept_Num)
VALUES ('CPSC120', 'Introduction to Programming', 'Introduction to C++', '3', '43289');

INSERT INTO COURSE (Course_Num, Course_Title, Course_Textbook, Course_Units, Dept_Num)
VALUES ('CPSC240', 'Computer Architecture', 'The Art of Assembly Language', '3', '43289');

INSERT INTO COURSE (Course_Num, Course_Title, Course_Textbook, Course_Units, Dept_Num)
VALUES ('MATH150B', 'Calculus II', 'Essential Calculus', '4', '76632');

INSERT INTO COURSE (Course_Num, Course_Title, Course_Textbook, Course_Units, Dept_Num)
VALUES ('SOCI353', 'Sociology of Children and Youth', 'Youth Sociology ', '3', '23661');

/*6 COURSE_SECTION*/
INSERT INTO COURSE_SECTION (Section_Num, Course_Num, Classroom, Seat_Capacity, Meeting_Days, Beg_Time, End_Time, P_SSN)
VALUES ('07', 'CPSC120', 'CS-122', '32', 'MW', '10:00AM', '11:50AM', '123456789');

INSERT INTO COURSE_SECTION (Section_Num, Course_Num, Classroom, Seat_Capacity, Meeting_Days, Beg_Time, End_Time, P_SSN)
VALUES ('02', 'CPSC240', 'CS-231', '28', 'TTH', '2:00PM', '3:15PM', '123456789');

INSERT INTO COURSE_SECTION (Section_Num, Course_Num, Classroom, Seat_Capacity, Meeting_Days, Beg_Time, End_Time, P_SSN)
VALUES ('05', 'CPSC240', 'CS-231', '28', 'MW', '1:00PM', '2:15PM', '123456789');

INSERT INTO COURSE_SECTION (Section_Num, Course_Num, Classroom, Seat_Capacity, Meeting_Days, Beg_Time, End_Time, P_SSN)
VALUES ('01', 'SOCI353', 'CP-102', '24', 'TTH', '8:00AM', '9:15AM', '982376812');

INSERT INTO COURSE_SECTION (Section_Num, Course_Num, Classroom, Seat_Capacity, Meeting_Days, Beg_Time, End_Time, P_SSN)
VALUES ('04', 'SOCI353', 'CP-102', '24', 'MW', '2:00PM', '3:10PM', '982376812');

INSERT INTO COURSE_SECTION (Section_Num, Course_Num, Classroom, Seat_Capacity, Meeting_Days, Beg_Time, End_Time, P_SSN)
VALUES ('01', 'MATH150B', 'MH-456', '30', 'MW', '10:00AM', '11:50AM', '222387601');

/*20 ENROLLMENT*/
/*STUDENT 7714506*/
INSERT INTO ENROLLMENT (Student_CWID, Course_Num, Section_Num, Student_Grade)
VALUES ('7714506', 'CPSC240', '05', 'B+');

INSERT INTO ENROLLMENT (Student_CWID, Course_Num, Section_Num, Student_Grade)
VALUES ('7714506', 'MATH150B', '01', 'C');

INSERT INTO ENROLLMENT (Student_CWID, Course_Num, Section_Num, Student_Grade)
VALUES ('7714506', 'SOCI353', '04', 'A-');

/*STUDENT 9012435*/
INSERT INTO ENROLLMENT (Student_CWID, Course_Num, Section_Num, Student_Grade)
VALUES ('9012435', 'CPSC120', '07', 'A');

INSERT INTO ENROLLMENT (Student_CWID, Course_Num, Section_Num, Student_Grade)
VALUES ('9012435', 'MATH150B', '01', 'B+');

/*STUDENT 2224891*/
INSERT INTO ENROLLMENT (Student_CWID, Course_Num, Section_Num, Student_Grade)
VALUES ('2224891', 'CPSC240', '02', 'A-');

INSERT INTO ENROLLMENT (Student_CWID, Course_Num, Section_Num, Student_Grade)
VALUES ('2224891', 'SOCI353', '01', 'B');

/*STUDENT 6013471*/
INSERT INTO ENROLLMENT (Student_CWID, Course_Num, Section_Num, Student_Grade)
VALUES ('6013471', 'CPSC120', '07', 'A');

INSERT INTO ENROLLMENT (Student_CWID, Course_Num, Section_Num, Student_Grade)
VALUES ('6013471', 'MATH150B', '01', 'A+');

/*STUDENT 2345012*/
INSERT INTO ENROLLMENT (Student_CWID, Course_Num, Section_Num, Student_Grade)
VALUES ('2345012', 'SOCI353', '04', 'B+');

INSERT INTO ENROLLMENT (Student_CWID, Course_Num, Section_Num, Student_Grade)
VALUES ('2345012', 'CPSC120', '07', 'C');

/*STUDENT 4456717*/
INSERT INTO ENROLLMENT (Student_CWID, Course_Num, Section_Num, Student_Grade)
VALUES ('4456717', 'CPSC240', '05', 'B');

INSERT INTO ENROLLMENT (Student_CWID, Course_Num, Section_Num, Student_Grade)
VALUES ('4456717', 'MATH150B', '01', 'C-');

/*STUDENT 3456781*/
INSERT INTO ENROLLMENT (Student_CWID, Course_Num, Section_Num, Student_Grade)
VALUES ('3456781', 'CPSC120', '07', 'A+');

/*STUDENT 7712345*/
INSERT INTO ENROLLMENT (Student_CWID, Course_Num, Section_Num, Student_Grade)
VALUES ('7712345', 'CPSC240', '02', 'A+');

/*STUDENT 8841390*/
INSERT INTO ENROLLMENT (Student_CWID, Course_Num, Section_Num, Student_Grade)
VALUES ('8841390', 'CPSC240', '05', 'B+');

INSERT INTO ENROLLMENT (Student_CWID, Course_Num, Section_Num, Student_Grade)
VALUES ('8841390', 'SOCI353', '01', 'A-');

/*STUDENT 4489219*/
INSERT INTO ENROLLMENT (Student_CWID, Course_Num, Section_Num, Student_Grade)
VALUES ('4489219', 'CPSC120', '07', 'B');

INSERT INTO ENROLLMENT (Student_CWID, Course_Num, Section_Num, Student_Grade)
VALUES ('4489219', 'MATH150B', '01', 'A');

INSERT INTO ENROLLMENT (Student_CWID, Course_Num, Section_Num, Student_Grade)
VALUES ('4489219', 'SOCI353', '04', 'A');

/*MINORS*/
INSERT INTO MINORS (Student_CWID, Dept_Num)
VALUES('4489219', '43289');

INSERT INTO MINORS (Student_CWID, Dept_Num)
VALUES('7714506', '23661');

INSERT INTO MINORS (Student_CWID, Dept_Num)
VALUES('2345012', '43289');
