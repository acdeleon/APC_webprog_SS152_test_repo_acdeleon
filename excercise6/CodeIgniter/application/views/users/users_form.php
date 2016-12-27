<!doctype html>
<html>
    <head>
        <title>My Page</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
                background-image: url("assets/img/c.jpg");
<<<<<<< HEAD
            }
        </style>
    </head>
    <body>
=======

            }

        </style>
    </head>
    <body>

>>>>>>> 9afc5ee2d7f23a46327315593a84546dde784c55
        <h2 style="margin-top:0px">Users <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Name <?php echo form_error('Name') ?></label>
            <input type="text" class="form-control" name="Name" id="Name" placeholder="Name" value="<?php echo $Name; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nickname <?php echo form_error('Nickname') ?></label>
            <input type="text" class="form-control" name="Nickname" id="Nickname" placeholder="Nickname" value="<?php echo $Nickname; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Email <?php echo form_error('Email') ?></label>
            <input type="text" class="form-control" name="Email" id="Email" placeholder="Email" value="<?php echo $Email; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Phone Number <?php echo form_error('Phone_number') ?></label>
            <input type="text" class="form-control" name="Phone_number" id="Phone_number" placeholder="Phone Number" value="<?php echo $Phone_number; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Home Address <?php echo form_error('Home_address') ?></label>
            <input type="text" class="form-control" name="Home_address" id="Home_address" placeholder="Home Address" value="<?php echo $Home_address; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Gender <?php echo form_error('Gender') ?></label>
            <input type="text" class="form-control" name="Gender" id="Gender" placeholder="Gender" value="<?php echo $Gender; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Comments <?php echo form_error('Comments') ?></label>
            <input type="text" class="form-control" name="Comments" id="Comments" placeholder="Comments" value="<?php echo $Comments; ?>" />
        </div>
	    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('users') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>