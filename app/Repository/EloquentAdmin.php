<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 12/7/2018
 * Time: 12:59 PM
 */

namespace App\Repository;


use App\models\admin;

class EloquentAdmin extends RepositoryClass
{
    public function getValue()
    {
        // TODO: Implement getValue() method.
        $admin= new admin();
        return $admin;
    }

    public function checkRegister($email,$provider,$id)
    {
        return $this->model->where('email',$email)->where('provider',$provider)->where('provider_id',$id)->get();
    }
    public function Register(array $data)
    {
        return $this->model->create($data);
    }
}