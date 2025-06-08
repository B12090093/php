<?php
    error_reporting(0); // 關閉錯誤訊息顯示（方便正式環境避免洩漏錯誤細節）
    session_start(); // 啟用 session 功能

    if (!$_SESSION["id"]) { // 檢查是否已登入（session 裡沒有 id 就跳轉）
        echo "please login first"; // 顯示登入提示
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 3 秒後跳轉回登入頁
    }
    else {
        // 已登入，開始處理資料
        
        // 與資料庫建立連線
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 從資料庫查詢指定 bid 的佈告資料
        $result = mysqli_query($conn, "select * from bulletin where bid={$_GET["bid"]}");
        $row = mysqli_fetch_array($result); // 取出查詢結果

        // 根據佈告的類型設定對應的 radio button 為 checked
        $checked1 = "";
        $checked2 = "";
        $checked3 = "";
        if ($row['type'] == 1)
            $checked1 = "checked";
        if ($row['type'] == 2)
            $checked2 = "checked";
        if ($row['type'] == 3)
            $checked3 = "checked";

        // 顯示修改佈告的 HTML 表單，並將原資料填入表單欄位中
        echo "
        <html>
            <head><title>新增佈告</title></head> <!-- 雖然是編輯頁，但標題寫的是新增佈告 -->
            <body>
                <form method=post action=27.bulletin_edit.php> <!-- 表單送出至 27.bulletin_edit.php -->
                    佈告編號：{$row['bid']}<input type=hidden name=bid value={$row['bid']}><br>
                    標    題：<input type=text name=title value={$row['title']}><br>
                    內    容：<br><textarea name=content rows=20 cols=20>{$row['content']}</textarea><br>
                    佈告類型：
                        <input type=radio name=type value=1 {$checked1}>系上公告 
                        <input type=radio name=type value=2 {$checked2}>獲獎資訊
                        <input type=radio name=type value=3 {$checked3}>徵才資訊<br>
                    發布時間：<input type=date name=time value={$row['time']}><p></p>
                    <input type=submit value=修改佈告> <!-- 送出修改 -->
                    <input type=reset value=清除> <!-- 重設表單 -->
                </form>
            </body>
        </html>
        ";
    }
?>
