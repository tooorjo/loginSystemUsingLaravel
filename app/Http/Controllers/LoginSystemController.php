<?php

namespace App\Http\Controllers;

use App\entry;
use Request;

class LoginSystemController extends Controller
{
    public function project1()
    {
        return view('project1.index');
    }

    public function accounts()
    {
    	$accounts=entry::all();
    	return view('project1.accounts',compact('accounts'));
    }

    public function register()
    {
        return view('project1.register');
    }

    public function show()
    {
    	$entry=Request::all();
        $account=entry::where('username',$entry['username'])->get()->toArray();
    	
    	if(empty($account)){
    		abort(404);
    	}
        foreach($account as $data)
        {
            if($data['password']!=$entry['password'])
            {
                abort(404);
            }
        }

    	return view('project1.show',compact('account'));

        //return $entry;
    }

    public function store()
    {
        $user=Request::all();
        //return $user;
        $entry=entry::create($user);
        return redirect('project1');
    }

}
