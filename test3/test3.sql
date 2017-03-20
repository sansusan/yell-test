SELECT t.type, t.value FROM data AS t
 INNER JOIN (SELECT type, MAX(date) mdate FROM data GROUP BY type) tt ON t.type = tt.type AND t.date = tt.mdate


