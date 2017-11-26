<html>
    <head> 
        <meta charset="UTF-8" />
        <title> </title>
         <style style="text/css" >
        #box 
        {
            width:800px;
            color:blue;
            margin: auto;
            background:DeepSkyBlue;
        }</style>
    </head>
    <body>
    <div id="box">
        <div class="noiDung">
            <form method="post">
    	<?php
    	if(isset($_COOKIE['tk'])&& isset ($_COOKIE['mk']))
                {
                echo("tài khoản : " .$_COOKIE['tk']);
                echo("mật khẩu : " .$_COOKIE['mk']);
                }
            else
                {
                echo (" không tồn tại cookie ? ");
                }
    	?>
        </div>
        </div>
    </body>
</html>