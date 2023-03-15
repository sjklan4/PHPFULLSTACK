-- 같은 사번에 있는 각 급여에 관한 정보를 구한다.

SELECT *
FROM salaries
WHERE emp_no IN (SELECT emp_no
						FROM employees
						WHERE emp_no = 479216);