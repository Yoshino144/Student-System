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
    $id=$college_name="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = test_input($_POST["id"]);
        $class_name = test_input($_POST["class_name"]);
        $major_id = test_input($_POST["major_id"]);
        $college_id = test_input($_POST["college_id"]);
        $showtime = date("Y-m-d H:i:s");
        $insert= "INSERT INTO class " .
            "(class_name,major_id,college_id,c_time) ".
            "VALUES ".
            "('$class_name','$major_id','$college_id','$showtime')";
        echo $insert;
        if($class_name!="")
        {
            $res=mysqli_query($link,$insert);
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
