<?php

class comment_model extends CI_Model{
    
    
    public function __construct(){
        parent::__construct();
    }
	 
	public function add_comment($article_data){
        return $this->db->insert("comments",$article_data);
    }
    public function all_comments($id){
        $this->db->select('*');
        $this->db->from('comments');
        $this->db->where(array(
               "comment_articleid"=>$id,
               "parent_comment_id"=>0
       ));
        $this->db->order_by('comment_id','DESC');
        $query=$this->db->get();
        return $query;
    }
}
