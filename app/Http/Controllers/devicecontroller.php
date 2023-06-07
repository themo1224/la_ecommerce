<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class devicecontroller extends Controller
{
    public function list($id=null)
    {
        return $id?Product::find($id):Product::all();
    }
}
