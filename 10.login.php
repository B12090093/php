<?php
   # mysqli_connect() 建立資料庫連結
   $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

   # mysqli_query() 從資料庫查詢資料
   $result = mysqli_query($conn, "select * from user");

   # 登入狀態預設為 FALSE
   $login = FALSE;

   # 逐筆比對帳號與密碼
   while ($row = mysqli_fetch_array($result)) {
     if (($_POST["id"] == $row["id"]) && ($_POST["pwd"] == $row["pwd"])) {
       $login = TRUE;  // 登入成功，設定 $login 為 TRUE
     }
   } 

   # 判斷登入結果
   if ($login == TRUE) {
     session_start();  // 啟動 session
     $_SESSION["id"] = $_POST["id"];  // 儲存使用者 ID 到 session
     echo "登入成功";  // 顯示登入成功訊息
     echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";  // 3 秒後導向公告頁
   }
   else {
     echo "帳號/密碼 錯誤";  // 顯示錯誤訊息
     echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";  // 3 秒後回到登入頁
   }
?>

<!-- 總結：這段程式檢查使用者提供的帳號與密碼是否正確，若正確則建立 session 並跳轉至公告頁；若錯誤則顯示錯誤訊息並跳回登入頁。 -->
