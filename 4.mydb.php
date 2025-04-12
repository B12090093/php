<?php
    # mysqli_connect() 建立資料庫連結
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

    # mysqli_query() 從資料庫查詢資料
    $result = mysqli_query($conn, "select * from user");

    # mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
    $row = mysqli_fetch_array($result);
    echo $row["id"] . " " . $row["pwd"] . "<br>"; 

    $row = mysqli_fetch_array($result);
    echo $row["id"] . " " . $row["pwd"];
?>

<!-- 總結：這段程式連接遠端資料庫 immust，查詢 user 資料表，並顯示前兩筆使用者的 id 和密碼。適合做資料庫基本讀取的練習。 -->
