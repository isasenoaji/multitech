<?php
 
namespace App\Http\Controllers\galeri;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\galeri;
use App\kategori;

use Illuminate\Http\Request;

class galeriController extends Controller
{
    public function index()
    {
    	$kategori = kategori::all();
        $recent = galeri::take(4)->get();
        $miniGaleri = galeri::take(6)->get();
    	$galeri = galeri::paginate(10);
        return view('galeri.index',compact('kategori','galeri','recent','miniGaleri'));
    }


    public function createGaleri(Request $request){
        try{
            if (Auth::check() and $request->hasFile('foto')) {
                $data = new galeri();
                $data->judul = $request->judul;
                $data->kategori = $request->kategori;
                $data->deskripsi = $request->deskripsi;

                // $cek = galeri::deleteLinked($data->lokasi_foto);
                $picts=['png','jpg','jpeg'];
                $ext = strtolower($request->foto->getClientOriginalExtension());
                if(in_array($ext,$picts)){
                    $name = 'galeri-'.uniqid().".".$request->foto->getClientOriginalExtension();
                    $path = '/storage/'.$name;
                    \File::put(public_path().$path, file_get_contents($request->foto->getRealPath()));
                    $data->direktori = '/storage/'.$name;
                }else{
                    return redirect()->back()->with('alert-fail','Foto harus berformat jpg / jpeg / png')->withInput();
                } 

                $data->save();
                return redirect()->back()->with('alert-success','Success add new gallery!');
            }
            else return redirect()->back()->with('alert-fail', 'Anda tidak mempunyai Akses atau Data tidak lengkap!');
        }catch(Exception $e){
            return redirect()->back()->with('alert-fail','Failed add new gallery! Contact Developer!'); 
        }
    }

}
