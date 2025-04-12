<?php
    session_start(); // 啟動 session，開始儲存 session 資料

    unset($_SESSION["counter"]); // 清除 session 中的 "counter" 變數

    echo "counter重置成功...."; // 顯示重置成功訊息

    // 2 秒後自動跳轉回 8.counter.php 頁面
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";
?>

<!-- 總結：這段程式會清除 session 中的 "counter" 變數，顯示重置成功訊息後，會在 2 秒鐘後自動跳轉回 8.counter.php 頁面，讓使用者看到更新後的結果。 -->
