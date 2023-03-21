CREATE DATABASE STUDENTINF DEFAULT CHAstudentinfRACTER SET UTF8;


CREATE TABLE student(
				 ST_ID INT PRIMARY KEY 
				,Birth_day DATE NOT NULL
				,St_name VARCHAR(10) NOT NULL
				,St_add VARCHAR(100) NOT NULL
				,St_call CHAR(11) NOT NULL
				,St_gen ENUM('M','F') NOT NULL
				,St_addate DATE NOT NULL
				,St_grdate DATE NOT NULL
				,St_att ENUM('재학','휴학','졸업','입대') NOT NULL
);

INSERT into student(
				ST_ID 
				,Birth_day
				,St_name 
				,St_add 
				,St_call 
				,St_gen 
				,St_addate 
				,St_grdate 
				,St_att
)

VALUE (
	

)

ALTER TABLE student MODIFY St_call CHAR(11) NOT NULL;

CREATE TABLE GD_Record (
	Sb_no2	INT 
	,ST_ID	INT 
	,Sb_sc	INT NOT null	
	,Sb_rk	INT NOT null	
	,Cm_date	DATE NOT null
	,CONSTRAINT PK_student_ST_ID PRIMARY KEY(ST_ID, Sb_no2)
);



CREATE TABLE Professor_INF (
	Pf_no	INT PRIMARY KEY
	,Pf_name	VARCHAR(20) NOT NULL
	,Pf_birth	DATE NOT NULL
	,Dg_no	INT NOT NULL
	,Pf_email	VARCHAR(100) NOT NULL	
	,Pf_title	VARCHAR(20) NOT NULL	
	,Rdr_no	VARCHAR(10) NOT NULL	
	,Pf_gen	ENUM('M','F') NOT NULL	
	,Ap_date	DATE NOT NULL	
);



CREATE TABLE Subject_INF (
	Sb_no INT PRIMARY KEY
	,Sb_name VARCHAR(50)	NOT NULL
	,Li_cnt INT NOT NULL
	,Lt_gd VARCHAR(3) NOT NULL
	,Ltr_no VARCHAR(10) NOT NULL
	,Lt_sttime DATETIME NOT NULL
	,Lt_edtime DATETIME NOT NULL
	,Necessary ENUM('전공필수','필수교양','교양','복수전공') NOT NULL 
	,SbTx_no INT	NOT NULL	
	,Pf_no INT	NOT NULL	
);

CREATE TABLE Subject_book (
	SbTx_no	INT 
	,Sbbook_name	VARCHAR(20)
);

ALTER TABLE subject_book MODIFY SbTx_no INT PRIMARY KEY;