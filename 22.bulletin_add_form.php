<?php
error_reporting(0);
session_start();
if (!$_SESSION["id"]) {
    echo "please login first";
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
}
else{
echo "
<html>
    <head><title>新增佈告</title></head>
    <body>
        <form method=post action=23.bulletin_add.php>
            標題：<input type=text name=title><br>
            內容：<br><textarea name=content rows=15 cols=100></textarea><br>
            佈告類型：<input type=radio name=type value=1 checked>系上公告 
                    <input type=radio name=type value=2>獲獎資訊
                    <input type=radio name=type value=3>徵才資訊<br>
            發布時間：<input type=date name=data name=time><p></p>  
            <input type=submit value=新增佈告> <input type=reset value=清除>


        </form>
    </body>
</html>

";
}#發布類型:radio指單一選項, checkbox 指多選方塊_____value 為從sql之資料表呈現方式 於網路上呈現時,再自行打上對應的中文字,已顯示於網頁上
#發布時間:date 指日期選擇方塊
?>
