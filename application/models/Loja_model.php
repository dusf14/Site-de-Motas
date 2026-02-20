<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Documentos_model extends MY_Model {

    public __construct(){
        parent::construct();
        $this->table = 'motas'; // tabela das motas
    }

    public function index(){

    }
}