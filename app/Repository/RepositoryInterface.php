<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 11/7/2018
 * Time: 10:35 PM
 */

namespace App\Repository;


interface RepositoryInterface
{
    public function all($numrow=15);
    public function find($id);
    public function create(Array $data);
    public function delete($id);
    public function update($id,array $data);
}