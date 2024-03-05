<?php
    session_start();
    //echo session_id();
    //echo "<pre>";
    //print_r($_SESSION);
    //echo "</pre>";
    //echo "<pre>";
    //print_r($_POST);
    //echo "</pre>";
    //echo "<pre>";
    //print_r($_GET);
    //echo "</pre>";

    try{
        $string = "Database=webdevteste-database;Server=webdevteste-server.mysql.database.azure.com;User Id=odwwrnpfog;Password=38WKIU1WS86544F7$";
        $server = new PDO($string,"root","");
    }catch(PDOException $e){
        if($_SERVER['HTTP_HOST'] == "localhost"){
            die($e->getMessage());
        }else{
            die("Não foi possivel connectar com a Base de Dados");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login">

    <link rel="stylesheet" href="assets/css/cssl.css">

    <link rel="apple-touch-icon" sizes="180x180" href="assets/icons/apple-touch-icon_180x180.png">
    <link rel="apple-touch-icon" sizes="167x167" href="assets/icons/apple-touch-icon_167x167.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/icons/apple-touch-icon_152x152.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/icons/apple-touch-icon_120x120.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/icons/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="194x194" href="assets/icons/favicon-194x194.png">
    <link rel="mask-icon" href="assets/icons/safari-pinned-tab.svg" color="#0c5647">

    <link rel="manifest" href="manifest.json">


    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#b19859">

    <title>DS-BackOffice</title>
</head>
<body>
    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>

    <div class="loginbox">
        <img src="assets/img/DS_Gold.png" class="avatar" alt="Company Logo">
        <h1>Decisões & Soluções</h1>
        <br>
        <?php
        // echo session_id();
        // echo "<pre>";
        // print_r($_SESSION);
        // echo "</pre>";
        // echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";
        // echo "<pre>";
        // print_r($_GET);
        // echo "</pre>";
        ?>
        <form action="" method="post" name="Login" id="Login">
        <p>Username</p>
        <input type="text" name="name" value="" placeholder="Enter Username">
        <p>Password</p>
        <input type="password" name="password" value="" placeholder="Enter Password">
        <input type="submit" name="login" value="Login" onclick="t();return false;">
        <a href="#">Lost your password?</a>
        </form>
    </div>
    <script>
        function t(){
            window.location.replace("dashboard.php");
        }
    </script>
</body>
</html>