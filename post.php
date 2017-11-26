<html>
    <head> 
        <meta charset="UTF-8" />
        <title> Sử Dụng Post </title>
    </head>
    <body>
        <div id="box" >
            <div class="Tieude">Bài tập thực hành </div>
            <div class="noidung">
                <form action="post.php" method="post">
                    Họ Và Tên : <input type="text" name ="hoTen"/> <br /> <br />
                    Địa Chỉ : <input type="text" name="diaChi"/> <br /> <br />
                    <input type="submit" name="hienThi" value=" Hiển Thị" /> 
                </form>  
            	<?php
 	            if(isset($_POST['hienThi']))
                {
                    echo ("<br> Họ Tên : ".$_POST['hoTen']);
                    echo ("<br> Địa Chỉ : ".$_POST['diaChi']);
                }
                ?>
           </div>
        </div>
    </body>
</html>