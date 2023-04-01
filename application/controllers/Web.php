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
	/**
	 * Product Detailed Page for this controller. 
	 *///$productID,$productSLUG
	public function productsDetailed()
	{
		$this->load->view('web/header');
		$this->load->view('web/product_details');
		$this->load->view('web/footer');
	}
	/**
	 * Cart 
	 */
	public function Cart()
	{
		$this->load->view('web/header');
		$this->load->view('web/cart');
		$this->load->view('web/footer');
	}
	/**
	 * Checkout 
	 */
	public function Checkout()
	{
		$this->load->view('web/header');
		$this->load->view('web/checkout');
		$this->load->view('web/footer');
	}
}
