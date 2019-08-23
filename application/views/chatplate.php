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
        
        
       <!-- <script type="text/javascript">
            $(document).ready(function(){
                $(".chater").click(function(event) {
                    event.preventDefault();
                    var href = $(this).attr('href');
                     $.ajax({
                        type: "POST",
                        url: href,
                        success: function(res){
                        }
                        });
                    });
                });
        </script>
        -->
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    
                    <a href="<?php echo site_url();?>user/profile/<?php echo $_SESSION['user_id'];?>">
                        <div class="row" style="background-color:#dbdbdb;">
                            <div class="col-12 text-left">
                                <div class="row">
                                    <div class="col-4">
                                            <img src="<?php echo base_url();?>assets/images/users/jane.png" alt="photo" class="img-fluid">
                                    </div>
                                    <div class="col-8">
                                        <h3><?php echo $_SESSION['username'];?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="row">
                          <div class="col-12 text-left search">
                              <?php echo form_open('chat/search',array('method'=>'get'));?>
                               <input type="search" placeholder="Search.." maxlength="25" name="search" autocomplete="on">
                               <button type="submit" name="submit" class=" btn-secondary"><i class="fas fa-search"></i></button>
                              <?php echo form_close()?>
                          </div>
                    </div>
                    <div class="scroller">
                        <div class="row">
                            <?php foreach($users as $user):?>
                                <?php if($user['user_id']!=$_SESSION['user_id']){?>
                                <div class="col-12 chater">
                                    <a class="chater" href="<?php echo site_url();?>chat/user_chat/<?php echo $user['user_id'];?>">
                                        <div class="row ">
                                            <div class="col-3">
                                                 <img src="<?php echo base_url();?>assets/images/users/jane.png" alt="photo" class="img-fluid img-thumbnail">
                                            </div>
                                            <div class="col-9">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h5><?php echo $user['user_name'];?></h5>
                                                    </div>
                                                    <div class="col-12">
                                                        <p><?php echo $user['user_uname'];?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php }?>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
                