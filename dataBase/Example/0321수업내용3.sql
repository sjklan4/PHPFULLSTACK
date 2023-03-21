CREATE TABLE test_text(
	txt_no INt PRIMARY KEY AUTO_INCREMENT
	, F_text VARCHAR(4000)
	, FULLTEXT idx_full_test_text_f_text(f_text));
	

INSERT INTO test_text(F_text) VALUES('동해물과 백두산이 마르고 닳도록하느님이 보우하사 우리나라 만세');
INSERT INTO test_text(F_text) VALUES('무궁화 삼천리 화려 강산 대한사람 대한으로 길이 보전하세');
INSERT INTO test_text(F_text) VALUES('남산 위에 저 소나무 철갑을 두른듯바람서리 불변함은 우리 기상일세');
INSERT INTO test_text(F_text) VALUES('무궁화 삼천리 화려 강산대한사람 대한으로 길이 보전하세');

SELECT * FROM test_text
WHERE MATCH(F_text) AGAINST('동해물과 백두산이 마르고 닳도록하느님이 보우하사 우리나라 만세');