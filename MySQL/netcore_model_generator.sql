SELECT concat ('public ', tps.dest, ' ', column_name, ' { get; set; }') AS code
FROM information_schema.columns c
JOIN (
    SELECT 'char' AS orign, 'string' AS dest UNION ALL
    SELECT 'varchar', 'string' UNION ALL
    SELECT 'longtext', 'string' UNION ALL
    SELECT 'datetime', 'DateTime?' UNION ALL
    SELECT 'date', 'DateTime?' UNION ALL
    SELECT 'text', 'string' UNION ALL
    SELECT 'int', 'long' UNION ALL
    SELECT 'bit', 'int' UNION ALL
    SELECT 'bigint', 'long' UNION ALL
    SELECT 'double', 'double' UNION ALL
    SELECT 'decimal', 'double' UNION ALL
    SELECT 'timestamp', 'DateTime?' UNION ALL
    SELECT 'tinyint', 'bool'
) tps ON c.data_type LIKE tps.orign
WHERE table_schema = :table_schema
AND table_name = :table_name
ORDER BY c.ordinal_position;