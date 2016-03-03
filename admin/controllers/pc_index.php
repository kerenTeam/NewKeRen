<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pc_index extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->view('header');
    }

	public function anli()
	{
		// if ( ! file_exists(APPPATH.'index.php')){show_404();}
	    $this->load->view('case');
	    $this->load->view('footer');
	}
	public function about()
	{
		// if ( ! file_exists(APPPATH.'index.php')){show_404();}
	    $this->load->view('about');
	    $this->load->view('footer');
	}
	public function zhaop()
	{
		// if ( ! file_exists(APPPATH.'index.php')){show_404();}
	    $this->load->view('zhaop');
	    $this->load->view('footer');
	}
	public function banner()
	{
		// if ( ! file_exists(APPPATH.'index.php')){show_404();}
	    $this->load->view('banner');
	    $this->load->view('footer');
	}
	public function pageimg()
	{
		// if ( ! file_exists(APPPATH.'index.php')){show_404();}
	    $this->load->view('pageimg');
	    $this->load->view('footer');
	}
	public function addcase()
	{
		// if ( ! file_exists(APPPATH.'index.php')){show_404();}
	    $this->load->view('addcase');
	    $this->load->view('footer');
	}
	public function addzp()
	{
		// if ( ! file_exists(APPPATH.'index.php')){show_404();}
	    $this->load->view('addzp');
	    $this->load->view('footer');
	}
	public function editcase()
	{
		// if ( ! file_exists(APPPATH.'index.php')){show_404();}
	    $this->load->view('editcase');
	    $this->load->view('footer');
	}

	public function editzp()
	{
		// if ( ! file_exists(APPPATH.'index.php')){show_404();}
	    $this->load->view('editzp');
	    $this->load->view('footer');
	}
	
}