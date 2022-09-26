<?php
namespace App\Models;
use CodeIgniter\Model;

class AlamatModel extends Model
{
	protected $table      = 'tb_alamat_customer';
    protected $primaryKey = 'idalamat';
    protected $builder;
    protected $db;

    function __construct()
    {
    	$this->db      = \Config\Database::connect();
		$this->builder = $this->db->table('tb_alamat_customer');
    }

    function getAllData()
    {
        $this->builder->select('*');
        $this->builder->join('tb_customer','tb_customer.idcustomer=tb_alamat.idcustomer');
        
        return $this->builder->get();
    }

    function getDataBy($param)
    {
        $this->builder->select('*');
        $this->builder->join('tb_customer','tb_customer.idcustomer=tb_alamat.idcustomer');
        $this->builder->where($param);

        return $this->builder->get();
    }
}