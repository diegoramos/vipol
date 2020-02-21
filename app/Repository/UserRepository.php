<?php

namespace App\Repository;

use App\Models\User;

class UserRepository extends BaseRepository
{
    public static $columnsOrder = array(
        0 => 'id',
        1 => 'dni',
        2 => 'name',
        3 => 'last_name'
    );

    protected $tablesJoin = array(
        "persons" => [
            "primary" => "id",
            "tableForeing" => "users",
            "foreign" => "person_id"
        ],
    );

    protected  $tablesColumnsGets = array(
        "users" => ["id"],
        "persons" => ["dni", "name", "last_name", "address"],
    );

    protected  $tablesColumnsSearch = array(
        "persons" => ["dni", "name", "last_name", "address"],
    );

    /**
     * Example: ['users.deleted_at =' => null]
     */
    protected $deletedArray = array();

    public function __construct()
    {
        parent::__construct(new User());
    }

    public function renderDataTable(array $users)
    {
        $data = array();
        foreach ($users as $user) {
            $nested['id'] = $user['id'];
            $nested['dni'] = $user['dni'];
            $nested['name'] = $user['name'];
            $nested['last_name'] = $user['last_name'];
            $nested['action'] = "<a href='/users/{$user['id']}/edit'  class='btn btn-warning btn-xs btn-edit' >Edit</a> <button type='button' class='btn btn-danger btn-xs btn-delete' data-id='{$user['id']}'>Delete</button>";
            $data[] = $nested;
        }
        return $data;
    }
}
