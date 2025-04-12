<?php
    session_start(); // 啟動 session，開始儲存 session 資料

    // 檢查是否已有計數器，如果沒有則設定為 1，否則加 1
    if (!isset($_SESSION["counter"]))
        $_SESSION["counter"] = 1;
    else
        $_SESSION["counter"]++;

    // 顯示目前的 counter 值
    echo "counter=" . $_SESSION["counter"];
    
    // 顯示重置 counter 的連結
    echo "<br><a href=9.reset_counter.php>重置counter</a>";
?>

<!-- 總結：這段程式利用 session 實現網頁計數功能，每次重新載入頁面 counter 就會加 1，並提供一個連結可跳轉到 9.reset_counter.php 來重置計數器。 -->
