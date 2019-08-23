<?php include_once('chatplate.php')?>
<div class="col-sm-9">
                    <a href="<?php echo site_url();?>user/profile/<?php if($chats['user1_id']!=$_SESSION['user_id']){echo $chats['user1_id']; } else{echo $chats['user2_id'];} ;?>">
                        <div class="row" style="background-color:#90efbc;">
                            <div class="col-12 text-left">
                                <div class="row">
                                    <div class="col-2">
                                         <img src="<?php echo base_url();?>assets/images/users/jane.png" alt="photo" class="img-fluid img-thumbnail">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class=" scrollcomment">
                        <div class="row">
                            <div class="col-12" style="height:610px">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-11">
                            <textarea id="comment" name="comment" class="comnt" placeholder="send" rows="1"></textarea>
                        </div>
                        <div class="col-1">
                            <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                            
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    
    
    </body>
</html>
