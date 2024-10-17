<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>烘豆數據</title>
    <link rel="stylesheet" href="style.css">
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

        $serverName="TABLET-21HIBIQT\MSSQLSERVER01";
        $connectionInfo=array("Database"=>"CoffeeKing","UID"=>"Yaris","PWD"=>"Fantasticjzi01","CharacterSet" => "UTF-8");
        $conn=sqlsrv_connect($serverName,$connectionInfo);
        if ($conn === false) {
            die(print_r(sqlsrv_errors(), true));
        }

        $UserID=$_SESSION['id'];
        $sql="SELECT * FROM bakingData Where UserID = ?";
        $params = array($UserID);
		$stmt = sqlsrv_query($conn, $sql, $params);
		while($row=sqlsrv_fetch_array($stmt))
		{
		 
            echo "<center>"."</br>"."<table border=3px width=50%>".
            "<tr>"."<th>"."豆種:"."</th>"."<td>".$row['beanName']."</td>"."</tr>".
            "<tr>"."<th>"."批次:"."</th>"."<td>".$row['Batch']."</td>"."</tr>".
            "<tr>"."<th>"."總時間:"."</th>"."<td>".$row['TotalTime']."</td>"."</tr>".
            "<tr>"."<th>"."脫水期時長:"."</th>"."<td>".$row['RowBeanTime']."</td>"."</tr>".
            "<tr>"."<th>"."脫水期溫度(°C):"."</th>"."<td>".$row['RowBeanTemp']."</td>"."</tr>".
            "<tr>"."<th>"."第一階段焦糖化時長:"."</th>"."<td>".$row['FirstCaramelTime']."</td>"."</tr>".
            "<tr>"."<th>"."第一階段焦糖化溫度(°C):"."</th>"."<td>".$row['FirstCaramelTemp']."</td>"."</tr>".
            "<tr>"."<th>"."第二階段焦糖化時長:"."</th>"."<td>".$row['SecondCaramelTime']."</td>"."</tr>".
            "<tr>"."<th>"."第二階段焦糖化溫度(°C):"."</th>"."<td>".$row['SecondCaramelTemp']."</td>"."</tr>".
            "<tr>"."<th>"."第三階段焦糖化時長:"."</th>"."<td>".$row['ThirdCaramelTime']."</td>"."</tr>".
            "<tr>"."<th>"."第三階段焦糖化溫度(°C):"."</th>"."<td>".$row['ThirdCaramelTemp']."</td>"."</tr>".
            "<tr>"."<th>"."發展期時長:"."</th>"."<td>".$row['DevelopementTime']."</td>"."</tr>".
            "<tr>"."<th>"."發展期溫度(°C):"."</th>"."<td>".$row['DevelopementTemp']."</td>"."</tr>".
            "<tr>"."<th>"."一爆時間點:"."</th>"."<td>".$row['FirstCrackTime']."</td>"."</tr>".
            "<tr>"."<th>"."一爆溫度(°C):"."</th>"."<td>".$row['FirstCrackTemp']."</td>"."</tr>".
            "<tr>"."<th>"."一爆至連續爆時長:"."</th>"."<td>".$row['SecondCrackTime']."</td>"."</tr>".
            "<tr>"."<th>"."一爆連續溫度(°C):"."</th>"."<td>".$row['SecondCrackTemp']."</td>"."</tr>".
            "<tr>"."<th>"."備註:"."</th>"."<td>".$row['Note']."</td>"."</tr>"."</table>"."</br>"."</center>";
		}
    ?>
</body>
<footer>
    <b>Copyright @ 2024 烘豆王 All Right Reserve.</b>
</footer>
</html>