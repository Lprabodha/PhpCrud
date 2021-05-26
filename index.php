<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dashboard</title>
        <!--        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
                <link rel="stylesheet" type="text/css" href="css/style.css">
                <script  type="text/javascript"src="js/jquery-2.2.4.min.js"></script>
                <script type="text/javascript" src="js/bootstrap.js"></script>
                <script type="text/javascript">-->


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
        <link type="text/css" href="css/style.css">

        <script type="text/javascript">
            $(document).ready(function () {
                $('[data-toggle="tooltip"]').tooltip();

            });
        </script>
    </head>
    <body>

        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header clearfix">
                            <h2 class="pull-left">Employees Details </h2>
                            <a href="create.php" class="btn btn-success pull-right">Add New Employee</a>
                        </div>
                        <?php
                        // Include config file's

                        require_once './config.php';

                        //Attempt select query execution
                        $sql = "SELECT * FROM employess";
                        if ($result = $mysqli->query($sql)) {
                            if ($result->num_rows > 0) {
                                echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                echo "<tr>";
                                echo "<th>id</th>";
                                echo "<th>Name</th>";
                                echo "<th>Address</th>";
                                echo "<th>Salary</th>";
                                echo "<th>Action</th>";
                                echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while ($row = $result->fetch_array()) {
                                    echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td>" . $row['Name'] . "</td>";
                                    echo "<td>" . $row['Address'] . "</td>";
                                    echo "<td>" . $row['Salary'] . "</td>";
                                    echo "<td>";

                                    echo "<a href='read.php?id=" . $row['id'] . "' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";

                                    echo "<a href='update.php?id=" . $row['id'] . "' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                    echo "<a href='delete.php?id=" . $row['id'] . "' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                    echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";
                                echo "<table>";

                                //free result set
                                $result->free();
                            } else {
                                echo "<p class='lead'><em>No records were founds.</em></p>";
                            }
                        } else {
                            echo "ERROR: Could not able to execute $sql." . $mysqli->error;
                        }
                        $mysqli->close();
                        ?>
                    </div>

                </div>

            </div>

        </div>












    </body>
</html>
