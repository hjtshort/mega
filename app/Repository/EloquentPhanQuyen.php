<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 11/7/2018
 * Time: 10:50 PM
 */

namespace App\Repository;
use App\models\phanquyen;

class EloquentPhanQuyen extends RepositoryClass
{
    public function getValue()
    {
        // TODO: Implement getValue() method.
        $phanquyen = new phanquyen();
        return $phanquyen;
    }
}