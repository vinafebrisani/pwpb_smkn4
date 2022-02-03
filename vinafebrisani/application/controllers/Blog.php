<?php
class Blog extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

    }

    function index(){
        $data['title']  = "This Is Title";
        $data['content']  = "This is the content";
        $this->load->view('blog_view',$data);
    }
}