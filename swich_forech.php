<html>
    <head> 
        <meta charset="UTF-8" />
        <title> sử dụng lệch switch ... case </title>
    </head>
    <body>
    	<?php
        $thu = 4;
        switch($thu)
        {
    	case 1 : echo ("Thứ hai");break;
        case 2 : echo ("Thứ ba");break;
        case 3 : echo ("Thứ tư");break;
        case 4 : echo ("Thứ năm");break;
        case 5 : echo ("Thứ sáu");break;
        case 6 : echo ("Thứ bảy");break;
        case 7 : echo ("chủ nhật");break;
        default : echo ("Không có ngày này");break;
        }
        //khai báo mảng tuần tự {0},{1},{2}
        $mang = array("b","a","c");
        //lấy giá trị 
        echo ("<br> lấy chữ a :  " .$mang[1]);
        $mang = array ("an","hieu");
        foreach($mang as $chu)
        {
        echo("<br> " .$chu);
        }
    	?>
    </body>
</html>