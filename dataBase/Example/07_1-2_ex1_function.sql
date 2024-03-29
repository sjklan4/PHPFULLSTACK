-- 1. 숫자 데이터 형식
-- 	INT : 4byte 정수
-- 	FLOAT : 4byte 실수
-- 	DOUBLE : 8byte 실수
-- 	DECIMAL(전체 자릿수, 소수점이하 자릿수) : 5~17byte 실수, DECIMAL(5, 2)일 경우 XXX.XX 의 형태

-- 2. 문자 데이터 형식
-- 	CHAR(n) : 1~255byte, 고정길이 문자형, 설정한 길이만큼 사용
-- 	VARCHAR(n) : 1~65535byte, 가변길이 문자형, 데이터의 길이만큼만 사용(오라클은 byte 단위)
-- 	LONGTEXT : 최대 4GB크기의 TEXT 데이터 값을 저장
-- 	LONGBLOB : 최대 4GB크기의 BLOB 데이터 값을 저장
-- 				(Binary Large Object의 약자, 주로 이미지, 비디오, 사운드 등과 같은 멀티미디어 객체들을 바이너리 형태로 저장할 때 사용 )
--  ENUM(값1, 값2) : 정해진 값들만 입력 가능하도록 하는 데이터 형식


-- 3. 날짜 및 시간 데이터 형식
-- 	DATE : 3byte 'YYYY-MM-DD'형식
-- 	DATETIME : 8byte 'YYYY-MM-DD HH:MM:SS'형식





-- 1. 데이터 형식 변환 함수
-- 	** 둘다 같은 기능을 합니다. **
-- 	CAST( 값 AS 데이터형식 )
-- 	CONVERT( 값, 데이터형식 ) : 차이점?


-- 2. 제어 흐름 함수
-- 	IF(수식, 참일 경우 결과, 거짓일 경우 결과) : 수식이 참 또는 거짓에 따라 결과를 분기합니다.
-- 	IFNULL(수식1, 수식2) : 수식이 NULL일 경우 수식2를, NULL이 아닐 경우 수식1을 반환합니다.
-- 	NULLIF(수식1, 수식2) : 수식1과 2가 같으면 NULL을 반환하고, 다르면 수식1을 반환합니다.
-- 	CASE ~ WHEN ~ ELSE ~ END : 다중 분기를 위해 사용합니다.
-- 		예)
-- 			CASE 체크하려는 수식1
-- 				WHEN 분기수식1 THEN 결과1
-- 				WHEN 분기수식2 THEN 결과2
-- 				WHEN 분기수식3 THEN 결과3
-- 				ELSE 결과4
-- 			END
	


-- 3. 문자열 함수
-- 	CONCAT(문자열1, 문자열2, ...) : 문자열을 이어줍니다.
-- 	CONCAT_WS(구분자, 문자열1, 문자열2, ...) : 문자열 사이에 구분자를 넣어 이어줍니다.
--  ex) select contcat_ws('/', 'a','b','c');

-- 	FORMAT(숫자, 소숫점 자릿수) : 숫자에 ','를 넣어주고, 소수점 자릿수 까지 표현합니다.
-- 	LEFT(문자열, 길이) : 문자열을 왼쪽부터 길이만큼 잘라 반환합니다.
-- 	RIGHT(문자열, 길이) : 문자열을 오른쪽부터 길이만큼 잘라 반환합니다.
-- 	UPPER(문자열) : 소문자를 대문자로 변경합니다.
-- 	LOWER(문자열) : 대문자를 소문자로 변경합니다.

-- 	LPAD(문자열, 길이, 채울 문자열) : 문자열을 포함해 길이만큼 채울 문자열을 왼쪽에 넣습니다.
-- 	RPAD(문자열, 길이, 채울 문자열) : 문자열을 포함해 길이만큼 채울 문자열을 오른쪽에 넣습니다.
-- 	TRIM(문자열) : 좌우 공백을 제거합니다.
-- 	LTRIM(문자열) : 왼쪽 공백을 제거합니다.
-- 	RTRIM(문자열) : 오른쪽 공백을 제거합니다.
-- 	TRIM(방향 문자열1 FROM 문자열2) : 방향을 지정해 문자열2에서 문자열1을 제거합니다.
-- 		** 방향을 LEADING(좌), BOTH(좌우), TRAILING(우) **
        ex) select trim(TRAILING 'ef' from 'abcdef'); = abcd 
-- 	SUBSTRING(문자열, 시작위치, 길이) : 문자열을 시작위치에서 길이만큼 잘라서 반환합니다.
-- 	SUBSTRING(문자열, 구분자, 횟수) : 왼쪽부터 구분자가 횟수 번째가 나오면 그 이후부터 버립니다.

-- 4. 수학 함수
-- 	CEILING(숫자) : 올림합니다.
-- 	FLOOR(숫자) : 내림합니다.
-- 	ROUND(숫자) : 반올림합니다.
-- 	TRUNCATE(숫자, 정수) : 소수점 기준으로 정수위치 까지 구하고 나머지는 버립니다.(삭제 이력이 남지가 않는데 - 백업 불가)

-- 5. 날짜 및 시간 함수
-- 	NOW() : 현재 날짜/시간을 구합니다. (YYYY-MM-DD HH:MM:DD)
-- 	ADDDATE(날짜1, INTERVAL 날짜2) : 날짜1에서 날짜2를 더한 날짜를 구합니다.
-- 	SUBDATE(날짜1, INTERVAL 날짜2) : 날짜1에서 날짜2를 뺍 날짜를 구합니다.
-- 	ADDTIME(날짜/시간, 시간) : 날짜/시간에서 시간를 더한 날짜/시간를 구합니다.
-- 	SUBTIME(날짜/시간, 시간) : 날짜/시간에서 시간를 뺍 날짜/시간를 구합니다.

-- 6. 순위 함수
-- 	RANK() OVER(ORDER BY 속성명 DESC/ASC) : 순위를 매깁니다.
-- 	ROW_NUMBER() OVER(ORDER BY 속성명 DESC/ASC) : 레코드에 순위를 매깁니다.