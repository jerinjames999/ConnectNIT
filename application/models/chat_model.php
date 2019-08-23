<?php

class chat_model extends CI_Model{
    
    
    public function __construct(){
        parent::__construct();
    }
	 
	
    public function allchats($id){
        $this->db->select('*');
        $this->db->from('chat');
        $this->db->where(array("user1_id"=>$id,
                                "user2_id"=>$_SESSION['user_id']));
        $this->db->or_where(array("user2_id"=>$id,
                                  "user1_id"=>$_SESSION['user_id']));
        $query=$this->db->get();
        
        if($query->num_rows()==0){
            $new_chat=array(
                 "user1_id"=>$_SESSION['user_id'],
                 "user2_id"=>$id
            );
            $this->db->insert("chat",$new_chat);
            
            $this->db->select('*');
            $this->db->from('chat');
            $this->db->where(array("user2_id"=>$id,
                                  "user1_id"=>$_SESSION['user_id']));
            $query=$this->db->get();
            return $query->row_array();
        }
        $result=$query->row_array();
        return $result;
    }
}