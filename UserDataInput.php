<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>烘豆王</title>
</head>
<body>
    <header>
        <h2>烘豆王
        <nav>
            <A HREF="UserDashBoard.html"><button><b>主頁</b></button></A>
            <A HREF="UserShop.html"><button><b>商店</b></button></A>
            <A HREF="UserAboutUs.html"><button><b>關於我們</b></button></A>
            <A HREF="UserDataInput.html"><button><b>數據輸入</b></button></A>
            <A HREF="DataCheck.php"><button><b>數據總覽</b></button></A>
            <A HREF="UserLogout.php"><button><b>登出</b></button></A>
        </nav>
    </header>
    <?php
        session_start();
        header("Content-Type:text/html; charset=utf-8");

        $UserID=$_SESSION['id'];
        $BeanName=trim($_POST['beanName']);
        $batch=trim($_POST['batch']);
        $TotalTime=trim($_POST['TotalTime']);
        $RowBeanTime=trim($_POST['RowBean']);
        $RowBeanTemp=trim($_POST['RowBeanTemp']);
        $FirstCaramelTime=trim($_POST['FirstCaramel']);
        $FirstCaramelTemp=trim($_POST['FirstCaramelTemp']);
        $SecondCaramelTime=trim($_POST['SecondCaramel']);
        $SecondCaramelTemp=trim($_POST['SecondCaramelTemp']);
        $ThirdCaramelTime=trim($_POST['ThirdCaramel']);
        $ThirdCaramelTemp=trim($_POST['ThirdCaramelTemp']);
        $DevelopementTime=trim($_POST['Developement']);
        $DevelopementTemp=trim($_POST['DevelopementTemp']);
        $FirstCrackTime=trim($_POST['FirstCrack']);
        $FirstCrackTemp=trim($_POST['FirstCrackTemp']);
        $SecondCrackTime=trim($_POST['SecondCrack']);
        $SecondCrackTemp=trim($_POST['SecondCrackTemp']);
        $Note=trim($_POST['note']);

        $serverName="TABLET-21HIBIQT\MSSQLSERVER01";
        $connectionInfo=array("Database"=>"CoffeeKing","UID"=>"Yaris","PWD"=>"Fantasticjzi01","CharacterSet" => "UTF-8");
        $conn=sqlsrv_connect($serverName,$connectionInfo);
        if ($conn === false) {
            die(print_r(sqlsrv_errors(), true));
        }    

        $sql="INSERT INTO bakingData (UserID,beanName,Batch,TotalTime,RowBeanTime,RowBeanTemp,FirstCaramelTime,FirstCaramelTemp,SecondCaramelTime,SecondCaramelTemp,ThirdCaramelTime,ThirdCaramelTemp,DevelopementTime,DevelopementTemp,FirstCrackTime,FirstCrackTemp,SecondCrackTime,SecondCrackTemp) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $params = array($UserID,$BeanName,$batch,$TotalTime,$RowBeanTime,$RowBeanTemp,$FirstCaramelTime,$FirstCaramelTemp,$SecondCaramelTime,$SecondCaramelTemp,$ThirdCaramelTime,$ThirdCaramelTemp,$DevelopementTime,$DevelopementTemp,$FirstCrackTime,$FirstCrackTemp,$SecondCrackTime,$SecondCrackTemp);

        $stmt = sqlsrv_query($conn, $sql, $params);

        echo "<main>"."<div class='fade-in'>"."<p1>"."數據輸入成功！"."</p1>"."</div>"."</main>";
    ?>
</body>
<footer>
    <b>Copyright @ 2024 烘豆王 All Right Reserve.</b>
</footer>
</html>