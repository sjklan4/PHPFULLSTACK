CREATE TABLE employees1 (
	emp_no INT(5)
	,brith_date DATE NOT NULL
	,first_name VARCHAR(14) NOT NULL
	,last_name VARCHAR(14)	NOT NULL 
	,gender ENUM('M','F')
	,hire_date DATE
	,CONSTRAINT PK_employees1_emp_no PRIMARY KEY(emp_no));
	
	
CREATE TABLE salaries1(
	   emp_no INT(11)
		,salary INT(11)
		,from_date DATE NOT NULL
		,to_date DATE NOT NULL 
	,CONSTRAINT FK_salaries1_emp_no FOREIGN KEY(emp_no) REFERENCES employees1(emp_no)
	,CONSTRAINT PK_salaries1_from_date PRIMARY KEY(emp_no, from_date)
	);
 CREATE INDEX emp_no on salaries1 (emp_no);

CREATE TABLE titles1(
		emp_no INT(11)
		,title VARCHAR(50)
		,from_date DATE
		,to_date DATE
	,CONSTRAINT PK_titles1_from_date PRIMARY KEY(emp_no, from_date, title)
	,CONSTRAINT FK_titles1_emp_no FOREIGN KEY(emp_no) REFERENCES employees1(emp_no));
CREATE INDEX emp_no on titles1 (emp_no);	
	
	
CREATE TABLE dept_emp1 (
		emp_no INT(11)
		,dept_no CHAR(4)
		,from_date DATE
		,to_date DATE	
	,CONSTRAINT PK_dept_emp1_emp_no PRIMARY KEY(emp_no, dept_no)
	,CONSTRAINT FK_dept_emp1_emp_no FOREIGN KEY(emp_no) REFERENCES employees1(emp_no));


CREATE TABLE dept_manager1 (
			emp_no INT(11)
			,dept_no CHAR(4)
			,from_date DATE
			,to_date DATE
	,CONSTRAINT PK_dept_manager1_emp_no PRIMARY KEY(emp_no, dept_no)
	,CONSTRAINT FK_dept_manager1_emp_no FOREIGN KEY(emp_no) REFERENCES employees1(emp_no));

CREATE TABLE departments1
		dept_no CHAR(4)
		dept_name VAHCHAR(40)
	
	

	
	
	
	
INSERT INTO salaries1(
	    emp_no 
		,salary INT(11)
		,from_date DATE NOT NULL
		,to_date DATE NOT NULL 
)

VALUE (
			1
			, 19900606
			,'Sang Joon'
			,'Park'
			,'M'
			,NOW()

);	
	
	
	SELECT * FROM employees1 ;