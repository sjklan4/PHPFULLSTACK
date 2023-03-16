INSERT INTO employees(
					emp_no
					,birth_date
					,first_name
					,last_name
					,gender
					,hire_date
)

VALUES 
(
	500000
	,DATE(19900606)
	,'SangJoon'
	,'Park'
	,'M'
	,NOW()
);

INSERT INTO dept_emp(
					emp_no
					,dept_no
					,from_date
					,to_date
)

VALUES 
(
	500000
	,'d002'
	,DATE(20160701)
	,NOW()
);

INSERT INTO salaries(
					emp_no
					,salary
					,from_date
					,to_date
)

VALUES 
(
	500000
	,77777
	,DATE(20160701)
	,NOW()
);


-- 7번 구문 --
INSERT INTO titles(
					emp_no
					,title
					,from_date
					,to_date
)

VALUES 
(
	500000
	,'Senior Engineer'
	,NOW()
	,NOW()
);



