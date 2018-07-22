<?php 
    error_reporting(~E_NOTICE);
    $timevalue1 = 0;
    $timevalue2 = 0;
?>
<html lang="en">
    <head>
        <title>ตู้เกษตร</title>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1">
        <link rel = "stylesheet" href = "bulma/css/bulma.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-material-design.min.css">
        <link rel="stylesheet" href="css/ripples.min.css">
        <link rel = "stylesheet" href = "style.css">
        <link rel = "stylesheet" href = "style2.css">
    </head>
    <body style="font-family:Verdana;color:#aaaaaa;">
        <section id ="container-menu">
            <div id="logo-image"><php>&nbsp&nbsp</php>logo-ตู้เกษตร</div>
                <ul class ="menu-right">
                    <a href="index.html"><li>HOME</li></a>
                    <a href="report.php"><li>REPORT</li></a>
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
            <?php           
                 //$times = $_GET['timevalue1'];
                 //$times2 = $_GET['timevalue2'];
            ?>
            <form action="Main2.php" method="get"> 
            <div> ตั้งเวลารดน้ำ </div>     
            <div class ="container-button"> 
                <input type="text" id="timevalue1" name="timevalue1" size="1" placeholder="0" align="center">
                <input type="text" id="timevalue2" name="timevalue2" size="1" placeholder="0" >
                <div id="dplay"></div>
                <input type="button" onclick="myFunction()" name ="click" value = "เริ่มทำงาน">
                <br>
                <input type="submit"   name ="start1" value = "เปิดน้ำชั้นที่ 1" >
                <input type="submit"   name ="stop1" value = "ปิดน้ำ" >
                <br>
                <input type="submit"   name ="start2" value = "เปิดน้ำชั้นที่ 2" >
                <input type="submit"   name ="stop2" value = "ปิดน้ำ" >
                <input type="submit"   name ="start3" value = "เปิดน้ำชั้นที่ 3" >
                <input type="submit"   name ="stop3" value = "ปิดน้ำ" >
                
            </div>
            <br>
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
<script type ="text/javascript" >
function myFunction() {
      
    let m = document.getElementById('timevalue1').value;
    let s = document.getElementById('timevalue2').value;
    let time = parseInt( m*60 ) + parseInt(s);
    
    let tm = setInterval(function(){
        console.log(time);
        let val = getTime( time );
        document.getElementById('dplay').textContent = 'เวลาที่เหลือ' + val.minute + 'นาที ' + val.sec + 'วินาที';
        //time="เวลาที่เหลือ <font color=red> "+curmin+" </font>นาที กับ <font color=red>"+cursec+" </font>วินาที "
        if(time < 1){
            console.log('End');
            alert('สินสุดการรดน้ำ' );
            clearInterval(tm);
            
        }else{
            time--;
        }
    }, 1000);
    function getTime(a){
        let time = a || 0;
        time = {
            minute : parseInt(time / 60),
            sec : time % 60
        }
        return time;
    }
}

</script>
<?php
            if(isset($_GET['start1'])) {
                writeToFilestart();
            }
            elseif(isset($_GET['stop1'])) {
                writeToFilestop();
            }

            function writeToFilestart() {
           
            $file = fopen('C:/xampp/htdocs/Project/datavalev1.txt','w+')  or die("Unable to open file!");
            $str = "1";
            fwrite($file,$str);
            fclose($file);
            }

            function writeToFilestop() {
                
                $file = fopen('C:/xampp/htdocs/Project/datavalev1.txt','w+')  or die("Unable to open file!");
                $str = "0";
                fwrite($file,$str);
                fclose($file);
            }
            //VALEV ชั้นที่ 2
            if(isset($_GET['start2'])) {
                writeToFilestart2();
            }
            elseif(isset($_GET['stop2'])) {
                writeToFilestop2();
            }

            function writeToFilestart2() {
            
            $file2 = fopen('C:/xampp/htdocs/Project/datavalev2.txt','w+')  or die("Unable to open file!");
            $str2 = "1";
            fwrite($file2,$str2);
            fclose($file2);
            }

            function writeToFilestop2() {
                
                $file2 = fopen('C:/xampp/htdocs/Project/datavalev2.txt','w+')  or die("Unable to open file!");
                $str2 = "0";
                fwrite($file2,$str2);
                fclose($file2);
            }
            //VALEV ชั้นที่ 3
            if(isset($_GET['start3'])) {
                writeToFilestart3();
            }
            elseif(isset($_GET['stop3'])) {
                writeToFilestop3();
            }

            function writeToFilestart3() {
            echo "Click";
            $file = fopen('C:/xampp/htdocs/Project/datavalev3.txt','w+')  or die("Unable to open file!");
            $str = "1";
            fwrite($file,$str);
            fclose($file);
            }

            function writeToFilestop3() {
                echo "Click";
                $file = fopen('C:/xampp/htdocs/Project/datavalev3.txt','w+')  or die("Unable to open file!");
                $str = "0";
                fwrite($file,$str);
                fclose($file);
            }
            
            ////////////////////////////////////////////
              if(isset($_GET['click'])) {
                writeTotimestart(); 
                } 
                function writeTotimestart() {
                    
                    $file4 = fopen('C:/xampp/htdocs/Project/datatime1.txt','w+')  or die("Unable to open file!");
                    $str4 = "1";
                    fwrite($file4,$str4);
                    fclose($file4);
                    }
            
            function writeTotimestop() {
                
               $file5 = fopen('C:/xampp/htdocs/Project/datatime1.txt','w+')  or die("Unable to open file!");
                $str5 = "0";
                fwrite($file5,$str5);
                fclose($file5);
                }
                
    ?>
        
