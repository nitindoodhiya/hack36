<?php

if(isset($_POST['submit'])){
    $file=$_FILES['file'];

    $fileName=$_FILES['file']['name'];
    $fileTmpName=$_FILES['file']['tmp_name'];
    $fileSize=$_FILES['file']['size'];
    $fileError=$_FILES['file']['error'];
    $fileType=$_FILES['file']['type'];

$fileExt = explode('.',$fileName);
$fileActualExt = strtolower(end($fileExt));

$allowed= array('jpg','jpeg','png','pdf');

    if(in_array($fileActualExt,$allowed))
    { if($fileError==0)
    {
$fileNameNew=$fileName;
$fileDestination = '/'.$fileNameNew;
move_uploaded_file($fileTmpName,$fileDestination);
header("Location: physics.php");

    }
    else
    echo "file not uploaded";
    }
    else
    echo "you cannot upload  file";
}
?>