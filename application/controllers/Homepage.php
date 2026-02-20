<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url'); // carrega um helper aqui
	}
	
	public function index() 
	{
		//$this->load->view('comuns/header');

		$this->load->view('homepage_view');
		$this->load->view('comuns/footer');
	}

	public function loja()
	{
		$this->load->model('loja_model');

		#dados returados da tabela bd
		$dados['loja'] = $this->Loja_model->listar();
		$this->load->view('loja_view', $dados);
		print_r($dados);

		/*
		$this->load->view('loja_view');
		$this->load->view('comuns/footer');
		*/
	}
}
