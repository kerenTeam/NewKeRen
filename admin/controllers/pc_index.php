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
	    $this->load->view('pc_case');
	    $this->load->view('footer');
	}
	public function zhaop()
	{
		// if ( ! file_exists(APPPATH.'index.php')){show_404();}
	    $this->load->view('pc_zhaop');
	    $this->load->view('footer');
	}
	public function addcase()
	{
		// if ( ! file_exists(APPPATH.'index.php')){show_404();}
	    $this->load->view('pc_addcase');
	    $this->load->view('footer');
	}
	public function addzp()
	{
		// if ( ! file_exists(APPPATH.'index.php')){show_404();}
	    $this->load->view('pc_addzp');
	    $this->load->view('footer');
	}
	
}