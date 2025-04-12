<?php
    error_reporting(0); // 關閉錯誤訊息顯示

    // 建立資料庫連線
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

    // 查詢 bulletin 資料表中的所有資料
    $result = mysqli_query($conn, "select * from bulletin");

    // 顯示表格標題列
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";

    // 逐筆輸出每一筆資料為表格列
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr><td>";
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

    // 結束表格
    echo "</table>";
?>

<!-- 總結：這段程式會連線到資料庫，從 bulletin 資料表抓取所有資料，並以 HTML 表格格式顯示出每一筆佈告的編號、類別、標題、內容與時間。適合用來展示資料清單。 -->
