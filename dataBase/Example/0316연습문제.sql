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
SELECT emp.emp_no, emp.first_name, emp.last_name, RANK() over (order by sal.salary DESC) rk
FROM employees emp
inner JOIN salaries sal ON emp.emp_no = sal.emp_no
where	sal.to_date >= NOW() AND rk <=10 ;
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
WHERE title = "Staff" 
HAVING COUNT(ti.to_date = 9999-01-01);


-- 8 부서장직을 역임했던 모든 사원이 풀네임과 입사일, 사번, 부서번호를 출력해 주세요.
SELECT 
FROM 

-- 9 현재 각 직급별 평균 월급 중 60000 이상인 직급의 직급명, 평균월급(정수)를 내림차순으로 출력해 주세요.


