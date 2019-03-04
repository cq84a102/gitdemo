<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="utf-8"/>
<title>CH2 2-2 PHP</title>
</head>
<body>
<?php
//預定常數  //底線有兩條__
print "類別名稱：".__CLASS__."<br/>"; //顯示預定常數__CLASS__             //類別名稱
print "檔案所在目錄：".__DIR__."<br/>"; //顯示預定常數__DIR__             //檔案所在目錄
print "函數名稱：".__FUNCTION__."<br/>"; //顯示預定常數__FUNCTION__       //函數名稱
print "完整路徑：".__FILE__."<br/>"; //顯示預定常數__FILE__               //檔案名稱(完整路徑)
print "檔案目前的行數：".__LINE__."<br/>"; //顯示預定常數__LINE__         //檔案目前的行數
print "方法名稱：".__METHOD__."<br/>"; //顯示預定常數__METHOD__           //方法名稱
print "命名空間名稱：".__NAMESPACE__."<br/><br/>"; //顯示預定常數__NAMESPACE__ //命名空間名稱


//常數宣告
define("PI",3.1415926); //定義數值常數PI
define("AREA","面積");  //定義字串常數AREA
//使用常數計算圓面積
print "圓半徑12的".AREA.": ".PI*12*12 ."<br/>"; //連接字串的"."要距離計算數字空一格
print "圓半徑30的".AREA.": ".PI*30*30 ."<br/>";
?>
</body>
</html>