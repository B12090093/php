<html>
    <head><title>使用者管理</title></head> <!-- 設定網頁標題為「使用者管理」 -->
    <body>
    <?php
        error_reporting(0); // 關閉錯誤訊息顯示（開發階段建議打開）
        session_start(); // 啟用 session 功能，用來檢查登入狀態

        if (!$_SESSION["id"]) { // 如果沒有登入，顯示提示訊息並跳轉到登入頁面
            echo "請登入帳號";
            echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 3 秒後跳轉
        }
        else { // 如果已登入，顯示使用者管理介面
            echo "<h1>使用者管理</h1>
                [<a href=14.user_add_form.php>新增使用者</a>] [<a href=11.bulletin.php>回佈告欄列表</a>]<br>
                <table border=1>
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>";
            
            // 建立與資料庫的連線
            $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

            // 執行查詢所有使用者的 SQL 指令
            $result = mysqli_query($conn, "select * from user");

            // 用 while 迴圈逐筆列出每個使用者帳號與密碼
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>
                        <td>
                            <a href=19.user_edit_form.php?id={$row['id']}>修改</a> || 
                            <a href=17.user_delete.php?id={$row['id']}>刪除</a>
                        </td>
                        <td>{$row['id']}</td>
                        <td>{$row['pwd']}</td>
                      </tr>";
            }

            echo "</table>"; // 結束表格
        }
    ?> 
    </body>
</html>
