<?php

namespace App\Controllers;

class Po extends BaseController
{
    public function index()
    {
        return view('main');
    }

    function form($idpo=false)
    {
        if($this->request->getMethod()=='post')
        {
            $saveData = array(
                'id_po' => $this->request->getPost('id_po'),
                'idcustomer' => $this->request->getPost('idcustomer'),
                'cp' => $this->request->getPost('cp'),
                'po_ref' => $this->request->getPost('po_ref'),
                'po_date' => $this->request->getPost('po_date'),
                'sales_ref' => $this->request->getPost('sales_ref'),
                'ref_date' => $this->request->getPost('ref_date'),
                'idcurrency' => $this->request->getPost('idcurrency'),
                'diskon' => $this->request->getPost('diskon'),
            );

            $id_po = $this->objPo->saveData($saveData);

            foreach($this->request->getPost('kode_po') as $kode_po)
            {
                $saveList = array(
                    'id_list_po' => '',
                    'id_po' => $id_po,
                    'deskripsi_po' => $this->request->getPost('deskripsi_po'),
                    'unit_po' => $this->request->getPost('unit_po'),
                    'qty' => $this->request->getPost('qty'),
                    'harga' => $this->request->getPost('harga'),
                );

                $id_list_po = $this->objAlamat->saveData($saveLists);
            }

            echo 'sukses';
        }
        else
        {
            $data['page'] = 'preorder_form';

            return view('main',$data);
        }
    }

    function delete($id_po)
    {
        $paramId		=array('id_po'=>$id_po);
        $this->objPo->deleteData($paramId);

        $this->session->setFlashdata('message','Data berhasil dihapus');
        return redirect()->back();
    }
}