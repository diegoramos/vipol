<?php

namespace App\Repository;

abstract class BaseRepository
{
    protected $model;

    protected $tablesColumnsGets = [];

    protected $tablesJoin = [];

    protected $deletedArray = [];

    protected $tablesColumnsSearch = [];

    public function __construct($model)
    {
        $this->model = $model;
    }

    abstract function renderDataTable(array $data);

    public function listAll($order, $dir, $limit, $start)
    {
        $query = $this->model->db->table($this->model->table)->select($this->converToSelectFields());

        foreach ($this->tablesJoin as $tableName => $item) {
            $query->join($tableName, $tableName . "." . $item['primary'] . "=" . $item["tableForeing"] . "." . $item["foreign"]);
        }

        $query->where(
            array_merge(
                [$this->model->table . '.deleted_at =' => null],
                $this->deletedArray
            )
        )->limit($limit, $start)->orderBy($order, $dir);

        return $query->get()->getResultArray();
    }

    public function listSearchEntity($order, $dir, $limit, $start, $search)
    {
        $query = $this->model->db->table($this->model->table)->select($this->converToSelectFields());

        foreach ($this->tablesJoin as $tableName => $item) {
            $query->join($tableName, $tableName . "." . $item['primary'] . "=" . $item["tableForeing"] . "." . $item["foreign"]);
        }
        $query->orLike($this->conterToColumnSearchToArray($search))
            ->where(
                array_merge(
                    [$this->model->table . '.deleted_at =' => null],
                    $this->deletedArray
                )
            )->limit($limit, $start)->orderBy($order, $dir);

        return $query->get()->getResultArray();
    }

    public function countSearchEntity($search)
    {
        $query = $this->model->db->table($this->model->table);
        foreach ($this->tablesJoin as $tableName => $item) {
            $query->join($tableName, $tableName . "." . $item['primary'] . "=" . $item["tableForeing"] . "." . $item["foreign"]);
        }
        return $query->orLike($this->conterToColumnSearchToArray($search))
            ->where(
                array_merge(
                    [$this->model->table . '.deleted_at =' => null],
                    $this->deletedArray
                )
            )
            ->countAllResults();
    }

    public function makeDataTable($order, $dir, $limit, $start, $search, $draw)
    {
        $totalData = $this->model->countAllResults();
        $totalFiltered = $totalData;

        if (empty($search)) {
            $resultData = $this->listAll($order, $dir, $limit, $start);
        } else {
            $resultData = $this->listSearchEntity($order, $dir, $limit, $start, $search);
            $filtered = $this->countSearchEntity($search);
            $totalFiltered = $filtered;
        }

        if (!empty($resultData)) {
            $data = $this->renderDataTable($resultData);
        } else {
            $data = [];
            $totalData = 0;
            $draw = 0;
        }
        return [
            'draw'            => $draw,
            'recordsTotal'    => $totalData,
            'recordsFiltered' => $totalFiltered,
            'data'            => $data,
        ];
    }

    private function converToSelectFields()
    {
        $stringColumns = "";
        foreach ($this->tablesColumnsGets as $tableName => $colums) {
            foreach ($colums as $key => $column) {
                $stringColumns .= $tableName . "." . $column . ",";
            }
        }
        if (substr($stringColumns, -1) == ',') {
            $stringColumns = trim($stringColumns, ',');
        }
        return $stringColumns;
    }

    private function conterToColumnSearchToArray($search)
    {
        $searchArray = array();
        foreach ($this->tablesColumnsSearch as $tableName => $colums) {
            foreach ($colums as $key => $column) {
                $searchArray[$tableName . "." . $column] = $search;
            }
        }
        return $searchArray;
    }
}