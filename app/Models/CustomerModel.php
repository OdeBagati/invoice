<?php
namespace App\Models;
use CodeIgniter\Model;

class CustomerModel extends Model
{
	protected $table      = 'tb_customer';
    protected $primaryKey = 'idcustomer';
    protected $builder;
    protected $db;

    private $customer = array();

    function __construct()
    {
    	$this->db      = \Config\Database::connect();
		$this->builder = $this->db->table('tb_customer');
    }

    function getAllData()
    {
        $this->builder->join('tb_jenis_customer','tb_jenis_customer.id=tb_customer.idjenis');
        return $this->builder->get();
    }

    function getDataBy($param)
    {
        $this->builder->select('*');
        $this->builder->join('tb_jenis_customer','tb_jenis_customer.id=tb_customer.idjenis');
        $this->builder->where($param);

        return $this->builder->get();
    }

    function saveData($arrSave)
    {
        if($arrSave['idcustomer']>0)
        {
            $this->builder->where('idcustomer',$arrSave['idcustomer']);
            $this->builder->update($arrSave);
            return $arrSave['idcustomer'];
        }
        else
        {
            $this->builder->insert($arrSave);
            return $this->db->insertID();
        }
    }

    function deleteData($param)
    {
        $this->builder->where($param);
        return $this->builder->delete();
    }

    function getCustomerOption()
    {
        $dataCustomer = $this->builder->get();

        foreach($dataCustomer->getResult() as $listCustomer)
        {
            $this->jenis[]=array(
                'idcustomer'=>$listCustomer->idcustomer,
                'nama_customer'=>$listCustomer->nama_customer,
                'no_akun'=>$listCustomer->no_akun
            );
        }

        return $this->jenis;
    }
}