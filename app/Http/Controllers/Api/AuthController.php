<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * @param Request $request
     */
    public function login(Request $request)
    {
        return response()->json([
            "message" => "",
            "status" => 200,
            "timestamp" => 1534844188679,
            "body" => [
                "remember_me" => true,
                "username" => "admin",
                "password" => "21232f297a57a5a743894a0e4a801fc3"
            ],
            "result" => [
                "id" => "4291d7da9005377ec9aec4a71ea837f",
                "name" => "Deborah Martin",
                "username" => "admin",
                "password" => "",
                "avatar" => "https://gw.alipayobjects.com/zos/rmsportal/jZUIxmJycoymBprLOUbT.png",
                "status" => 1,
                "telephone" => "",
                "lastLoginIp" => "27.154.74.117",
                "lastLoginTime" => 1534837621348,
                "creatorId" => "admin",
                "createTime" => 1497160610259,
                "deleted" => 0,
                "roleId" => "admin",
                "token" => "4291d7da9005377ec9aec4a71ea837f"
            ]
        ]);
    }

    /**
     * @param Request $request
     */
    public
    function logout(Request $request)
    {

    }
}
