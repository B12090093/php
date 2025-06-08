<?php

    error_reporting(0); // 關閉錯誤訊息顯示（開發時建議打開，避免錯誤被忽略）
    session_start(); // 啟用 session 功能，用來確認是否已登入

    if (!$_SESSION["id"]) { // 若尚未登入（session 中沒有 id）
        echo "請登入帳號"; // 顯示提示訊息
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 3 秒後跳轉至登入頁
    }
    else {   
        // 已登入，以下開始執行更新密碼的操作

        // 與資料庫建立連線
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 建立更新密碼的 SQL 指令，將指定 id 的密碼欄位更新為表單送來的新密碼
        $sql = "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'";

        // 執行 SQL 指令，判斷是否成功
        if (!mysqli_query($conn, $sql)) {
            echo "修改錯誤"; // 若更新失敗，顯示錯誤訊息
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>"; // 3 秒後跳轉回使用者列表頁面
        } else {
            echo "修改成功，三秒鐘後回到網頁"; // 若成功顯示成功訊息
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>"; // 3 秒後跳轉回使用者列表頁面
        }
    }

?>
