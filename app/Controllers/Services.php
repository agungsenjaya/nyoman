<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RESTful\ResourceController; 

class Services extends ResourceController
{
	protected $format       = 'json';
    protected $modelName    = 'App\Models\Service';

	public function index()
	{
		return $this->respond($this->model->findAll(), 200);
	}
}
