<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ServeiController;
use App\Http\Controllers\TreballadorController;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
