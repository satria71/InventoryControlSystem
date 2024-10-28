<?php

namespace App\Controllers;

class AktivaSupport extends BaseController
{
    public function index()
    {
        //Cara dengan query builder
        // $builder = $this->db->table('aktiva');
        // $query = $builder->get();
        
        //Cara manual menggunakan query
        $query = $this->db->query("SELECT * FROM aktiva");
        $data['aktiva'] = $query->getResult();

        return view('support/get', $data);
    }

    public function create(){
        return view('support/add');
    }

    public function aktivaDatang(){
        return view('support/datang');
    }

    public function store(){
        $data = $this->request->getPost();

        $this->db->table('aktiva')->insert($data);

        if($this->db->affectedRows() > 0){
            return redirect()->to(site_url('AktivaSupport'))->with('success','Data Berhasil Disimpan');
        }

    }
}
