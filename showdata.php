<?php
require_once('connect.php');
require_once('connect2.php');
$sub=$_GET['a'];
$sub=strtolower($sub);
$sub=str_replace(" ","",$sub);
$result="select * from upload_des where subject='$sub'";
if($re=mysqli_query($conn,$result))
{
  if(mysqli_num_rows($re)>0)
  {
    while($row=mysqli_fetch_assoc($re))
    {
      echo $row['links'];echo "<br>";
    }
  }
}


 ?>
