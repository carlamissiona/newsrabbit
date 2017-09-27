<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Newsrabbit\Newsrabbit;
use App\Sources;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
     //   $this->middleware('auth');
    }
             
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app');
    }
  
    public function getfeeds(){
      $sources = Sources::all();
      $newsrabbit = new Newsrabbit();
      
      
      return $newsrabbit->fetchnews($sources);  
    
      
      
    }
   public function sendsms(){
     
     $message="Test 23";
     $number="09166032173";
     $apicode="TR-DEVTU032173_QJ3YG";
     $url = 'https://www.itexmo.com/php_api/api.php';
      $itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
      $param = array(
          'http' => array(
              'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
              'method'  => 'POST',
              'content' => http_build_query($itexmo),
          ),
      );
      $context  = stream_context_create($param);
      return file_get_contents($url, false, $context);


   }
}
