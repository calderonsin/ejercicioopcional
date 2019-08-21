<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class viewController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function view(Request $request)
    {
        $uri = $request->path();
        if ($request->is('inicio/A765')) {
            return view('welcome');
        }
        else{
            return view('error');
            print("progando");

        }

    }
}