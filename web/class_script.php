<?php 
    $class_list=$_POST["class_list"];
    $user_pw=$_POST["df_pass2"];
        
    $handle = fopen("$class_list", "r");
    if ($handle) {
        while (($line = fgets($handle)) !== false) {
            $output=exec("/usr/bin/createdb $line $line $user_pw");
        }
        fclose($handle);
    } 
}
?>