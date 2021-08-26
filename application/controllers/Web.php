<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	/**
	 * Index Page for this controller. 
	 */
	public function index()
	{
		$this->load->view('web/header');
		$this->load->view('web/home');
		$this->load->view('web/footer');
	}
	/**
	 * About Page for this controller. 
	 */
	public function about()
	{
		$this->load->view('web/header');
		$this->load->view('web/about');
		$this->load->view('web/footer');
	}
	/**
	 * Product Page for this controller. 
	 */
	public function products()
	{
		$this->load->view('web/header');
		$this->load->view('web/products');
		$this->load->view('web/footer');
	}
}
