<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function pegawai(Request $request){
        if($request->has('search')){
            $data=Pegawai::where('nama','LIKE','%'.$request->search.'%')->paginate(3);
        }else{
            $data=Pegawai::paginate(5)->withQueryString();
        }
        return view('pegawai',['data'=>$data,]);
    }
    public function tambah(){
        $data=Pegawai::all();
        return view('tambah',['data'=>$data,]);
    }
    public function tambah_data(Request $request){
       $data= Pegawai::create($request->all());
       if($request-> hasFile('foto')){
        $request->file('foto')->move('fotopegawai/',$request->file('foto')->getClientOriginalName());
        $data->foto = $request->file('foto')->getClientOriginalName();
        $data->save();
       }
        return redirect()->route('pegawai')->with('tambah','berhasil tambah');
    }
    public function tampil_edit($id){
       $data= Pegawai::find($id);
        return view('edit',["data"=>$data]);
    }
    public function edit(Request $request, $id){
       $data= Pegawai::find($id);
       $data->update($request->all());
       if($request-> hasFile('foto')){
        $request->file('foto')->move('fotopegawai/',$request->file('foto')->getClientOriginalName());
        $data->foto = $request->file('foto')->getClientOriginalName();
        $data->save();
       }
        return redirect()->route('pegawai')->with('berhasil','berhasil uodate');
    }
    public function delete($id){
       $data= Pegawai::find($id);
       $data->delete();
    return redirect()->route('pegawai')->with('hapus','berhasil hapus');
    }
}
