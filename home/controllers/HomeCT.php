<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeCT extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->view('header');
    }

    public function index()
    {
        if ( ! file_exists(APPPATH.'/views/index.php'))
        { show_404();}
        $this->load->view('index');
        $this->load->view('footer');
    }
}
