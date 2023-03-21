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


						
SELECT em.emp_no , concat(em.first_name,' ',em.last_name) fullname, dp.dept_no
FROM employees em
INNER JOIN dept_emp dp
ON em.emp_no = dp.emp_no
WHERE em.emp_no = 10001	;
				
SELECT em.emp_no, CONCAT(em.first_name,' ',em.last_name) fullname, dp.dept_no, dm.dept_name
FROM employees em
INNER JOIN dept_emp dp
ON em.emp_no =  dp.emp_no
INNER JOIN departments dm
ON dp.dept_no = dm.dept_no
WHERE em.emp_no = 10001;

						
-- 전체 사원중에서 현재 재직중인  사번이 30,000번 이하의 사원중에서 급여가 100,000원 이상의 사원들중  상위 5위 안에 있는 사원은 성과급을 준다, 
-- 성과급을 받을수 있는 사람을 뽑으라(급여가 동일일시 그사람도 성과급 해당).

SELECT * 
FROM (
		SELECT emp.emp_no, sal.to_date, CONCAT(emp.first_name, ' ', emp.last_name)fullname, RANK() over (ORDER BY sal.salary DESC) rn
		FROM employees emp
		INNER JOIN salaries sal
		ON emp.emp_no = sal.emp_no
		WHERE sal.to_date >= NOW()) RNK
	WHERE RNK.rn <= 5 ;



