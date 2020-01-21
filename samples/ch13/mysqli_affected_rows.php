<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>取得執行 UPDATE 陳述式時，被影響的記錄數目。</title>
  </head>
  <body>
    <?php
      require_once("dbtools.inc.php");
			
      $link = create_connection();		
      $sql = "UPDATE price SET url = 'www.asus.com/tw/' WHERE url = 'tw.asus.com'";
      $result = execute_sql($link, "product", $sql);
			
      echo "執行 UPDATE 陳述式時，共有 " . mysqli_affected_rows($link) . " 筆記錄受影響";
			
      mysqli_close($link);
    ?> 
  </body>
</html>