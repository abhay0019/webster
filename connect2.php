<?php
require 'connect.php';
ob_start();
session_start();
 function check_valid_user()
    {
       
       if (isset($_SESSION['valid_user'])&&(!empty($_SESSION['valid_user'])))
          {
          return true;
          }
             else
           { 

           return false;
           }
     }
  function check_valid_admin()
    {
       
       if (isset($_SESSION['valid_admin'])&&(!empty($_SESSION['valid_admin'])))
          {
          return true;
          }
             else
           { 

           return false;
           }
     }
   ?>

