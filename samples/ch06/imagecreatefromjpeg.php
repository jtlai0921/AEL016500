<?php
  $im = imagecreatefromjpeg("images/pic1.jpg");
  $textcolor = imagecolorallocate($im, 0, 0, 255);  
    
  //加入文字
  imagestring($im, 20, 380, 350, "Photo By Jean", $textcolor);

  //輸出圖片
  header("Content-type: image/png");
  imagepng($im);
   
  //釋放影像佔用的記憶體
  imagedestroy($im);
?>