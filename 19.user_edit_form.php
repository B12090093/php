<html>
    <head><title>修改使用者</title></head> <!-- 設定網頁標題為「修改使用者」 -->
    <body>
    <?php
    error_reporting(0); // 關閉錯誤訊息顯示（開發時建議保留以利除錯）
    session_start(); // 啟用 session 功能，用來檢查使用者登入狀態

    if (!$_SESSION["id"]) { // 如果尚未登入
        echo "請登入帳號"; // 顯示提示訊息
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 3 秒後跳轉至登入頁
    }
    else {   
        // 已登入則執行以下動作：

        // 與資料庫建立連線
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 根據網址中提供的 id 查詢對應的使用者資料
        $result = mysqli_query($conn, "select * from user where id='{$_GET['id']}'");

        // 取得查詢結果中的第一筆資料
        $row = mysqli_fetch_array($result);

        // 顯示修改使用者表單，密碼欄位可以修改，帳號欄位不可修改（使用 hidden 傳遞帳號值）
        echo "
        <form method=post action=20.user_edit.php> <!-- 表單資料會送往 20.user_edit.php 處理 -->
            <input type=hidden name=id value={$row['id']}> <!-- 隱藏欄位：帳號（不可修改，但仍需送出） -->
            帳號：{$row['id']}<br> <!-- 顯示帳號（只讀） -->
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p> <!-- 可修改密碼 -->
            <input type=submit value=修改> <!-- 送出按鈕 -->
        </form>
        ";
    }
    ?>
    </body>
</html>
