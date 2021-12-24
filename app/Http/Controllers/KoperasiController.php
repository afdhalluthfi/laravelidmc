<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\KoperasiRepositories;

class KoperasiController extends Controller
{
    //
   


    public function index () 
    {
        
        return view('koperasi');
    }

}
