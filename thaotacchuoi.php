<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <style type="text/css">
            table
            {
                background:#000 ;
                width: 500px;
                margin: auto;
            }
            .tieude
            {
                background: #3883cc;
                line-height: 36px;
                text-align :center;
                color: aqua;
                font-weight:bold;
            }
            .a
            {
                Wight 380px:;
                height: 30px;
                border:1px solid azure  ;
                margin: auto;
            }
            table input[type ="aubmit"]
            {
                background: antiquewhite;
                border: none;
                padding: 8px;
                font-weight: bold;
            }
            .kq
            {
                background: aquamarine;
                color: black;
                height: 30px;
                width: 370px;
            }
        </style>
    </head>
    <body>
        <?php
        if (isset($_POST['submit']))
        {
            if(isset($_POST['chuoi']) && isset($_POST['tugoc']) && isset($_POST['tuthay']))
            {
                $chuoi=$_POST['chuoi'];
                $tugoc=$_POST['tugoc'];
                $tuthay=$_POST['tuthay'];
                $chuoi_kq =str_replace($tugoc,$tuthay,$chuoi);
            }
        }
    ?>
        <form name ="frmthaythe" method ="POST">
            <table>
                <tr>
                    <td colspan="2" class="tieude"> Thay thế từ trong chuỗi </td>
                </tr>
                <tr>
                    <td>Chuỗi :</td>
                    <td>
                            <input type="text" class="a" name="chuoi" value=""/>
<input>
                    </td>
                </tr>
                <tr>
                    <td>Từ Gốc :</td>
                    <td>
                            <input type="text="a" name="tugoc" value="<?php echo array_key_exists('tugoc',$_POST) ? $_POST('tugoc') : "" ;?>"/>
                    </td>
                </tr>
                <tr>
                    <td>Từ thay thế :</td>
                    <td>
                            <input type="text" class="a" name="tuthay" value="<?php echo $_POST('tuthay')?>"
                    </td>
                </tr>
                <tr><td colspan="2" align="center">
                            <input type=:ubmit name="submit" value="Thay thế"/>
                        </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                            <input class="kq" type="text" name="kq" value=""/>

                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
