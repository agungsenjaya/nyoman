<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Service;

class ClientController extends BaseController
{
	protected $db;
	
	public function __construct(){
		$this->db = \Config\Database::connect();
	}
	public function home()
	{
		// $query = $this->db->query('SELECT * FROM services');
		// $results = $query->getResult();
		// $this->load->model('service');
		// $service = new Service;
		// $data['services'] =  $service->get();
		echo view('client/home');
	}
	public function service()
	{
		echo view('client/service');
	}
	public function contact() {
		echo view('client/contact');
	}
	public function check() {
		echo view('client/check');
	}
	public function how() {
		echo view('client/how');
	}
}
