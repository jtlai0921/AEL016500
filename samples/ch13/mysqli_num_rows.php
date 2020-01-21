<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>取得執行 SELECT 陳述式時，被影響的記錄及欄位數目。</title>
  </head>
  <body>
    <?php
      require_once("dbtools.inc.php");
			
      $link = create_connection();
      $sql = "SELECT * FROM price WHERE category = '主機板'";
      $result = execute_sql($link, "product", $sql);
			
      echo "category = 「主機板」 的記錄有 " . mysqli_num_rows($result) . " 筆";
      echo "，包含 " . mysqli_num_fields($result) . " 個欄位。";
			
      mysqli_close($link);
    ?> 
  </body>
</html>