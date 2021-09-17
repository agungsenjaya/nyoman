<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Service;
use App\Models\Booking;

class UserController extends BaseController
{
    protected $db;
    public function __construct(){
        if (user()->role != 'User') {
            header('Location: ' . base_url() . '/'); 
            exit();
        }
		$this->db = \Config\Database::connect();
	}
    public function user(){
        $user = user()->id;
        $query = $this->db->query("SELECT * FROM services WHERE (user_id = $user AND status = 'Booking')");
        $data = $query->getResult();
        echo view('user/user',$data);
    }
    public function profile(){
        echo view('user/profile');
    }
    public function service(){
        $user = user()->id;
        $query = $this->db->query("SELECT * FROM services WHERE user_id = $user");
        $data = $query->getResult();
        echo view('user/service',$data);
    }
    public function service_view($id){
        $query = $this->db->query("SELECT * FROM services WHERE id = $id");
        $data = $query->getResult();
        $us = $data[0]->id;
        // $queryy = $this->db->query("SELECT * FROM bookings WHERE service_id = $us");
        $queryy = $this->db->query("SELECT bookings.*,users.username,users.role FROM bookings INNER JOIN users ON bookings.user_id = users.id WHERE service_id = $us");
        $dataa = $queryy->getResult();
        echo view('user/service_view', compact('data','dataa'));
    }
    public function service_cancel($id){
        $service = new Service();
        $ops = $service->where('id',$id)->first();
        $service->where('id',$id)->first();
        $service->update($id,[
            'status'    => 'Cancel'
        ]);
        $booking = new Booking();
        $booking->insert([
            'user_id'   => $ops['user_id'],
            'service_id'   => $ops['id'],
            'keterangan'   => 'User telah membatalkan service',
            'created_at'    => date("Y-m-d H:i:s"),
        ]);
        return redirect()->back();
    }
    public function service_store(){
        $us = $this->request->getPost('user_id');
        $dat = $this->request->getPost('date');
        $kod;
        $dbku = $this->db->query("SELECT * FROM services WHERE (user_id = $us AND date = '$dat')");
        $result = $dbku->getResult();
        if ($result) {
            $varo = count($result);
            $kod = 'BG'. '-' . date('md', strtotime($dat)) . $us . $varo;
        }else{
            $kod = 'BG'. '-' . date('md', strtotime($dat)) . $us;
        };
        // Request Form
        $date = $dat;
        $user = $us;
        $code = $kod;
        $status = $this->request->getPost('status');
        $kategori = $this->request->getPost('kategori');
        $type = $this->request->getPost('type');
        $tingkat = $this->request->getPost('tingkat');
        $nomor = $this->request->getPost('nomor');
        $ket = $this->request->getPost('keterangan');
        $created_at = date("Y-m-d H:i:s");
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules(['date' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data valid, simpan ke database
        if($isDataValid){
            $service = new Service();
            $service->insert([
                "date" => $date,
                "user_id" => $user,
                "code" => $code,
                "status" => $status,
                "kategori" => $kategori,
                "type" => $type,
                "tingkat" => $tingkat,
                "nomor" => $nomor,
                "keterangan" => $ket,
                "created_at" => $created_at,
            ]);
            return redirect('user');
        };
    }
    public function service_repair(){
        echo view('user/service_repair');
    }
    public function service_painting(){
        echo view('user/service_painting');
    }
}
