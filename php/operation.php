<?php

//连接数据库
$serve = 'localhost:3306';
$username = 'root';
$password = 'root';
$dbname = 'school';
$link = mysqli_connect($serve,$username,$password,$dbname);
mysqli_set_charset($link,'UTF-8');
//$ming='select * from student';
//$result = mysqli_query($link,$ming);
echo "1";
echo $_GET['operation'];
echo $_GET['id'];
//获取get值
switch( $_GET['operation'] ){
    case 'delete':
        $ming = "update student set delete_flag='0' where id=" . $_GET['id'];
        echo "<br>" . $ming;
        $result = mysqli_query($link,$ming);
        if($result > 0){
            echo "<script>alert(\"删除成功\");</script>";
        }
        else{
            echo "<script>alert(\"删除失败\");</script>";
        }
        header("Location: ../student.php");
        break;
        
    case 'deleteadmin':
        $ming = 'DELETE FROM admin WHERE id = ' . $_GET['id'];
        echo "<br>" . $ming;
        $result = mysqli_query($link,$ming);
        if($result > 0){
            echo "<script>alert(\"删除成功\");</script>";
        }
        else{
            echo "<script>alert(\"删除失败\");</script>";
        }
        header("Location: ../admin.php");
        break;
}


?>