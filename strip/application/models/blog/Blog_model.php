<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function do_getAllnum(){
        return $this->db->count_all('blog');
    }

    public function get_index(){
        $this->db->select("*");
        $this->db->from("blog");
        $this->db->join("userinfor","blog.wid=userinfor.wid");
        $this->db->where("blog.checked=1");
        $this->db->order_by('time','DESC');
        $query=$this->db->get();
        return $query->result();
    }

}