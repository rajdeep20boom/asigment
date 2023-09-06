<?php include("include/config.php");
session_start();
?>
<?php
if(isset($_SESSION['adm']))
{
    header("location:profile.php");
}
?>
<?php
if(isset($_POST['btn1']))
{
    extract($_POST);
    $q1="Select * from `admin` where `username`= '$uname' and `password`='$pswd'";
    $e1=mysqli_query($conn,$q1);
    if(mysqli_num_rows($e1)==0)
    {
        $msg="Invalid Usename & Password";
        $color="red";
    }
    else
    {
        $_SESSION['adm']=$uname;
        header("location:profile.php");
    }
}
else if(isset($_POST['btn2']))
{
    extract($_POST);
    $q2="Select * from `admin` where `username`= '$uname1'";
    $e2=mysqli_query($conn,$q2);
    if(mysqli_num_rows($e2)==0)
    {
        $q3="INSERT INTO `admin`(`username`, `password`) VALUES ('$uname1','$pswd1')";
        $e3=mysqli_query($conn,$q3);
        $msg="Successfully Create";
        $color="green";
        header("location:index.php");
    }
    else
    {
        $msg="Already Exist";
        $color="red";
    }
}
else
{
    $msg="";
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
            background-color: white;
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
                    <?php
                    if($msg != null)
                    {
                    ?>
                    <div class="alert <?php if($color=='red'){echo "alert-danger";} else{echo "alert-success";} ?> alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong></strong> <?php echo $msg;?>.
                    </div>
                    <?php
                    }
                    ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" required
                                class="form-control" name="uname" id="" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">*</small>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" required
                                class="form-control" name="pswd" id="" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">*</small>
                        </div>
                        <button type="submit" name="btn1" class="btn btn-primary">Submit</button>
                        <button type="button" name="btn1" class="btn btn-primary" data-toggle="modal" data-target="#modelId">Create an Account</button>
                    </form>
                </div>
            </div>
        </div>
      <div class="col-lg-3"></div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create an Account</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" required
                                class="form-control" name="uname1" id="" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">*</small>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" required
                                class="form-control" name="pswd1" id="" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">*</small>
                        </div>
                        <button type="submit" name="btn2" class="btn btn-primary">Submit</button>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>