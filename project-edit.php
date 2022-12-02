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

    <link rel="stylesheet" href="background.css">

    <title>Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $project_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM project WHERE id='$project_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $project = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="project_id" value="<?= $project['id']; ?>">

                                    <div class="mb-3">
                                        <label>Name</label>
                                        <input type="text" name="name" value="<?=$project['name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Ref.no</label>
                                        <input type="text" name="refnum" value="<?=$project['refnum'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Region</label>
                                        <input type="text" name="reg" value="<?=$project['reg'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Year Appointed</label>
                                        <input type="text" name="yearp" value="<?=$project['yearp'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Fits Center Location</label>
                                        <input type="text" name="fits" value="<?=$project['fits'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Province</label>
                                        <input type="text" name="prov" value="<?=$project['prov'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Commodity</label>
                                        <input type="text" name="comm" value="<?=$project['comm'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_data" class="btn btn-primary">
                                            Update Info
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