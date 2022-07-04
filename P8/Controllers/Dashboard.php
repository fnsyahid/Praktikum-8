<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
	{
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('dashboard/index');
        $this->load->view('footer');
	}
}
Footer
© 2022 GitHub, Inc.
Footer navigation
