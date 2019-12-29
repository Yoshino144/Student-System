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
    $id=$student_num=$name=$phone_number=$sex=$year=$college_id=$major_id=$class_id="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = test_input($_POST["id"]);
        $student_num = test_input($_POST["student_num"]);
        $name = test_input($_POST["name"]);
        $phone_number = test_input($_POST["phone_number"]);
        $sex = test_input($_POST["sex"]);
        $year = test_input($_POST["year"]);
        $college_id = test_input($_POST["college_id"]);
        $major_id = test_input($_POST["major_id"]);
        $class_id = test_input($_POST["class_id"]);
        $datetime =date("Y-m-d");
        $update = 'UPDATE student
                SET student_num="' . $student_num .'",name="' . $name . '",phone_number="' . $phone_number . '",sex="' . $sex . '",
                year="' . $year . '",college_id="' . $college_id . '",major_id="' . $major_id . '",
                class_id="' . $class_id . '",u_time="' . $datetime . '" WHERE id=' . $id . ' ';
        echo $update;
        
        if($id!="")
        {
            $res=mysqli_query($link,$update);
            if($res>0){
                echo "<script>alert('操作成功');</script>";
                header("Location: ../student.php");
            }
            else{
                echo "<script>alert('操作失败');</script>";
                header("Location: ../student.php");
            }
        }
        else{
            echo "<script>alert('操作失败')</script>";
            header("Location: ../student.php");
        }
    }


    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>