<?php
    session_start();
    $conn = mysqli_connect('localhost','root','','sdc');
    $currentDir = getcwd();
    $uploadDir = $currentDir."/uploads/";
    $name = $_SESSION["name"];
    $uid = $_SESSION["uid"];
    if(!is_dir($uploadDir.$_SESSION["name"])){
       mkdir($uploadDir.$_SESSION["name"] , 0777);
       }
       else if(is_dir($uploadDir.$_SESSION["name"])){
        $fileName = $_FILES['myfile']['name'];
        $fileTmpName  = $_FILES['myfile']['tmp_name'];
        $uploadPath = $uploadDir.$_SESSION["name"] . "/" . basename($fileName);
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath); 
        if ($didUpload) {
                echo "The file " . basename($fileName) . " has been uploaded";
            } else {
                echo "An error occurred somewhere. Try again or contact the admin";
            }
        //echo "Folder already exists";
    }
    $query = mysqli_query($conn,"INSERT INTO `upload`(`name`, `uid`, `filename`, `filepath`) VALUES ('$name',$uid,'$fileName','$uploadPath')");
    /*if(mkdir($uploadDir.$_SESSION["name"] , 0777)){
        echo "created";
    }
    else{
        echo "not created";
    }*/
?>