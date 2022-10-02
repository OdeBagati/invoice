<?php
namespace App\Models;
use CodeIgniter\Model;

class ListPoModel extends Model
{
	protected $table      = 'tb_list_po';
    protected $primaryKey = 'id_list_po';
    protected $builder;
    protected $db;

    function __construct()
    {
    	$this->db      = \Config\Database::connect();
		$this->builder = $this->db->table('tb_list_po');
    }

    function getAllData()
    {
        $this->builder->join('tb_po','tb_po.id_poy=tb_list_po.id_po');

        return $this->builder->get();
    }

    function getDataBy($param)
    {
        $this->builder->join('tb_po','tb_po.id_poy=tb_list_po.id_po');
        $this->builder->where($param);

        return $this->builder->get();
    }

    function saveData($arrSave)
    {
        if($arrSave['id_list_po']>0)
        {
            $this->builder->where('id_list_po',$arrSave['id_list_po']);
            $this->builder->update($arrSave);
            return $arrSave['id_list_po'];
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