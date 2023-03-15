-- 4번 --
UPDATE dept_emp
SET dept_no='d009'
WHERE emp_no = 500000 or emp_no = 500001;


-- 5번 ----
DELETE FROM employees
WHERE emp_no = 500001;


-- 6번 --
UPDATE dept_manager
SET to_date= NOW()
WHERE emp_no = 111939;



INSERT INTO dept_manager(
			dept_no
			,emp_no
			,from_date
			,to_date
)

VALUES 
(
	'd009'
	,500000
	,NOW()
	,DATE(99991231)
);




-- 8번 ---
SELECT employees.emp_no, employees.first_name
FROM employees
JOIN salaries ON employees.emp_no = salaries.emp_no
WHERE salary = (SELECT MAX(salary) FROM salaries);

SELECT employees.emp_no, employees.first_name
FROM employees
JOIN salaries ON employees.emp_no = salaries.emp_no
WHERE salary = (SELECT MIN(salary) FROM salaries);

SELECT employees.emp_no, first_name, last_name
FROM employees
JOIN salaries ON employees.emp_no = salaries.emp_no
WHERE salary = (SELECT MAX(salary) FROM salaries)
	OR salary = (SELECT MIN(salary) FROM salaries);


SELECT emp_no,first_name, last_name
FROM employees
WHERE emp_no IN(		
					SELECT emp_no
					FROM salaries
					WHERE salary = (SELECT MAX(salary) FROM salaries)
					OR    salary = (SELECT MIN(salary) FROM salaries));



SELECT emp_no,first_name, last_name
FROM employees
WHERE emp_no = (SELECT emp_no FROM salaries ORDER BY salary LIMIT 1)
	OR	emp_no = (SELECT emp_no FROM salaries ORDER BY salary  DESC LIMIT 1);
				



-- 9번 ---
SELECT avg(salary)
FROM salaries
;


-- 10번----			
SELECT avg(salary)
FROM salaries
WHERE emp_no = 499975 ;
						
