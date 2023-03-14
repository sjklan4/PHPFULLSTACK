SELECT *
FROM employees
WHERE	first_name LIKE('___m');

SELECT emp_no, title
FROM titles
WHERE title LIKE('%Engineer%');

---중복값 제거----
SELECT DISTINCT *
FROM dept_emp;

SELECT *
FROM employees
LIMIT 10 offset 4;


SELECT *
FROM employees
ORDER BY emp_no desc 
;


SELECT *
FROM employees
ORDER BY first_name ASC, last_name ASC;


SELECT count(emp_no)
FROM employees
WHERE emp_no = 10001;

SELECT max(salary)
FROM salaries;

SELECT MIN(salary)
FROM salaries;

--GROUP BY 컴럼명[HAVING 집계함수 조건]---- 

SELECT title, COUNT(title)
FROM titles
GROUP BY title HAVING COUNT(title)>= 100000;

---사원별 급여의 평균을 조회----

SELECT emp_no, AVG(salary)
FROM salaries
GROUP BY emp_no;

---사원별 급여의 평균이 30000 ~ 50000인 사원 번호와 평균급여  조회----
SELECT emp_no, AVG(salary)
FROM salaries
GROUP BY emp_no HAVING AVG (salary)>=30000 and AVG (salary)<=50000 ;

SELECT emp_no, AVG(salary) AS avg_s
FROM salaries
GROUP BY emp_no HAVING avg_s>=30000 and avg_s<=50000 ;

SELECT CONCAT (last_name ,'',first_name) AS fullname
FROM employees;


-- 서브쿼리(subQuery): 쿼리 안에 또다른 쿼리가 있는 형태

SELECT * 
FROM dept_manager
WHERE emp_no = ANY  
					(
						SELECT emp_no
						FROM dept_manager
						WHERE dept_no= 'd009'
					);

SELECT * 
FROM dept_manager
WHERE dept_no = ANY  
					(
						SELECT dept_no
						FROM dept_manager
						WHERE emp_no IN (110344, 111035)
					);

-- date 타입의 속성 비교 방법

SELECT *
FROM titles
WHERE emp_no = 10009
AND to_date  >= NOW() ;


-- 현재 직책이 "Senior Engineer" 인 사원의 사원번호와 성을 조회해주세요 
SELECT emp_no, last_name
FROM	employees
WHERE emp_no =ANY ( 
							SELECT emp_no
							FROM titles
							WHERE title = 'Senior Engineer' AND to_date >= NOW()
							);


 





