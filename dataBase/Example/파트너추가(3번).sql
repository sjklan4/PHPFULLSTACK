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
	500001
	,DATE(19900607)
	,'moonthe'
	,'strike'
	,'F'
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
	500001
	,'d001'
	,DATE(20160703)
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
	500001
	,77712
	,DATE(20160702)
	,NOW()
);

INSERT INTO titles(
					emp_no
					,title
					,from_date
					,to_date
)

VALUES 
(
	500001
	,'Staff'
	,DATE(20160702)
	,NOW()
);


