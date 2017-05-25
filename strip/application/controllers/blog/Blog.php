<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller{
public function __construct()
{
    parent::__construct();
    $this->load->model("blog/Blog_model");
}

    public function index(){
        $allNume = $this->Blog_model->do_getAllnum();
        $page = $this->uri

        $data = $this->Blog_model->get_index();
        $rs["blog"] =  $data;
        $this->load->view("blog/blog.php",$rs);
    }
}
?>