<?php 
    $class_list=$_POST["class_list"];
    $user_pw=$_POST["df_pass2"];
    $output=exec("/usr/bin/add_class $class_list $user_pw");
?>