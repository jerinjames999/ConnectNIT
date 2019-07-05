<?php

class admin_model extends CI_Model{
    
    
    public function __construct(){
        parent::__construct();
    }
	 
	public function upload_article($article_data){
        return $this->db->insert("articles",$article_data);
    }
    public function list_articles($category='all'){
        if($category=='all'){                                 /*sort according to order by join*/
            $this->db->select('articles.*');
            $this->db->from('articles');
            $this->db->join('categories','articles.article_category=categories.category_value');
            //$this->db->group_by('article_category');
            $this->db->order_by('category_order','ASC');
        }
        else{
            $this->db->select('*');
            $this->db->from('articles');
            $this->db->where('article_category',$category);
        }
        $query=$this->db->get();
        return $query->result_array();
    }
    public function check_url($url){
        $this->db->select('slug_url');
        $this->db->from('articles');
        $this->db->where('slug_url',$url);
        $query=$this->db->get();
        if($query->num_rows()>0){
            return 1;
        }
        else{
            return 0;
        }
    }
    public function get_category($url){
        $this->db->select('*');
        $this->db->from('articles');                       
        $this->db->where('slug_url',$url);
        $query=$this->db->get();
        $category=$query->row_array();
        return $category['article_category'];
    }
    public function upload_poll($poll_data){
        return $this->db->insert("polls",$poll_data);
    }
    public function list_categories_not1st(){
        $max_category_order=$this->db->select_max('category_order')->from('categories')->get()->row_array()['category_order'];
        $this->db->select('*');
        $this->db->from('categories');
        $this->db->where_not_in('category_order',$max_category_order);
        $this->db->order_by('category_order','ASC');
        $query=$this->db->get();
        $data['max_category_order']=$max_category_order;
        $data['category']=$query->result_array();
        return $data;
        
    }
    public function list_all_categories(){
        $this->db->select('*');
        $this->db->from('categories');
        $this->db->order_by('category_order','ASC');
        $query=$this->db->get();
        $data=$query->result_array();
        return $data;
        
    }
    public function add_new_category($category_data){
        $this->db->set('category_order','category_order+1', FALSE);
        $this->db->where("category_order >=",$category_data['category_order']);
        $this->db->update("categories");
        $this->db->insert("categories",$category_data);
        return 1;
    }
        
}