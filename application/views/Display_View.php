<!DOCTYPE html>
<html lang="en">
<head>
    <title>Display Data</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom styles */
        .table th {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <div class="container my-4">
        <h1 class="text-center">Bank Account Details</h1>
        <table class="table table-bordered table-striped mx-auto">
            <thead>
                <tr>
                    <th>Bank Id</th>
                    <th>Bank Name</th>
                    <th>Branch</th>
                    <th>Account Number</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($bank_details as $data) {
                    echo "<tr>";
                    echo "<td>" . $i . "</td>";
                    echo "<td>" . $data->name . "</td>";
                    echo "<td>" . $data->branch . "</td>";
                    echo "<td>" . $data->account . "</td>";
                    // Use a Bootstrap button for deletion
                    echo "<td><a class='btn btn-danger' href='deleteData?id=" . $data->id . "' onclick=\"return confirm('Are you sure you want to delete this record?');\">Delete</a></td>";
                    echo "</tr>";
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>
    
    <!-- Add Bootstrap and jQuery scripts at the end of the body for better performance -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
