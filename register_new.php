<?php
 require_once('connect.php');
 require_once('connect2.php');
 if(isset($_POST['Name'])&&(isset($_POST['username']))&&(isset($_POST['reg_no']))&&(isset($_POST['semester']))&&(isset($_POST['branch']))&&(isset($_POST['email']))&&(isset($_POST['mobile']))&&(isset($_POST['passwd'])))
     {

        $name=$_POST['Name'];
        $username=$_POST['username'];
        $reg_no=$_POST['reg_no'];
        $sem=$_POST['semester'];
        $branch=$_POST['branch'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $passwd=$_POST['passwd'];

        regi($name,$username,$reg_no,$sem,$branch,$email,$mobile,$passwd,$conn);

     }
 ?>
<?php
require_once('connect.php');
require_once('connect2.php');
function regi($name,$username,$reg_no,$sem,$branch,$email,$mobile,$passwd,$conn)
    {

      $result="select * from users where USERNAME='$username'";
      if($re=mysqli_query($conn,$result))
       {

          if(mysqli_num_rows($re)>0)
          {
             require_once('index.php');
             echo "<script>alert('That username is already taken.Please choose another');</script>";
             echo "<script>setTimeout(\"location.href='index.php';\",50);</script>";
          }


       }





  $result2="INSERT INTO users (NAME,USERNAME,REG_NO,SEMESTER,BRANCH,EMAIL_ID,MOBILE_NO,PASSWD)
VALUES ('$name', '$username', '$reg_no', '$sem','$branch','$email','$mobile',md5($passwd))";

          if ($re1=mysqli_query($conn,$result2))
          {
            if(mysqli_num_rows($re1)<=0)
            {
                 echo "yes";
                  require_once('index.php');
                  echo "<script>alert('Your registration was successful');</script>";
                  echo "<script>setTimeout(\"location.href='index.php';\",50);</script>";
          }
        }


}


?>
