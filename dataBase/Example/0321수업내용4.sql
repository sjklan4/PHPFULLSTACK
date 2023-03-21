12. 사원의 사번, 생일, 풀네임(형식 : "성 이름"), 성별을 출력해 주세요.;


SELECT emp.emp_no, emp.birth_date, concat(emp.last_name,' ', emp.first_name) fullname, emp.gender 
FROM employees emp;



13. 가장 많은 월급을 출력해 주세요.;

SELECT * FROM(
SELECT sal.emp_no, sal.salary, RANK() over(ORDER BY sal.salary DESC) topsalay
FROM salaries sal) rn
WHERE rn.topsalay = 1
;

14. 전체 월급의 평균을 구해주세요.;

SELECT AVG(salary)
FROM salaries;



15. 새로운 사원의 정보를 employees TABLE 등록해 주세요.(모든 컬럼 등록 필수, 값은 자유);

INSERT INTO employees(
						emp_no
					,birth_date
					,first_name
					,last_name
					,gender
					,hire_date
					)
VALUE (
		500005
		,19900606
		,'sang joon'
		, 'kim'
		, 'M'
		,20170701		
);
SELECT * FROM employees WHERE emp_no = 500005;

16. [15]번에서 등록한 사원의 성을 "test", 생일을 "1990년 3월 1일"로 변경해 주세요.;

UPDATE employees emp
SET emp.last_name= 'test', emp.birth_date = 19900301
WHERE emp_no = 500005;



17. [15]번에서 등록한 사원을 삭제해 주세요.;

DELETE from employees 
WHERE emp_no = 500005;



18. 사번 10001 사원의 생일과 현재 직급을 출력해 주세요.;

SELECT emp.birth_date, ti.title
FROM employees emp
INNER JOIN titles ti
ON emp.emp_no = ti.emp_no
WHERE emp.emp_no = 10001;


19. 아래 정보에 맞게 테이블을 작성해 주세요.
	- 열번호, PK, 데이터타입:숫자
	- 회원번호, UK, 데이터타입:숫자
	- 아이디, NULL불가, 데이터타입:문자열;
	
CREATE TABLE practicetable(
	col_no INT PRIMARY KEY 
	,club_no INT un  NOT NULL 
	,ID VARCHAR(10) NOT NULL
	);

	
	

20. [19]번에서 등록한 테이블의 회원번호에 인덱스를 추가해주세요.;
ALTER TABLE paricticetable MODIFY club_no INDEX ;

21. [19]번에서 등록한 테이블을 삭제해 주세요.;

DROP TABLE praicivetable;