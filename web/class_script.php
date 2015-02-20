<?php 
    $target_dir = "/home/uploads/";
    $target_file = $target_dir . basename($_FILES["class_list"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["class_list"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "txt") {
        echo "Sorry, only text files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["class_list"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["class_list"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $class_list=$_POST["class_list"];
    $user_pw=$_POST["df_pass2"];
    $output=exec("/usr/bin/add_class $class_list $user_pw");
?>