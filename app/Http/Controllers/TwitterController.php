<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Twitter;
use \File;
class TwitterController extends Controller
{
    private $count = 10;
    private $formate = 'array';
    public function tweetUserTimeline(){
        $data = Twitter::getUserTimeLine(['count'=>$this->count,'formate'=>$this->formate]);
        return view('twitter',compact('data'));
    }
}
