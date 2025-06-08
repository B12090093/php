<?php
    error_reporting(0); // 關閉錯誤訊息顯示（開發階段建議打開方便除錯）
    session_start(); // 啟用 session 功能，確認使用者是否已登入

    if (!$_SESSION["id"]) { // 如果尚未登入（session 裡沒有 id）
        echo "please login first"; // 顯示提示訊息
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 3 秒後自動跳轉至登入頁
    }
    else {
        // 已登入，開始處理新增佈告

        // 與遠端資料庫建立連線
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 組合 SQL 語法，將表單送來的標題、內容、類型、時間插入 bulletin 資料表
        $sql = "insert into bulletin(title, content, type, time) 
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')";

        // 執行 SQL 指令，檢查是否成功
        if (!mysqli_query($conn, $sql)) {
            echo "新增命令錯誤"; // 插入失敗時顯示錯誤訊息
        }
        else {
            echo "新增佈告成功，三秒鐘後回到網頁"; // 成功訊息
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>"; // 3 秒後返回佈告欄列表頁
        }
    }
?>
