<?php
require_once('admin_login.php');
require_once('admin_page.php');
$old_user = $_SESSION['valid_admin'];
unset($_SESSION);
$result_dest = session_destroy();
if (!empty($old_user))
{
if ($result_dest)
{
echo "<script>alert('Logging out Malik');</script>";
echo "<script>setTimeout(\"location.href='index.php';\",50);</script>";
}
}
?>
