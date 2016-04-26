<?php
	
	class Perpus extends CI_Controller
	{
		public function index()
		{
			$this->load->view('index');
		}

		public function about()
		{
			$this->load->view('about');
		}

		public function contact()
		{
			$this->load->view('contact');
		}
	}

	/*
	| End of file Perpus.php
	*/