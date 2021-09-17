<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RESTful\ResourceController; 

class Bookings extends ResourceController
{
	protected $format       = 'json';
    protected $modelName    = 'App\Models\Booking';

	public function index()
	{
		return $this->respond($this->model->findAll(), 200);
	}
}
