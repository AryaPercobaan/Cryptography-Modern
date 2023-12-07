<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('assets/_header.php');
		$this->load->view('index.php');
		$this->load->view('assets/_footer.php');
	}

	public function Simulasi()
	{
		$this->load->view('assets/_header.php');
		$this->load->view('simulasi.php');
		$this->load->view('assets/_footer.php');
	}

	public function Login()
	{
		$this->load->view('assets/_header.php');
		$this->load->view('login.php');
		$this->load->view('assets/_footer.php');
	}

}
