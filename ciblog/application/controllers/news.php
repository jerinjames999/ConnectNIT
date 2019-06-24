<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class news extends CI_Controller {

      
	 public function __construct(){
        parent::__construct();
         $this->load->helper(array('url','form'));
         $this->load->model('news_model');
     }
    
    /*public function show_article(){
        $slug='2019/06/21/international/renault-considering-fiat-s-offer-to-merge-into-a-new-auto-gianth';
        $data=$this->article_model->get_this_slug_article($slug);
        $this->load->view('newsdetail',$data);
    }*/
}
  