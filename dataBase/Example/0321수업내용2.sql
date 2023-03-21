DELIMITER $$
	CREATE TRIGGER test_update
	AFTER UPDATE -- 실행시기와 작업 선택
	ON departments -- 트리거를 부착할 테이블
	FOR EACH ROW -- 아래 나올 조건에 해당하는 모든 row에 적용
	BEGIN
		UPDATE departments
		SET dept_name = 'trigger test'
		WHERE dept_no = 'd010';
	END $$
	DELIMITER ;
	
	-- 해석 :  departments에 업데이트가 일어난후에 지정한 조건의 타이틀이 지정한 것으로 다 바뀌는 작용을 한다.
	
SHOW TRIGGERS;