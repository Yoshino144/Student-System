<?php
    session_start();
    //echo "sessions:" . $_SESSION['username'];
    if($_SESSION['username']=="" || $_SESSION['username']==" ")
        header("location:../login.php");

    $serve = 'localhost:3306';
    $username = 'root';
    $password = 'root';
    $dbname = 'school';
    $link = mysqli_connect($serve,$username,$password,$dbname);
    mysqli_set_charset($link,'UTF-8');
    $showtime = date("Y-m-d H:i:s");
    $id=$class_name=$number=$password="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = test_input($_POST["id"]);
        $class_name = test_input($_POST["class_name"]);
        $update = 'UPDATE class SET class_name="' . $class_name .'",u_time="' . $showtime .'" where id=' . $id;
        echo $update;
        
        if($id!="")
        {
            $res=mysqli_query($link,$update);
            if($res>0){
                echo "<script>alert('操作成功');</script>";
                header("Location: ../class.php");
            }
            else{
                echo "<script>alert('操作失败');</script>";
                header("Location: ../class.php");
            }
        }
        else{
            echo "<script>alert('操作失败')</script>";
            header("Location: ../class.php");
        }
    }


    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>