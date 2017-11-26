<html>
    <head> 
        <meta charset="UTF-8" />
        <title> Sử dụng include và require </title>
        //include chèn có lỗi biên dịch vẫn tiếp tục và thông báo báo lỗi
        //require chèn có lỗi biên dịch dừng lại và thông báo lỗi
    </head>
    <body>
    	<?php
        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
 	             echo ("<br> Họ Tên : ".$_GET['hoTen']);
                 echo ("<br> Địa Chỉ : ".$_GET['diaChi']);
            
                ?>  
        <div id="box" >
            <div class="Tieude">Bài tập thực hành </div>
            <div class="noidung">
                <form action="post.php" method="get">
                    Họ Và Tên : <input type="text" name ="hoTen" /> <br /> <br />
                    Địa Chỉ : <input type="text" name="diaChi" /> <br /> <br />
                    <input type="submit" name="hienThi" value=" Hiển Thị" /> 
                </form>  
            
           </div>
        </div>
        <?php 
            include('filechuaco.php');
            echo "Xin chào"; 
            // khi biên dịch vẫn echo dù lỗi do filechuaco không tồn tại
            require('Webcome.php');//chèn file webcome vào.
            echo ("Hồng Phúc");
            require('chuaco.php');//lỗi và dừng lại thông báo lỗi 
            echo ("Xấu");
            // 
        ?>
    </body>
</html>