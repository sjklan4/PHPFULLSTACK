SELECT CAST( 132.23 AS DECIMAL(5,2))
FROM DUAL;

SELECT CAST(1234 AS CHAR(4));

SELECT CONVERT(1234, CHAR(4));

SELECT emp_no, if( emp_no = 10001 , first_name , birth_date)
FROM employees;

SELECT IFNULL (' ', 'aa');

SELECT NULLIF(1,1);

-- 	CASE ~ WHEN ~ ELSE ~ END : 다중 분기를 위해 사용합니다.

SELECT 
	emp_no
	,gender
	,case gender
		when 'M' then '남자'
		when 'F' then '여자'
		ELSE ' '
	end
FROM employees LIMIT 10;
		
		
-- 직책이 "Senio Engineer"일 경우는 "관리자" 그외 직책은 "팀원"으로 
   
SELECT emp_no 		
		,case title 
		when 'Senior Engineer' then '관리자'
		ELSE '팀원'
		END AS 'k_title'
FROM titles;

