<?php

namespace App\Controllers;

class Customer extends BaseController
{
    public function index()
    {
        $data['dataCustomer'] = $this->objCustomer->getAllData();
        $data['page'] = 'customer_data';

        return view('main', $data);
    }

    function form($idcustomer=false)
    {
        if($idcustomer!=false)
        {
            $paramId = array('idcustomer'=>$idcustomer);
            $list = $this->objCustomer->getDataBy($paramId)->getRow();

            $data['idcustomer']			=$list->idcustomer;
            $data['idjenis']			=$list->idjenis;
            $data['no_akun']			=$list->no_akun;
            $data['nama_customer']		=$list->nama_customer;
            $data['alamat']	        	=$list->alamat;
            $data['npwp']	        	=$list->npwp;
            $data['kode']	        	=$list->kode;
            $data['phone']	        	=$list->phone;
            $data['fax']	        	=$list->fax;
            $data['cp']	        	    =$list->cp;
        }

        if($this->request->getMethod()=='post')
        {
            $tipe = $this->request->getPost('idjenis');

            $saveData = array(
                'idcustomer' => $this->request->getPost('idcustomer'),
                'idjenis' => $tipe,
                'no_akun' => $this->request->getPost('no_akun'),
                'nama_customer' => $this->request->getPost('nama_customer'),
                'alamat' => $this->request->getPost('alamat'),
                'npwp' => $this->request->getPost('npwp'),
                'kode' => $this->request->getPost('kode'),
                'phone' => $this->request->getPost('phone'),
                'fax' => $this->request->getPost('fax'),
                'cp' => $this->request->getPost('cp'),
            );

            $idcustomer = $this->objCustomer->saveData($saveData);

            $addKode = array(
                'idcustomer' => $idcustomer,
                'no_akun' => 'J'.$tipe.$idcustomer,
            );

            $idcustomer = $this->objCustomer->saveData($addKode);

            foreach($this->request->getPost('alamat_site') as $alamat)
            {
                $saveAlamat = array(
                    'idalamat' => '',
                    'idcustomer' => $idcustomer,
                    'alamat_site' => $alamat,
                );

                $idalamat = $this->objAlamat->saveData($saveAlamat);
            }

            echo 'sukses';
        }
        else
        {
            $data['page'] = 'customer_form';

            return view('main',$data);
        }
    }

    function delete($idcustomer)
    {
        $paramId		=array('idcustomer'=>$idcustomer);
        $this->objRoute->deleteData($paramId);

        $this->session->setFlashdata('message','Data berhasil dihapus');
        return redirect()->back();
    }
}
