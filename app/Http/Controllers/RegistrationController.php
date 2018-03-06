<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class RegistrationController extends Controller
{
    
     public function create()
    {
        return View('registration.create');
    }

    public function store()
    {
       $this->validate( request() , [
            'name' => 'required|min:2',
            'email' => 'required|email',
            'password' => 'required|confirmed'
            ]);

       $user = User::create([ 
          'name' => request('name'),
          'email' => request('email'),
          'password' => bcrypt(request('password'))
          ]);

       auth()->login($user);

       return redirect()->home();

    }

}
