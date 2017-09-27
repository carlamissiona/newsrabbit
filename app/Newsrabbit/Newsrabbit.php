<?php

namespace App\Newsrabbit;

class Newsrabbit{
  
  public function fetchnews($sources){
    // first load of page
    // post to Newsapi fetch all
    // download all news object   
    // search the news all object at client side   
    // four-four-two google-news bild buzzfeed 
    $news = array(); $str ='';$push;    
    foreach($sources as $source){
//     // $str .= 'https://newsapi.org/v1/articles?source='.$source['sourcename'].'&sortBy=top&apiKey=c3f321a08493425b80e92eb0030cd837';
        
      
         
  //print_r(json_decode(file_get_contents('https://newsapi.org/v1/articles?source='.$source['sourcename'].'&sortBy=top&apiKey=c3f321a08493425b80e92eb0030cd837'),true));
        echo json_decode(file_get_contents('https://newsapi.org/v1/articles?source='.$source['sourcename'].'&sortBy=top&apiKey=c3f321a08493425b80e92eb0030cd837'),true)['status'] ;
        if( json_decode(file_get_contents('https://newsapi.org/v1/articles?source='.$source['sourcename'].'&sortBy=top&apiKey=c3f321a08493425b80e92eb0030cd837'),true)['status'] =="ok"){
//           array_push($news, json_decode(file_get_contents('https://newsapi.org/v1/articles?source='.$source['sourcename'].'&sortBy=top&apiKey=c3f321a08493425b80e92eb0030cd837'),true) );
           echo $source['sourcename'];
//         }
//       echo  "dsd";
       // echo $source['sourcename'];
     
    }
    return $news;  

 
    
  }
  
  
  
}
