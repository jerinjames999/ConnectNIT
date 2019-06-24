<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

      
	 public function __construct(){
        parent::__construct();
         $this->load->helper(array('url','form'));
         $this->load->model('news_model');
    }
       

    
     public function index(){
        
            
        
        $data['main_news'] = $this->news_model->get_category('main_news');
        $data['international'] = $this->news_model->get_category('international');
        $data['national'] = $this->news_model->get_category('national');
        $data['politics'] = $this->news_model->get_category('politics');
        $data['business'] = $this->news_model->get_category('business');
        $data['editorials'] = $this->news_model->get_category('editorials');
        $data['obituaries'] = $this->news_model->get_category('obituaries');
        $data['education'] = $this->news_model->get_category('education');
        $data['sports'] = $this->news_model->get_category('sports');
        $data['opinion'] = $this->news_model->get_category('opinion');

        $this->load->view('header');
        $this->load->view('home', $data);
        $this->load->view('footer');
     
     }
    public function page($category='home'){
        if($category!='home'){
            $data[$category] = $this->news_model->get_category($category);
            $this->load->view('header');
            $this->load->view('home', $data);
            $this->load->view('footer');
        }
        else{
            redirect('main/index');
        }
    }
    
    public function view($slug = NULL)
    {        
            $data['news_item'] = $this->news_model->get_news($slug);
            if (empty($data['news_item']))
            {    
                   show_404();
            }
        else{
              $this->news_model->update_views($slug);
            //$data['title'] = $data['news_item']['article_title'];

            $this->load->view('header');
            $this->load->view('newsdetail', $data);
            $this->load->view('footer');
        }
    }
    
    
    
    
}
