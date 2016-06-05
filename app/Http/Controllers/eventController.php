<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\Event;
use App\Event_host;
use App\Media;
use DB;
class eventController extends Controller 
{

    public $name="";
    public $date="";
    public $coverPath="";
    
    public $pin;
   
    public function create()
    {
        //return $user_id;
       
        return view('event/createEventView',['path'=>$this->coverPath]);
    } 
    
    public function setName(string $name)
    {
        $this->name=$name;
    }
    
    public function setDate(string $date)
    {
        $this->date=$date;
    }
    
    public function setCoverPath()
    {

        if(Input::hasFile('file'))
        { 
            $file=Input::file('file');
            $file->move('myassets/img/EventImage',$file->getClientOriginalName());
            
            $a= "myassets/img/EventImage/". $file->getClientOriginalName();

            $this->coverPath=$a;
            
            return view('event/createEventView',  ['path'=>$this->coverPath]);

        }
    }
    
     public function setSchedule(Request $request)
    {
         $content=Input::get('txtArea');
         $this->coverPath = Input::get('coverpath');
         echo $this->coverPath;
       
        if (Auth::check())
        {
            // The user is logged in...
            echo "1hi1";
            $id = Auth::User()->email;
            echo $id;
        }
       // echo "2hi2";
       $pin = Session::get('key');
        echo $pin;
        $event = new Event;
        $event->Ename=  $content;
        $event->Facebook_link= "www.facebook.com";
        $event->Short_note= "note";
        $event->Featured= 0;
        $event->save();

        $event_db= DB::table('Event')->where('Ename', $content)->first();
        $event_id = $event_db->Event_id;

        $event_host = new Event_host;
        $event_host->Event_id = $event_id;
        $event_host->User_id = $pin;
        $event_host->save();


        $media = new Media;
        $media->Event_id = $event_id;
        $media->User_id = $pin;
        $media->Image_path=$this->coverPath; 
        $media->Video_path="youtube.com"; 
        $media->save();
        
        //return user;
        //$user = Auth::user();
        //echo $user->Email;
         //$email = Auth::user()->email;
         //$id = Auth::user()->getId();
         //echo $id;
      
         //$currency = config('currency');
       
        // return view('event/createEventView',  ['schdelueBody'=>$content,'path'=>$this->coverPath]);
    } 
    
    
}
