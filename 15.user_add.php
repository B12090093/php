<?php

error_reporting(0); // 關閉錯誤訊息顯示（用於隱藏錯誤，開發時建議打開以便除錯）
session_start(); // 啟動 session，用來檢查使用者是否已登入

if (!$_SESSION["id"]) { // 若 session 中沒有登入的 id，表示尚未登入
    echo "請登入帳號"; // 顯示提示訊息
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 3 秒後跳轉回登入頁面
}
else { // 若已登入

   # mysqli_connect() 建立與資料庫的連線
   $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

   # 建立新增使用者的 SQL 指令
   # insert into 表格名稱(欄位1,欄位2) values(欄位1的值,欄位2的值)
   $sql = "insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')";

   # 若執行 SQL 指令失敗，顯示錯誤訊息
   if (!mysqli_query($conn, $sql)) {
     echo "新增命令錯誤";
   }
   else {
     // 執行成功則顯示成功訊息並在 3 秒後跳轉回使用者列表頁面
     echo "新增使用者成功，三秒鐘後回到網頁";
     echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
   }
}
?>
