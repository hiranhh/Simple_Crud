<?php
    session_start();
?>

<!doctype html>
<html lang="en">
    <head>
        <!--Meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Create</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <!--Font-awesome CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container mt-5">
            <?php include('../components/message.php'); ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Add Details 
                                <a href="../index.php" class="btn btn-danger float-end"><i class="fa-solid fa-circle-arrow-left"> Back</i></a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="./code.php" method="POST">
                                <div class="mb-3">
                                    <label>Name</label>
                                    <input type="text" name="name" placeholder="Name" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Email Address</label>
                                    <input type="email" name="email" placeholder="Email Address" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Postal Address</label>
                                    <input type="text" name="postaladdress" placeholder="Postal Address" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>city</label>
                                    <input type="text" name="city" placeholder="City" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Country</label>
                                    <input type="text" name="country" placeholder="Country" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Phone Number</label>
                                    <input type="text" name="phonenumber" placeholder="Phone Number" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Comment Section</label>
                                    <input type="text" name="commentsection" placeholder="Comment Section"class="form-control">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="save" class="btn btn-primary">Insert</button>
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
