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
    <link rel="stylesheet" href="background.css">

    <title>View</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>View Details 
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
                                
                                    <div class="mb-3">
                                        <label>Name</label>
                                        <p class="form-control">
                                            <?=$project['name'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Ref.no</label>
                                        <p class="form-control">
                                            <?=$project['refnum'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Region</label>
                                        <p class="form-control">
                                            <?=$project['reg'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Year Appointed</label>
                                        <p class="form-control">
                                            <?=$project['yearp'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Fits Center Location</label>
                                        <p class="form-control">
                                            <?=$project['fits'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Province</label>
                                        <p class="form-control">
                                            <?=$project['prov'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Commodity</label>
                                        <p class="form-control">
                                            <?=$project['comm'];?>
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