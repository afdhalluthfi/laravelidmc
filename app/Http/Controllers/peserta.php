<?php

namespace App\Http\Controllers;

use App\Models\peserta as ModelsPeserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class peserta extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data =ModelsPeserta::orderByDesc('id')
                        ->get();
        return view('peserta',compact('data'));
    }
    public function tambahpage()
    {
        return view('pesertaInput');
    }
    public function insertPeserta(Request $request)
    {
        $namaLengkap =$request->nama_lengkap;
        $umur=$request->umur;
        $email =$request->email;
        $alamat=$request->alamat;
        $gender =$request->gender;

        // echo $namaLengkap;
        DB::insert('insert into peserta (nama_lengkap,umur,email,gender,alamat) values (?, ?, ?, ?, ?)', [$namaLengkap,$umur,$email,$gender,$alamat,]);
        // dd($request->all());
        return redirect()->route('form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('peserta')->where('id',$id)->delete();
        return redirect()->back();
    }

    public function deletAll(Request $request){
        $ids =$request->ids;
        ModelsPeserta::whereIn('id',$ids)->delete();
        return response()->json(['success'=>'berhasil dihapus']);
        
    }
}
