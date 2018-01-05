<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;

class LaboratoryController extends Controller
{
    public function lab(){
      return Categories::with('product')->get();
    }
}
