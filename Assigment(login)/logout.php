<?php
session_start();
?>
<?php
if(!isset($_SESSION['adm']))
{
  header("location:index.php");
}
else
{
    session_destroy();
    header("location:index.php");
}
?>