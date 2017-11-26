<?php 
    session_start();
?>
<html>
    <head> 
        <meta charset="UTF-8" />
        <title> </title>
    </head>
    <body>
    	<?php
        if (isset($_SESSION['tk']))
        {
            ?>
          <p>  Xin Chào tài khoản : <?php  echo $_SESSION['tk'];?><br /><a href="session.php"> Quay Lại</a></p>
        <?php 
        }
        ?>
    </body>
</html>