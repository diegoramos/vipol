<?php

namespace App\Models;

use CodeIgniter\Model;

class Partner extends Model 
{
    protected $table = 'partners';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

    public function listAll($order, $dir, $limit, $start)
    {
        return $this->db->table('partners as part')
                    ->select('*')
                    //->join('status as s', 'part.status_id = s.id')
                    ->where([
                        'part.deleted =' => 0,
                    ])
                    ->limit($limit, $start)
                    ->orderBy('id', 'desc')
                    ->orderBy($order, $dir)
                    ->get()
                    ->getResultArray();
    }

    public function listSearchBook($order, $dir, $limit, $start, $search)
    {
        return $this->db->table('partners as part')
                    ->select('*')
                    //->join('status as s', 'part.status_id = s.id')
                    ->orLike([
                        'part.cip_pnp'       => $search,
                        'part.num_document'      => $search,
                        'part.account_num' => $search,
                    ])
                    ->where([
                        'part.deleted =' => 0,
                    ])
                    ->limit($limit, $start)
                    ->orderBy('id', 'desc')
                    ->orderBy($order, $dir)
                    ->get()
                    ->getResultArray();
    }

    public function countSearchBook($search)
    {
        return $this->db->table('partners as part')
                    //->join('status as s', 'part.status_id = s.id')
                    ->orLike([
                        'part.cip_pnp'       => $search,
                        'part.num_document'      => $search,
                        'part.account_num' => $search,
                    ])
                    ->where([
                        'part.deleted =' => 0,
                    ])
                    ->countAllResults();
    }
}