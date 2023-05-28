<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bankAccountController extends Controller
{
    public function index(){
        return view('bankAccount/bankAccount');
    }

    public function create(){
        return view('bankAccount/bankAccountCreate');
    }

    public function update(){
        return view('bankAccount/bankAccountUpdate');
    }
}
