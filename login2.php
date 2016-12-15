
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

<style>
@font-face
 {
   font-family:myfont1;
   src:url('trench100free.otf');
 }


td
{
  margin-left:100px;
  padding:200px;
  color:#00FFFF;
}

#table1
{
  margin-left: 500px;
  font-family:myfont1;
  color:#00FFFF;
}
 body{
   color:#00FFFF;
 }
</style>
</head>
<body>
  <?php
    require_once ('connect2.php');
    if(check_valid_user())
      {
        $user=$_SESSION['valid_user'];
      }
    else
      {
        header('Location:index.php');
      }
   ?>



   <?php



   error_reporting(E_ALL ^ E_NOTICE);
   $target_dir = "uploads/users/";
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
           echo "<script>setTimeout(\"location.href='login2.php';\",10);</script>";
      } else {
          echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
      }
   }
   if($uploadOk==1)
    {

   $user=$_SESSION['valid_user'];
   $target_dir = "uploads/users/";
   $target = $target_dir . basename($_FILES["fileToUpload"]["name"]);
     $result="INSERT INTO image_details (username,image)
   VALUES ('$user','$target')";
   if($re=mysqli_query($conn,$result))
    {
      echo " ";
    }
    }

   ?>
   <?php

   $user=$_SESSION['valid_user'];
   $my="select * from image_details where username='$user'";
   if($res=mysqli_query($conn,$my))
   {
     if(mysqli_num_rows($res)>0)
     {
       while($rows=mysqli_fetch_assoc($res))
       {
         $path=$rows['image'];
       }
     }
   }


   $path='http://localhost' . '/webster/' . $path;


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


                    <a href="user_upload.php" style="color:#00FFFF;"><i class="fa fa-upload fa-fw fa-2x" aria-hidden="true"></i>&nbsp;Upload</a>
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

<?php
 require_once('connect.php');
  $sq="SELECT * FROM users WHERE USERNAME='$user'";
  if($re=mysqli_query($conn,$sq))
    {
       if(mysqli_num_rows($re))
         {
             while($row = mysqli_fetch_assoc($re)) {
               $user_sem=$row['SEMESTER'];
               $user_branch=$row['BRANCH'];
               $name1=$row['NAME'];
               $sem1=$row['SEMESTER'];
               $regis=$row['REG_NO'];
         }
       }
    }


?>




  <div class="col-md-4">
<?php
  require_once('connect.php');
 $sub_arr=array();
 $sql1="SELECT * FROM `info1` WHERE SEMESTER='$user_sem' AND BRANCH='$user_branch'";
  if($re=mysqli_query($conn,$sql1))
   {
    if(mysqli_num_rows($re))
         {

             while($row = mysqli_fetch_assoc($re)) {

              array_push($sub_arr,$row['SUBJECTS']);
         }
       }
    }

?>
<hr>
<hr>
<hr>

<table id="table2"  class="table">

  <thead>
   <tr>

     <th style="color:#00FFFF;"><h1 style="font-family:myfont1;">Personal details</h1></th>

   </tr>
 </thead>
 <tbody>
  <tr>
  <td style="width:300px;">
    <img src="<?php echo $path;?>" class="img-rounded" style="border-radius:10%;" width="260" height="236">
    <form action="login2.php" class="form-horizontal" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <div class="col-sm-10">
            <input type="file" name="fileToUpload" id="fileToUpload">
        </div>
        </div>
        <div class="form-group">
          <div class="col-lg-3 col-lg-offset-2">
            <button type="submit" class="btn btn-success"><i class="fa fa-upload fa-fw" aria-hidden="true"></i>Upload profile pic</button>
          </div>

        </div>
    </form>
  </td>
    <td>
      <ul class="list-group">

        <li ><h2 id="name" style="font-family:myfont1;color:#00FFFF;">Name:&nbsp&nbsp<?php echo $name1;?></h2></li>
        <li ><h2 id="regisnum" style="font-family:myfont1;color:#00FFFF;">Reg No:&nbsp&nbsp<?php echo $regis;?></h2></li>
        <li ><h2 id="branch" style="font-family:myfont1;color:#00FFFF;">Branch:&nbsp&nbsp<?php echo $user_branch;?></h2></li>
        <li><h2 id="branch" style="font-family:myfont1;color:#00FFFF;">Semester:&nbsp&nbsp<?php echo $user_sem;?></h2></li>
      </ul>
    </td>

  </tr>
</tbody>
</table>

<hr>
<table class="table" id="table1">
<div class="container-fluid">
  <h1>Preferred Courses</h1>
<div class="container-fluid">
 <?php

   for($i=0;$i<count($sub_arr);$i++)

   {
      echo "<li style='font-size:35px;'><a href='showdata.php?a=$sub_arr[$i]'> $sub_arr[$i]</a></li>";
  }

  ?>

</div>
</div>
</table>


























<div id="footer" >
  <hr>
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











<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
