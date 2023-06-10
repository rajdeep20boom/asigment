<?php include("include/header.php");?>
<?php
if(isset($_REQUEST['id1']))
{
    $ph=$_REQUEST['id1'];
    $q2="SELECT * FROM `transaction` WHERE `phone`='$ph'";
    $e2=mysqli_query($conn,$q2);
}
else
{
  header("location:profile.php");
}
$q1="SELECT * FROM `user`";
$e1=mysqli_query($conn,$q1);
$reslt1=mysqli_fetch_row($e1);
?>
<div class="container-flued">
    <div.<div class="row">
        <?php include("include/navbar.php");?>
        <div class='col-sm-9'>
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Phone No</th>
                        <th>Ammount</th>
                        <th>Detail</th>
                        <th>Type</th>
                        <th>created_at</th>
                    </tr>
                </thead>
                <?php
                $i=1;
                while($reslt=mysqli_fetch_row($e2))
                {
                ?>
                    <tbody>
                        <tr>
                            <td ><?php echo "$i";?></td>
                            <td><?php echo "$reslt1[1]";?></td>
                            <td><?php echo "$reslt[1]";?></td>
                            <td><?php echo "$reslt[2]";?></td>
                            <td><?php echo "$reslt[3]";?></td>
                            <td><?php echo "$reslt[4]";?></td>
                            <td><?php echo "$reslt[6]";?></td>
                        </tr>
                    </tbody>
                <?php
                $i++;
                }
                ?>
            </table>
        </div>
    </div>
</div>




<?php include("include/footer.php");?>   