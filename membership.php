<?php
    session_start();
    require 'dbcon.php';
?>

<?php include('includes/header.php');?>
<div class="container mt-4">

<?php include('message.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Membership Detail
                    <a href="member-create.php" class="btn btn-primary float-end">Add Members</a>
                </h4>
            </div>
            <div class="card-body">

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Company Name</th>
                            <th>Address</th>
                            <th>PIC</th>
                            <th>Business Nature</th>
                            <th>Website</th>
                            <th>Products</th>
                            <th>Emails</th>
                            <th>Phone</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query = "SELECT * FROM membership";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $membershipp)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $membershipp['id']; ?></td>
                                        <td><?= $membershipp['name']; ?></td>
                                        <td><?= $membershipp['address']; ?></td>
                                        <td><?= $membershipp['picc']; ?></td>
                                        <td><?= $membershipp['bNature']; ?></td>
                                        <td><?= $membershipp['website']; ?></td>
                                        <td><?= $membershipp['products']; ?></td>
                                        <td><?= $membershipp['emails']; ?></td>
                                        <td><?= $membershipp['phone']; ?></td>
                                        <td>
                                            <a href="member-view.php?id=<?= $membershipp['id']; ?>" class="btn btn-info btn-sm">View</a>
                                            <a href="member-edit.php?id=<?= $membershipp['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                            <form action="code.php" method="POST" class="d-inline">
                                                <button type="submit" name="delete_membershipp" value="<?=$membershipp['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            else
                            {
                                echo "<h5> No Record Found </h5>";
                            }
                    ?>
                                
                </tbody>
            </table>

                    
        </div>
    </div>
</div>

</div>
</div>

<?php include('includes/footer.php');?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>



</body>
</html>