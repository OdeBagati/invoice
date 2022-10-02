<?php
namespace App\Models;
use CodeIgniter\Model;

class AlamatModel extends Model
{
	protected $table      = 'tb_alamat_site';
    protected $primaryKey = 'idalamat';
    protected $builder;
    protected $db;

    function __construct()
    {
    	$this->db      = \Config\Database::connect();
		$this->builder = $this->db->table('tb_alamat_site');
    }

    function getAllData()
    {
        $this->builder->select('*');
        $this->builder->join('tb_customer','tb_customer.idcustomer=tb_alamat_site.idcustomer');
        
        return $this->builder->get();
    }

    function getDataBy($param)
    {
        $this->builder->select('*');
        $this->builder->join('tb_customer','tb_customer.idcustomer=tb_alamat_site.idcustomer');
        $this->builder->where($param);

        return $this->builder->get();
    }

    function saveData($arrSave)
    {
        if($arrSave['idalamat']>0)
        {
            $this->builder->where('idalamat',$arrSave['idalamat']);
            $this->builder->update($arrSave);
            return $arrSave['idalamat'];
        }
        else
        {
            $this->builder->insert($arrSave);
            return $this->db->insertID();
        }
    }
}