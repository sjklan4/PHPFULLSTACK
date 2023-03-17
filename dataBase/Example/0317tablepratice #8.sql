-- 1.  테이블 생성
-- CREATE TABLE 테이블명(
-- 	컬럼 타입(크기) NOT NULL --널값이 들어갈 수 없음
-- 	,컬럼 타입 DEFAULT(값) --초기값 지정
-- 	,CONSTRAIN PK명 PRIMARY KEY(컬럼) --PK설정
-- 	,CONSTRAIN FK명 FOREIGN KEY(컬럼)
-- 		REFERENCE 참조테이블(참조컬럼) [ON DELETE 동작 / ON UPDATE 동작]  -- FK설정
-- 	,CONSTRAIN UNIQUE명 UNIQUE (컬럼) -- UNIQUE설정
-- 	,CONSTRAIN CHECK명 CHECK (조건) -- CHECK설정
--    );

-- varchar 를 이용 해서 가변형 용량을 적용ex> 50일시 50까지의 용량을 사용 하도록(한글은 3bit, 영어는 1bit) 
CREATE TABLE TEST_TBL (
	MEM_no INT(5)
	,MEM_NAME VARCHAR(50) NOT NULL
	,MEM_AGE INT(3) NOT NULL
	,MEM_SEX ENUM('F','M')
	,MEM_SIGNIN_DATE DATETIME() NOT NULL
	,MEM_SIGNOUT_DATE DATETIME()
	,CONSTRAIN PK_EMPLOYEES_MEM_NO PRIMARY KEY(MEM_NO)
);


-- 2. 테이블 변경
-- 	- 컬럼 추가
-- 		ALTER TABLE 테이블명 ADD COLUMN 컬럼 데이터타입;
-- 	- 컬럼의 데이터타입 변경
-- 		ALTER TABLE 테이블명 ALTER COLUMN 컬럼 데이터타입;
-- 	- 컬럼 삭제
-- 		ALTER TABLE 테이블명 DROP COLUMN 컬럼;

-- 3. 테이블 삭제
-- 	DROP TABLE 테이블1 [, 테이블2, 테이블3 ...];

-- 4. 테이블의 데이터 삭제
-- 	TRUNCATE TABLE 테이블;