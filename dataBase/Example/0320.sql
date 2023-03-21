-- 2. auto_increment 생성
CREATE TABLE test_member (
	mem_no		INT(11) PRIMARY KEY AUTO_INCREMENT
	,mem_name	VARCHAR(50)
);


ALTER TABLE test_member MODIFY mem_no INT(11) AUTO_INCREMENT;

ALTER TABLE test_member AUTO_INCREMENT=10;

INSERT INTO test_member(mem_name)
VALUES('박상준');
INSERT INTo test_member(mem_name)
VALUES('박지연');

TRUNCATE TABLE test_member;

DELETE FROM test_member;

DROP TABLE test_member;


SELECT *
FROM test_member;

-- Index 확인
SHOW INDEX FROM employees;

SELECT *FROM employees WHERE last_name = 'Swan';

-- INDEX 생성(on 테이블 (컬럼1, 컬럼2, 컬럼3  .....)) - 보조인덱스...
CREATE INDEX idx_employees_last_name ON employees(last_name);

-- INDEX 제거
DROP INDEX idx_employees_last_name ON employees;	


1. 회원 정보 테이블
 회원번호, 아이디, 이름, 주소
 2. 주문 리스트 테이블
  주문번호, 회원번호, 상품 번호, 배송상태
3. 상품 리스트 테이블
 상품번호, 상품가격, 상품명
 
4. 포인트 테이블
 회원번호, 포인트





