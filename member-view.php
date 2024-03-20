<?php
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

    <title>Membership View</title>
</head>
<body>
<div class="container mt-5">

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Membership View Details 
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
                        
                            <div class="mb-3">
                                <label>Company Name</label>
                                <p class="form-control">
                                    <?=$membershipp['name'];?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Address</label>
                                <p class="form-control">
                                    <?=$membershipp['address'];?>
                                </p>
                            </div>
                            <div class="mb-3">
                                 <label>PIC</label>
                                 <p class="form-control">
                                    <?=$membershipp['phone'];?>
                                </p>
                            </div>
                            <div class="mb-3">
                                 <label>Business Nature</label>
                                 <p class="form-control">
                                    <?=$membershipp['bNature'];?>
                                </p>
                            </div>
                            <div class="mb-3">
                                 <label>Website</label>
                                 <p class="form-control">
                                    <?=$membershipp['website'];?>
                                </p>
                            </div>
                            <div class="mb-3">
                                 <label>Products</label>
                                 <p class="form-control">
                                    <?=$membershipp['products'];?>
                                </p>
                            </div>
                            <div class="mb-3">
                                 <label>Emails</label>
                                 <p class="form-control">
                                    <?=$membershipp['emails'];?>
                                </p>
                            </div>
                            <div class="mb-3">
                                 <label>Phone</label>
                                 <p class="form-control">
                                    <?=$membershipp['phone'];?>
                                </p>
                            </div>

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