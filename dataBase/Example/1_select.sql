SELECT *
FROM employees
WHERE emp_no = 10001
	OR	emp_no = 10005		
;

-- 사원별 급여 편균이 70,000 이상인 사원의 사번, 이름, 성, 성별을 조회--

SELECT emp_no, first_name, last_name, gender
FROM employees
WHERE emp_no IN( SELECT emp_no
						FROM salaries
						GROUP BY emp_no HAVING AVG(salary)>= 70000
						);
						

					
				
						
 



