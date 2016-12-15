<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>allnotes</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--my css files-->
    <link href="cssfiles/main.css" rel="stylesheet">
   <script src="https://code.jquery.com/jquery-3.1.0.js"
        integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk="
        crossorigin="anonymous"></script>
   <script src="jsfiles/main.js"></script>
   <link href="index1.css" rel="stylesheet">
  <link href="login2.css" rel="stylesheet">
  <script src="https://use.fontawesome.com/4a8b868199.js"></script>
</head>
<body >
<?php
require_once('connect.php');
require_once('connect2.php');
$user=$_SESSION['valid_user'];

 ?>
  <div class="navbar navbar-default  navbar-fixed-top"  style="background-color:#1A2930;">
  <div class="container" style="background-color:#1A2930;">
      <div class="navbar-header" style="background-color:#1A2930;">
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style="color:#00FFFF;"><i class="fa fa-book" aria-hidden="true"></i>&nbsp;
Allnotes</a>
      </div>
      <center>
          <div class="navbar-collapse collapse"  style="background-color:#1A2930;"id="navbar-main">
              <ul class="nav navbar-nav">
                  <li  >


                    <a href="#" style="color:#00FFFF;"><i class="fa fa-home fa-fw fa-2x" aria-hidden="true"></i>&nbsp;Home</a>

                  </li>
                  <li class="about1">

                    <a href="#" style="color:#00FFFF;" ><i class="fa fa-question-circle fa-fw fa-2x " aria-hidden="true"></i>&nbsp;About</a>
                  </li>
                  <li>


                    <a href="contact.php" style="color:#00FFFF;"><i class="fa fa-envelope fa-fw fa-2x" aria-hidden="true"></i>&nbsp;Contacts</a>
                  </li>
                  <li>


                    <a href="login2.php" style="color:#00FFFF;"><i class="fa fa-chevron-circle-left fa-fw fa-2x" aria-hidden="true"></i>&nbsp;Back</a>
                  </li>


                 <li>
                    <a href="#" style="color:#00FFFF;"><i class="fa fa-info-circle fa-fw fa-2x" aria-hidden="true"></i>&nbsp;Other courses</a>
                  </li>
                  <li class="dropdown" style="float:right;">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:#00FFFF;" role="button" aria-expanded="false"><i class="fa fa-user fa-fw fa-2x" aria-hidden="true"></i>&nbsp;<?php echo $user;?> <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li style="background-color:#1A2930;color:#00FFFF;"><a href="logout.php" style="color:#00FFFF;"><i class="fa fa-sign-out fa-fw fa-2x" aria-hidden="true"></i>
Logout</a></li>
              <li style="background-color:#1A2930"><a  id="update1"href="#" style="color:#00FFFF;"><i class="fa fa-pencil-square fa-2x fa-fw" aria-hidden="true"></i>Update details</a></li>
            </ul>
          </li>

          </div>
      </center>
  </div>
</div>









<input type="button" class="btn btn-success">Back</input>


















<hr>
<hr>


<div class="container" style="color:#00FFFF;">
<form action="user_upload.php" class="form-horizontal" method="post" enctype="multipart/form-data">
    <div class="form-group">
    <label class="control-label col-sm-2"style="color:#00FFFF;" for="name">Upload image files:</label>
    <div class="col-sm-10">
    <input type="file" name="fileToUpload" id="fileToUpload">
    </div>
    </div>

    <div class="form-group">
    <label class="control-label col-sm-2"style="color:#00FFFF;" for="name">Subject(image):</label>
    <div class="col-sm-3">
    <input type="text" class="form-control" name='image_subject' id="subject1"></input>
  </div>
    </div>
    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
     <button type="submit" class="btn btn-success" >Upload image</button>

     </div>
     </div>
   </form>
     <form action="user_upload.php" class="form-horizontal" method="post" enctype="multipart/form-data">

    <div class="form-group">
    <label class="control-label col-sm-2"style="color:#00FFFF;" for="name">Upload pdf files:</label>
    <div class="col-sm-10">
    <input type="file" name="fileToUploadpdf"  id="fileToUploadpdf">
    </div>
    </div>
    <div class="form-group">
    <label class="control-label col-sm-2"style="color:#00FFFF;" for="name">Subject(pdf):</label>
    <div class="col-sm-3">
    <input type="text" class="form-control" name='pdf_subject' id="subject1"></input>
    </div>
    </div>
    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
     <button type="submit" class="btn btn-success" >Upload pdf</button>

     </div>
     </div>
     <div class="form-group">
     <label class="control-label col-sm-2"style="color:#00FFFF;" for="name">Links:</label>
     <div class="col-sm-3">
     <input type="text" class="form-control" name='links80' id="subject2"></input>
     </div>
     </div>
     <div class="form-group">
     <label class="control-label col-sm-2" style="color:#00FFFF;" for="name">Subject(links):</label>
     <div class="col-sm-3">
     <input type="text" class="form-control" name='links_subject' id="subject1"></input>
     </div>
     </div>
     <div class="form-group">
     <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success" >Upload links</button>

      </div>
      </div>
   </form>

 <?php



  error_reporting(E_ALL ^ E_NOTICE);
$target_dir = "uploads/images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$already=1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "<script>alert('File is not an image.');</script>";
        $uploadOk = 0;
    }
}
if (file_exists($target_file)) {

    $uploadOk = 0;
}
if ($_FILES["fileToUpload"]["size"] > 500000000000) {
    echo "<script>alert('Sorry, your file is too large.')</script>";
    $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed');</scipt>";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "<script>alert('Sorry, your file was not uploaded.')</script>";

} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<script>alert('Your file has been uploaded succesfuly!');</script>";
         echo "<script>setTimeout(\"location.href='user_upload.php';\",10);</script>";
    } else {
        echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
    }
}
if($uploadOk==1)
 {
$image_sub=$_POST['image_subject'];
$image_sub=strtolower($image_sub);
$user=$_SESSION['valid_user'];
$target_dir = "uploads/images/";

$target = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $result="INSERT INTO upload_des (user,image_path,subject)
VALUES ('$user','$target','$image_sub')";
if($re=mysqli_query($conn,$result))
 {
   echo " ";
 }
 }
?>
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
if($uploadOk==1)
 {
$pdf_sub=$_POST['pdf_subject'];
$pdf_sub1=strtolower($pdf_sub);
$user=$_SESSION['valid_user'];
$target_dir = "uploads/pdfs/";

$target = $target_dir . basename($_FILES["fileToUploadpdf"]["name"]);
  $result="INSERT INTO upload_des (user,pdf_path,subject)
VALUES ('$user','$target','$pdf_sub1')";
if($re=mysqli_query($conn,$result))
 {
   echo " ";
 }
 }
?>
<?php
$links1=$_POST['links80'];
$links_subject=$_POST['links_subject'];
$sub=strtolower($links_subject);
$sub=str_replace(" ","",$sub);
$user=$_SESSION['valid_user'];
if(!empty($links1)&&!empty($links_subject)&&!empty($user))
{
$sql="select * from upload_des where links='$links'";
{
  if($res=mysqli_query($conn,$sql))
  {
    if(mysqli_num_rows($res)>0)
    {
      echo "<script>alert('That link already exist in database');</script>";
    }

    }

}
$result2="INSERT INTO upload_des (user,links,subject)
VALUES ('$user','$links1','$sub')";
if($re2=mysqli_query($conn,$result2))
 {
    echo "<script>alert('Link had been uploaded');</script>";
 }
}
 ?>

<hr>


<div id="footer" >

     <div class="container">
      <p><a href="https://www.facebook.com/omkar.nathmandal"><i class="fa fa-facebook-square fa-fw fa-2x" style="color:#00FFFF;" aria-hidden="true"></i></a>
      <a href="https://www.github.com/omkar8039"><i class="fa fa-github fa-fw fa-2x" style="color:#00FFFF;" aria-hidden="true"></i></a>
      <a href="https://www.twitter.com/mandalomkar"><i class="fa fa-twitter fa-fw fa-2x" style="color:#00FFFF;" aria-hidden="true"></i></a>
      <i class="fa fa-linkedin-square fa-fw fa-2x" style="color:#00FFFF;" aria-hidden="true"></i></
      </p>
      <a href="login2.php" style="margin-left:100px;"><i class="fa fa-user fa-2x fa-fw" style="color:#00FFFF;" aria-hidden="true"></i><?php echo $user;?></a>
      <a href="logout.php" style="margin-left:100px;"><i class="fa fa-sign-out fa-2x fa-fw" style="color:#00FFFF;" aria-hidden="true"></i>Logout</a>
      <a href="recent_upload.php" style="margin-left:100px;"><i class="fa fa-upload fa-2x fa-fw" style="color:#00FFFF;" aria-hidden="true"></i>Recent uploads</a>
      <span style="float:right;color:#00FFFF;">Omkar Nath Mandal</span>
     </div>
   </div>





  <script src="bootstrap/js/bootstrap.min.js"/>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</body>
</html>
