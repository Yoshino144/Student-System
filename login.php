<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>无标题文档</title>
</head>

<body>

    <?php
    $showtime = date("Y-m-d H:i:s");
    unset($_SESSION['username']);
    $serve = 'localhost:3306';
    $username = 'root';
    $password = 'root';
    $dbname = 'school';
    $link = mysqli_connect($serve, $username, $password, $dbname);
    mysqli_set_charset($link, 'UTF-8');
    $username = $password = "";
    $ad = 2;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = test_input($_POST["username"]);
        $password = test_input($_POST["password"]);
        $ming = 'select * from admin where user_name=\'';
        $ming = $ming . $username . '\' and password=\'' . $password . '\'';
        //echo $ming;
        $result = mysqli_query($link, $ming);
        $row = mysqli_fetch_array($result);
        if ($row['user_name'] == $username && $row['password'] == $password && $username != "") {
            session_start();
            $_SESSION['username'] = $username;
            if ($username != "")
                $ad = 0;
            $sql = "UPDATE admin SET last_time = '" . $showtime . "' WHERE user_name = '" . $username . "' ";
            mysqli_query($link, $sql);
            header("location:index.php");
        } else {
            $ad = 1;
        }
    }
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        用户名<input type="text" name="username">
        密码<input type="text" name="password">
        <input type="submit">
        <?php if ($ad == 1) echo " 密码错误" ?>
    </form>

</body>

</html>