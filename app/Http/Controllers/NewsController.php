<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;

use App\News;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      if ($request->isMethod('post')){
        $news = News::all();
        return response()->json($news);
      } 
    }
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {  
          
        if ($request->isMethod('post')){
             $news =array();
             $needle = "%".$request->all()['needle']."%";
         
             array_push($news, News::where('title', 'LIKE', $needle)->get(),
                               News::where('category', 'LIKE', $needle)->get()
                 
                     ); 
             return $news; 
        }
         
    }
  
      
}
