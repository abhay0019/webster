<!DOCTYPE html>
<html lang="en">
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

<script src="https://use.fontawesome.com/4a8b868199.js"></script>


<style>
 body{
   color:#02558B;
 }
</style>



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
    <div class="navbar navbar-default navbar-fixed-top" style="background-color:#1A2930;">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style="color:#00FFFF;"><i class="fa fa-book" aria-hidden="true"></i>&nbsp;
Allnotes</a>
        </div>
        <center>
            <div class="navbar-collapse collapse" id="navbar-main">
                <ul class="nav navbar-nav">
                    <li  >


                      <a href="#" style="color:#00FFFF;"><i class="fa fa-home fa-fw fa-2x" aria-hidden="true"></i>&nbsp;Home</a>

                    </li>
                    <li class="about1">

                      <a href="#" style="color:#00FFFF;;" ><i class="fa fa-question-circle fa-fw fa-2x " aria-hidden="true"></i>&nbsp;About</a>
                    </li>
                    <li>


                      <a href="#" style="color:#00FFFF;"><i class="fa fa-envelope fa-fw fa-2x" aria-hidden="true"></i>&nbsp;Contacts</a>
                    </li>
                    <li>
                <form class="navbar-form navbar-right" id="login_form" method="POST" action="login.php">
                    <div class="form-group" id="form12">
                        <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                    <div class="form-group" >
                        <input type="password" class="form-control" name="passwd" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-success"><i class="fa fa-user fa-fw" aria-hidden="true"></i>
Log In</button>
                </form>
              </li>
            </div>
        </center>
    </div>
</div>
<hr>
<form class="form-horizontal" method="POST" name="form1" action="register_new.php" style="color:#00FFFF;" onsubmit="return(validate_registration());">
  <fieldset>
   <div class="container">  <legend style="text-align:left;font-size:50px;color:#00FFFF;padding-top:30px;">Register here</legend>
   </div>
    <div class="form-group" >
      <label for="inputEmail" class="col-lg-2 control-label">Name:</label>
      <div class="col-lg-3">
        <input class="form-control" id="inputname"  name="Name" placeholder="Enter name" type="text">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Username:</label>
      <div class="col-lg-3">
        <input class="form-control" id="inputusername" name="username" placeholder="Enter username" type="text">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Registration No.:</label>
      <div class="col-lg-3">
        <input class="form-control" id="inputregis" name="reg_no" placeholder="Enter registration number" type="text">
      </div>
    </div>
    <div class="form-group">
     <label for="semester" class="col-lg-2 control-label">Semester:</label>
    <div class="col-lg-3">
    <select class="form-control" name="semester"id="sel1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
    </select>
     </div>
    </div>
    <div class="form-group">
     <label for="branch" class="col-lg-2 control-label">Branch:</label>
    <div class="col-lg-3">
    <select class="form-control"  name="branch"id="sel1">
      <option>Information Technology</option>
      <option>Computer Science and Engineering</option>
      <option>Mechanical Enigineering</option>
      <option>Civil Engineering</option>
      <option>Biotechnology Engineering</option>
      <option>Electrical Engineering</option>
      <option>Electronics And Communication Engineering</option>
      <option>Production And Industrial Engineering</option>
      <option>Chemical Engineering</option>
    </select>
     </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email:</label>
      <div class="col-lg-3">
        <input class="form-control" id="inputemails" name="email" placeholder="Enter your email id" type="text">
      </div>
    </div>
    <div class="form-group">
      <label for="inputmobile" class="col-lg-2 control-label">Mobile No.:</label>
      <div class="col-lg-3">
        <input class="form-control" id="inputmonum"  name="mobile" placeholder="Enter your mobile number" type="text">
      </div>
    </div>
    <div class="form-group">
      <label for="inputpassword" class="col-lg-2 control-label">Password.:</label>
      <div class="col-lg-3">
        <input class="form-control" id="inputpassword" name="passwd"placeholder="Enter your password" type="password">
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-3 col-lg-offset-2">
        <button type="reset" class="btn btn-danger" onClick="this.form.reset()"><i class="fa fa-ban fa-fw" aria-hidden="true"></i>
Cancel</button>
        <button type="submit" class="btn btn-success"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Register Now</button>
      </div>

    </div>

  </fieldset>
</form>

</div>





<hr>


<div id="footer" >
     <div class="container">
      <p><a href="https://www.facebook.com/omkar.nathmandal"><i class="fa fa-facebook-square fa-fw fa-2x" style="color:#00FFFF;" aria-hidden="true"></i></a>
      <a href="https://www.github.com/omkar8039"><i class="fa fa-github fa-fw fa-2x" style="color:#00FFFF;" aria-hidden="true"></i></a>
      <a href="https://www.twitter.com/mandalomkar"><i class="fa fa-twitter fa-fw fa-2x" style="color:#00FFFF;" aria-hidden="true"></i></a>
      <i class="fa fa-linkedin-square fa-fw fa-2x" style="color:#00FFFF;" aria-hidden="true"></i></
      </p>
      <span style="float:right;color:#00FFFF;">Omkar Nath Mandal</span>
     </div>
   </div>

























































































    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
