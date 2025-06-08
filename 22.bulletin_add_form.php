<?php
    error_reporting(0); // 關閉錯誤訊息顯示（開發階段建議開啟以利除錯）
    session_start(); // 啟動 session，用來檢查使用者是否已登入

    if (!$_SESSION["id"]) { // 如果 session 裡沒有 id，表示尚未登入
        echo "please login first"; // 顯示提示訊息（此處為英文）
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 3 秒後跳轉到登入頁
    }
    else {
        // 如果已登入，顯示新增佈告的表單頁面
        echo "
        <html>
            <head><title>新增佈告</title></head> <!-- 設定頁面標題為「新增佈告」 -->
            <body>
                <form method=post action=23.bulletin_add.php> <!-- 表單送往 23.bulletin_add.php 處理 -->
                    標    題：<input type=text name=title><br> <!-- 輸入標題 -->
                    內    容：<br><textarea name=content rows=20 cols=20></textarea><br> <!-- 多行文字輸入內容 -->
                    佈告類型：
                        <input type=radio name=type value=1>系上公告 
                        <input type=radio name=type value=2>獲獎資訊
                        <input type=radio name=type value=3>徵才資訊<br> <!-- 單選項目選擇佈告類型 -->
                    發布時間：<input type=date name=time><p></p> <!-- 日期選擇器，輸入發布時間 -->
                    <input type=submit value=新增佈告> <!-- 送出按鈕 -->
                    <input type=reset value=清除> <!-- 重設表單內容 -->
                </form>
            </body>
        </html>
        ";
    }
?>
