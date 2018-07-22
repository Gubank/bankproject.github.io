<?php 
    
?>
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
            <div class="menuitem"> <a href="report.html" ><li>อุณหภูมิและความชื้น</li></a> 
        </div>
    </div>
        <div class="main">
            <br><br><br>
            <!-- <center><b> TESTING PROGRAM </b> -->
            <div class ="font"><center><b> เปิดปิดน้ำพ้นหมอกอัตโนมัติ </b></div>  
            <form action="Main1.php" method="get"> 
            <div class ="container-button">
                <input type="submit"  name ="start" value = "เปิดน้ำ" > &nbsp &nbsp 
                <input type="submit"  name ="stop" value = "ปิดน้ำ" >        
            </div>
            </form>
        </div>
        </div>
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
            if(isset($_GET['start'])) {
                writeToFilestart();
            }
            elseif(isset($_GET['stop'])) {
                writeToFilestop();
            }

            function writeToFilestart() {
            echo "Click";
            $file = fopen('C:/xampp/htdocs/Project/data1.txt','w+')  or die("Unable to open file!");
            $str = "1";
            fwrite($file,$str);
            fclose($file);
            }

            function writeToFilestop() {
                echo "Click";
                $file = fopen('C:/xampp/htdocs/Project/data1.txt','w+')  or die("Unable to open file!");
                $str = "0";
                fwrite($file,$str);
                fclose($file);
            }

        ?>