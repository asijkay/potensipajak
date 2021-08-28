<?php

namespace App\Http\Controllers;

use App\Models\restoranModel as RestoranModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RestoranController extends Controller
{
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
        $restoran = new RestoranModel();
        $restoran->nama_restoran = $request->input('nama_restoran');
        $restoran->nama_pemilik = $request->input('nama_pemilik');
        $restoran->alamat = $request->input('alamat');
        $restoran->jenis_restoran = $request->input('jenis_restoran');
        $restoran->kapasitas = $request->input('kapasitas');
        $restoran->skt_ramai = $request->input('skt_ramai');
        $restoran->skt_normal = $request->input('skt_normal');
        $restoran->skt_sepi = $request->input('skt_sepi');
        $restoran->tkt_ramai = $request->input('tkt_ramai');
        $restoran->tkt_normal = $request->input('tkt_normal');
        $restoran->tkt_sepi = $request->input('tkt_sepi');
        $restoran->prt = $request->input('prt');
        $restoran->potensi_pajak_ramai = $restoran->skt_ramai*$restoran->tkt_ramai*$restoran->prt*(10/100);
        $restoran->potensi_pajak_normal = $restoran->skt_normal*$restoran->tkt_normal*$restoran->prt*(10/100);
        $restoran->potensi_pajak_sepi = $restoran->skt_sepi*$restoran->tkt_sepi*$restoran->prt*(10/100);
        $restoran->potensi_pajak = $restoran->potensi_pajak_ramai+$restoran->potensi_pajak_normal+$restoran->potensi_pajak_sepi;
        $restoran->save();
        // DB::table('restoran')->insert([
        //     'nama_restoran' => $restoran->nama_restoran,
        //     'nama_pemilik' => $restoran->nama_pemilik,
        //     'alamat' => $restoran->alamat,
        //     'jenis_restoran' => $restoran->jenis_restoran,
        //     'kapasitas' => $restoran->kapasitas,
        //     'skt_ramai' => $restoran->skt_ramai,
        //     'skt_normal' => $restoran->skt_normal,
        //     'skt_sepi' => $restoran->skt_sepi,
        //     'tkt_ramai' => $restoran->tkt_ramai,
        //     'tkt_normal' => $restoran->tkt_normal,
        //     'tkt_sepi' => $restoran->tkt_sepi,
        //     'prt' => $restoran->prt,
        //     'potensi_pajak_ramai' => $restoran->potensi_pajak_ramai,
        //     'potensi_pajak_normal' => $restoran->potensi_pajak_normal,
        //     'potensi_pajak_sepi' => $restoran->potensi_pajak_sepi,
        //     'potensi_pajak' => $restoran->potensi_pajak
        // ]);
        return redirect('pajakrestoran');
    }
    public function edit($id){
        $restoran = DB::table('restoran')->where('id',$id)->get();
        return view('restoran/edit',compact('restoran'));
    }
    public function update(Request $request){
        $restoran = new RestoranModel();
        $restoran->nama_restoran = $request->input('nama_restoran');
        $restoran->nama_pemilik = $request->input('nama_pemilik');
        $restoran->alamat = $request->input('alamat');
        $restoran->jenis_restoran = $request->input('jenis_restoran');
        $restoran->kapasitas = $request->input('kapasitas');
        $restoran->skt_ramai = $request->input('skt_ramai');
        $restoran->skt_normal = $request->input('skt_normal');
        $restoran->skt_sepi = $request->input('skt_sepi');
        $restoran->tkt_ramai = $request->input('tkt_ramai');
        $restoran->tkt_normal = $request->input('tkt_normal');
        $restoran->tkt_sepi = $request->input('tkt_sepi');
        $restoran->prt = $request->input('prt');
        $restoran->potensi_pajak_ramai = $restoran->skt_ramai*$restoran->tkt_ramai*$restoran->prt*(10/100);
        $restoran->potensi_pajak_normal = $restoran->skt_normal*$restoran->tkt_normal*$restoran->prt*(10/100);
        $restoran->potensi_pajak_sepi = $restoran->skt_sepi*$restoran->tkt_sepi*$restoran->prt*(10/100);
        $restoran->potensi_pajak = $restoran->potensi_pajak_ramai+$restoran->potensi_pajak_normal+$restoran->potensi_pajak_sepi;
        DB::table('restoran')->where('id',$request->id)->update([
            'nama_restoran' => $restoran->nama_restoran,
            'nama_pemilik' => $restoran->nama_pemilik,
            'alamat' => $restoran->alamat,
            'jenis_restoran' => $restoran->jenis_restoran,
            'kapasitas' => $restoran->kapasitas,
            'skt_ramai' => $restoran->skt_ramai,
            'skt_normal' => $restoran->skt_normal,
            'skt_sepi' => $restoran->skt_sepi,
            'tkt_ramai' => $restoran->tkt_ramai,
            'tkt_normal' => $restoran->tkt_normal,
            'tkt_sepi' => $restoran->tkt_sepi,
            'prt' => $restoran->prt,
            'potensi_pajak_ramai' => $restoran->potensi_pajak_ramai,
            'potensi_pajak_normal' => $restoran->potensi_pajak_normal,
            'potensi_pajak_sepi' => $restoran->potensi_pajak_sepi,
            'potensi_pajak' => $restoran->potensi_pajak
        ]);
        return redirect('pajakrestoran');
    }
    public function delete($id){
        DB::table('restoran')->where('id',$id)->delete();
        return redirect('pajakrestoran');
    }
}
