<?php
session_start();
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
        $ming3="select * from student where id=" . $_GET['id'];
        $result3 = mysqli_query($link,$ming3);
        $row = mysqli_fetch_array( $result3 );
        
        $ming = "update student set delete_flag='0' where id=" . $_GET['id'];
        echo "<br>" . $ming;
        
        $result = mysqli_query($link,$ming);
        if($result > 0){
            echo "<script>alert(\"删除成功\");</script>";
            
            
            $showtime = date("Y-m-d H:i:s");
            $ming2='INSERT INTO cz (cz,ct) VALUES(" ' . $_SESSION['username']. ' 删除了 <b>学号:' . $row[ 'student_num' ] . '</b> 学生信息' .' ","' . $showtime . '")';
            echo $ming2;
            $res2=mysqli_query($link,$ming2);
            
        }
        else{
            echo "<script>alert(\"删除失败\");</script>";
        }
        header("Location: ../student.php");
        break;
        
    case 'deleteadmin':
        $ming3="select * from admin where id=" . $_GET['id'];
        $result3 = mysqli_query($link,$ming3);
        $row = mysqli_fetch_array( $result3 );
        
        
        $ming = "update admin set delete_flag='0' where id=" . $_GET['id'];
        echo "<br>" . $ming;
        $result = mysqli_query($link,$ming);
        if($result > 0){
            echo "<script>alert(\"删除成功\");</script>";
            
            
            $showtime = date("Y-m-d H:i:s");
            echo "<script>alert(\"删除成功\");</script>";
            $ming2='INSERT INTO cz (cz,ct) VALUES(" ' . $_SESSION['username']. ' 删除了 <b>账号:' . $row[ 'user_name' ] . '</b> 管理员账户' .' ","' . $showtime . '")';
            echo $ming2;
            $res2=mysqli_query($link,$ming2);
            
        }
        else{
            echo "<script>alert(\"删除失败\");</script>";
        }
        header("Location: ../admin.php");
        break;
        
    case 'deletecollege':
        $ming3="select * from college where id=" . $_GET['id'];
        $result3 = mysqli_query($link,$ming3);
        $row = mysqli_fetch_array( $result3 );
        
        $ming = "update college set delete_flag='0' where id=" . $_GET['id'];
        echo "<br>" . $ming;
        $result = mysqli_query($link,$ming);
        if($result > 0){
            echo "<script>alert(\"删除成功\");</script>";
            
            $showtime = date("Y-m-d H:i:s");
            $ming2='INSERT INTO cz (cz,ct) VALUES(" ' . $_SESSION['username']. ' 删除了 <b>' . $row[ 'college_name' ] . '</b> ' .' ","' . $showtime . '")';
            echo $ming2;
            $res2=mysqli_query($link,$ming2);
        }
        else{
            echo "<script>alert(\"删除失败\");</script>";
        }
        header("Location: ../college.php");
        break;
        
    case 'deletemajor':
        $ming3="select * from major where id=" . $_GET['id'];
        $result3 = mysqli_query($link,$ming3);
        $row = mysqli_fetch_array( $result3 );
        
        $ming = "update major set delete_flag='0' where id=" . $_GET['id'];
        echo "<br>" . $ming;
        $result = mysqli_query($link,$ming);
        if($result > 0){
            echo "<script>alert(\"删除成功\");</script>";
            
            $showtime = date("Y-m-d H:i:s");
            $ming2='INSERT INTO cz (cz,ct) VALUES(" ' . $_SESSION['username']. ' 删除了 <b>' . $row[ 'major_name' ] . '</b> 专业' .' ","' . $showtime . '")';
            echo $ming2;
            $res2=mysqli_query($link,$ming2);
        }
        else{
            echo "<script>alert(\"删除失败\");</script>";
        }
        header("Location: ../major.php");
        break;
        
    case 'deleteclass':
        $ming3="select * from class where id=" . $_GET['id'];
        $result3 = mysqli_query($link,$ming3);
        $row = mysqli_fetch_array( $result3 );
        
        $ming4="select * from major where id=" . $row['major_id'];
        $result4 = mysqli_query($link,$ming4);
        $row4 = mysqli_fetch_array( $result4 );
        
        $ming = "update class set delete_flag='0' where id=" . $_GET['id'];
        echo "<br>" . $ming;
        $result = mysqli_query($link,$ming);
        if($result > 0){
            echo "<script>alert(\"删除成功\");</script>";
            
            $showtime = date("Y-m-d H:i:s");
            $ming2='INSERT INTO cz (cz,ct) VALUES(" ' . $_SESSION['username']. ' 删除了 <b>' . $row4['major_name'] .' '.$row[ 'class_name' ] . '</b> ' .' ","' . $showtime . '")';
            echo $ming2;
            $res2=mysqli_query($link,$ming2);
        }
        else{
            echo "<script>alert(\"删除失败\");</script>";
        }
        header("Location: ../class.php");
        break;
}


?>
