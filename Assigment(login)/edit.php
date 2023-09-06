<?php include("include/config.php");

?>
<?php
if(isset($_REQUEST['id1']))
{
   $id1=$_REQUEST['id1'];
   $qq="Select * from `admin` where `Id`= '$id1'";
   $ee=mysqli_query($conn,$qq);
   if(mysqli_num_rows($ee)==0)
   {
    header("location:profile.php");
   }
   else
   {
    $res=mysqli_fetch_row($ee);
   }
}
?>
<?php
if(isset($_POST['btn1']))
{
    extract($_POST);
    $q1="Select * from `admin` where `Id`= '$id'";
    $e1=mysqli_query($conn,$q1);
    if(mysqli_num_rows($e1))
    {
        $q2="UPDATE `admin` SET `username`='$uname',`password`='$pswd' WHERE `Id` = '$id'";
        $e2=mysqli_query($conn,$q2);
        header("location:profile.php");
    }
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
    <style>
        .card{
            margin-top:30%;
            background:transparent;
            border:2px solid black;
            font-weight: 600;
        }
        .btn{
            background:transparent;
            color:#000;
        }
    </style>
  </head>
  <body>
      <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
            <div class="card">
                <img class="card-img-top" src="holder.js/100x180/" alt="">
                <div class="card-body">
                <form action="" method="post">
                <div class="form-group">
                    <label for="">Id</label>
                    <input type="text" readonly value="<?php echo "$res[0]";?>"
                        class="form-control" name="id" id="" aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">*</small>
                    </div>
                    <div class="form-group">
                    <label for="">Username</label>
                    <input type="text"  value="<?php echo "$res[1]";?>"
                        class="form-control" name="uname" id="" aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">*</small>
                    </div>
                    <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" value="<?php echo "$res[2]";?>"
                        class="form-control" name="pswd" id="" aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">*</small>
                    </div>
                    <button type="submit" name="btn1" class="btn btn-primary">Update</button>
                    <a href="profile.php"><button type="button" name="" class="btn btn-primary">Back</button></a>
                </form>
                </div>
            </div>
        </div>
      <div class="col-lg-3"></div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>