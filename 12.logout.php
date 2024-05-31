<?php
    session_start();
    unset($_SESSION["id"]);#解除登入id
    echo "登出成功....";
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";#跳轉回到登錄畫面

?>
