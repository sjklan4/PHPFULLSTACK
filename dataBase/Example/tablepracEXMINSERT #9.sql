INSERT INTO test_tbl(
	MEM_NO
	,MEM_NAME 
	,MEM_AGE 
	,MEM_SEX 
	,MEM_SIGNIN_DATE 
	,MEM_SIGNOUT_DATE 
)

VALUE (
			4
			,'박상준'
			,34
			,'M'
			,NOW()
			,NULL
);

SELECT *
FROM test_tbl; 

DELETE FROM test_tbl
WHERE MEM_NO = 1;

ROLLBACK;

TRUNCATE TABLE test_tbl;