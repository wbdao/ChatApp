<?php
    session_start();
    include_once "config.php";
    $searchTerm= mysqli_real_escape_string($conn, $_POST['searchTerm']);
    $outgoing_id= $_SESSION['unique_id'];
    $output = "";
    $sql=mysqli_query($conn,"SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} AND(fname LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTerm}%') ");

    if(mysqli_num_rows($sql) > 0){
        include "data.php";
    }else{
        $output .="No user found related to your search term";
    }

    echo $output;
?>