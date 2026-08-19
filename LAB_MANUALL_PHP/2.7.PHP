-- 2.7 Write a PHP code to use MySQL String Manipulation Functions

SELECT LENGTH('PHP Programming') AS Length_Value;

SELECT CONCAT('PHP',' ','Programming') AS Concatenation;

SELECT CONCAT_WS('-','2025','BCA','PHP') AS Concat_WS;

SELECT TRIM(' PHP ');
SELECT LTRIM(' PHP');
SELECT RTRIM('PHP ');

SELECT LPAD('PHP',10,'*');
SELECT RPAD('PHP',10,'*');

SELECT LOCATE('PHP','Welcome To PHP Programming');
