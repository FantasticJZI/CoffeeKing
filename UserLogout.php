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
        session_unset();
        session_destroy();
        header("Location: ProjectMenuPrac.html");
        exit();
    ?>
</body>
<footer>
    <b>Copyright @ 2024 烘豆王 All Right Reserve.</b>
</footer>
</html>