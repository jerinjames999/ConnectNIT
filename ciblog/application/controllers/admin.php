<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	 public function __construct(){
        parent::__construct();
         $this->load->helper(array('url','form'));
         $this->load->model('admin_model');
    }
    public function index(){
        
        $this->load->view('admin_panel');
    }
    public function form_submit_upload_article(){
        if(isset($_POST['upload']))
        {
        $this->form_validation->set_rules('title','Title','required|min_length[4]|max_length[100]|trim');
        $this->form_validation->set_rules('author','Author name','required|min_length[3]|max_length[45]|trim');
        $this->form_validation->set_rules('category','Category','required');
        $this->form_validation->set_rules('content','Content','required|min_length[20]');
        
            if($this->form_validation->run()==false){
                $this->load->view('admin_panel' );
                
            }
            else{
                $location=strtolower($_POST['category']);
                $config['upload_path']='assets/images/articles/'.$location;
                $config['allowed_types']='jpg|png|jpeg';
                $config['max_size']='2000';
                $this->load->library('upload',$config);
                    if(!$this->upload->do_upload('image'))
                    {
                        $error=array('error'=>$this->upload->display_errors());
                        $this->load->view('admin_panel',$error);
                    }
                    else{
                        $imgdata = array('upload_data' => $this->upload->data());
                        //$imgname=$imgdata['file_name'];
                        $imgname=$_FILES['image']['name'];
                       // $imgextension=$_FILES['image']['type'];
                        $data=$this->input->post();
                        $datenow=date("Y-m-d H:i:s");
                        $slug = date("Y-m-d-His").url_title($this->input->post('title'), 'dash', TRUE);
                        

                        $article_data=array(
                            "article_category"=>$data['category'],
                            "article_title"=>$data['title'],
                            "article_author"=>$data['author'],
                            "article_content"=>$data['content'],
                            "article_img"=>'assets/images/articles/'.$location.'/'.$imgname,
                            "slug_url"=>$slug,
                            "edited_date"=> $datenow
                        );
                        if($this->admin_model->upload_article($article_data)=='1'){
                               $data['$upload_data']='article uploading failed';
                               $this->load->view('admin_panel',$data);
                            
                          }
                        else{   
                               $data['$upload_data']='article uploaded successfully';
                               $this->load->view('admin_panel',$data); 

                            }
                    }
        
            
            }
            
            
            
        /*    
        $this->form_validation->set_rules('pwd','passord','required|min_length[5]');
        $this->form_validation->set_rules('cpwd','conform password','required|matches[pwd]');
       // $this->form_validation->set_rules('recaptua','recaptua','required|matches[recapt]');
        if($this->form_validation->run()==false){
            $this->signup();
        }
        else{
          $data=$this->input->post();
          //$hashedpwd = password_hash($data['pwd'],PASSWORD_DEFAULT);
          $hashedpwd = md5($data['pwd']);
          $datenow=date("Y-m-d");
            $data_array=array(
                "user_name"=>$data['name'],
                "user_uname"=>$data['uname'],
                "user_email"=>$data['email'],
                "user_pwd"=>$hashedpwd,
                "user_created"=> $datenow
            );
            //$this->user_model->insert_into_loginsystem($data_array);
            //redirect('user/signup');

          if($this->user_model->insert_into_loginsystem($data_array)=='1'){
              $this->session->set_flashdata("success","user has been created successfully");
              redirect('user/signup','refresh');
          }
        else{
               $this->session->set_flashdata("error","failed to create user");
               redirect('user/signup','refresh'); 
            }
        }
    }
    
    else{
       // redirect('user/signup','refresh');
        show_404();
    }*/
    }
     function check_categories($category){
      if(strcasecmp($category,'categories')=='0'){
          $this->form_validation->set_message('check_categories', 'The {field} field can not be the empty ');
                        return FALSE;
      }
    }
}
}