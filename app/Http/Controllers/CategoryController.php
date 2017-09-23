<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Categories;
class CategoryController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        return response()->json($categories);
        
    }  
}
