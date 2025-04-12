<?php
    session_start(); // 啟動 session，開始儲存 session 資料

    unset($_SESSION["id"]); // 清除 session 中的 "id" 變數，達到登出目的

    echo "登出成功...."; // 顯示登出成功訊息

    // 3 秒後自動跳轉回登入頁面
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
?>

<!-- 總結：這段程式會清除 session 中的 "id" 變數來登出使用者，顯示登出成功訊息後，會在 3 秒鐘後自動跳轉回登入頁面。 -->
