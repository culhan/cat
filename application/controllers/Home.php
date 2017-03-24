<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Public_Controller {

    public function __construct()
    {
        parent::__construct();
    }


	public function index()
	{
		$this->data['images'] = $this->ion_auth->allData('home_images')->result();
		// print_r($data['images']);exit;
		$this->load->view('public/home', $this->data);
	}
}
