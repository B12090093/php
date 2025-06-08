<?php
    error_reporting(0); // 關閉錯誤訊息顯示（不建議在開發階段使用，避免錯誤訊息被隱藏）
    session_start(); // 啟用 session 功能，用來驗證使用者登入狀態

    if (!$_SESSION["id"]) { // 如果 session 中沒有 id，代表尚未登入
        echo "請登入帳號"; // 顯示提示訊息
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 3 秒後導向登入頁面
    }
    else {   
        // 已登入狀態下執行以下動作：

        // 與遠端 MySQL 資料庫建立連線（使用 db4free.net 提供的服務）
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 組成刪除使用者的 SQL 指令，從網址參數取得要刪除的 id
        $sql = "delete from user where id='{$_GET["id"]}'";

        // echo $sql; // 可用於除錯時查看 SQL 指令內容

        // 執行 SQL 指令，如果失敗則顯示錯誤訊息
        if (!mysqli_query($conn, $sql)) {
            echo "使用者刪除錯誤"; // 刪除失敗
        } else {
            echo "使用者刪除成功"; // 刪除成功
        }

        // 無論成功或失敗，3 秒後返回使用者列表頁面
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
    }
?>
