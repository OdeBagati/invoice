<?php
namespace App\Models;
use CodeIgniter\Model;

class JenisModel extends Model
{
	protected $table      = 'tb_jenis_customer';
    protected $primaryKey = 'id';
    protected $builder;
    protected $db;

    private $jenis = array();

    function __construct()
    {
    	$this->db      = \Config\Database::connect();
		$this->builder = $this->db->table('tb_jenis_customer');
    }

    function getAllData()
    {
        return $this->builder->get();
    }

    function getDataBy($param)
    {
        $this->builder->where($param);

        return $this->builder->get();
    }

    function getListJenis()
    {
        $dataJenis = $this->builder->get();

        foreach($dataJenis->getResult() as $listJenis)
        {
            $this->user[]=array(
                'id'=>$listJenis->id,
                'nama_tipe'=>$listJenis->nama_tipe
            );
        }

        return $this->user;
    }
}