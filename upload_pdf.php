<?php
$target_dir = "uploads/pdfs/";
$target_file = $target_dir . basename($_FILES["fileToUploadpdf"]["name"]);
$uploadOk = 1;
$already=1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
   $check =filesize($_FILES["fileToUploadpdf"]["tmp_name"]);
   if($check !== false) {
       echo "File is an pdf or txt - " . $check["mime"] . ".";
       $uploadOk = 1;
   } else {
       echo "<script>alert('File is not a pdf or txt.');</script>";
       $uploadOk = 0;
   }
}
if (file_exists($target_file)) {

   $uploadOk = 0;
}
if ($_FILES["fileToUploadpdf"]["size"] > 500000000000) {
   echo "<script>alert('Sorry, your file is too large.')</script>";
   $uploadOk = 0;
}

if($imageFileType != "pdf" && $imageFileType != "txt"
&& $imageFileType != "html" ) {
   echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed');</scipt>";
   $uploadOk = 0;
}

if ($uploadOk == 0) {
   echo "<script>alert('Sorry, your file was not uploaded.')</script>";

} else {
   if (move_uploaded_file($_FILES["fileToUploadpdf"]["tmp_name"], $target_file)) {
       echo "<script>alert('Your file has been uploaded succesfuly!');</script>";
        echo "<script>setTimeout(\"location.href='user_upload.php';\",10);</script>";
   } else {
       echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
   }
}
?>
