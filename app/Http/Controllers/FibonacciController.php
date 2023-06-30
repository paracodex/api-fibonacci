<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class FibonacciController extends Controller
{
   
    public function index($index){
        $n = (int) $index; 
        if(is_numeric($n)){
          return response()->json(['secuence' =>  $this->getSecuence($n)]);
        }
    }


    public function getSecuence(int $n){
       
       if( $n == 0){
            return 0;
       }
       
       if( $n == 1){
           return 1; 
       }
       
      return $this->getSecuence($n-1) + $this->getSecuence($n-2);

    }


 
    
}
