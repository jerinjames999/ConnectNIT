<?php
class poll extends CI_Controller {

	 public function __construct(){
        parent::__construct();
         $this->load->helper(array('url','form'));
         $this->load->model('poll_model');
    }
    public function view($category='all'){
        if($category!='all'){
            $poll[$category]=$this->poll_model->view_poll($category);
        }
        else{
            $poll['main_news']=$this->poll_model->view_poll('main_news');
            $poll['international']=$this->poll_model->view_poll('international');
            $poll['national']=$this->poll_model->view_poll('national');
            $poll['politics']=$this->poll_model->view_poll('politics');
            $poll['business']=$this->poll_model->view_poll('business');
            $poll['editorials']=$this->poll_model->view_poll('editorials');
            $poll['obituaries']=$this->poll_model->view_poll('obituaries');
            $poll['education']=$this->poll_model->view_poll('education');
            $poll['sports']=$this->poll_model->view_poll('sports');
            $poll['opinion']=$this->poll_model->view_poll('opinion');
        }
        
        
        $this->load->view('',$poll);
  }
    public function poll_slug($slug){
       $data=$this->poll_model->view_poll_slug($slug);
       return $data;
    }
    public function poll_submit(){
        if(isset($_POST['ans'])){
            $column=$_POST['ans'];/* it is column name to increment */
            $id=substr($_POST['id'],7);
             $data=array(
                 'id'=>$id,
                 'option'=>$column
             );
           $this->poll_model->add_poll($data); 
        }
    }
}







    




