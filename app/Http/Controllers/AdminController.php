<?php

namespace App\Http\Controllers;

use App\Repository\EloquentAdmin;
use App\Repository\EloquentPhanQuyen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    private $phanquyen;
    private $admin;

    public function __construct(EloquentPhanQuyen $quyen, EloquentAdmin $admin)
    {
        $this->phanquyen = $quyen;
        $this->admin=$admin;
    }
    public function redirectProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    public  function callbackProvider($provider)
    {
        if($provider=='google'){
            $user = Socialite::driver($provider)->stateless()->user();
        }
        else{
            $user=  Socialite::driver($provider)->user();
        }

        $authUser=$this->createUser($user,$provider);
        Auth::guard('admin')->login($authUser,true);
        return redirect()->route('dashboard');
    }
    public function createUser($user,$provider)
    {
        $authUser=$this->admin->checkRegister($user->email,$provider,$user->id);
        if(count($authUser)>0)
        {
            return $authUser[0];

        }
        else
        {
            return $this->admin->Register([
                'name'=>$user->name,
                'email'=>$user->email==''? '123@gmail.com':$user->email,
                'provider'=>$provider,
                'provider_id'=>$user->id,
                'avatar'=>$user->avatar_original

            ]);
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login');
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
