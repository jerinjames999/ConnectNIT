<?php
class news_model extends CI_Model{
    
    
    public function __construct(){
        parent::__construct();
    }
    public function get_news($slug = FALSE)
     {
        if ($slug === FALSE)
        {
                $query = $this->db->get('articles');
                return $query->result_array();
        }

        $query = $this->db->get_where('articles', array('slug_url' => $slug));
        return $query->row_array();
     }
    public function get_category($category) {
            $this->db->select('*');
            $this->db->from('articles');
            $this->db->where(array("article_category"=>$category));
            $this->db->order_by('article_views','DESC');
            $query=$this->db->get();
            return $query->result_array();
        }
    public function update_views($slug){
        $this->db->where("slug_url",$slug);
        $query=$this->db->get('articles');
        $result=$query->row_array();
        $result['article_views']=$result['article_views']+1;
        
        $this->db->where("slug_url",$slug);
        $this->db->update("articles",$result);
    }
}