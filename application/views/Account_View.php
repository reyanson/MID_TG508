<!DOCTYPE html>
<html lang="en">
<head>
    <title>Insert Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-4">
        <h1 class="text-center">Insert Bank Account Details</h1>
        <?php //echo validation_errors(); ?>
        <?php echo form_open(); ?>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form>
                    <div class="form-group">
                        <label for="bname">Bank Name</label>
                        <input type="text" class="form-control" name="bname" id="bname" value="<?php echo set_value('bname'); ?>">
                        <small class="text-danger"><?php echo form_error('bname'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="branch">Branch</label>
                        <input type="text" class="form-control" name="branch" id="branch" value="<?php echo set_value('branch'); ?>">
                        <small class="text-danger"><?php echo form_error('branch'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="accnum">Account Number</label>
                        <input type="text" class="form-control" name="accnum" id="accnum" value="<?php echo set_value('accnum'); ?>">
                        <small class="text-danger"><?php echo form_error('accnum'); ?></small>
                    </div>
                    <button type="submit" class="btn btn-primary" name="save" id="save">Save</button>
                </form>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
