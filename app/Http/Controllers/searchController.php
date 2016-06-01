<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Event;
class searchController extends Controller
{
    //
        public function searchinfo($str)
        {
        	//$str_given = array('abcdeggg', 'fghijkggg', 'mnopqrggg', 'stuvwxggg', 'abcujnggg');
       
        	$str_given=DB::table('Event')->pluck('Ename');
        	
        	$str = strtolower($str);
            if (strlen($str)>0) {
    		  for($i=0;$i<count($str_given);$i++)
    		  {
    		  		$str_given[$i] = strtolower($str_given[$i]);
    		      if(strstr($str_given[$i], $str)){
    		       //	echo '<a href="hi/">'. $str_given[$i]. '</a><br>';
    		       	$event = Event::where('Ename',$str_given[$i])->first();
    		       	$id = $event->Event_id;
    		   		echo '<a href="/fiesta/public/req/show/'. $id. '">'. $str_given[$i]. '</a><br>';
    		   	}
    		  
    		  }
    		}
           	else {
              //$msg =  "no suggestion";
              //echo $msg;
            }
            
        	//return 'got it';
        }
        public function showinfo($id){
        	$event = Event::where('Event_id',$id)->first();
        	return view('searched_event', compact('event'));
        }
}