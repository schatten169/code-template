USE inventory; -- use database
GO

SELECT CONCAT('public ', tps.dest, ' ', COLUMN_NAME, ' { get; set; }') AS code 
FROM INFORMATION_SCHEMA.COLUMNS c
JOIN (
    SELECT 'char' AS orign, 'string' AS dest UNION ALL
    SELECT 'varchar', 'string' UNION ALL
    SELECT 'nvarchar', 'string' UNION ALL
    SELECT 'text', 'string' UNION ALL
    SELECT 'ntext', 'string' UNION ALL
    SELECT 'datetime', 'DateTime?' UNION ALL
    SELECT 'datetime2', 'DateTime?' UNION ALL
    SELECT 'date', 'DateTime?' UNION ALL
    SELECT 'smalldatetime', 'DateTime?' UNION ALL
    SELECT 'int', 'int' UNION ALL
    SELECT 'bigint', 'long' UNION ALL
    SELECT 'smallint', 'short' UNION ALL
    SELECT 'tinyint', 'byte' UNION ALL
    SELECT 'bit', 'bool' UNION ALL
    SELECT 'float', 'double' UNION ALL
    SELECT 'decimal', 'decimal' UNION ALL
    SELECT 'numeric', 'decimal' UNION ALL
    SELECT 'uniqueidentifier', 'Guid'
) tps ON LOWER(c.DATA_TYPE) = tps.orign
WHERE TABLE_NAME = 'master_barang'  -- table target
ORDER BY c.ORDINAL_POSITION;