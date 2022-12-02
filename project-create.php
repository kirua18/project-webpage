<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="background.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Create Data</title>
</head>
<body>
    <div class="main">
    <div class="container mt-0">

        <?php include('message.php'); ?>

        <div class="row" >
            <div class="col-md-15" >
                <div class="card" >
                    <div class="card-header">
                        <h4>Add 
                            <a href="search.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Ref.no</label>
                                <input type="text" name="refnum" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Region</label>
                                <input type="text" name="reg" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Year Appointed</label>
                                <input type="text" name="yearp" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Fits Center Location</label>
                                <input type="text" name="fits" class="form-control">
                            </div><div class="mb-3">
                                <label>Province</label>
                                <input type="text" name="prov" class="form-control">
                            </div><div class="mb-3">
                                <label>Commodity</label>
                                <input type="text" name="comm" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_data" class="btn btn-primary">Save</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
