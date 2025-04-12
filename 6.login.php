<?php
   # mysqli_connect() 建立資料庫連結
   $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

   # mysqli_query() 從資料庫查詢資料
   $result = mysqli_query($conn, "select * from user");

   # 登入狀態預設為 FALSE
   $login = FALSE;

   # mysqli_fetch_array()：逐筆比對帳號與密碼
   while ($row = mysqli_fetch_array($result)) {
     if (($_POST["id"] == $row["id"]) && ($_POST["pwd"] == $row["pwd"])) {
       $login = TRUE;
     }
   } 

   # 判斷是否登入成功
   if ($login == TRUE)
     echo "登入成功";
   else
     echo "帳號/密碼 錯誤";
?>

<!-- 總結：這段程式從 user 資料表中逐筆比對帳號與密碼，若有符合的紀錄則顯示登入成功，否則顯示錯誤訊息。是實作登入驗證邏輯的基礎範例。 -->
