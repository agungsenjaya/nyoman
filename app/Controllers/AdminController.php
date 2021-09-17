<?php

namespace App\Controllers;


use App\Controllers\BaseController;
use App\Models\Service;
use App\Models\Booking;

class AdminController extends BaseController
{
    protected $db;
    public function __construct(){
        if (user()->role != 'Admin') {
            header('Location: ' . base_url() . '/'); 
            exit();
        }
		$this->db = \Config\Database::connect();
	}
    public function admin(){
        $dating = date('Y-m-d');
        // $dating = '2021-07-15';
        $antri = $this->db->query("SELECT * FROM services WHERE (date = '$dating')");
        $antrii = $antri->getResult();

        $user = $this->db->query("SELECT * FROM users");
        $userr = $user->getResult();

        $service = $this->db->query("SELECT * FROM services");
        $servicee = $service->getResult();
        
        $booking = $this->db->query("SELECT * FROM bookings");
        $bookingg = $booking->getResult();

        $rog = array();
        for ($i=0; $i < count($bookingg); $i++) { 
            $dat = $bookingg[$i];
            if ($dat->price) {
                array_push($rog, streplace($dat->price));
            }
        }
        $total = array_sum($rog);
        echo view('admin/admin',compact('antrii','userr','servicee','total','rog'));
    }
    public function antrian(){
        $dating = date('Y-m-d');
        // $dating = '2021-07-15';
        $query = $this->db->query("SELECT services.*,users.email,users.username FROM services INNER JOIN users ON services.user_id = users.id WHERE (date = '$dating')");
        $data = $query->getResult();
        echo view('admin/antrian', compact('data'));
    }
    public function antrian_view($id){
        $query = $this->db->query("SELECT * FROM services WHERE id = $id");
        $data = $query->getResult();
        $us = $data[0]->id;
        $queryy = $this->db->query("SELECT bookings.*,users.username,users.role FROM bookings INNER JOIN users ON bookings.user_id = users.id WHERE service_id = $us");
        $dataa = $queryy->getResult();
        echo view('admin/antrian_view',compact('data','dataa'));
    }
    public function service_proses(){
        $stat = $this->request->getPost('status');
        $service_id = $this->request->getPost('service_id');
        $user_id = $this->request->getPost('user_id');
        $ket = $this->request->getPost('keterangan');
        $price = $this->request->getPost('price');
        $query = $this->db->query("UPDATE services SET status = '$stat' WHERE id = '$service_id'");
        $queryy = $this->db->query("SELECT * FROM bookings WHERE (service_id = $service_id)");
        $data = $queryy->getResult();
        $book = new Booking;
        if ($data) {
            $us = $data[0]->id;
            if ($stat == 'Proses') {
                $book->update($us,[
                    'keterangan' => 'Service sedang di proses oleh bengkel',
                    'created_at'    => date("Y-m-d H:i:s"),
                ]);
            }else if($stat == 'Finish'){
                $book->update($us,[
                    'keterangan' => $ket,
                    'price' => $price,
                    'created_at'    => date("Y-m-d H:i:s"),
                ]);
            }else if($stat == 'Cancel'){
                $book->update($us,[
                    'keterangan' => 'Admin telah membatalkan service',
                    'created_at'    => date("Y-m-d H:i:s"),
                ]);
            }
        }else{
            $book->insert([
                'user_id' => $user_id,
                'service_id' => $service_id,
                'keterangan' => 'Service sedang di proses oleh bengkel',
                'created_at'    => date("Y-m-d H:i:s"),
            ]);
        }
        return redirect()->back();
    }
    public function service(){
        $query = $this->db->query("SELECT services.*,users.email,users.username FROM services INNER JOIN users ON services.user_id = users.id");
        $data = $query->getResult();
        echo view('admin/service', compact('data'));
    }
    public function service_view($id){
        $query = $this->db->query("SELECT * FROM services WHERE id = $id");
        $data = $query->getResult();
        $us = $data[0]->id;
        $queryy = $this->db->query("SELECT bookings.*,users.username,users.role FROM bookings INNER JOIN users ON bookings.user_id = users.id WHERE service_id = $us");
        $dataa = $queryy->getResult();
        echo view('admin/service_view',compact('data','dataa'));
    }
    public function user(){
        $query = $this->db->query("SELECT * FROM users");
        $data = $query->getResult();
        echo view('admin/user', compact('data'));
    }
    public function user_view($id){
        $query = $this->db->query("SELECT * FROM users WHERE id = $id");
        $data = $query->getResult();
        echo view('admin/user_view',compact('data'));
    }
}
