<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check() && Auth::user()->id == 1 && Auth::user()->email == 'epipha44@gmail.com') {
            return view('admin');
        }
        return view('welcome');
    }
}
