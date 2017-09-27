<?php

namespace App\Newsrabbit;

class Newsrabbit{
  
  public function fetchnews($sources,$save){
    // first load of page
    // post to Newsapi fetch all
    // download all news object   
    // search the news all object at client side   
    // four-four-two google-news bild buzzfeed 
    $news = array(); $str ='';$push;
    foreach($sources as $source){

        if( json_decode(file_get_contents('https://newsapi.org/v1/articles?source='.$source['sourcename'].'&sortBy=top&apiKey=c3f321a08493425b80e92eb0030cd837'),true)['status'] == "ok"){
            array_push($news, json_decode(file_get_contents('https://newsapi.org/v1/articles?source='.$source['sourcename'].'&sortBy=top&apiKey=c3f321a08493425b80e92eb0030cd837'),true) );
          //   $news[$inc]["articles"][0]["body"]="abcd abcd abc
          // next feature logic add html-extract-tag to source table , extract body accdg to sources and add it to $news[$inc]["articles"][0]["body"]
          // $body = file_get_contents($news[$inc]["articles"][0]["url"]);    
          // $body = substr($body,strpos($body,"<article"),strpos($body,"</article>"));
          // $body = substr($body,strpos($body,"</article>"));        
        
          // store this to table if $save is 1
          if($save == 1){
            
            
          }
          // 
          }
     
    }
    return $news;  
    
  }
  public function delivernews(){
    // get subscription table
    // fetchnews 
    
    
    
    
  }
  public function sendsms($smsno,$msg){
    
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

    
    // returns 0 if success 
    
  }
  
  
  
}
