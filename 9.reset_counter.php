<?php
    session_start();
    unset($_SESSION["counter"]);
    echo "counter重置成功....";
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";

?>
<!-- unset 銷毀or清除()內的資料 -->
<!-- "<meta http-equiv=REFRESH 重新加載 content = '2  等待2秒後自動跳轉到 url=8.counter.php'>  -->

