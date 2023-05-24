<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompController extends Controller
{
    public  function index()
    {
//        $data = DB::table('v_company')->get();

        $pegawai = DB::table('v_company')
            ->where('company_code_1','SP')->orderBy('company_code_2','desc')->get();

        // mengirim data pegawai ke view index
        return view('index',['pegawai' => $pegawai]);
    }
}
