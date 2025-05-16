-- # Select data where data input from another table which value is '1,2,3' #
SELECT * FROM user u
WHERE FIND_IN_SET(u.id, (
	SELECT data
    FROM another_table a
));