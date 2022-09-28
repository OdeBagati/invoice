<?php
namespace App\Models;
use CodeIgniter\Model;

class JenisModel extends Model
{
	protected $table      = 'tb_po';
    protected $primaryKey = 'id_po';
    protected $builder;
    protected $db;

    function __construct()
    {
    	$this->db      = \Config\Database::connect();
		$this->builder = $this->db->table('tb_po');
    }

    function getAllData()
    {
        $this->builder->join('tb_customer','tb_customer.idcustomer=tb_po.idcustomer');
        $this->builder->join('tb_currency','tb_currency.idcurrency=tb_po.idcurrnecy');

        return $this->builder->get();
    }

    function getDataBy($param)
    {
        $this->builder->select('*');
        $this->builder->join('tb_customer','tb_customer.idcustomer=tb_po.idcustomer');
        $this->builder->join('tb_currency','tb_currency.idcurrency=tb_po.idcurrnecy');
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
}