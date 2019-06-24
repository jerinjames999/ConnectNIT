<?php

class admin_model extends CI_Model{
    
    
    public function __construct(){
        parent::__construct();
    }
	 
	public function upload_article($article_data){
        return $this->db->insert("articles",$article_data);
    }
    
}