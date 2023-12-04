<?php
    session_start();
    include '../components/connection.php';
?>

<!doctype html>
<html lang="en">
    <head>
        <!--Meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Edit Details</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <!--Font-awesome CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container mt-5">
            <?php include('../components/message.php'); ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit 
                                <a href="../index.php" class="btn btn-danger float-end"><i class="fa-solid fa-circle-arrow-left"> Back</i></a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <?php
                                if(isset($_GET['id']))
                                {
                                    $id = mysqli_real_escape_string($con, $_GET['id']);
                                    $query = "SELECT * FROM crud WHERE id='$id' ";
                                    $query_run = mysqli_query($con, $query);
                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        $row = mysqli_fetch_array($query_run);
                                        ?>
                                        <form action="./code.php" method="POST">
                                            <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                            <div class="mb-3">
                                                <label>Name</label>
                                                <input type="text" name="name" value="<?=$row['name'];?>" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label>Email</label>
                                                <input type="text" name="email" value="<?=$row['email'];?>" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label>Postal Address</label>
                                                <input type="text" name="postaladdress" value="<?=$row['postal_address'];?>" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label>City</label>
                                                <input type="text" name="city" value="<?=$row['city'];?>" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label>Country</label>
                                                <input type="text" name="country" value="<?=$row['country'];?>" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label>Phone Number</label>
                                                <input type="text" name="phonenumber" value="<?=$row['phone_number'];?>" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label>Comment Section</label>
                                                <input type="text" name="commentsection" value="<?=$row['comment_section'];?>" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <button type="submit" name="update" class="btn btn-primary">Update</button>
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