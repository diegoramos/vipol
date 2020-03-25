<?php

namespace App\Repository;

use App\Models\Partner;

class PartnerRepository extends BaseRepository
{
    public static $columnsOrder = array(
        0 => 'id',
        1 => 'type_institution_id',
        2 => 'active_document_id',
        3 => 'date_in',
        4 => 'file_num',
    );

    protected $tablesJoin = array(
    );

    protected  $tablesColumnsGets = array(
    );

    protected  $tablesColumnsSearch = array(
        "partners" => ["cip_pnp", "num_document", "account_num"],
    );

    /**
     * Example: ['users.deleted_at =' => null]
     */
    protected $deletedArray = array();

    public function __construct()
    {
        parent::__construct(new Partner());
    }

    public function renderDataTable(array $parnerts)
    {
        $data = array();
        foreach ($parnerts as $parnert) {
            $nested['id'] = $parnert['id'];
            $nested['type_institution_id'] = $parnert['type_institution_id'];
            $nested['active_document_id'] = $parnert['active_document_id'];
            $nested['date_in'] = $parnert['date_in'];
            $nested['file_num'] = $parnert['file_num'];
            $nested['action'] = "<button type='button' class='btn btn-warning btn-xs btn-edit' data-id='{$parnert['id']}'>Edit</button> <button type='button' class='btn btn-danger btn-xs btn-delete' data-id='{$parnert['id']}'>Delete</button>";
            $data[] = $nested;
        }
        return $data;
    }

    public function create()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }

    public function getOneById()
    {
        
    }
}
