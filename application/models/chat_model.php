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
        $query1=$this->db->get();
        
        $this->db->select('*');
        $this->db->from('chat');
        $this->db->or_where_in(array(
                                  "user1_id"=>$_SESSION['user_id'],
                                  "user2_id"=>$id
                                ));
        $query2=$this->db->get();
        
        if($query1->num_rows()==0 && $query2->num_rows()==0){
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
            return $result=$query->row_array();
            
            
        }
        else {
            if($query1->num_rows()==0){
                $result=$query2->row_array();
                return $result;
            }
            
            else{
                $result=$query1->row_array();
                return $result;
            }
        }
        
    }
}