<?php
    error_reporting(0); // 關閉錯誤訊息顯示
    session_start(); // 啟動 session，開始儲存 session 資料

    // 檢查是否已登入，若無登入則跳轉到登入頁
    if (!$_SESSION["id"]) {
        echo "請先登入";  // 顯示提示訊息
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";  // 3 秒後跳轉至登入頁
    }
    else {
        // 顯示登入後的歡迎訊息及其他操作選項
        echo "歡迎, " . $_SESSION["id"] . "[<a href=12.logout.php>登出</a>] [<a href=18.user.php>管理使用者</a>] [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>";

        // 連接資料庫
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 查詢所有佈告資料
        $result = mysqli_query($conn, "select * from bulletin");

        // 顯示資料庫中所有佈告的表格
        echo "<table border=2><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
        
        // 逐筆顯示佈告資料
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr><td><a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a> 
            <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>";
            echo $row["bid"];
            echo "</td><td>";
            echo $row["type"];
            echo "</td><td>"; 
            echo $row["title"];
            echo "</td><td>";
            echo $row["content"]; 
            echo "</td><td>";
            echo $row["time"];
            echo "</td></tr>";
        }
        echo "</table>";
    }
?>

<!-- 總結：這段程式會檢查使用者是否登入，若未登入則跳轉至登入頁，若已登入則顯示歡迎訊息和資料庫中的佈告資料。每筆佈告資料都有修改和刪除連結。 -->
