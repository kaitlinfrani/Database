/* CREATING TABLES: PROFESSOR, STUDENT, DEPARTMENT, COURSES, SECTIONS, ENROLLMENT RECORD, MINOR, PRE-REQ? */
CREATE TABLE PROFESSOR (
    SSN int(9) NOT NULL, /*NOT NULL means can't accept NULL values*/
    Professor_Name varchar(200) NOT NULL, /*max characters 200*/
    Street_Address varchar(200) NOT NULL,
    City_Address varchar(200) NOT NULL,
    State_Address varchar(200) NOT NULL,
    ZipCode_Address int(5) NOT NULL,
    AreaCode_Phone int(3) NOT NULL,
    Number_Phone int(7) NOT NULL,
    Professor_Sex varchar(1) NOT NULL, /*1 character, M or F*/
    /*might have to replace varchar with ENUM('M', 'F')*/
    Professor_Title varchar(200) NOT NULL,
    Professor_Salary int(10) NOT NULL,
    College_Degrees varchar(200) NOT NULL,
    PRIMARY KEY (SSN) /*able to uniquely identify each record in the table*/
);


CREATE TABLE STUDENT (
    CWID int(20) NOT NULL,
    Student_FName varchar(200) NOT NULL,
    Student_LName varchar(200) NOT NULL,
    Street_Address varchar(200) NOT NULL,
    City_Address varchar(200) NOT NULL,
    State_Address varchar(200) NOT NULL,
    ZipCode_Address int(5) NOT NULL,
    AreaCode_Phone int(3) NOT NULL,
    Number_Phone int(7) NOT NULL,
    Major_Dept varchar(200) NOT NULL,
    PRIMARY KEY (CWID),
    FOREIGN KEY (Major_Dept) REFERENCES DEPARTMENT(Dept_Num)
);

CREATE TABLE DEPARTMENT (
    Dept_Num int(20) NOT NULL,
    Dept_Name varchar(200) NOT NULL,
    Dept_Phone varchar(200) NOT NULL,
    Dept_Office varchar(200) NOT NULL,
    P_SSN int(9) NOT NULL,
    PRIMARY KEY (Dept_Num),
    FOREIGN KEY (P_SSN) REFERENCES PROFESSOR(SSN)
);

/*might need to add pre req key*/
CREATE TABLE COURSE (
    Course_Num varchar(200) NOT NULL,
    Course_Title varchar(200) NOT NULL,
    Course_Textbook varchar(200) NOT NULL,
    Course_Units int(1) NOT NULL,
    Dept_Num int(20) NOT NULL,
    PRIMARY KEY (Course_Num),
    FOREIGN KEY (Dept_Num) REFERENCES DEPARTMENT(Dept_Num)
);

CREATE TABLE COURSE_SECTION (
    Section_Num int(10) NOT NULL,
    Course_Num varchar(200) NOT NULL,
    Classroom varchar(20) NOT NULL,
    Seat_Capacity int(5) NOT NULL,
    Meeting_Days varchar(200) NOT NULL,
    Beg_Time varchar(200), /*Time data type?, can be NULL since it can be a fully online class*/
    End_Time varchar(200),
    P_SSN int(9) NOT NULL,
    PRIMARY KEY (Section_Num, Course_Num),
    FOREIGN KEY (Course_Num) REFERENCES COURSE(Course_Num) ON DELETE CASCADE,
    FOREIGN KEY (P_SSN) REFERENCES PROFESSOR(SSN)
);

CREATE TABLE ENROLLMENT (
    Student_CWID int(20) NOT NULL,
    Course_Num varchar(200) NOT NULL,
    Section_Num int(10) NOT NULL,
    Student_Grade varchar(2) NOT NULL,
    PRIMARY KEY (Student_CWID, Section_Num),
    FOREIGN KEY (Section_Num) REFERENCES COURSE_SECTION(Section_Num),
    FOREIGN KEY (Student_CWID) REFERENCES STUDENT(CWID)
);

CREATE TABLE MINORS (
    Student_CWID int(20) NOT NULL,
    Dept_Num int(20) NOT NULL,
    PRIMARY KEY (Student_CWID, Dept_Num),
    FOREIGN KEY (Student_CWID) REFERENCES STUDENT(CWID),
    FOREIGN KEY (Dept_Num) REFERENCES DEPARTMENT(Dept_Num)
);
