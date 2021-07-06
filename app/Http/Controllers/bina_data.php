<?php

namespace App\Http\Controllers;

use App\Models\bina_data as ModelsBina_data;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class bina_data extends Controller
{
    //
    public function index(){
        $data = ModelsBina_data::get();
        foreach($data as $d){
            dd($d->namakegiatan);
        }
    }
}
