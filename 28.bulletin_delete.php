<?php
    error_reporting(0); // 關閉錯誤訊息顯示，避免敏感資訊外洩
    session_start(); // 啟用 session 功能，管理登入狀態

    if (!$_SESSION["id"]) { // 判斷是否有登入 session id
        echo "請登入帳號"; // 若未登入，顯示提示訊息
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 3秒後跳轉回登入頁面
    }
    else {   
        // 使用者已登入，開始執行刪除佈告動作
        
        // 建立與資料庫的連線
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        
        // SQL 刪除語句，根據網址參數 bid 來刪除對應的佈告資料
        $sql = "delete from bulletin where bid='{$_GET["bid"]}'";
        #echo $sql; // 測試用，印出 SQL 語句（目前註解）
        
        // 執行刪除指令
        if (!mysqli_query($conn, $sql)) {
            // 刪除失敗，顯示錯誤訊息
            echo "佈告刪除錯誤";
        } else {
            // 刪除成功，顯示成功訊息
            echo "佈告刪除成功";
        }
        
        // 不論成功與否，3秒後都跳回佈告欄列表頁面
        echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
    }
?>
