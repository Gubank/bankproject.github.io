<html lang="en">
    <head>
        <title>ตู้เกษตร</title>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1">
        <link rel = "stylesheet" href = "bulma/css/bulma.css">
        <link rel = "stylesheet" href = "style.css">
        <link rel = "stylesheet" href = "style2.css">
    </head>
    <body style="font-family:Verdana;color:#aaaaaa;">
        <section id ="container-menu">
            <div id="logo-image"><php>&nbsp&nbsp</php>logo-ตู้เกษตร</div>
                <ul class ="menu-right">
                    <a href="index.html"><li>HOME</li></a>
                    <a href="report.html"><li>REPORT</li></a>
                </ul>
            </div>
        </section>
        <style>
        @media only screen and (max-width:620px) {
            /* For mobile phones: */
            .menu, .main, .right {
             width:100%;
            }
        }
        </style>
    <div>
        <div class="menu">
            <div class="menuitem"> <a href="Main1.php" ><li>เปิด - ปิดน้ำ</li></a> </div><br>
            <div class="menuitem"> <a href="Main2.php"  ><li>ตั้งเวลารดน้ำ</li></a> </div><br>
            <div class="menuitem"> <a href="Main3.php"  ><li>เปิด - ปิดไฟ</li></a> </div><br>
            <div class="menuitem"> <a href="report.html" ><li>อุณหภูมิและความชื้น</li></a> </div>
        </div>
        <div class="main">
            <br>
            <!-- <center><b> TESTING PROGRAM </b> -->
            <!--<iframe height="200px" width="200px" name="iframe_a" frameborder="0" border="0" cellspacing="0"> 
            </iframe> -->
            <form action="Main3.php" method="get"> 
    
                <b> เปิดปิดไฟ </b>
            <div class ="container-button"> 
                <input type="submit"  name ="start1" value = "เปิดไฟชั้นที่ 1" > &nbsp &nbsp
                <input type="submit" name ="stop1" value = "ปิดไฟ" >
                <br>
                <input type="submit" name ="start2" value = "เปิดไฟชั้นที่ 2" > &nbsp &nbsp
                <input type="submit" name ="stop2" value = "ปิดไฟ" >
                <br>
                <input type="submit" name ="start3" value = "เปิดไฟชั้นที่ 3" > &nbsp &nbsp
                <input type="submit" name ="stop3" value = "ปิดไฟ" >
            </div>
        </div>
        </div>
        </form>
        <div class="right">
        <div class="menuitem"> <a href="Main1.php" ><li>เปิด - ปิดน้ำ</li></a> </div><br>
            <div class="menuitem"> <a href="Main2.php"  ><li>ตั้งเวลารดน้ำ</li></a> </div><br>
            <div class="menuitem"> <a href="Main3.php"  ><li>เปิด - ปิดไฟ</li></a> </div><br>
            <div class="menuitem"> <a href="report.html" ><li>อุณหภูมิและความชื้น</li></a> </div> 
        </div> 
    </div>
    <div style="background-color:#e5e5e5;text-align:center;padding:10px;margin-top:7px;"> @ www.Kasagcondo.com</div>
    </body>
</html>
<?php
            if(isset($_GET['start1'])) {
                writeToFilestart();
            }
            elseif(isset($_GET['stop1'])) {
                writeToFilestop();
            }

            function writeToFilestart() {
            echo "Click";
            $file = fopen('C:/xampp/htdocs/Project/dataLed1.txt','w+')  or die("Unable to open file!");
            $str = "1";
            fwrite($file,$str);
            fclose($file);
            }

            function writeToFilestop() {
                echo "Click";
                $file = fopen('C:/xampp/htdocs/Project/dataLed1.txt','w+')  or die("Unable to open file!");
                $str = "0";
                fwrite($file,$str);
                fclose($file);
            }
            //LED ชั้นที่ 2
            if(isset($_GET['start2'])) {
                writeToFilestart2();
            }
            elseif(isset($_GET['stop2'])) {
                writeToFilestop2();
            }

            function writeToFilestart2() {
            echo "Click";
            $file2 = fopen('C:/xampp/htdocs/Project/dataLed2.txt','w+')  or die("Unable to open file!");
            $str2 = "1";
            fwrite($file2,$str2);
            fclose($file2);
            }

            function writeToFilestop2() {
                echo "Click";
                $file2 = fopen('C:/xampp/htdocs/Project/dataLed2.txt','w+')  or die("Unable to open file!");
                $str2 = "0";
                fwrite($file2,$str2);
                fclose($file2);
            }
            //LED ชั้นที่ 3
            if(isset($_GET['start3'])) {
                writeToFilestart3();
            }
            elseif(isset($_GET['stop3'])) {
                writeToFilestop3();
            }

            function writeToFilestart3() {
            echo "Click";
            $file3 = fopen('C:/xampp/htdocs/Project/dataLed3.txt','w+')  or die("Unable to open file!");
            $str3 = "1";
            fwrite($file3,$str3);
            fclose($file3);
            }

            function writeToFilestop3() {
                echo "Click";
                $file3 = fopen('C:/xampp/htdocs/Project/dataLed3.txt','w+')  or die("Unable to open file!");
                $str3 = "0";
                fwrite($file3,$str3);
                fclose($file3);
            }

        ?>