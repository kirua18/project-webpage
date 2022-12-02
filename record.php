<?php
 require 'dbcon.php';


 if(isset($_GET['page']))
 {
   $page = $_GET['page'];
 }
 else
 {
   $page = 1;
 }
 
 
  $num_per_page =10;
  $start_form = ($page-1)*10;
 
  $query = " select * from project limit $start_form,$num_per_page ";
  $result = mysqli_query($con,$query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="background.css">
    
    <title>Document</title>
</head>
    <body>
    <div class="main">
        <div class="container mt-0">

            <?php include('message.php'); ?>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-center">
                                <h4>Records
                                    <a href="project-create.php" style="margin: 3px;" class="btn btn-primary float-end">Add Data</a>
                                    <a href="search.php" style="margin: 3px;" class="btn btn-primary float-end">Home</a>
                                </h4>
                                    <div class="card-body">

                                        <table class="table talbe-striped">
                                            <tr class="bg-success text-white">
                                                 <td> User ID </td>
                                                    <td> Name </td>
                                                     <td> Ref.no </td>
                                                     <td> Region</td>
                                                     <td> Year Appointed</td>
                                                     <td> Fits Center Location</td>
                                                     <td> Province</td>
                                                     <td> Commodity</td>
                                            </tr>
               
                                            <tr>
                                                 <?php
                                                     while($project=mysqli_fetch_assoc($result))
                                                        {
                                                 ?>
                                                    <td> <?php echo $project['id']?></td>
                                                    <td> <?php echo $project['name']?></td>
                                                    <td> <?php echo $project['refnum']?></td>
                                                    <td> <?php echo $project['reg']?></td>
                                                    <td> <?php echo $project['yearp']?></td>
                                                    <td> <?php echo $project['fits']?></td>
                                                    <td> <?php echo $project['prov']?></td>
                                                    <td> <?php echo $project['comm']?></td>
                                             </tr>
                                                <?php
                                                    }
                                                    ?>       


                                        </table>
                                        <?php
                                        $pr_query = " select * from project ";
                                        $pr_result = mysqli_query($con,$pr_query);
                                        $totalrecord = mysqli_num_rows($pr_result);
                                        //echo $totalrecord;
                                        $totalpages = ceil ($totalrecord/$num_per_page);
                                            //echo $totalpages;

                                        for($i=1;$i<=$totalpages;$i++)
                                         {
                                         echo "<a href='record.php?page=".$i."' class='btn btn-success'>$i</a>";
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>
    
</html>