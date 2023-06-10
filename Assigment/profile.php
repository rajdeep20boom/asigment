<?php include("include/header.php");?>
<?php
$q1="SELECT * FROM `user`";
$e1=mysqli_query($conn,$q1);
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
                        <th>created_at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php
                $i=1;
                while($reslt=mysqli_fetch_row($e1))
                {
                ?>
                    <tbody>
                        <tr>
                            <td ><?php echo "$i";?></td>
                            <td><?php echo "$reslt[1]";?></td>
                            <td><?php echo "$reslt[5]";?></td>
                            <td>
                            <a href='view.php?id1=<?php echo "$reslt[2]";?>'>view</a></i>
                            </td>
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