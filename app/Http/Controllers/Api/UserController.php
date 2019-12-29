<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function countries()
    {
        $countries = DB::select('select id, name from countries');
        if(!$countries){
          return  sendResponse(404,'data not found','');
        }
        return sendResponse(200,false,$countries);
    }
}
