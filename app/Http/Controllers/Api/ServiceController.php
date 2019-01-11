<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class ServiceController extends Controller
{

    public function index()
    {
        return response()->json(json_decode('{"message":"","result":{"pageSize":null,"pageNo":null,"totalCount":57,"totalPage":null,"data":[]},"status":200,"timestamp":1534955098193}'));
    }
}
