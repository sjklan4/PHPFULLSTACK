1. 커서(Cursor) 란?
	행의 집합을 한 행씩 처리하기 위한 방식
- 프로시저 안에서 커서 선언후에 루프 값을 실행하는 순서로 기동-

2. 커서의 구조
	DELIMITER $$
	CREATE PROCEDURE test()
	BEGIN
	DECLARE sal INT;
	DECLARE sum_sal INT;
	DECLARE cur_sal INT;
	DECLARE end_row BOOLEAN DEFAULT FALSE;
	
	-- 커서 선언
	DECLARE cur_sal CURSOR FOR
		SELECT salary FROM salaries WHERE emp_no = 10001;
	
	-- 행이 끝이면 end_row에 true 대입
	DECLARE CONTINUE HANDLER FOR NOT FOUND
		SET end_row = TRUE;
	-- end_row(변수 말고는 수정 할 값 없음)
	-- 커서 오픈
	OPEN cur_sal;
	
	-- 루프 시작
	cursor_loop: LOOP
		-- 
		FETCH cur_sal INTO sal;

		-- 행이 긑이면 루프 종료
		IF end_row THEN
			LEAVE cursor_loop;
		END IF;
		
		SET sum_sal = sum_sal + sal;
	END LOOP cursor_loop;
	
	SELECT sum_sal;
	END $$
	DELIMITER;
