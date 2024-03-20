<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Membership Create</title>
</head>
<body>
  
    <div class="container mt-5">
        
        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Membership Add 
                            <a href="membership.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>Company Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>PIC</label>
                                <input type="text" name="picc" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Business Nature</label>
                                <input type="text" name="bNature" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Website</label>
                                <input type="text" name="website" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Products</label>
                                <input type="text" name="products" class="form-control">
                            </div>


                            <div class="mb-3">
                                <label>Emails</label>
                                <input type="email" name="emails" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Phone</label>
                                <input type="text" name="phone" class="form-control">
                            </div>

                                <button type="submit" name="save_membershipp" class="btn btn-primary">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>