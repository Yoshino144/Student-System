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
        $update = 'UPDATE admin SET user_name="' . $user_name .'",number="' . $number . '",password="' . $password .'" where id=' . $id;
        echo $update;
        
        
        
        if($id!="")
        {
            $res=mysqli_query($link,$update);
            if($res>0){
                echo "<script>alert('操作成功');</script>";
                $ming2='INSERT INTO cz (cz,ct) VALUES(" ' . $_SESSION['username']. ' 修改了 <b>' . $user_name . '<\b> 管理员信息' .' ","' . $showtime . '")';
        echo $ming2;
        $res2=mysqli_query($link,$ming2);
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
?>