<?php
 require_once ('connect.php');
 require_once ('connect2.php');


  
 if(isset($_POST['addusername'])&&isset($_POST['addpasswd']))
 {
   $username=$_POST['addusername'];
   $passwd=$_POST['addpasswd'];
   if(!empty($username)&&!empty($passwd))
    {
      if(login1($username,$passwd,$conn))
        {
        $_SESSION['valid_admin']=$username;
        header('Location:admin_page.php');
        
        }
      else
        {
         require_once('index.php');
         echo "<script>alert('You are not admin.No fuckups!!.');</script>";
         echo "<script>setTimeout(\"location.href='index.php';\",50);</script>";
        }
    }
   else
      {
       require('index.php');
     echo "<script>alert('Malik ho to form ni bharoge???');</script>";
      }


 }
?> 
<?php
 function login1($username,$password,$conn)
   {
     
     $result="select * from admin where NAME='$username' and PASSWD='$password'";
     if($re=mysqli_query($conn,$result))
      {
       if(mysqli_num_rows($re))
        return true;
       else
         return false;
      }
 }
  ?>
    
   
