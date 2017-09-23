<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Sources;
class SourcesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      if ($request->isMethod('post')){
        $fetchsize = $request->all()['fetchsize'];
        $sources = Sources::all()->take($fetchsize);
        return response()->json($sources);
        
      }
        
    }  
  
      
}
