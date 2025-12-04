<?php 
    include("config.php");

    if(isset($_GET['primary_key'])){
        $primary_key = $_GET['primary_key'];
    }
    else {
        $primary_key = "";
    }

    mysqli_query($connect,"DELETE FROM table_1 WHERE primary_key = '".$primary_key."'");

    header("location:index.php");
?>