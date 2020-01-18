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
    $id=$user_name=$number=$password="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = test_input($_POST["id"]);
        $user_name = test_input($_POST["user_name"]);
        $number = test_input($_POST["number"]);
        $password = test_input($_POST["password"]);
        $showtime = date("Y-m-d H:i:s");
        $insert= "INSERT INTO admin " .
            "(user_name,number,password,c_time) ".
            "VALUES ".
            "('$user_name','$number','$password','$showtime')";
        echo $insert;
        
        if($user_name!="")
        {
            $res=mysqli_query($link,$insert);
            if($res>0){
                
        $ming2='INSERT INTO cz (cz,ct) VALUES(" ' . $_SESSION['username']. ' 创建了 <b>' . $user_name . '</b> 管理员账户' .' ","' . $showtime . '")';
        echo $ming2;
        $res2=mysqli_query($link,$ming2);
        
                echo "<script>alert('操作成功');</script>";
                header("Location: ../admin.php");
            }
            else{
                echo "<script>alert('操作失败');</script>";
                header("Location: ../admin.php");
            }
        }
        else{
            echo "<script>alert('操作失败')</script>";
            header("Location: ../admin.php");
        }
    }


    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
