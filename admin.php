<!doctype html>

<?php
session_start();
//echo "sessions:" . $_SESSION['username'];
if ($_SESSION['username'] == "" || $_SESSION['username'] == " ")
    header("location:login.php");
$serve = 'localhost:3306';
$username = 'root';
$password = 'root';
$dbname = 'school';
$link = mysqli_connect($serve, $username, $password, $dbname);
mysqli_set_charset($link, 'UTF-8');
$ming = 'select * from admin';
$result = mysqli_query($link, $ming);
?>

<html>

<head>
    <meta charset="utf-8">
    <title>管理员管理</title>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <link href="css/admin.css" rel="stylesheet" type="text/css">
    <link href="css/base.css" rel="stylesheet" type="text/css">
    <script>
        function deleteadmin_js(id) {
            var rr = confirm("是否确认删除" + id);
            if (rr == true) {
                window.location.href = 'http://localhost/pro/php/operation.php?operation=deleteadmin&id=' + id;
            }
        }

        function modifyadmin_js(id) {
            window.location.href = 'http://localhost/pro/php/modifyadmin.php?operation=modifyadmin&id=' + id;
        }
    </script>
</head>

<body>

    <div id="head">
        <img id="img_head" src="img/lie.png">
        <div id="logo">
            <p id="logo-text" style="color: #f35758">学生管理系统</p>
        </div>
        <p id="user-text" style="color: #f35758"><?php echo "用户:" . $_SESSION['username']; ?> </p>
        <a id="exit-text" href="login.php" style="color: #f35758">退出</a>
    </div>
    <div id="nav">
        <p id="text_nav">导航</p>
        <div id="menu">
            <a id="menu-u0" href="index.php">
                <img id="img-u0" src="img/u0-0.png"></img>
                <p id="text-u0">首 页</p>
            </a>
            <a id="menu-u1" href="admin.php">
                <img id="img-u1" src="img/u1.png"></img>
                <p id="text-u1">管理员管理</p>
            </a>
            <a id="menu-u2" href="college.php">
                <img id="img-u2" src="img/u2-2.png"></img>
                <p id="text-u2">学院管理</p>
            </a>
            <a id="menu-u3" href="major.php">
                <img id="img-u3" src="img/u3-3.png"></img>
                <p id="text-u3">专业管理</p>
            </a>
            <a id="menu-u4" href="class.php">
                <img id="img-u4" src="img/u4-4.png"></img>
                <p id="text-u4">班级管理</p>
            </a>
            <a id="menu-u5" href="student.php">
                <img id="img-u5" src="img/u5-5.png"></img>
                <p id="text-u5">学生信息管理</p>
            </a>
        </div>
    </div>
    <div id="con">
        <table>
            <tr>
                <th colspan="7" id="tda">
                    <p>管理员管理</p>
                    <a href="php/insertadmin.php">
                        <img src="img/add.png" id="add-img"></a>
                </th>
            </tr>
            <tr>
                <th>序号</th>
                <th>用户名</th>
                <th>账号</th>
                <th>密码</th>
                <th>创建时间</th>
                <th>最后登录时间</th>
                <th>操作</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "   <td>" . $row['id'] . "</td>";
                echo "   <td>" . $row['user_name'] . "</td>";
                echo "   <td>" . $row['number'] . "</td>";
                echo "   <td>" . $row['password'] . "</td>";
                echo "   <td>" . $row['c_time'] . "</td>";
                echo "   <td>" . $row['last_time'] . "</td>";
                echo '<td><a href ="javascript:void(0);" onclick ="modifyadmin_js(' . $row['id'] . ')">
                        <img id="modify-img" src="img/modify.png"></a>
                        <a href ="javascript:void(0);" onclick ="deleteadmin_js(' . $row['id'] . ')">
                        <img id="delete-img" src="img/delete.png"></a>
                        </td>';
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>