<?php
    $Name = $_POST["UserName"];
    switch($_POST["UserSex"])
    {
      case "Male":
        $Sex = "男";
        break;
      case "Female":
        $Sex = "女";
    }
    $School = $_POST["UserSchool"];
    $Interest = $_POST["UserInterest"];
    $Thought = $_POST["UserThought"];
?> 
<!doctype html>
<html>
    <head>
		<meta charset="utf-8">      	
        <title>個人小檔案確認網頁</title>
    </head>
    <body>        
        <p><b><i><?php echo $Name; ?></b></i>，您好！謝謝您填寫個人資料表，您輸入的資料如下：</p>
        <p>性別：<?php echo $Sex; ?></p>
        <p>最高學歷：<?php echo $School; ?></p>
        <p>您喜歡的活動：<?php foreach($Interest as $Value) echo $Value."&nbsp;"; ?></p>
        <p>您對於國片風潮的看法：<?php echo $Thought; ?></p>
    </body> 
</html>