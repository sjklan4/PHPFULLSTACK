0. JOIN이란?
	두개 이상의 테이블을 묶어서 하나의 결과 집합으로 출력하는 것입니다.
	- 기준이 되는 데이터양이 작을수록 속도가 빠르다-

	
1. INNER JOIN의 구조(교집합 : )
	SELECT 컬럼1, 컬럼2
	FROM 테이블1 INNER JOIN 테이블2
		ON 조인 조건
	[WHERE 검색조건]
ex) 작성시 각 테이블1 뒤에 별계의 이름을 달아서 on 조인의 조건에 별계이름.컬럼 으로 사용 할수 있다.ㅣ


2. OUTER JOIN :
	- 기준이 되는 테이블의 레코드는 조인의 조건에 만족되지 않아도 출력
    (방향기준에 따른 현제 연결 시키려는 데이터 전부를 출력 데이터 없을시 null, 기준방향에 데이터가 없으면 출력 하지 않음)
SELECT 컬럼1, 컬럼2 ...
FROM 테이블1
	[ LEFT | RIGHT | FULL ] OUTER JOIN 테이블2
		ON 조인 조건
WHERE 검색조건;
ex) SELECT dept.dept_no, dept.dept_name, d_m.emp_no
        FROM departments dept
        left OUTER JOIN dept_manager d_m
		ON dept.dept_no=d_m.dept_no;.
        =dept_no컬럼값들, dept_name컬럼값들, emp_no 컬럼 값들 출력
*MariaDB에서는 FUll 을 지원하지 않는다.



3. CROSS JOIN : 
	- 테이블1의 모든 레코드와 테이블2의 모든 레코드를 조인
	- 실무에서 사용되는 경우는 거의 없고, 가끔 테스트용 테이터를 생성하기 위해 사용 될 수도 있습니다.
SELECT 컬럼1, 컬럼2 ...
FROM 테이블1
	CROSS JOIN 테이블2
WHERE 검색조건;


4. SELF JOIN : 자기 자신을 조인
SELECT 컬럼1, 컬럼2 ...
FROM 테이블1
	INNER JOIN 테이블1
WHERE 검색조건;

alter table employees add COLUMN 


5. UNION / UNION ALL : 
	- 두 쿼리의 결과를 합칩니다.
	- UNION은 중복 값을 제거하고 출력하고, UNION ALL은 중복 값도 출력합니다.
SELECT ... FROM ...
UNION
SELECT ... FROM ...

SELECT ... FROM ...
UNION ALL
SELECT ... FROM ...