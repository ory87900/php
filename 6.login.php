<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;
     }
   } 
   <!-- php之 if
   if ($login==TRUE)
     echo "登入成功";
  else
     echo "帳號/密碼 錯誤";
?>
<!-- $conn=mysqli_connect(hotstname, username, password, dbname) (dename資料庫連接之名)-->
<!-- $result=mysqli_query(已連結之資料庫, 查詢之資料 -->
