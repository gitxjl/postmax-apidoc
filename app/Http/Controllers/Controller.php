<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static $uid = '';

    public function __construct()
    {
        !self::$uid && self::$uid = app('auth')->id();
    }

    public static function uid(){
        !self::$uid && self::$uid = app('auth')->id();
        return self::$uid;
    }
}
