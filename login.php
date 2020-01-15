<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>无标题文档</title>
<link href="css/login.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.particleground.js"></script>
    <script type="text/javascript">

    $(document).ready(function(){
        $("#tws_img").hide();
    });
        
    function aa(){
        $(document).ready(function(){
        $("#tws_img").fadeIn(1000);
    });
    };
        
    
    document.addEventListener('DOMContentLoaded', function () {
      particleground(document.getElementById('particles'), {
        dotColor: '#5cbdaa',
        lineColor: '#5cbdaa'
      });
      var intro = document.getElementById('intro');
      intro.style.marginTop = - intro.offsetHeight / 2 + 'px';
    }, false);
    </script>
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
    <div id="container">
        <div id="bg_3"></div>
        <div id="bg_4"></div>
        <div id="bg_text">
            <p id="text" >学生管理系统</p>
        </div>
        <div id="input1">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <input type="text" name="username" placeholder="用户名"><br>
                <input type="text" name="password" placeholder="密码"><br>
                <img id="tws_img" src="img/tws.png">
                <a href="#" id="forget">忘记密码</a><br>
                <input type="submit"><br>
                <?php if ($ad == 1) echo "<script type=text/javascript>aa()</script>" ?>
            </form>
        </div>
        </div>
</body>

</html>