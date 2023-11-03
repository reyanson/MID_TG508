<!DOCTYPE html>
<html lang="en">
<head>
    <title>Deleted Bank Account Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-4">
        <h1 class="text-center">Deleted Bank Account Details</h1>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Bank Id</th>
                    <th>Bank Name</th>
                    <th>Branch</th>
                    <th>Account Number</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($deleted_details)) : ?>
                    <?php foreach ($deleted_details as $data) : ?>
                        <tr>
                            <td><?php echo $data->Bank_id; ?></td>
                            <td><?php echo $data->name; ?></td>
                            <td><?php echo $data->branch; ?></td>
                            <td><?php echo $data->account; ?></td>
                            <td>
                                <a href="<?php echo base_url('Account_con/permDeleteData/' . $data->Bank_id); ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to permanently delete this record?');">Permanent Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="5">No deleted bank accounts found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
