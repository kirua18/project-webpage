<?php
    session_start();
    require 'dbcon.php';


?>
<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="backgroud.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="background.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    

    <title>DATA BASE</title>
</head>

<body>
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="text-center">
                        <h4>Details
                            <a href="project-create.php" style="margin: 3px;" class="btn btn-primary float-end">Add Data</a>
                            <a href="search.php" style="margin: 3px;" class="btn btn-primary float-end">Home</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr class="bg-dark text-white">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Ref.no</th>
                                    <th>Region</th>
                                    <th>Year Appointed</th>
                                    <th>Fits Center Location</th>
                                    <th>Province</th>
                                    <th>Commodity</th>
                                    <th>Action</th>
                                </tr>

                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM project";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $project)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $project['id']; ?></td>
                                                <td><?= $project['name']; ?></td>
                                                <td><?= $project['refnum']; ?></td>
                                                <td><?= $project['reg']; ?></td>
                                                <td><?= $project['yearp']; ?></td>
                                                <td><?= $project['fits']; ?></td>
                                                <td><?= $project['prov']; ?></td>
                                                <td><?= $project['comm']; ?></td>
                                                <td>
                                                    <a href="project-view.php?id=<?= $project['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="project-edit.php?id=<?= $project['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" style="margin: 3px;" name="delete_data" value="<?=$project['id'];?>" class="btn btn-danger btn-sm">Delete</button>
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
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</style>

    


</html>