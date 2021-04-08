<?php
if(isset($_POST["uplad"])){
    $file = $_FILES["file"];
    print_r($file);
    $fileName = $file["name"];
    $fileTmpName = $file["tmp_name"];
    $fileSize = $file["size"];
    $fileError = $file["error"];
    $fileType = $file["type"];

    $fileExt = explode(".",$fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array("jpg", "jpeg", "png", "pdf");
    
    if(in_array($fileActualExt, $allowed)){
        if ($fileError === 0){
            if($fileSize < 1000000){
                $fileNameNew = uniqid("",true).".".$fileActualExt;
                $fileDest = "uploads/".$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDest);
                header("Location: index.php?uploadsuccess");
            }else {
                echo "Du kan bara ladda upp filer mindre än 100mb";
            }
        }else {
            echo "Error occoured!";
        }
    }
}