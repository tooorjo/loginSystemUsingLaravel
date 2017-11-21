<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function about()
    {
    	$man='man:';
    	return view('pages.about')->with('extra',$man);
    }

    public function contact()
    {
    	$animal=[
    		'cat','cadog','catke'
    	];
    	return view('pages.contact',compact('animal'));
    }
}
