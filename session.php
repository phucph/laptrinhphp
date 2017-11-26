<?php
session_start();
$flag = 0;
if (!empty($_POST['tk']) && !empty($_POST['mk']))
{
    $_SESSION['tk']=$_POST['tk'];
    $_SESSION['mk']=$_POST['mk'];
    $flag=1;   
}
 ?>
<html>
    <head> 
        <meta charset="UTF-8" />
        <title> Session và Cookie</title>
        //dùng để lưu dữ liệu tạm thời <br />
          //session lưu trên sever <br />
            //cookie lưu trên client 
        <style style="text/css" >
        #box 
        {
            width:800px;
            color:blue;
            margin: auto;
            background:DeepSkyBlue;
        }
        .submit
        {
            background:black;
                line-height: 35px;
                color: #fff;
                font-weight: bold;
                text-align: center;
        }
        </style>
    </head>
    <body>
        <div id="box">
        <div class="noiDung">
            <form method="post">
            
                <td>Tài khoản : <input type="text" name="tk"/><br/></td>
                <td>Mật khẩu : <input type="password" name="mk" /> <br /></td>
                <input type="submit" class="submit" value="Đăng Nhập" />
            </form>
        </div>
        </div>
    	<?php
            if ($flag = 1)
            {
             ?>
             <table>
                <tr>
                    <td>
                        Thông Tin Khách Hàng : <br />
                        <?php 
                        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                            echo ("Tài khoản :".$_SESSION['tk']);
                            echo ("<br> Mật khẩu :".$_SESSION['mk']);
                            
                        ?>
                        <a href="doc_session.php">Tiếp Tục</a>
                    </td>
                </tr>
             </table>   
             <?php
             }
             ?>
    </body>
</html>