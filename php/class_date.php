<?php
    $major_date = $_POST['major_date'];


$serve = 'localhost:3306';
    $username = 'root';
    $password = 'root';
    $dbname = 'school';
    $link = mysqli_connect($serve,$username,$password,$dbname);
    mysqli_set_charset($link,'UTF-8');
    $ming='SELECT * FROM class WHERE major_id=' . $major_date;
    $result = mysqli_query($link,$ming);
    $j=0;
     while( $row = mysqli_fetch_array($result) ){
        $data[$j]=['id' => $row['id'], 'class_name' => $row['class_name']];
         $j+=1;
     }
    echo json_encode($data);
?>