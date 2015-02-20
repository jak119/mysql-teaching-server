<?php 
    $user=$_POST["login_name"];
    $user_pw=$_POST["df_pass"];
    $output=exec("/usr/bin/createdb $user $user $user_pw") 
?>