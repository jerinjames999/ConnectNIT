<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class news_feeds extends CI_Controller {

	 public function __construct(){
        parent::__construct();
         $this->load->helper(array('url','form'));
         $this->load->model(array('admin_model','news_model'));
    }
    public function index(){
        $data['news_feeds']=$this->news_model->get_news_feeds();
        $this->load->view('header');
        $this->load->view('news_feeds',$data);
        $this->load->view('footer');
    }
    public function upload_news_feeds(){
        if(isset($_POST['uploadfeed']))
        {
            $config['upload_path']='assets/images/news_feeds';
            $config['allowed_types']='jpg|png|jpeg';
            $config['max_size']='5000';
            $this->load->library('upload',$config);
            
            if(empty($_POST['feedtext']) && !$this->upload->do_upload('feedimage')){
                    $this->session->set_flashdata('error', 'Enter something to post');
                    /*$this->load->view('header');
                    $this->load->view('news_feeds');
                    $this->load->view('footer');*/
                redirect('news_feeds');
            }
            else{       ;
                        $datenow=date("Y-m-d H:i:s");
                       // $imgdata = array('upload_data' => $this->upload->data());
                        //$imgname=$imgdata['file_name'];
                        $imgname=$_FILES['feedimage']['name'];
                       // $imgextension=$_FILES['image']['type'];
                        $data=$this->input->post();
                        
                            $feed_data=array(
                            "news_feed_content"=>$data['feedtext'],
                            "user_id"=>$_SESSION['user_id'],
                            "news_feed_img"=>$imgname,
                            "edited_date"=>$datenow
                            );
                            if($this->news_model->news_feed($feed_data)=='1'){
                                $this->session->set_flashdata('success', 'Successfully posted');
                                /*$this->load->view('header');
                                $this->load->view('news_feeds');
                                $this->load->view('footer');*/
                                redirect('news_feeds');
                          }
                        else{   
                                $this->session->set_flashdata('error', 'Something went wrong');
                                /*$this->load->view('header');
                                $this->load->view('news_feeds');
                                $this->load->view('footer');*/
                                redirect('news_feeds');


                            }
            }
            
    }
    }
}