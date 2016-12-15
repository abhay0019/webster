<?php
 require_once ('connect.php');
 require_once ('connect2.php');


  
 if(isset($_POST['username'])&&isset($_POST['passwd']))
 {
   $username=$_POST['username'];
   $passwd=$_POST['passwd'];
   if(!empty($username)&&!empty($passwd))
    {
      if(login1($username,$passwd,$conn))
        {
        $_SESSION['valid_user']=$username;
        header('Location:login2.php');
        
        }
      else
        {
         require_once('index.php');
         echo "<script>alert('That username/password is  not registered.');</script>";
         echo "<script>setTimeout(\"location.href='index.php';\",50);</script>";
        }
    }
   else
      {
       require('index.php');
     echo "<script>alert('Fill out the form correctly');</script>";
      }


 }
?> 
<?php
 function login1($username,$password,$conn)
   {
     $ps=md5($password);
     $result="select * from users where USERNAME='$username' and PASSWD='$ps'";
     if($re=mysqli_query($conn,$result))
      {
       if(mysqli_num_rows($re))
        return true;
       else
         return false;
      }
 }
  ?>
    
   
