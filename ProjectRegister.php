<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>註冊</title>
</head>
<header>
    <h2>烘豆王
    <nav><pro>
        <A HREF="ProjectMenuPrac.html"><button><b>主頁</b></button></A>
        <A HREF="ProjectShop.html"><button><b>商店</b></button></A>
        <A HREF="ProjectAboutUs.html"><button><b>關於我們</b></button></A>
        <A HREF="ProjectAccountsPrac.html"><button><b>會員登入</b></button></A>
    </pro></nav>
</header>
<body>
    <?php
        header("Content-Type:text/html; charset=utf-8");
        session_start();

        $acc=trim($_POST['account']);
        $pwd=trim($_POST['password']);
        if (empty($acc) || empty($pwd)) {
            die("and password are required fields.");
        }

        $hashedPassword = password_hash($pwd, PASSWORD_BCRYPT);

        $serverName="TABLET-21HIBIQT\MSSQLSERVER01";
        $connectionInfo=array("Database"=>"CoffeeKing","UID"=>"Yaris","PWD"=>"Fantasticjzi01","CharacterSet" => "UTF-8");
        $conn=sqlsrv_connect($serverName,$connectionInfo);
        if ($conn === false) {
            die(print_r(sqlsrv_errors(), true));
        }    

        $sql="INSERT INTO Users (Account,[Password]) VALUES (?,?)";
        $params = array($acc, $hashedPassword);

        $stmt = sqlsrv_query($conn, $sql, $params);

        if ($stmt === false) {
            die(print_r(sqlsrv_errors(), true));
        } else {
            echo "<main>"."<div class='fade-in'>"."<p1>"."註冊成功!請重新登入"."</p1>"."</div>"."</main>";
        }
    ?>
</body>
<footer>
    <b>Copyright @ 2024 烘豆王 All Right Reserve.</b>
</footer>
</html>