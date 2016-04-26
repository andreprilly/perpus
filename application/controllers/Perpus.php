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
	}

	/*
	| End of file Perpus.php
	*/