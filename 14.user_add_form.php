<html>
    <head><title>新增使用者</title></head> <!-- 網頁標題設定 -->
    <body>
<?php        
    error_reporting(0); // 關閉錯誤訊息顯示（不建議於開發時使用）
    session_start(); // 啟動 PHP Session，用於存取登入狀態

    if (!$_SESSION["id"]) { // 如果尚未登入（Session 中沒有 id）
        echo "請登入帳號"; // 顯示提示訊息
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 3 秒後跳轉到登入頁面
    }
    else {  // 如果已登入
        echo "
            <form action=15.user_add.php method=post> <!-- 表單送出至 15.user_add.php，使用 POST 方法 -->
                帳號：<input type=text name=id><br> <!-- 使用者輸入帳號欄位 -->
                密碼：<input type=text name=pwd><p></p> <!-- 使用者輸入密碼欄位 -->
                <input type=submit value=新增> <input type=reset value=清除> <!-- 新增與清除按鈕 -->
            </form>
        ";
    }
?>
    </body>
</html>
