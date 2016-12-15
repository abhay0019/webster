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
<body>

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



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
