<?php

    error_reporting(0); // 關閉錯誤訊息顯示
    session_start(); // 啟用 session 功能，驗證登入狀態

    if (!$_SESSION["id"]) { // 如果使用者尚未登入
        echo "請登入帳號"; // 提示登入訊息
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 3 秒後跳轉至登入頁面
    }
    else {   
        // 已登入，開始連接資料庫並更新資料
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); // 連接遠端 MySQL 資料庫

        // 使用 SQL UPDATE 語句更新 bulletin 表中指定 bid 的資料
        // 將表單送來的 title、content、time、type 欄位更新
        if (!mysqli_query($conn, "update bulletin set title='{$_POST['title']}',content='{$_POST['content']}',time='{$_POST['time']}',type={$_POST['type']} where bid='{$_POST['bid']}'")) {
            // 若執行失敗，顯示錯誤訊息
            echo "修改錯誤";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>"; // 3 秒後返回佈告欄列表
        }
        else {
            // 更新成功，顯示成功訊息
            echo "修改成功，三秒鐘後回到佈告欄列表";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>"; // 3 秒後返回佈告欄列表
        }
    }

?>
