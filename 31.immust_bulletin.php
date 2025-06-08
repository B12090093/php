<html>
    <head>
        <title>明新科技大學資訊管理系</title>
        <meta charset="utf-8">
        <!-- 引入Flexslider樣式 -->
        <link href="https://cdn.bootcss.com/flexslider/2.6.3/flexslider.min.css" rel="stylesheet">
        <!-- 引入jQuery -->
        <script src="https://cdn.bootcss.com/jquery/2.2.2/jquery.min.js"></script>
        <!-- 引入Flexslider的jQuery插件 -->
        <script src="https://cdn.bootcss.com/flexslider/2.6.3/jquery.flexslider-min.js"></script>        
        <script>
            // 頁面載入完成後初始化Flexslider
            $(window).load(function() {
                $('.flexslider').flexslider({
                    animation: "slide",  // 動畫效果為滑動
                    rtl: true            // 從右到左滑動
                });
            });
        </script>
        <style>
            /* 全域樣式，去除外距，字體顏色與置中 */
            *{
                margin:0;
                color:gray;
                text-align:center;
            }
            /* 頂部區塊背景白色 */
            .top{
                 background-color: white;
            }
            /* 頂部區塊容器，用flex排版左右對齊 */
            .top .container{
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding:10px;
            }
            /* 標誌文字大小及字重 */
            .top .logo{
                /*border:1px solid red;*/
                font-size: 35px;
                font-weight: bold;
            }
            /* 標誌圖片設定寬度及垂直置中 */
            .top .logo img{
                width: 100px;
                vertical-align: middle;
            }
            /* 頂部右側導航文字大小與字重 */
            .top .top-nav{
                /*border:1px solid red;*/
                font-size: 25px;
                font-weight: bold;       
            }
            /* 頂部導航超連結去除底線 */
            .top .top-nav a{
                text-decoration: none;
            }
            /* 主導航列背景色及置中 */
            .nav {
                background-color:#333;
                display: flex;
                justify-content: center;
            }
            /* 主導航列清除預設樣式 */
            .nav ul {
                list-style-type: none;  
                margin: 0; 
                padding: 0; 
                overflow: hidden; 
                background-color: #333; 
            }
            /* 主導航項目浮動左側排列 */
            .nav li {
                float: left; 
            }
            /* 主導航超連結樣式 */
            .nav li a {    
                display: block;  
                color: white;  
                text-align: center;  
                padding: 14px 16px;  
                text-decoration: none;  
            }
            /* 主導航滑鼠移入改變背景色 */
            .nav li a:hover {
                background-color: #111; 
            }
            /* 下拉選單滑鼠懸停時顯示內容 */
            .dropdown:hover .dropdown-content {
                display: block;   /*使用block呈現上下排列*/
            }
            /* 下拉選單項目懸停背景顏色 */
            li.dropdown:hover{
                background-color: #333;  /*設定背景顏色*/
            }
            /* 下拉選單內容樣式 */
            .dropdown-content {  
                display: none;               /* 預設不顯示 */
                position: absolute;          /* 絕對定位 */
                background-color: #333;
                min-width: 160px;
                z-index: 1;                  /* 疊放順序 */
            }
            /* 下拉選單裡的連結樣式 */
            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                text-align: left;
            }

            /* 輪播區背景黑色 */
            .slider{
                background-color: black;
            }
            /* 介紹區塊背景線性漸層及內距 */
            .banner{
                background-image: linear-gradient(#ABDCFF,#0396FF);
                padding:30px;
            }
            /* 介紹區標題內距 */
            .banner h1{
                padding: 20px;
            }        
            /* 師資區塊樣式 */
            .faculty {
                display: block;
                justify-content: center;
                background-color:white;
                padding:40px;
            }
            /* 師資標題字型大小與顏色 */
            .faculty h2 {
                font-size: 25px;
                color: rgb(50,51,52);
                padding-bottom:40px;
            }
            /* 師資容器使用flex水平排列並置中 */
            .faculty .container {
                /*border:1px solid red;*/
                display: flex;
                justify-content: space-around;
                align-items: center;
            }
            /* 老師個人區塊設定 */
            .faculty .teacher{
                /*border:1px solid blue;*/
                display:block;
                text-decoration: none;
            }
            /* 老師照片尺寸固定 */
            .faculty .teacher img{
                height: 200px;
                width: 200px;
            }
            /* 老師名字樣式，半透明背景與白字 */
            .faculty .teacher h3{
                color: White;
                background-color: rgba(39,40,34,.500);
                text-align: center;           
            }
            /* 聯絡資訊區 */
            .contact {
                display: block;
                justify-content: center;
                margin-top: 30px;
                margin-bottom: 30px;                
            }
            /* 聯絡標題字體大小與顏色 */
            .contact h2{
                color: rgb(54, 82, 110);
                font-size: 25px;
            }
            /* 聯絡資訊內容使用flex排版 */
            .contact .infos{
                display:flex;
                margin-top: 30px; 
                justify-content: center;
            }
            /* 聯絡資訊左邊文字區塊 */
            .contact .infos .left{
                display:block;
                text-align: left;
                margin-right: 30px;
            }
            /* 左側標題文字設定 */
            .contact .infos .left b{
                display:block;
                text-align: left;
                margin-top: 10px;
                text-decoration: bold;
                color: Gray;
                font-size: 18px;
                line-height: 18px;
            }
            /* 左側文字描述樣式 */
            .contact .infos .left span{
                display:block;
                text-align: left;
                margin-top: 10px;
                color: rgba(39,40,34,0.5);
                font-size: 16px;
                padding-left: 27px;
            }
            /* 右側地圖區塊高度 */
            .contact .infos .right{
                height: 200px;               
            }
            /* iframe地圖寬高與邊框 */
            .contact .infos .right iframe{
                width: 100%;
                height: 100%;
                border: 1px solid rgba(39,40,34,0.50);
            }
            /* 頁尾區塊樣式 */
            .footer{
                display: flex;
                justify-content: center;
                background-color: rgb(25,26,30);
                padding: 30px 0;
            }
            /* 登入視窗樣式，預設隱藏，置中顯示 */
            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                right: 50;
                top: 50;
                width: 20%; /* 寬度 */
                height: 20%; /* 高度 */
                overflow: auto; /* 滾動條 */
                background-color: rgba(255,255,255,0.9); /* 半透明白色背景 */
                padding-top: 50px;
            }
            /* 佈告欄區塊樣式 */
            .bulletin{
                display: block;
                justify-content: center;
                background-color: rgb(255,204,153);
                padding: 30px 0;
            }
            /* 佈告欄標題間距 */
            .bulletin h1{
                padding:10px;
            }
            /* 佈告欄表格樣式 */
            .bulletin table{
                border-collapse:collapse;
                font-family: 微軟正黑體;
                font-size:16px; 
                border:1px solid #000;
            }
            /* 佈告欄表頭樣式 */
            .bulletin table th{
                background-color: #abdcff;
                color: #ffffff;
            }
            /* 佈告欄表格資料儲存格樣式 */
            .bulletin table td{
                background-color: #ffffff;
                color: #0396ff;
            }
        </style>
    </head>
    <body>
        <!-- 頂部區塊，包含LOGO與右側導覽 -->
        <div class="top">
            <div class="container">
                <div class="logo">
                  <img src="https://github.com/shhuangmust/html/raw/111-1/IMMUST_LOGO.JPG">
                  明新科技大學資訊管理系
                </div>
                <div class="top-nav">
                  <!-- 兩個靜態連結 -->
                  <a href=>明新科大</a>
                  <a href=>明新管理學院</a>
                  <!---點擊此標籤會跳出登入畫面-->
                  <label onclick="document.getElementById('login').style.display='block'">登入</label>
                  <!-- 登入畫面（隱藏的模態視窗） -->
                  <div id="login" class="modal">
                    <span onclick="document.getElementById('login').style.display='none'">&times; 管理系統登入</span>
                    <form method=post action="10.login.php">
                        帳號：<input type=text name="id"><br />
                        密碼：<input type=password name="pwd"><p></p>
                        <input type=submit value="登入"> <input type=reset value="清除">
                    </form>
                  </div>  
                  <!---登入畫面結束-->
                </div>
              </div>
        </div>
        <!-- 主導覽列 -->
        <div class="nav">   
            <ul>
                <li><a href="#home">首頁</a></li>
                <li><a href="#introduction">系所簡介</a></li>
                <li  class="dropdown"><a href="#faculty">成員簡介</a>
                    <!-- 下拉選單 -->
                    <div class="dropdown-content">
                        <a href="#faculty">黃老師</a>
                        <a href="#faculty">李老師</a>
                        <a href="#faculty">應老師</a>
                    </div>                       
                </li>
                <li><a href="#about">相關資訊</a></li>
            </ul>
        </div>
        <!-- 輪播區 -->
        <div class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider1.JPG" /></li>
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider2.JPG" /></li>
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider3.JPG" /></li>
                </ul>
            </div>
        </div>
        <!-- 佈告欄 -->
        <div class="bulletin">
           <h1>最新公告</h1>
            <?php
                // 連接遠端MySQL資料庫
                $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
                // 查詢公告資料表所有資料
                $result=mysqli_query($conn, "select * from bulletin");
                // 輸出公告表格標題列
                echo "<table border=2><tr><th>佈告編號</th><th>佈告類別</th><th>標題</th><th>佈告內容</th><th>發佈時間</th></tr>";
                // 迴圈輸出每一筆公告資料
                while ($row=mysqli_fetch_array($result)){
                    echo "<tr><td>";
                    echo $row["bid"];
                    echo "</td><td>";
                    // 根據type欄位判斷公告類別文字
                    if ($row["type"]==1) echo "系上公告";  
                    if ($row["type"]==2) echo "獲獎資訊"; 
                    if ($row["type"]==3) echo "徵才資訊"; 
                    echo "</td><td>"; 
                    echo $row["title"];
                    echo "</td><td>";
                    echo $row["content"]; 
                    echo "</td><td>";
                    echo $row["time"];
                    echo "</td></tr>";
                }
                echo "</table>";
            ?>
        </div>
        <!-- 系所簡介區塊 -->
        <div class="banner" id="introduction">
            <h1>系所簡介</h1>
            <h1>歷年教育部評鑑皆榮獲一等</h1>
            <h1>明新科技大學資訊管理系</h1>
            <h1>全國私立科大第一資管系</h1>
        </div>
        <!-- 師資介紹區 -->
        <div class="faculty" id="faculty">
            <h2>師資介紹</h2>
            <div class="container">
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty1.jpg" />
                    <h3>黃老師</h3>
                </a>
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty2.jpg" />
                    <h3>李老師</h3>
                </a>
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty3.jpg" />
                    <h3>應老師</h3>
                </a>                    
            </div>
        </div>
        <!-- 聯絡資訊區 -->
        <div class="contact" id="about">
            <h2>聯絡資訊</h2>
            <div class="infos">
                <div class="left">
                    <b>地址</b>
                    <span>新竹縣竹北市光明六路東一段101號</span>
                    <b>電話</b>
                    <span>03-530-2616</span>
                    <b>傳真</b>
                    <span>03-530-2500</span>
                </div>
                <div class="right">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3615.972975078551!2d121.01096221449243!3d24.83037478404612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34681ec904d8608d%3A0xb9a17b34cfe949ef!2z6YCa5Lit5bCP6KGX5Y2A5biC6ZmQ6Iqx5aSp5a2m5bGx5LqM5aSn6KW_5rWc5rS7!5e0!3m2!1szh-TW!2stw!4v1640982048150!5m2!1szh-TW!2stw" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <!-- 頁尾 -->
        <div class="footer">
            <span>明新科技大學資訊管理系 2021</span>
        </div>
    </body>
</html>
