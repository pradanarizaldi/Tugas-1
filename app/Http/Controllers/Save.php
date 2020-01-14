<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Save extends Controller
{
    public function index(Request $request)
    {
        
        $nama = $request->input('nama');
        $tempat = $request->input('tmpLahir');
        $tgl = $request->input('tglLahir');
        $jk = $request->input('jk');
        $email = $request->input('email');
        $alamat = $request->input('alamat');
        // var_dump($data);
        // die;
        $data['data'] = array(
            'nama' => $nama, 
            'tempat' => $tempat, 
            'tgl' => $tgl, 
            'jk' => $jk, 
            'email' => $email,
            'alamat' => $alamat,
        );
        return view('output', $data);
    }
}
