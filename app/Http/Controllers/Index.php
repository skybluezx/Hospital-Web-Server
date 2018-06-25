<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Index extends Controller
{
    public $moduleName;
    public $pageName;

    public function __construct()
    {
        $this->moduleName = "index";

        $this->pageName = config("custom.web_name") . "-首页";
    }

    public function show()
    {
        $moduleName = $this->moduleName;

        $pageName = $this->pageName;

        return view('index', compact(
            'moduleName',
            'pageName'
        ));
    }
}
