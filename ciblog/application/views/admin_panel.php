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

     

    <title>Admin:newspaper</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/admin.css">    
    </head>
    
    
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>ADMIN PANEL</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <style>
                       .error{
                           color: red;
                           font-weight: 500;
                           font-size: 13px;
                       }
                   </style>
                    
                    
                    <?php 
                        echo form_open_multipart('admin/form_submit_upload_article');
                   
                        //if($this->session->flashdata('success')){ ?>
                   
                   <div class="row text-center my-auto"> <div class="cl-12"> <?php // echo $this->session->flashdata('success'); ?> </div></div>
                    <?php //} ?>
                     <? php //else{  ?>
                    <div class="row text-center my-auto"><div class="cl-12"> <?php //echo $this->session->flashdata('error'); ?> </div> </div>   
                   <?php  //} ?>
                    
                    
                    
                    
                    
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <?php echo form_error("title",'<h6 class="col-sm-12 text-center my-auto error">','</h6>'); ?>
                                            <input type="text" name="title" placeholder="Title" value="<?php echo set_value('title'); ?>">
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <?php echo form_error("author",'<h6 class="col-sm-12 text-center my-auto error">','</h6>'); ?>
                                            <input type="text" name="author" placeholder="Author" value="<?php echo set_value('author'); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            
                                            <select name="category">
                                                <option value="main_news">MAIN NEWS</option>
                                                <option value="international">INTERNATIONAL</option>
                                                <option value="national">NATIONAL</option>
                                                <option value="politics">POLITICS</option>
                                                <option value="business">BUSINESS</option>
                                                <option value="editorials">EDITORIAL</option>
                                                <option value="obituaries">OBITUARIES</option>
                                                <option value="education">EDUCATION</option>
                                                <option value="sports">SPORTS</option>
                                                <option value="opinion">OPINION</option>
                                            </select>
                                            
                                        </div>
                                        <div class="col-md-12 text-center">
                                            
                                              <input type="file" name="image"> <?php if(isset($error)){echo $error;}?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    
                                    <?php echo form_error("content",'<h6 class="col-sm-12 text-center my-auto error">','</h6>'); ?>
                                    
                                    <textarea rows="20" cols="100" placeholder="content..." name="content" value="<?php echo set_value('content'); ?>"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button name="upload">upload article</button>
                                </div>
                            </div>
                     <?php 
                         echo form_close();
                                if(isset($upload_data)){
                                    echo $upload_data;
                                }
                      ?>
                    
                </div>
            </div>
        </div>
    </body>
</html>