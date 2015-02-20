<?php 
    $class_list=$_POST["class_list"];
    $user_pw=$_POST["df_pass2"];
    $output=exec("./add_class $user_pw $class_list") 
?>