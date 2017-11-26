<html>
    <head> 
        <meta charset="UTF-8" />
        <title> Sử Dụng get </title>
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
    </body>
</html>
// lưu thông tin lên URL không bảo mật tốt 