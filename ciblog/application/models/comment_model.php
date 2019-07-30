<?php

class comment_model extends CI_Model{
    
    
    public function __construct(){
        parent::__construct();
    }
	 
	public function add_comment($article_data){
        return $this->db->insert("comments",$article_data);
    }
}