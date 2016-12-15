
<html>
<head>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet">
        <link href="mycss/login2.css" rel="stylesheet">
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      
	<link rel="stylesheet" href="footer/footer.css">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">


</head>
<body>
<div class="jumbotron">
<h1 id="welcome"><?php
  require_once ('connect2.php');
  if(check_valid_admin())
    {
       echo 'Malik ki jai ho!!, '.$_SESSION['valid_admin'].'.';
       echo "<br>";
       
       echo 'Click <a href="admin_logout.php">here</a> to logout';
      
    }
  else
    {
      header('Location:index.php');
    }
 ?></h1>
 </div>


</body>
</html>
