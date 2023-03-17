SELECT CONCAT (last_name,' ', first_name) 
FROM employees
WHERE emp_no = 500000
;

SELECT *
FROM employees
WHERE emp_no = 500000;

SELECT CONCAT_WS('/','a','b','c');

select FORMAT(123456, 2);

SELECT LPAD('503',6,'0');

SELECT concat(upper(LEFT('grandmaster',1)),SUBSTRING('grandmaster',2));

SELECT TRIM(trailing'ef' FROM 'abcdef');

SELECT CEILING(1.1);

SELECT TRUNCATE(1.11235,3);

SELECT NOW();

SELECT DATE(NOW());

SELECT ADDDATE(NOW(), INTERVAL -1 DAY);

SELECT SUBDATE(NOW(), INTERVAL 1 DAY);

SELECT ADDTIME(NOW(), '1:1:1');

SELECT emp_no, RANK() over(ORDER BY salary DESC) r
FROM salaries;


SELECT emp_no, ROW_NUMBER() over(ORDER BY salary ASC), salary
FROM salaries;






SELECT emp.emp_no, demp.dept_no, emp.first_name
FROM employees emp
INNER JOIN dept_emp demp
ON emp.emp_no = demp.emp_no
LIMIT 10;


INSERT INTO departments
VALUES('d010'
,'test'
);
COMMIT;

SELECT *
FROM departments;

SELECT dept.dept_no, dept.dept_name, d_m.emp_no
FROM departments dept
 left OUTER JOIN dept_manager d_m
		ON dept.dept_no=d_m.dept_no; 

ALTER TABLE employees ADD COLUMN sup_no INT(11);

SELECT *
FROM employees emp1
	INNER JOIN employees emp2
	ON emp1.sup_no = emp2.emp_no
	WHERE emp1.emp_no = 10001;
	
	
SELECT * FROM employees WHERE emp_no = 10001 or emp_no = 10005
UNION
SELECT * FROM employees WHERE emp_no = 10005;
