<?php
    include('./controller/config.php');
    session_start();
    
    $user_check = $_SESSION['username'];
    
//    $ses_sql = mysqli_query($db,"select username from admin where username = '$user_check' ");
   
//    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
//    $login_session = $row['username'];
   
    if (!isset($_SESSION['username']) || empty($_SESSION['username']) || $_SESSION['username'] !== 'admin') {
        header("location:index.php");
    }