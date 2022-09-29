<?php

namespace App\Controllers;

class Jenis extends BaseController
{
    public function index()
    {
        $data['page'] = 'jenis';

        return view('main', $data);
    }

    function form($idpo=false)
    {
        if($this->request->getMethod()=='post')
        {
            $saveData = array(
                'idcurrency' => $this->request->getPost('idcurrency'),
                'simbol' => $this->request->getPost('simbol'),
                'nama_currency' => $this->request->getPost('nama_currency'),
            );

            $id_po = $this->objCurrency->saveData($saveData);

            echo 'sukses';
        }
        else
        {
            $data['page'] = 'currency_form';

            return view('main',$data);
        }
    }

    function delete($idcurrency)
    {
        $paramId		=array('idcurrencyo'=>$idcurrency);
        $this->objCurrency->deleteData($paramId);

        $this->session->setFlashdata('message','Data berhasil dihapus');
        return redirect()->back();
    }
}