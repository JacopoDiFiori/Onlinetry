<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublicController2 extends Controller
{
    public function toBooks(){
        return view('books');
    }
}
