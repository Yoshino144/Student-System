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
    $link = mysqli_connect($serve,$username,$password,$dbname);
    mysqli_set_charset($link,'UTF-8');
    $ming='SELECT * FROM college,major,class WHERE class.major_id=major.id and class.college_id=college.id';
    $result = mysqli_query($link,$ming);
?>

<html>

<head>
    <meta charset="utf-8">
    <title>班级管理</title>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <link href="css/class.css" rel="stylesheet" type="text/css">
    <link href="css/base.css" rel="stylesheet" type="text/css">
    <script>
        function delete_class(id){
    var r=confirm("是否确认删除"+id);
    if (r==true)
    {
        window.location.href = 'http://localhost/pro/php/operation.php?operation=deleteclass&id=' + id;
    }
}

function modify_class(id){
    window.location.href = 'http://localhost/pro/php/modifyclass.php?operation=modify&id=' + id;
}
    </script>
</head>

<body>

    <div id="head">
        <img id="img_head" src="img/lie.png">
        <div id="logo">
            <p id="logo-text" style="color: #ce803b">学生管理系统</p>
        </div>
        <p id="user-text" style="color: #ce803b"><?php echo "用户:" . $_SESSION['username']; ?> </p>
        <a id="exit-text" href="login.php" style="color: #ce803b">退出</a>
    </div>
    <div id="nav">
        <p id="text_nav">导航</p>
        <div id="menu">
            <a id="menu-u0" href="index.php">
                <img id="img-u0" src="img/u0-0.png"></img>
                <p id="text-u0">首 页</p>
            </a>
            <a id="menu-u1" href="admin.php">
                <img id="img-u1" src="img/u1-1.png"></img>
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
                <img id="img-u4" src="img/u4.png"></img>
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
                <th colspan="12" id="tda"><p>班级信息</p>
                    <a href="php/insertclass.php">
                        <img src="img/add.png" id="add-img"></a>
                </th>
            </tr>
            <tr>
                <th>序号</th>
                <th>班级名</th>
                <th>专业名</th>
                <th>学院名</th>
                <th>创建时间</th>
                <th>修改时间</th>
                <th>操作</th>
            </tr>
            
            <?php  
                while( $row = mysqli_fetch_array($result) ){
                    if( $row['delete_flag'] ==1){
                        echo '<tr>';
                        echo '<td>' . $row['id'] . '</td>';
                        echo '<td>' . $row['class_name'] . '</td>';
                        echo '<td>' . $row['major_name'] . '</td>';
                        echo '<td>' . $row['college_name'] . '</td>';
                        echo '<td>' . $row['c_time'] . '</td>';
                        echo '<td>' . $row['u_time'] . '</td>';
                        echo '<td><a href ="javascript:void(0);" onclick ="modify_class(' . $row['id']. ')">
                              <img id="modify-img" src="img/modify_a.png"></a>
                              &nbsp;
                              <a href ="javascript:void(0);" onclick ="delete_class(' .$row['id'] . ')">
                              <img id="delete-img" src="img/delete_a.png"></a>
                              </td>';
                        echo '</tr>';
                    }
                }
            ?>
        </table>
    </div>
</body>

</html>