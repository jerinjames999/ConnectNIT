<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap/css/bootstrap-grid.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap/css/bootstrap-grid.css.map">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap/css/bootstrap-grid.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap/css/bootstrap-grid.min.css.map">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap/css/bootstrap.css.map">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap/css/bootstrap.min.css.map">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap/css/bootstrap-reboot.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap/css/bootstrap-reboot.css.map">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap/css/bootstrap-reboot.min.css.map">
    <title>chat:newspaper</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fontawesome/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/header.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/chat.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 text-center">
                            <img class="img-responsive img-fluid" style="max-height:300px;" src="<?php echo base_url();?>assets/images/users/jane.png">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-12 text-center">
                            <h6><?php echo $profile['user_uname'];?></h6>
                            <h4><?php echo $profile['user_name'];?></h4>
                            <a href="mailto:jerinjameskarippa999@gmail.com"><p><?php echo $profile['user_email'];?></p></a>
                            <p>418ma5017@nitrkl.ac.in</p>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-4 text-center">
                            <button type="submit">ADD</button>
                        </div>
                        <div class="col-4 text-center">
                            <button type="submit">EDIT</button>
                        </div>
                        <div class="col-4 text-center">
                            <a href="<?php echo site_url('chat')?>"><button type="submit"><i class="fa fa-comments" aria-hidden="true"></i></button></a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>