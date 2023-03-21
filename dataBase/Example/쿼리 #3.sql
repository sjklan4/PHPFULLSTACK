-- UPDATE의 기본구조
-- UPDATE 테이블명
-- SET ( 컬럼1 = 값1, 컬럼2 = 값2 )
-- WHERE 조건
-- ** 추가설명 : 조건을 적지않을 경우 모든 레코드가 수정됩니다.
--				실수를 방지하기위해 WHERE(여러가지 적용시 or 를 사용)절을 먼저 작성하고 SET절을 작성하는 것을 추천드립니다


UPDATE departments
SET dept_name = '1000' 
WHERE dept_no = 'd001';

-- 사원 정보에 내 정보 업데이트(변경) 시키기 
UPDATE employees
SET emp_no = 500000
 , birth_date = DATE(19900606)
 , first_name='Sangjoon'
 , last_name='Park'
 , gender = 'M'
 WHERE emp_no = 500001;
 

 SELECT *
 FROM employees
 WHERE emp_no = 500001;
 