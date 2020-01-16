<!doctype html>
<html lang="en" class="no-js">
<head>
  <meta charset="UTF-8" />
  <title>学生管理系统</title>
  <link rel="stylesheet" href="css/style.css" />
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.particleground.js"></script>
  <script type="text/javascript" src="js/demo.js"></script>
  <script type="text/javascript" src="js/layer/layer.js"></script>
  <script>
        $(document).ready(function () {
            $("#login").hide();
            $("#particles").click(function aa(){
                $("#text-one").fadeOut(700);
                $("#text-two").fadeOut(800);
                $("#text-three").fadeOut(900);
                $("#login").fadeIn(1000);
            });
        });
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
        } else if($username == "" || $password==""){
            
                echo "<script>layer.msg('账号密码不能为空！！！', function(){  $(\"#text-one\").fadeOut(700);
                $(\"#text-two\").fadeOut(800);
                $(\"#text-three\").fadeOut(900);
                $(\"#login\").fadeIn(1000);});</script>";
        }
        
        else  {
            echo "<script>layer.msg('密码错误，请重新登录！！！', function(){  $(\"#text-one\").fadeOut(700);
                $(\"#text-two\").fadeOut(800);
                $(\"#text-three\").fadeOut(900);
                $(\"#login\").fadeIn(1000);});</script>";
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
<div id="particles">
    
    <h1 id="text-one">学生管理系统</h1>
    <h1 id="text-two"></h1>
    <h1 id="text-three">点击任意处登录</h1>
    
    <div id="login">
        <p id="login-text-1">登录</p>
        <p id="login-text-2">Welcome back</p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <p id="nametext">账号</p>
                <input type="text" name="username" placeholder="请输入你的用户名或者账号"><br>
            <p id="pswtext">密码</p>
                <input type="text" name="password" placeholder="请输入密码"></br></br>
                <a href="#" id="forget">忘记密码？</a><br>
                <input type="submit" id="submit"><br>
            </form>
    </div>
</div>
</body>
</html>
