<?php

namespace App\Controllers;

use App\Controllers\Interfaces\IBaseController;
use App\Models\Module;
use App\Models\Permission;
use App\Models\Person;
use App\Models\Partner;

class Partners extends BaseController implements IBaseController
{
    /**
     * @var Model
     */
    protected $model;

    public function __construct()
    {
        $this->model = new Partner();
    }

    public function index()
    {
        return view('partners/PartnersView');
    }
    public function create()
    {

    }
    public function new()
    {

    }
    public function edit($id)
    {

    }
    public function show($id = null)
    {
        if ($this->request->isAJAX()) {
            $columns = [
                0 => 'id',
                1 => 'type_institution_id',
                2 => 'active_document_id',
                3 => 'date_in',
                4 => 'file_num',
            ];

            $totalData = $this->model->countAllResults();
            $totalFiltered = $totalData;
            $limit = $this->request->getPost('length');
            $start = $this->request->getPost('start');
            $order = $columns[$this->request->getPost('order[0][column]')];
            $dir = $this->request->getPost('order[0][dir]');
            $search = $this->request->getPost('search[value]');

            if (empty($search)) {
                $draw = $this->request->getPost('draw');
                $books = $this->model->listAll($order, $dir, $limit, $start);
            } else {
                $draw = $this->request->getPost('draw');
                $books = $this->model->listSearchBook($order, $dir, $limit, $start, $search);
                $filtered = $this->model->countSearchBook($search);
                $totalFiltered = $filtered;
            }

            if (!empty($books)) {
                foreach ($books as $book) {
                    $nested['id'] = $book['id'];
                    $nested['type_institution_id'] = $book['type_institution_id'];
                    $nested['active_document_id'] = $book['active_document_id'];
                    $nested['date_in'] = $book['date_in'];
                    $nested['file_num'] = $book['file_num'];
                    $nested['action'] = "<button type='button' class='btn btn-warning btn-xs btn-edit' data-id='{$book['id']}'>Edit</button> <button type='button' class='btn btn-danger btn-xs btn-delete' data-id='{$book['id']}'>Delete</button>";
                    $data[] = $nested;
                }
            } else {
                $data = [];
                $totalData = 0;
                $draw = 0;
            }

            return $this->response->setJSON([
                'draw'            => $draw,
                'recordsTotal'    => $totalData,
                'recordsFiltered' => $totalFiltered,
                'data'            => $data,
            ]);
        }
    }
    public function update($id)
    {

    }
    public function delete($id)
    {

    }

}