<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class comment extends CI_Controller {

      
    public function __construct(){
        parent::__construct();
         $this->load->helper(array('url','form'));
         $this->load->model('comment_model');
    }
    public function addcomment(){
        if(isset($_POST['comment'])){
            $error='';
            if(empty($_POST['comment'])){
                $error.='<p class="text-danger">enter some text</p>';
            }
        
            else{
                    $comment=$_POST['comment'];
                    $article_id=$_POST['article_id'];
                    $datenow=date("Y-m-d");
                    $timenow=date("H:i:s");

                    $data=array(
                        'comment_articleid'=$article_id,
                        'comment_text'=$comment,
                        'comment_date'=> $datenow,
                        'comment_time'=> $timenow,
                        'comment_uname'=> 'qwertyui'
                    );
                    if($this->comment_model->add_comment($data)!=1){
                        $error.='<label class="text-success">some error occured</label>';
                    }
                    else{
                        $error.='<label class="text-success">comment added</label>';
                        
                    }
               }
        }
    }
}