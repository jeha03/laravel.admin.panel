<?php

namespace App\Http\Controllers\Blog\Admin;

use Barryvdh\LaravelIdeHelper\Console\MetaCommand;
use Illuminate\Http\Request;
use App\Http\Controllers\Blog\BaseController as MainBaseController;

abstract class AdminBaseController extends MainBaseController
{



    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('status');


    }

}
