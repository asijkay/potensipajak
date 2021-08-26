<?php

namespace App\Http\Controllers;

use App\Models\restoranModel as RestoranModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RestoranController extends Controller
{
    public function __construct()
	{
		$this->restoranModel = new RestoranModel;
	}
    public function index(){
        $title = 'RESTORAN';
        $restoran = DB::table('restoran')->get();
    	return view('restoran/index',compact('title','restoran'));
    }
    public function add(){

        return view('restoran/add');
    }
    public function store(Request $request)
    {
        DB::table('restoran')->insert([
            'nama_restoran' => $request->nama,
            'kapasitas' => $request->kapasitas,
            'potensi_pajak' => $request->potensi_pajak
        ]);
        return redirect('pajakrestoran');
    }
    public function edit($id){
        $restoran = DB::table('restoran')->where('id',$id)->get();
        return view('restoran/edit',compact('restoran'));
    }
    public function update(Request $request){
        DB::table('restoran')->where('id',$request->id)->update([
            'nama_restoran' => $request->nama,
            'kapasitas' => $request->kapasitas,
            'potensi_pajak' => $request->potensi_pajak
        ]);
        return redirect('pajakrestoran');
    }
}
