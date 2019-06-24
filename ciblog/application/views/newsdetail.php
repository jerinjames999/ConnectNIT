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
     

    <title>newspaper</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/newsdetail.css">
    </head>
    <body>
     <div class="articlepage">
        <div class="row">
            <div class="col-lg-9 col-12">
                <div class="row newshead">
                    <div class="col-12 text-center my-auto">
                    <h2><?php echo $news_item['article_title']; ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center my-auto">
                    <h6>By <?php echo $news_item['article_author']; ?></h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center my-auto">
                    <h6><?php echo $news_item['edited_date']; ?></h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center my-auto">
                    <h6>20 mins ago</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center my-auto">
                        <figure class="figure-caption">
                             <img src="<?php echo base_url().$news_item['article_img'];?>" class="img-fluid">
                             <figcaption class="figure-caption "><?php echo $news_item['article_description'];?></figcaption>
                        </figure>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-left my-auto">
                    <p class="explanation"><?php echo $news_item['article_content']; ?></p>
                        
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-2">
                        </div>
                        <div class="col-8 text-center my-auto poll">
                           <div class="row pollsection">
                                <h2>The name of the planet is earth. do you agree?</h2>
                               <div class="col-12 text-center">
                                <form>
                                    <div class="row">
                                        <div class="col-3"></div>
                                        <div class="col-3 text-center"><input type="checkbox" name="pollagree"><label>Agree</label><p>(42%)</p></div>
                                        <div class="col-3 text-center"><input type="checkbox" name="polldisagree"><label>Disagree</label><p>(58%)</p></div>
                                        <div class="col-3"></div>
                                    </div>
                                </form>
                                   </div>
                           </div>
                            <div class="row pollsection">
                                <h2>The name of the planet is earth. do you agree?</h2>
                                <form>
                                    <div class="row">
                                        <div class="col-3"></div>
                                        <div class="col-3 text-center"><input type="checkbox" name="pollagree1"><label>Agree</label><p>(42%)</p></div>
                                        <div class="col-3 text-center"><input type="checkbox" name="polldisagree1"><label>Disagree</label><p>(58%)</p></div>
                                        <div class="col-3"></div>


                                    </div>
                                </form>
                           </div> 
                        </div>
                        
                        <div class="col-2">
                        </div>
                    </div>
                </div> 
                <div class="row">
                <!--for like and comments-->
                </div> 
            </div>
            <div class="col-lg-3 col-12 mostpplur">
                
                 <h3>Most popular:-</h3>
                
                <div class="row">
                    <div class="col-lg-6 col-3 text-center">
                                                
                <!--img of 1:1 ratio-->

                        <a href="#"> <img src="<?php echo base_url();?>assets/images/articles/eg.jpg" alt="world "></a>
                    </div>
                    <div class="col-6">
                        <h5>world's best university</h5>
                        <p>6mins ago</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-3 text-center">
                                                
                <!--img of 1:1 ratio-->

                        <a href="#"> <img src="<?php echo base_url();?>assets/images/articles/eg.jpg" alt="world "></a>
                    </div>
                    <div class="col-6">
                        <h5>world's best university</h5>
                        <p>6mins ago</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-3 text-center">
                                                
                <!--img of 1:1 ratio-->

                        <a href="#"> <img src="<?php echo base_url();?>assets/images/articles/eg.jpg" alt="world"></a>
                    </div>
                    <div class="col-6">
                        <h5>world's best university</h5>
                        <p>6mins ago</p>
                    </div>
                </div>
            </div>
        </div>
         <div class="row">
             <div class="col-12">
             </div>
     </div>
    </div>
    </body>
</html>
