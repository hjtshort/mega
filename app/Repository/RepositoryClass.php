<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 11/7/2018
 * Time: 10:38 PM
 */

namespace App\Repository;


abstract class RepositoryClass implements RepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setValue();
    }

    public function setValue()
    {
        $this->model = $this->getValue();
    }

    abstract public function getValue();

    public function all($numrow = 15)
    {
        return $this->model->paginate($numrow);
    }

    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create(array $data)
    {
        try {
            $this->model->create($data);
            return true;
        } catch (\Illuminate\Database\QueryException $ex) {
            return false;
        }
    }
    public function update($id,array $data)
    {
        try {
            $value=$this->model->find($id);
            $value->update($data);
            return true;
        } catch (\Illuminate\Database\QueryException $ex) {
            return false;
        }
    }
    public function delete($id)
    {
        try {
             $this->model->findOrFail($id)->delete();
             return true;
        } catch (\Illuminate\Database\QueryException $ex) {
            return false;
        }
    }
}