-- 1. 사원의 사원번호, 풀네임, 직책명을 출력해 주세요.
SELECT emp.emp_no, emp.first_name, emp.last_name, tit.title
FROM employees emp
inner JOIN titles tit
ON emp.emp_no = tit.emp_no ;


-- 2. 사원의 사원번호, 성별, 현재 월급을 출력해 주세요
SELECT emp.emp_no, emp.gender, sal.salary, sal.to_date
FROM employees emp
inner JOIN salaries sal
ON emp.emp_no = sal.emp_no ;
WHERE salaries.date(to_date) = DATE(99990101) ;


-- 3. '10010' 사원의 풀네임, 과거부터 현재까지 월급 이력을 출력해 주세요.
SELECT emp.first_name, emp.last_name, sal.salary, emp.hire_date
FROM employees emp
INNER JOIN salaries sal
ON emp.emp_no = sal.emp_no
WHERE emp.emp_no = 10010;



-- 4.사원의 사원번호, 풀네임, 소속부서명을 출력
SELECT emp.emp_no, emp.first_name, emp.last_name, dep.dept_name
FROM employees emp
INNER JOIN dept_emp dmp
ON emp.emp_no = dmp.emp_no
INNER JOIN departments dep
ON dep.dept_no = dmp.dept_no;






-- 5. 현재 월급의 상위 10위까지 사원의 사번, 풀네임, 월급을 출력해 주세요
SELECT *
FROM (
	SELECT emp.emp_no
		, emp.first_name
		, emp.last_name
		, sal.salary
		, RANK() over (ORDER BY salary DESC) fullname rn
	FROM employees emp
		inner JOIN salaries sal ON emp.emp_no = sal.emp_no
		where	sal.to_date >= NOW()) a
WHERE a.rn <= 10 ;


SELECT emp_no FROM(	
						SELECT emp_no, salary, RANK() over(ORDER BY salary DESC) RN FROM salaries )RNK
						WHERE RNK.RN <= 10;
			
	
-- 6. 각 부서의 부서장의 부서명, 풀네임 입사일을 출력해 주세요.
SELECT dp.dept_name, emp.first_name, emp.last_name, emp.hire_date
FROM employees emp
INNER JOIN dept_manager dm
ON emp.emp_no = dm.emp_no
INNER JOIN departments dp
ON dm.dept_no = dp.dept_no
GROUP BY dm.dept_no
HAVING count(to_date = 9999-01-01);

-- 7 현재 직책이 staff 인 사원의 현재 전체 평균 월급을 구하라
SELECT title, AVG(sal.salary)
FROM salaries sal
INNER JOIN titles ti
ON sal.emp_no = ti.emp_no
WHERE title = 'Staff' 
AND sal.to_date >= NOW()
AND ti.to_date >= NOW();

-- 8 부서장직을 역임했던 모든 사원이 풀네임과 입사일, 사번, 부서번호를 출력해 주세요.
SELECT emp.emp_no, concat(emp.first_name, ' ', emp.last_name) fullname, emp.hire_date, emp.emp_no, dm.dept_no
FROM employees emp
INNER JOIN dept_manager dm
ON emp.emp_no = dm.emp_no
WHERE dm.to_date != '99990101';


-- 9 현재 각 직급별 평균 월급 중 60000 이상인 직급의 직급명, 평균월급(정수)를 내림차순으로 출력해 주세요.
SELECT ti.title, format(avg(sal.salary),0) avsal
FROM titles ti
INNER JOIN salaries sal
ON ti.emp_no = sal.emp_no
WHERE sal.to_date >= NOW()
GROUP BY ti.title
HAVING avsal >= 60000
ORDER BY avsal DESC;

SELECT ti.title, format(avg(sal.salary),0) avgsal 
FROM titles ti
INNER JOIN salaries sal
ON ti.emp_no = sal.emp_no
WHERE sal.to_date >= NOW()
AND ti.to_date >= NOW()
GROUP BY ti.title HAVING avgsal >= 60000
ORDER BY avgsal DESC
;


SELECT tit.title, TRUNCATE(AVG(salary),0) avg_s
FROM titles tit
	INNER JOIN salaries sal 
	ON sal.emp_no = tit.emp_no
WHERE tit.to_date = DATE(99990101)
AND sal.to_date = DATE(99990101)
GROUP BY tit.title HAVING avg_s >= 60000
ORDER BY avg_s DESC;

-- 10. 성별이 여자인 사원들의 직급별 사원수를 출력해 주세요.

SELECT COUNT(*), ti.title
FROM titles ti
INNER JOIN employees emp
ON ti.emp_no = emp.emp_no
WHERE emp.gender = 'F'
AND ti.to_date >= NOW()
GROUP BY ti.title;


SELECT ti.title, COUNT(*)
FROM employees emp
 INNER JOIN titles ti
 ON emp.emp_no = ti.emp_no
WHERE emp.gender = 'f'
	AND ti.to_date = DATE(99990101)
GROUP BY ti.title;

-- 11. 퇴사한 여직원

SELECT A.gender, COUNT(a.gender) AS cnt
FROM employees a
INNER JOIN( SELECT emp_no FROM titles
				GROUP BY emp_no
				HAVING MAX(to_date) != DATE('9999-01-01')
				)B
				ON a.emp_no = B.emp_no
			GROUP  A.gender;
