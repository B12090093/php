<?php
   # mysqli_connect() 建立資料庫連結
   $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

   # mysqli_query() 從資料庫查詢資料
   $result = mysqli_query($conn, "select * from user");

   # mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   while ($row = mysqli_fetch_array($result)) {
     echo $row["id"] . " " . $row["pwd"] . "<br>";
   } 
?>

<!-- 總結：這段程式會從 user 資料表中讀取所有資料，使用 while 迴圈一筆一筆顯示每位使用者的 id 和密碼。適合用來練習資料庫查詢與迴圈處理。 -->
