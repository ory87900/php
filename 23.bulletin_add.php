<?php
    error_reporting(0);
    session_start();
    if(!$_SESSION['id']){
        echo "請先登入";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";

    }
    else{
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $sql="insert into bulletin(title,content, type, time)
        values('{$_POST['title']}', '{$_POST['content']}', '{$_POST['type']}', '{$_POST['time']}')";
        if (!mysqli_query($conn, $sql)){
            echo "新增失敗";#{$_POST['SQL 資料表內之表格對應名稱']}
        }else{
            echo "新增資料成功";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }
}
?>