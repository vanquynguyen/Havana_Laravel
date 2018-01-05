<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class LaboratoryController extends Controller
{
    public function lab(){
     $me = Product::find(1);
     return $me;
    }
}
