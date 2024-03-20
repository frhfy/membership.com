<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Member Edit</title>
</head>
<body>
  
    <div class="container mt-5">

    <?php include('message.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Member Edit 
                    <a href="membership.php" class="btn btn-danger float-end">BACK</a>
                </h4>
            </div>
            <div class="card-body">


                <?php
                if(isset($_GET['id']))
                {
                    $membershipp_id = mysqli_real_escape_string($con, $_GET['id']);
                    $query = "SELECT * FROM membership WHERE id='$membershipp_id' ";
                    $query_run = mysqli_query($con, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                            $membershipp = mysqli_fetch_array($query_run);
                            ?>
                            <form action="code.php" method="POST">
                                    <input type="hidden" name="membershipp_id" value="<?= $membershipp['id']; ?>">

                                    <div class="mb-3">
                                        <label>Company Name</label>
                                        <input type="text" name="name" value="<?=$membershipp['name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Address</label>
                                        <input type="text" name="address" value="<?=$membershipp['address'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>PIC</label>
                                        <input type="text" name="picc" value="<?=$membershipp['picc'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Business Nature</label>
                                        <input type="text" name="bNature" value="<?=$membershipp['bNature'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Website</label>
                                        <input type="text" name="website" value="<?=$membershipp['website'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Products</label>
                                        <input type="text" name="products" value="<?=$membershipp['products'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Emails</label>
                                        <input type="email" name="emails" value="<?=$membershipp['emails'];?>" class="form-control">
                                    </div>

                                    <label>Phone</label>
                                        <input type="text" name="phone" value="<?=$membershipp['phone'];?>" class="form-control">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <button type="submit" name="update_membershipp" class="btn btn-primary">
                                            Update Member
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
