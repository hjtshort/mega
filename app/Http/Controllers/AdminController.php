<?php

namespace App\Http\Controllers;

use App\Repository\EloquentPhanQuyen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    private $phanquyen;

    public function __construct(EloquentPhanQuyen $quyen)
    {
        $this->phanquyen = $quyen;
    }

    public function postInsertPhanQuyen(Request $request)
    {
        $messages = [
            'required' => 'Tên phân quyền không được bỏ trống!',
            'unique'=>  'Phân quyền đã tồn tại!'
        ];
        $validator = Validator::make($request->all(), [
            'tenphanquyen' => 'required|unique:phanquyens',
        ],$messages);

        if ($validator->passes()) {
            $this->phanquyen->create($request->all());
            return 'success';

        }
        else{
            return response()->json(['error'=>$validator->errors()->all()]);
        }

    }

    public function getPhanQuyen()
    {
        return view('admin.components.phan-quyen');
    }

    public function getAjaxPhanQuyen()
    {
        $view['data']= $this->phanquyen->all();
        return view('admin.ajax.phanquyen',$view);
    }

    public function changeHienThi(Request $request)
    {
        if($request->ajax())
        {
            if($this->phanquyen->update($request->id,$request->only('hienthi')))
            {
                return 'ok';
            }
            else
            {
                return 'error';
            }
        }
    }

    public function deletePhanQuyen(Request $request)
    {
        if($request->ajax())
        {
            if($this->phanquyen->delete($request->id))
            {
                return 'ok';
            }
            else
            {
                return 'error';
            }
        }
    }
}
