<?php
namespace App\Models;
use CodeIgniter\Model;

class CurrencyModel extends Model
{
	protected $table      = 'tb_currency';
    protected $primaryKey = 'idcurrency';
    protected $builder;
    protected $db;

    private $currency = array();

    function __construct()
    {
    	$this->db      = \Config\Database::connect();
		$this->builder = $this->db->table('tb_currency');
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

    function getListCurrency()
    {
        $dataCurrency = $this->builder->get();

        foreach($dataCurrency->getResult() as $listCurrency)
        {
            $this->currency[]=array(
                'id'=>$listCurrency->idcurrency,
                'simbol'=>$listCurrency->simbol,
                'nama_currency'=>$listCurrency->nama_currency
            );
        }

        return $this->currency;
    }

    function saveData($arrSave)
    {
        if($arrSave['idcurrency']>0)
        {
            $this->builder->where('idcurrency',$arrSave['idcurrency']);
            $this->builder->update($arrSave);
            return $arrSave['idcurrency'];
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