<?php
namespace App\Models;
use CodeIgniter\Model;

class CustomerModel extends Model
{
	protected $table      = 'tb_customer';
    protected $primaryKey = 'idcustomer';
    protected $builder;
    protected $db;

    function __construct()
    {
    	$this->db      = \Config\Database::connect();
		$this->builder = $this->db->table('tb_customer');
    }

    function getAllData()
    {
        $this->builder->select('*');
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
}