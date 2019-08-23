<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class chat extends CI_Controller {

	 public function __construct(){
        parent::__construct();
         $this->load->helper(array('url','form'));
         $this->load->model(array('chat_model','user_model'));
    }
    public function index(){
        $data['users']=$this->user_model->allusers();
        $this->load->view('chatplate',$data);
    }
    public function search(){
        if(isset($_GET['submit'])){
            $word=$this->input->get();
                if(empty($word['search'])){
                    redirect('chat');
                }
                else{
                    $data['users']=$this->user_model->allusers($word['search']);
                    $this->load->view('chatplate',$data);
                }
        }
       
    }
    public function user_chat($id){
        $data['users']=$this->user_model->allusers();
        $data['chats']=$this->chat_model->allchats($id);
        $this->load->view('userschat',$data);
    }
}


