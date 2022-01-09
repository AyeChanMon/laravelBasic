<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function c($aa){
        return "this is from controller $aa";
    }

    public function detail($id){
        $name = "aye chan mon";
        return view("detail",compact('id','name'));
    }
}
