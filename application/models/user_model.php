<?php

class user_model extends CI_Model{
    
    
    public function __construct(){
        parent::__construct();
    }
	 
	public function insert_into_loginsystem($data_array)
	{
        return $this->db->insert("login",$data_array);
        
	}
    public function get_user($data_array)
	{
       $this->db->select("*");
       $this->db->from("login");
       $this->db->where(array(
       "user_uname"=>$data_array['user_uname'],
       "user_pwd"=>$data_array['user_pwd']
       ));
       $query=$this->db->get();
       $result=$query->row_array();
        if($result['user_uname']==$data_array['user_uname']){
             $this->db->where("user_uname",$result['user_uname']);
             $this->db->update("login",$data_array);
            
            $userdata=array(
                'user_logged'=>true,
                'user_type'=>$result['user_type'],
                'user_id'=>$result['user_id'],
                'username'=>$result['user_uname']
            );
            
            $this->session->set_userdata($userdata);
             
            return '1';
        }
        else{
            return '0';
        }
	}
    
    
    
    
   public function select_user_pwd(){
  // $this->db->select("*");
   //$query=$this->db->get("users");
   /*$this->db->select("name,email");
   $this->db->from("users");
   $query=$this->db->get();*/
   /*$this->db->select("*");
   $this->db->from("users");
   $this->db->where("email","sanjay@gmail.com");*/
   $this->db->select("user_pwd");
   $this->db->from("login");
   $this->db->where("user_email","jerinjameskarippa999@gmail.com"); 
   $query=$this->db->get();
   $result=$query->row_array();
   return $result['user_pwd'];
  }
    public function allusers($word=NULL){
        if($word!=NULL){
            $this->db->select("*");
            $this->db->from("login");
            $this->db->like("user_name",$word);
            $this->db->or_like("user_uname",$word);
            $query=$this->db->get();
            $result=$query->result_array();
            return $result;
        }
        else{
        $this->db->select("*");
        $this->db->from("login");
        $query=$this->db->get();
        $result=$query->result_array();
        return $result;
        }
    }
    public function fetch_user($id=NULL){
        $this->db->select("*");
        $this->db->from("login");
        $this->db->where("user_id",$id);
        $query=$this->db->get();
        $result=$query->row_array();
        return $result;
    }
}