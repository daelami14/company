<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompController extends Controller
{
    public  function index()
    {
//        $data = DB::table('v_company')
//            ->where('company_code_1','SP')
//            ->orderBy('company_code_2','desc')->get();
        $data = DB::table('company_1')
           ->get();
        return view('index',['data' => $data]);
    }

    public function tambah ()
    {
        return view('tambah');
    }

    public function store(Request $request)
    {
        DB::table('company_1')->insert([
            'company_code_1' => $request->company_code_1,
            'company_name' => $request->company_name,
        ]);
        return redirect('/');

    }

    public function edit($id)
    {
        $data = DB::table('company_1')->where('company_code_1',$id)->get();
        return view('edit',['data' => $data]);

    }

    public function update(Request $request)
    {
        DB::table('company_1')->where('company_code_1',$request->id)->update([
            'company_name' => $request->company_name,
        ]);
        return redirect('/');
    }

    public function hapus($id)
    {
        DB::table('company_1')->where('company_code_1',$id)->delete();
        return redirect('/');
    }

}
