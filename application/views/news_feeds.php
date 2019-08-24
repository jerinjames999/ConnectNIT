<!DOCTYPE html>

<!--images should be in 1:1 ratio-->
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
     

    <title>ConnectNIT:home</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/home.css">
    </head>
    
    
    <body>
        <div class="container">
            <?php echo form_open_multipart('news_feeds/upload_news_feeds');?>
                <div class="card">

                                  <?php if($this->session->flashdata('success')){ ?>
                                  <div class="row text-center my-auto"><div class="cl-12"> <?php echo $this->session->flashdata('success'); ?> </div></div>
                                    <?php } else{  ?>
                                    <div class="row text-center my-auto"><div class="cl-12"> <?php echo $this->session->flashdata('error'); ?> </div> </div>   
                                   <?php  } ?>


                                <div class="card-header"><b>Post</b></div>
                                <div class="card-body">
                                    <input type="text" name="feedtext" placeholder="What's in your mind" style=" border: 2px solid white; border-radius: 4px; height: 30px; width: 100%; outline: none;">
                                    <input type="file" name="feedimage">
                                </div>
                                <div class="card-footer" align="left">
                                    <button class="btn btn-primary" name="uploadfeed" type="submit">Post</button>
                                    <br>
                                    <br>
                                </div>
                    </div>
                <?php echo form_close();?>
            <style>
                .cbody{
                    background-color: #efefef;
                }
                .cbody:hover{
                    background-color: #e9e9e9;
                }
            
            </style>
            
                <?php foreach($news_feeds as $news_feed):?>
            <div class="card">
                          
                        <div class="card-header"><b><?php echo $news_feed['user_id']; ?></b></div>
                
                        <div class="card-body text-center cbody">
                            <p class="text-left"><?php echo  $news_feed['news_feed_content']; ?></p>
                            <?php if($news_feed['news_feed_img']!=''){ ?>
                            <img src="<?php echo base_url();?>assets/images/news_feeds/<?php echo $news_feed['news_feed_img']; ?>" width=60%; >
                            <?php }?>
                        </div>
                
                        <div class="card-footer" align="right">
                            <input type="text" name="feedtext" placeholder="comment here..." style=" border: 2px solid white; border-radius: 4px; height: 30px; width: 100%; outline: none;">
                            <button class="btn btn reply" name="uploadfeed" type="submit">Post</button>
                        </div>
                
            </div>
            <?php endforeach?>
            
            
            
            
        </div>
    </body>
</html>

