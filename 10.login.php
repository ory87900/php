<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");  #("伺服器網址", username, password, dename資料庫連接之名)
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;
     }
     #驗證從資料庫抓取出的id&pwd是否一致, 一致則成功登入, 否則回報 "帳號/密碼 錯誤"
   } 
   if ($login==TRUE) {
    session_start();
    $_SESSION["id"]=$_POST["id"];
    echo "登入成功";
    echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
   }

  else{
    echo "帳號/密碼 錯誤";
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
  }
?>
