<?php include("include/config.php");
session_start(); 
?>
<?php
if(!isset($_SESSION['usr']))
{
    header("location:index.php");
}
else
{
    $ph=$_SESSION['usr'];
    $q1="select * from `user` where `phone`='$ph'";
    $e1=mysqli_query($conn,$q1);
    $res=mysqli_fetch_row($e1);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
  </head>
  <body>
      <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="#">welcome <?php echo "$res[1]";?></a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="logout.php"><button class="btn btn-outline-success my-2 my-sm-0" type="button">Log out</button></a>
            </form>
        </div>
      </nav>