CREATE VIEW TEST_VIEW
   AS
		SELECT ti.title, COUNT(*)
		FROM employees emp
		 INNER JOIN titles ti
		 ON emp.emp_no = ti.emp_no
		WHERE emp.gender = 'f'
			AND ti.to_date = DATE(99990101)
		GROUP BY ti.title; 

DROP VIEW TEST_VIEW;

SELECT * FROM test_view;


-- 	** [OR REPLACE] : 기존의 뷰가 있을 경우 덮어쓰기를 합니다. **


-- 사원의 사원번호, 풀네임, 현재 소속부서명을 출력
CREATE VIEW TEST_VIEW2
   AS
		SELECT emp.emp_no, CONCAT(emp.first_name, ' ', emp.last_name)fullname, dm.dept_name
		FROM employees emp
		INNER JOIN dept_emp dp
		ON dp.emp_no = emp.emp_no
		INNER JOIN departments dm
		ON dp.dept_no = dm.dept_no
		WHERE dp.to_date >= NOW();



SELECT * FROM TEST_VIEW;
SELECT * FROM TEST_VIEW2;


