<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublicController extends Controller
{
    public function toProducts(){
        return view('products');
    }
    public function toBooks(){
        return view('books');
    }
    public function toUs(){
        return view('us');
    }
}
